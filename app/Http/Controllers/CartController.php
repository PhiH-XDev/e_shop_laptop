<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use App\Models\TransactionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.cart', compact('cart'));
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart');
        $cart[$request->id]['quantity'] = $request->quantity;
        session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function remove($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function applyCoupon(Request $request)
    {
        $coupon = $request->input('coupon');
        // Logic kiểm tra mã giảm giá
        if ($coupon === 'GIAM10') {
            session()->put('discount', 0.1);
        }
        return redirect()->route('cart.index');
    }

    public function checkout()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Giỏ hàng trống!');
        }

        $total = 0;
        $quantity = 0;

        foreach ($cart as $item) {
            $total += $item['gia'] * $item['soluong'];
            $quantity += $item['soluong'];
            $nameProductList[] = $item['ten_sp'];
        }
        $nameProduct = implode(', ', $nameProductList);

        $discount = session()->get('discount', 0);
        $payableAmount = $total * (1 - $discount);

        $endpoint = env('MOMO_ENDPOINT');
        $partnerCode = env('MOMO_PARTNER_CODE');
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');

        $orderId = uniqid('order_');
        $orderInfo = "Thanh toán đơn hàng từ giỏ hàng";

         $transaction = TransactionModel::create([
            'name' => $nameProduct,
            'quantity' => $quantity,
            'total_price' => $payableAmount,
            'transaction_date' => now(),
            'transaction_code' => $orderId,
            'phone' => auth()->user()->phone ?? null,
            'email' => auth()->user()->email ?? null,
            'address' => auth()->user()->address ?? null,
            'status' => 0,
        ]);

        $redirectUrl = route('momo.callback');
        $ipnUrl = route('momo.callback');
        $extraData = "";

        $requestId = uniqid('req_');      
        $requestType = "payWithATM";

        $rawHash = "accessKey=$accessKey&amount=$payableAmount&extraData=$extraData&ipnUrl=$ipnUrl&orderId=$orderId&orderInfo=$orderInfo&partnerCode=$partnerCode&redirectUrl=$redirectUrl&requestId=$requestId&requestType=$requestType";

        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data = [
            'partnerCode' => $partnerCode,
            'accessKey' => $accessKey,
            'requestId' => $requestId,
            'amount' => (string)$payableAmount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature,
            'lang' => 'vi'
        ];

        $response = Http::post($endpoint, $data);
        $result = $response->json();

        if (isset($result['payUrl'])) {
            return redirect($result['payUrl']);
        } else {
            return redirect()->route('cart')->with('error', 'Không thể kết nối MoMo');
        }
    }
    // public function capNhatSoLuong(Request $request)
    // {
    //     $id_sp = $request->input('id_sp');
    //     $soLuongMoi = $request->input('soluong');

    //     $cart = session()->get('cart', []);

    //     if (isset($cart[$id_sp])) {
    //         $cart[$id_sp]['soluong'] = $soLuongMoi;
    //         $cart[$id_sp]['thanhtien'] = $cart[$id_sp]['gia'] * $soLuongMoi;
    //     }

    //     session()->put('cart', $cart);

    //     $tongtien = array_sum(array_column($cart, 'thanhtien'));
    //     $tongsoluong = array_sum(array_column($cart, 'soluong'));

    //     return response()->json([
    //         'success' => true,
    //         'tongtien' => $tongtien,
    //         'tongsoluong' => $tongsoluong,
    //     ]);
    // }

    public function momoCallback(Request $request)
    {
        $orderId = $request->orderId ?? null;

        $transaction = TransactionModel::where('transaction_code', $orderId)->first();

        if ($request->resultCode == 0 && $transaction) {
           $transaction = TransactionModel::where('transaction_code', $orderId)->first();
            $transaction->status = 1; 
            $transaction->save();
        
            session()->forget('cart');
            session()->forget('discount');
            return redirect()->route('home')->with('success', 'Thanh toán thành công!');
        } else {
            if ($transaction) {
                $transaction->status = -1; // thất bại
                $transaction->save();
            }
            return redirect()->route('home')->with('error', 'Thanh toán thất bại!');
        }
    }
}
