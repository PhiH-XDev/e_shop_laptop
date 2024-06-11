<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();



class AdminSPController extends Controller
{


    public function store(Request $request){
        $destFilename ="";
        if ($request->hasFile('hinh')) {
            $file = $request->file('hinh');
            $name = $file->getClientOriginalName();  //a.jpg
            $ext = $file->getClientOriginalExtension(); //jpg
            $size = $file->getSize(); //140145  bytes
            $type = $file->getMimeType(); //image/jpeg
            $destFolder = 'uploads';
            $destFilename = $destFolder ."/".  time() ."-" . $name;
            $file->move($destFolder, $destFilename);
        }

        $obj = new  products;
        $obj->ten_sp = $request['ten_sp'];
        $obj->slug = Str::slug($obj->ten_sp);
        $obj->gia = (int) $request['gia'];
        $obj->gia_km = (int) $request['gia_km'];
        $obj->id_loai = (int) $request['id_loai'];
        $obj->ngay = $request['ngay'];
        if ( $destFilename!="") $obj->hinh = $destFilename;
        $obj->an_hien = $request['an_hien'];
        $obj->tinh_chat = (int) $request['tinh_chat'];
        $obj->an_hien = (int) $request['an_hien'];
        $obj->hot = (int) $request['hot'];
        $obj->mo_ta = $request['mo_ta'];
        $obj->save();
        return redirect(route('sanphamde'))->with('thongbao','Thêm thành công');
    }

    public function index( Request $request ) {
        $id_loai = -1;
        if ($request->has('id_loai')) $id_loai = (int) $request['id_loai'];
        $trangthai="chuaxoa"; //chuaxoa, daxoa
        if ($request->has('trangthai')) $trangthai = $request['trangthai'];
        $perpage = env('PER_PAGE');
        
        $loai_arr = categories::all();
        if ($trangthai=="daxoa"){
            $sanpham_arr = products::onlyTrashed()->orderBy('id','desc')
            ->paginate($perpage)->withQueryString();
       return view('admin.sanpham_daxoa',compact(['trangthai','id_loai','sanpham_arr','loai_arr']));
         } else{
            if ($id_loai>0)
            $sanpham_arr = products::orderBy('id','desc')->where('id_loai', $id_loai)->paginate($perpage)->withQueryString();
            else{
                 $sanpham_arr = products::orderBy('id','desc')
        ->paginate($perpage)->withQueryString();
            }
                return view('admin.sanpham',compact('trangthai','id_loai','sanpham_arr','loai_arr'));
         }
    }


