<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('products', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('img')->nullable();
        //     $table->text('description')->nullable();
        //     $table->decimal('price', 10, 2)->nullable();
        //     $table->unsignedBigInteger('quantity')->default(0);
        //     $table->unsignedBigInteger('sold')->default(0);
        //     $table->unsignedBigInteger('category_id')->nullable();
        //     $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        //     $table->timestamps();
        // });
        Schema::create('loai', function (Blueprint $table) {
            $table->id();
            $table->string('ten_loai',100);
            $table->string('slug',100)->nullable();
            $table->integer('thu_tu')->default(0);
            $table->boolean('an_hien')->default(0);
            $table->timestamps();
        });
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('ten_sp',200);
            $table->string('slug',200)->nullable();
            $table->integer('gia');
            $table->integer('gia_km')->nullable();
            $table->integer('id_loai');
            $table->date('ngay');
            $table->string('hinh',255)->nullable();
            $table->boolean('hot')->default(0);
            $table->integer('luot_xem')->default(0);
            $table->boolean('an_hien')->default(0);
            $table->boolean('tinh_chat'); // 0 bình thường, 1 giá rẻ, 2 giảm sốc, 3 cao cấp
            $table->text('mo_ta')->nullable();
            $table->timestamps();
        });
        Schema::create('thuoc_tinh', function (Blueprint $table) {
            $table->id();
            $table->integer('id_sp');
            $table->string('ram',50)->nullable();
            $table->string('cpu',50)->nullable();
            $table->string('dia_cung',50)->nullable();
            $table->string('mau_sac',50)->nullable();
            $table->string('can_nang',50)->nullable();
            $table->timestamps();
        });
        Schema::create('don_hang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->comment('');
            $table->datetime('thoi_diem_mua_hang')->comment('Thời điểm mua hàng');
            $table->string('ten_nguoi_nhan')->comment('Họ tên người nhận');
            $table->string('dien_thoai',100)->comment('Điện thoại người nhận hàng');
            $table->string('dia_chi_giao',100)->comment('Địa chỉ giao hàng');
            $table->boolean('trang_thai')->default(0)->comment('Trạng thái đơn hàng');
            $table->timestamps();
        });
        Schema::create('don_hang_chi_tiet', function (Blueprint $table) {
            $table->id();
            $table->integer('id_dh')->comment('Mã đơn hàng');
            $table->integer('id_sp')->comment('Mã sản phẩm');
            $table->integer('so_luong')->default(1)->comment('Số lượng mua');
            $table->integer('gia')->comment('Giá mua sản phẩm');
            $table->timestamps();
        });
        Schema::create('binh_luan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_sp')->comment('Mã sản phẩm');
            $table->integer('id_user')->comment('Người bình luận');
            $table->text('noi_dung')->comment('Nội dung bình luận');
            $table->datetime('thoi_diem')->comment('Thời điểm bình luận');
            $table->boolean('an_hien')->default(0)->comment('0 là ẩn 1 là hiện');
            $table->timestamps();
        });
        Schema::create('doi_tac', function (Blueprint $table) {
            $table->id();
            $table->string('hinh')->nullable();
            $table->integer('thu_tu')->default(0);
            $table->boolean('an_hien')->default(0);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('loai');
        Schema::dropIfExists('san_pham');
        Schema::dropIfExists('thuoc_tinh');
        Schema::dropIfExists('don_hang');
        Schema::dropIfExists('don_hang_chi_tiet');
        Schema::dropIfExists('binh_luan');
        Schema::dropIfExists('doi_tac');

    }
};
