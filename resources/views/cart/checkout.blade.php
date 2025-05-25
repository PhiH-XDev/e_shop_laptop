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
                    <div class="col-sm-6">
                        <div class="billing-address margin-65">
                            <h2 class="title-3">Địa chỉ thanh toán</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="custom-form" placeholder="Tên" name="billing_firstname" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="custom-form" placeholder="Họ" name="billing_lastname" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="custom-form" placeholder="Địa chỉ văn phòng" name="billing_office_address" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="custom-form" placeholder="Địa chỉ nhà" name="billing_home_address" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <select class="custom-select custom-form" name="billing_city">
                                        <option>Thành phố</option>
                                        <option>Hà Nội</option>
                                        <option>TP Hồ Chí Minh</option>
                                        <option>Đà Nẵng</option>
                                        <option>Hải Phòng</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="custom-select custom-form" name="billing_country">
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
                                    <select class="custom-select custom-form" name="billing_postal_code">
                                        <option>Mã bưu chính</option>
                                        <option>012345</option>
                                        <option>0123456</option>
                                        <option>01234567</option>
                                        <option>012345678</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <input class="custom-form" type="password" placeholder="Mật khẩu" name="billing_password" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="custom-form" placeholder="Số điện thoại di động" name="billing_mobile_phone" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="custom-form" placeholder="Số điện thoại" name="billing_phone" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="email" class="custom-form" placeholder="Email" name="billing_email" />
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked="checked" name="create_account" />
                                    Tạo tài khoản?
                                </label>
                                <label>
                                    <input type="checkbox" name="skip_billing_address" />
                                    Bỏ qua địa chỉ thanh toán
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Enter-Payment Start -->
                    <div class="col-md-9 col-sm-7">
                        <div class="enter-payment margin-65">
                            <h2 class="title-3">Nhập thông tin thanh toán</h2>
                            <div class="row">
                                <div class="col-sm-5">
                                    <input type="text" class="custom-form" placeholder="Loại thẻ" name="card_type" />
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" class="custom-form" placeholder="Số thẻ" name="card_number" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select class="custom-select custom-form" name="card_exp_month">
                                                <option>Tháng</option>
                                                <option>Tháng 1</option>
                                                <option>Tháng 2</option>
                                                <option>Tháng 3</option>
                                                <option>Tháng 4</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="custom-select custom-form" name="card_exp_year">
                                                <option>Năm</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12">
                                    <input type="text" class="custom-form" placeholder="Mã bảo mật thẻ" name="card_cvv" />
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-sm-4">
                                    <input type="submit" class="custom-form custom-submit no-margin" value="Thanh toán ngay" />
                                </div>
                                <div class="col-sm-4">
                                    <input type="reset" class="custom-form custom-submit no-margin" value="Hủy đơn hàng" />
                                </div>
                                <div class="col-sm-4">
                                    <a class="custom-form custom-submit no-margin" href="/checkout/submit">Tiếp tục mua sắm</a>
                                </div>
                            </div> --}}

                            <div class="row">
                            <div class="col-sm-4">
                                <button type="submit" class="custom-form custom-submit no-margin">Thanh toán bằng MoMo</button>
                            </div>
                            <div class="col-sm-4">
                                <input type="reset" class="custom-form custom-submit no-margin" value="Hủy đơn hàng" />
                            </div>
                            <div class="col-sm-4">
                                <a class="custom-form custom-submit no-margin" href="/checkout/submit">Tiếp tục mua sắm</a>
                            </div>
                        </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5">
                        <div class="order margin-65">
                            <h2 class="title-3">Xem lại đơn hàng của bạn</h2>
                            <div>
                                <table class="table">
                                    <tbody>
                                        @foreach ($cart as $item)
                                        <tr>
                                            <td class="text-left">{{ $item['ten_sp'] ?? '' }}</td>
                                            <td class="text-right">{{ $item['soluong'] ?? 0 }}</td>
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
            </form>
        </div>
    </div>
</section>
@endsection
