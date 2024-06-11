<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    function login()
    {
        return view('login');
    }
    function index()
    {
        $spnoibat_arr = DB::table('san_pham')
            ->where('an_hien', 1)->where('hot', 1)
            ->orderBy('ngay', 'desc')->limit(9)->get();
        $spgiamsoc_arr = DB::table('san_pham')
            ->where('an_hien', 1)->where('tinh_chat', '=', 2)
            ->orderBy('ngay', 'desc')->limit(9)->get();
        // return view ('home' , compact(['spnoibat_arr','']));
        return view('home', compact('spnoibat_arr', 'spgiamsoc_arr'));
    }

    function chitiet($id)
    {
        $qurey = DB::table('products')->select('id', 'name', 'img', 'price', 'description')->where('id', $id);
        $data = $qurey->get();
        $qurey = DB::table('products')->select('id', 'name', 'img', 'price')->limit(10)->get();
        $datab = $qurey->toArray();
        return view('chitiet', compact('data', 'datab'));

    }
    // function danhmuc($id)
    // {
    //     $qurey = DB::table('products')->select('id', 'name', 'img', 'price')->where('category_id', $id)->limit(10)->get();
    //     $data = $qurey;
    //     $qureya = DB::table('categories')->select('id', 'name')->where('id', $id);
    //     $datab = $qureya->get();
    //     return view('danhmuc', compact('data', 'datab'));

    // }
}