    public function addsp(){
        return view('admin.addsp');
    }
    public function update(Request $request, string $id) {
        // Tìm sản phẩm theo ID
        $product = products::find($id);
        // Kiểm tra xem sản phẩm có tồn tại không
        $destFilename ="";
        if ($request->hasFile('hinh')) {
            $file = $request->file('hinh');
            $name = $file->getClientOriginalName();  //a.jpg
            $ext = $file->getClientOriginalExtension(); //jpg
            $size = $file->getSize(); //140145  bytes
            $type = $file->getMimeType(); //image/jpeg
            $destFolder = 'uploads';
            $destFilename = $destFolder ."/".  time() ."-" . $name;
            $file->move($destFolder, $destFilename);
        }

        if (!$product) {
            return redirect()->route('sanpham')->with('error', 'Không tìm thấy sản phẩm để cập nhật');
        }

        // Xác thực dữ liệu đầu vào từ form
        $request->validate([
            'ten_sp' => 'required|string|max:255',
            'gia' => 'required|numeric',
            'gia_km' => 'nullable|numeric',
        ]);

        // Lấy dữ liệu từ request và cập nhật vào đối tượng sản phẩm
        $product->ten_sp = $request->input('ten_sp');
        $product->gia = $request->input('gia');
        $product->gia_km = $request->input('gia_km');
        if ( $destFilename!="") $product->hinh = $destFilename;
        // Cập nhật các trường khác tương tự

        // Xử lý tệp hình ảnh nếu được cung cấp
        // if ($request->hasFile('img')) {
        //     $image = $request->file('img');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $destinationPath = public_path('/uploads/products');
        //     $image->move($destinationPath, $imageName);
        //     $product->hinh = '/uploads/products/' . $imageName;
        // }

        // Lưu thông tin sản phẩm đã cập nhật vào cơ sở dữ liệu
        $product->save();

        // Chuyển hướng người dùng về trang sản phẩm và hiển thị thông báo thành công
        return redirect()->route('sanphamde')->with('thongbao', 'Cập nhật thành công');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $loai_arr = \DB::table('loai')->orderBy('thu_tu')->get();
        return view('admin.sanpham_them',compact('loai_arr'));
    }
    public function destroy(Request $request, $id) {
        \Log::info('Trying to delete product with id: ' . $id); // Logging for debugging
        $cokhong = products::where('id', $id)->exists();
        if ($cokhong == false) {
            \Log::warning('Product not found with id: ' . $id); // Logging for debugging
            return response()->json(['status' => 'error', 'message' => 'Sản phẩm không tồn tại'], 404);
        }

        products::where('id', $id)->delete();
        \Log::info('Deleted product with id: ' . $id); // Logging for debugging
        return response()->json(['status' => 'success', 'message' => 'Đã xóa sản phẩm'], 200);
    }




    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Request $request , string $id) {
        $sp = products::where('id', $id)->first();
        if ($sp==null){
            $request->session()->flash('thongbao','Không có sản phẩm này: '. $id);
            return redirect('/admin/sanpham');
        }
        $loai_arr = \DB::table('loai')->orderBy('thu_tu')->get();
        return view('admin/sanpham_chinh' , compact(['sp','loai_arr']));
    }
    function khoiphuc($id) {
        $sp = products::withTrashed()->find($id);
        if ($sp == null) return redirect('/thongbao');
        $sp->restore();
        return redirect('/admin/sanphamde?trangthai=daxoa');
    }
    function xoavinhvien($id) {
        $sp = products::withTrashed()->find($id);
        if ($sp == null) return redirect('/thongbao');
        $sp->forceDelete();
        return redirect('/admin/sanphamde?trangthai=daxoa');
    }


    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id) {
    //     $obj = products::find($id);
    //     $obj->ten_sp = $request['ten_sp'];
    //     $obj->slug = Str::slug($obj->ten_sp);
    //     $obj->gia = (int) $request['gia'];
    //     $obj->gia_km = (int) $request['gia_km'];
    //     $obj->an_hien = (int) $request['an_hien'];
    //     $obj->hot = (int) $request['hot'];
    //     $obj->id_loai = (int) $request['id_loai'];
    //     $obj->tinh_chat = (int) $request['tinh_chat'];
    //     $obj->ngay = $request['ngay'];
    //     $obj->hinh = $request['hinh'];
    //     $obj->mo_ta = $request['mo_ta'];
    //     $obj->save();
    //     return redirect(route('sanpham'))->with('thongbao', 'Cập nhập thành công');
    //     $obj = products::find($id);
    //     if (!$obj) {
    //         return redirect()->route('sanpham')->with('error', 'Không tìm thấy sản phẩm để cập nhật');
    //     }

    //     // Xác thực dữ liệu đầu vào
    //     $request->validate([
    //         'ten_sp' => 'required|string|max:255',
    //         'gia' => 'required|numeric',
    //         'gia_km' => 'nullable|numeric',
    //         'an_hien' => 'required|boolean',
    //         'hot' => 'required|boolean',
    //         'id_loai' => 'required|exists:loai,id',
    //         'tinh_chat' => 'required|in:0,1,2,3',
    //         'ngay' => 'required|date',
    //         'hinh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'mo_ta' => 'nullable|string',
    //     ]);

    //     // Cập nhật thông tin sản phẩm
    //     $obj->ten_sp = $request->input('ten_sp');
    //     $obj->slug = Str::slug($request->input('ten_sp'));
    //     $obj->gia = (int) $request->input('gia');
    //     $obj->gia_km = (int) $request->input('gia_km');
    //     $obj->an_hien = (int) $request->input('an_hien');
    //     $obj->hot = (int) $request->input('hot');
    //     $obj->id_loai = (int) $request->input('id_loai');
    //     $obj->tinh_chat = (int) $request->input('tinh_chat');
    //     $obj->ngay = $request->input('ngay');

    //     // Xử lý tệp hình ảnh nếu được cung cấp
    //     if ($request->hasFile('hinh')) {
    //         $hinh = $request->file('hinh');
    //         $tenHinh = time().'.'.$hinh->getClientOriginalExtension();
    //         $destinationPath = public_path('/uploads/products');
    //         $hinh->move($destinationPath, $tenHinh);
    //         $obj->hinh = '/uploads/products/'.$tenHinh;
    //     }

    //     $obj->mo_ta = $request->input('mo_ta');
    //     $obj->save();

    //     return redirect()->route('sanpham')->with('thongbao', 'Cập nhật thành công');
    // }






}
