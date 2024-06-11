<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use \App\Models\binh_luan;
use App\Models\products;

use App\Models\categories;
class sanphamcontroller extends Controller
{
    function sptrongloai($id_loai=0){
        $per_page= env('PER_PAGE');
        $sptrongloai_arr = DB::table('san_pham')
        ->where ('id_loai', $id_loai)
        ->paginate($per_page)->withQueryString();
        $ten_loai = DB::table('loai')->where ('id', $id_loai)->value('ten_loai');
        return view ('loaidanhmuc', compact(['id_loai', 'ten_loai', 'sptrongloai_arr']));
    }

    function chitiet($id = 0){
        $sp = DB::table('san_pham')->where ('id','=', $id)->first();
        if($sp==null) return redirect('/thongbao')->with(['thongbao'=>'Không có sản phẩm']);
        $id_loai = $sp->id_loai;
        $splienquan_arr = DB::table('san_pham')
        ->where('id_loai', $id_loai)
        ->where('tinh_chat', $sp->tinh_chat)
        ->orderBy('ngay','desc')
        ->limit(4)->get()->except($id);
        $binh_luan_arr = binh_luan::where('id_sp', $id)->orderBy('thoi_diem','asc')->get();
        return view('chitiet',compact(['sp', 'splienquan_arr','binh_luan_arr']));
    }

    function shop(Request $request){
        $id_loai = -1;
        if ($request->has('id_loai')) $id_loai = (int) $request['id_loai'];
        $perpage = env('PER_PAGE');
        if ($id_loai>0)
            $sanpham_arr = products::orderBy('id','desc')->where('id_loai', $id_loai)->paginate($perpage)->withQueryString();
            else{
                 $sanpham_arr = products::orderBy('id','desc')
        ->paginate($perpage)->withQueryString();
            }
            $loai_arr = categories::all();

        return view('shop',compact('id_loai','sanpham_arr','loai_arr'));
    }
    function cart(Request $request){

        $cart =  $request->session()->get('cart');
        $tongtien = 0;   $tongsoluong=0;
        for ( $i=0; $i<count($cart) ; $i++) {
          $sp = $cart[$i]; // $sp = [ 'id_sp' =>100, 'soluong'=>3]
          $ten_sp = DB::table('san_pham')->where('id', $sp['id_sp'] )->value('ten_sp');
          $gia_km = DB::table('san_pham')->where('id', $sp['id_sp'] )->value('gia_km');
          $hinh = DB::table('san_pham')->where('id', $sp['id_sp'] )->value('hinh');
          $thanhtien = $gia_km*$sp['soluong'];
          $tongsoluong+=$sp['soluong'];
          $tongtien += $thanhtien;

          $sp['ten_sp'] = $ten_sp;
          $sp['gia'] = $gia_km;
          $sp['hinh'] = $hinh;
          $sp['thanhtien'] = $thanhtien;
          $cart[$i] = $sp;
        }
        $request->session()->put('cart', $cart);
        return view('cart.cart', compact(['cart', 'tongsoluong','tongtien']));
      }



    function addcart(Request $request, $id_sp = 0, $soluong=1){
        // @dd( $request->session()->get('cart'));

        if (!$request->session()->exists('cart')) {
            // Nếu chưa có 'cart' trong session, tạo một mảng mới
            $request->session()->push('cart', ['id_sp' => $id_sp, 'soluong' => $soluong]);
        } else {
            // Đã có 'cart', lấy giỏ hàng hiện tại
            $cart = $request->session()->get('cart');

            // Đảm bảo rằng $cart là một mảng hợp lệ
            if (!is_array($cart)) {
                $cart = [];
            }

            // Tìm kiếm sản phẩm trong giỏ hàng
            $index = array_search($id_sp, array_column($cart, 'id_sp'));

            if ($index !== false) { // id_sp có trong giỏ hàng thì tăng số lượng
                $cart[$index]['soluong'] += $soluong;
            } else { // sp chưa có trong array cart thì thêm vào
                $cart[] = ['id_sp' => $id_sp, 'soluong' => $soluong];
            }

            // Cập nhật lại session với giỏ hàng đã thay đổi
            $request->session()->put('cart', $cart);
        }
        return redirect()->back();


    }
    function xoasp(Request $request, $id =0){
        $cart =  $request->session()->get('cart');
        $index = array_search($id, array_column($cart, 'id_sp'));
        if ($index!=''){
            array_splice($cart, $index, 1);
            $request->session()->put('cart', $cart);
        }
        return redirect('cart');
    }
    function checkout(){
        return view('cart.checkout');
    }


    function luubinhluan(Request $request){
        $id_user=1;
        $arr = request()->post();
        $an_hien= 1;
        $id_sp = (Arr::exists($arr, 'id_sp'))? $arr['id_sp']:"-1";
        $noi_dung = (Arr::exists($arr, 'noi_dung'))? $arr['noi_dung']:"";
        if ($id_sp<=-1) return redirect("/thongbao")->with(['thongbao'=>'Không biết id_sp']);
        if ($noi_dung=="") return redirect("/thongbao")->with(['thongbao'=>'Nội dung không có']);
        binh_luan::insert(
          ['id_user'=>$id_user, 'id_sp'=>$id_sp, 'noi_dung'=>$noi_dung,'an_hien'=>$an_hien, 'thoi_diem'=>now()]
        );
        return redirect()->route('chi-tiet-san-pham', ['id' => $request->id_sp])->with(['thongbao' => 'Đã lưu bình luận']);
    }


}
