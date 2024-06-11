<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        $user = Auth::guard('admin')->user();

        if ($user && $user->role == 1) {
            return $next($request);
        } else {
            // Kiểm tra xem route hiện tại có phải là 'admin/dangnhap' không để ngăn chặn vòng lặp
            if (!$request->is('admin/dangnhap') && !$request->is('admin/dangnhap*')) {
                $request->session()->put('prevurl', url()->current());
                return redirect('admin/dangnhap')->with('thongbao', 'Bạn cần đăng nhập với vai trò admin');
            }

            return $next($request);
        }
    }


}
