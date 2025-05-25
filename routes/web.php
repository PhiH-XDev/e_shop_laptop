<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\sanphamcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\GoogleLoginController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSPController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Mail\GuiEmail;
use Illuminate\Support\Facades\Mail;

//trang chu
Route::get('/loai/{id}', [sanphamcontroller::class,'sptrongloai']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sp/{id}', [sanphamcontroller::class, 'chitiet'])->name('chi-tiet-san-pham');
Route::get('/login', [HomeController::class, 'login']);
Route::post('/luubinhluan', [sanphamcontroller::class, 'luubinhluan']);
Route::get('/cart', [sanphamcontroller::class, 'cart'])->name('cart');
Route::get('/addcart/{idsp}/{soluong?}', [sanphamcontroller::class, 'addcart']);
Route::post('/cart/update', [sanphamcontroller::class, 'update'])->name('cart.update');
Route::post('/capnhatsl', [CartController::class, 'capNhatSoLuong']);

Route::get('/xoasp/{idsp}', [sanphamcontroller::class, 'xoasp']);
Route::get('/checkout', [sanphamcontroller::class, 'checkout']);
Route::get('/momo/callback', [CartController::class, 'momoCallback'])->name('momo.callback');
Route::post('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

// Route::post('/checkout', [sanphamcontroller::class, 'submitForm'])->name('checkout.submit');

Route::get('/shop', [sanphamcontroller::class, 'shop']);
Route::get('/lienhe',[UserController::class,'lienhe']);
//user
Route::get('/dangnhap', [UserController::class, 'dangnhap'])->name('login');
Route::post('/dangnhap', [UserController::class, 'dangnhap_']);
Route::get('/thoat', [UserController::class, 'thoat']);
Route::get('/dangky', [UserController::class, 'dangky']);
Route::post('/dangky', [UserController::class, 'dangky_']);
//lienhe
Route::post("/guilienhe", function(Request $request){
    $arr = request()->post();
    $ht = trim(strip_tags( $arr['name'] ));
    $em = trim(strip_tags( $arr['email'] ));
    $td = trim(strip_tags($arr['td']));
    $nd = trim(strip_tags( $arr['nd'] ));
    $adminEmail = 'hoangphat310304@gmail.com'; //Gửi thư đến ban quản trị
    Mail::mailer('smtp')->to( $adminEmail )
    ->send( new GuiEmail($ht, $em,$td, $nd) );
     $request->session()->flash('thongbao', "Đã gửi mail");
     return redirect("lienhe");
  });
  //login admin
Route::get('admin/dangnhap', [AdminController::class, 'dangnhap'])->name('admin.dangnhap');

// mail
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/');
    })->middleware(['auth', 'signed'])->name('verification.verify');
    Route::get('/email/verify', function () {
        return view('dangnhap');
    })->middleware('auth')->name('verification.notice');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Thư kích hoạt đã gửi!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
//GG
Route::get('/login/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/login/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);
//admin
Route::group(['prefix' => 'admin', 'middleware' => [AdminMiddleware::class]], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('sanphamde', [AdminSPController::class, 'index'])->name('sanphamde');
    Route::get('dangnhap', [AdminController::class, 'dangnhap'])->name('admin.dangnhap');
    Route::post('dangnhap', [AdminController::class, 'dangnhap_']);
    Route::get('thoat', [AdminController::class, 'thoat']);
    Route::delete('sanpham/{id}', [AdminSPController::class, 'destroy'])->name('admin.sanpham.destroy');
    Route::post('sanpham', [AdminSPController::class, 'store'])->name('sanpham.store'); // Thêm route cho việc lưu sản phẩm
    // Route::put('sanphama/{id}', [AdminSPController::class, 'update'])->name('sanpham.update');
    Route::post('sanphama/{id}', [AdminSPController::class, 'update'])->name('sanpham.update');

    Route::get('addsp', [AdminSPController::class, 'addsp'])->name('sanpham.addsp'); // Thêm route cho việc thêm sản phẩm mới
    //sort xoa
    Route::get('sanphamde/khoi-phuc/{id}', [AdminSPController::class, 'khoiphuc']);
    Route::get('sanphamde/xoa-vinh-vien/{id}', [AdminSPController::class, 'xoavinhvien']);
        



});
// Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
// Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
// Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
// Route::post('/cart/apply-coupon', [CartController::class, 'applyCoupon'])->name('cart.applyCoupon');
// Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');




// Route::get('/chenuser', function(){
//     DB::table('users')->insert([
//      [ 'name' => 'Cao Chót Vót', 'password'=> bcrypt('hehe') , 'dia_chi'=>'','hinh'=>'',
//        'email' => 'caochotvot@gmail.com','dien_thoai' => '0918765238', 'role' => 1 ],
//      [ 'name' => 'Mai Nhớ Em','password' => bcrypt('hehe') ,'dia_chi'=>'','hinh' => '',
//        'email' => 'mainhoem@gmail.com','dien_thoai' => '098532482','role' => 0 ],
//      [ 'name' => 'Vi Na Phôn', 'password' => bcrypt('hehe') ,'dia_chi'=>'','hinh' =>'',
//        'email' => 'vinaphone@gmail.com','dien_thoai' => '097397392', 'role' => 1]
//      ]);
//      echo "<h1>Đã chèn xong. Vô bảng user coi nhé</h1>";
//   });








