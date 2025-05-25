<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


abstract class Controller
{
    function __construct(Request $request)
    {
        $cart = $request->session()->get('cart', []);

            $totalQuantity = 0;
            $totalPrice = 0;
            for ( $i=0; $i<count($cart) ; $i++) {
                $sp = $cart[$i]; // $sp = [ 'id_sp' =>100, 'soluong'=>3]
                $ten_sp = DB::table('san_pham')->where('id', $sp['id_sp'] )->value('ten_sp');
                $gia_km = DB::table('san_pham')->where('id', $sp['id_sp'] )->value('gia_km');
                $hinh = DB::table('san_pham')->where('id', $sp['id_sp'] )->value('hinh');
                $totalQuantity += $sp['soluong'];
                $totalPrice += $sp['soluong'] *  $gia_km;
                // $thanhtien = $gia_km*$sp['soluong'];
                // $tongsoluong+=$sp['soluong'];
                // $tongtien += $thanhtien;

                $sp['ten_sp'] = $ten_sp;
                $sp['gia'] = $gia_km;
                $sp['hinh'] = $hinh;

                $cart[$i] = $sp;
              }

            // foreach ($cart as $item) {
            //     if (isset($item['soluong']) && isset($item['gia'])) {
            //         $totalQuantity += $item['soluong'];
            //         $totalPrice += $item['soluong'] * $item['gia'];
            //         $hinh = DB::table('san_pham')->where('id', $item['id_sp'] )->value('hinh');
            //         $ten_sp = DB::table('san_pham')->where('id', $item['id_sp'] )->value('ten_sp');

            //     }
            // }


    $loai_arr = DB::table('loai')->where('an_hien', 1)->orderBy('thu_tu')->get();

    // Chia sẻ dữ liệu với tất cả các view
    View::share('loai_arr', $loai_arr);
    View::share('cart', $cart);
    View::share('soluong', $totalQuantity);
    View::share('tongtien',  $totalPrice);

    }
}
