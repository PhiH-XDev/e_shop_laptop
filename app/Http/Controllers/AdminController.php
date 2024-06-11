<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Str;
use Auth;
class AdminController extends Controller
{
    function index(){ return view("admin/index"); }
    function sanpham(){ return view("admin/sanpham"); }
    public function dangnhap() {
        // Kiểm tra xem người dùng đã đăng nhập chưa và nếu có, kiểm tra role
        if (Auth::guard('admin')->check()) {
            $user = Auth::guard('admin')->user();
            if ($user->role == 1) {
                return redirect()->route('admin.dashboard'); // Chuyển hướng tới dashboard admin nếu đã đăng nhập
            }
        }

        return view('acout/login');
    }

    public function dangnhap_(Request $request) {
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = auth()->guard('admin')->user();
            if ($user->role == 1) {
                return redirect()->route('admin.dashboard'); // Sử dụng route name để chuyển hướng
            } else {
                return back()->with('thongbao', 'Bạn không đủ quyền');
            }
        } else {
            return back()->with('thongbao', 'Email, Password không đúng');
        }
    }
   
    function thoat(){
        //auth()->guard('admin')->logout(); hoặc
        Auth::guard('admin')->logout(); //nhớ use Auth; ở đầu controller
        return redirect('admin/dangnhap')->with('thongbao','Bạn đã thoát admin');
    }




}
