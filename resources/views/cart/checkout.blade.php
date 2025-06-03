@extends('layout')
@section('tieuDe', 'checkout')
@section('conten')
<section class="page-banner-area">
    <div class="col-xs-12">
        <div class="page-banner-brief">
            <h2>check out</h2>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="checkout.html">Check out</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- Page-Banner-AREA END -->
<section class="content">
    <!-- CHECKOUT-AREA START -->
    <div class="checkout-area">
        <div class="container">
            <form action="{{ route('cart.checkout') }}" method="POST">
                 @csrf
                <div class="row">
                    <!-- Shipping-Address Start -->
                    <div class="col-sm-6">
                        <div class="shipping-address margin-65">
                            <h2 class="title-3">Địa chỉ giao hàng</h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="custom-select custom-form" name="shipping_method">
                                        <option>Chọn phương thức giao hàng</option>
                                        <option>Giao tận tay</option>
                                        <option>Chọn phương thức giao hàng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="custom-form" type="text" placeholder="Tên" name="firstname" value="{{ Auth::user()->name ?? '' }}" />
                                </div>
                                <div class="col-sm-6">
                                    <input class="custom-form" type="text" placeholder="Họ" name="lastname" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="custom-form" placeholder="Địa chỉ" name="dia_chi" value="{{ Auth::user()->dia_chi ?? '' }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <select class="custom-select custom-form" name="city">
                                        <option>Thành phố</option>
                                        <option>Hà Nội</option>
                                        <option>TP Hồ Chí Minh</option>
                                        <option>Đà Nẵng</option>
                                        <option>Hải Phòng</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="custom-select custom-form" name="country">
                                        <option>Quốc gia</option>
                                        <option>Việt Nam</option>
                                        <option>Hoa Kỳ</option>
                                        <option>Vương quốc Anh</option>
                                        <option>Úc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="custom-form" type="text" placeholder="Số điện thoại" name="dien_thoai" value="{{ Auth::user()->dien_thoai ?? '' }}" />
                                </div>
                                <div class="col-sm-6">
                                    <select class="custom-select custom-form" name="postal_code">
                                        <option>Mã bưu chính</option>
                                        <option>012345</option>
                                        <option>0123456</option>
                                        <option>01234567</option>
                                        <option>012345678</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="email" class="custom-form" placeholder="Email" name="email" value="{{ Auth::user()->email ?? '' }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="custom-form" placeholder="Ghi chú đơn hàng" name="order_note"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shipping-Address End -->
                </div>
                <div class="row">
                    <!-- Enter-Payment Start -->
                   
                    <div class="col-md-6 col-sm-6">
                        <div class="order">
                            <h2 class="title-3">Xem lại đơn hàng của bạn</h2>
                            <div>
                                <table class="table">
                                    <tbody>
                                        @foreach ($cart as $item)
                                        <tr>
                                            <td class="text-left fw-bold">{{ $item['ten_sp'] ?? '' }}</td>
                                            <td class="text-right fw-bold">{{ $item['soluong'] ?? 0 }}</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td class="text-left">Tổng phụ</td>
                                            <td class="text-right">{{ number_format($tongtien, 0, ',', '.') }}₫</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Phí vận chuyển</td>
                                            <td class="text-right">0</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Giảm giá</td>
                                            <td class="text-right">0</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"><strong>Tổng cộng</strong></td>
                                            <td class="text-right"><strong>{{ number_format($tongtien, 0, ',', '.') }}₫</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Enter-Payment End -->
                </div>
                <div class="row">
                        <div class="col-sm-4">
                            <button type="submit" class="custom-form custom-submit no-margin btn btn-primary">Thanh toán bằng MoMo</button>
                        </div>
                        <div class="col-sm-4">
                            <input type="reset" class="custom-form custom-submit no-margin" value="Hủy đơn hàng" />
                        </div>
                        <div class="col-sm-4">
                            <a class="custom-form custom-submit no-margin" href="/checkout/submit">Tiếp tục mua sắm</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</section>
@endsection
