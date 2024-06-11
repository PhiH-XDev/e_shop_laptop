@extends('layout')
@section('tieuDe', 'Cart')
@section('conten')
<section class="page-banner-area">
    <div class="col-xs-12">
        <div class="page-banner-brief">
            <h2>Shopping Cart</h2>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Shopping Cart</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- Page-Banner-AREA END -->
<section class="content">
    <!-- CART-AREA START -->
    <div class="cart-area margin-70">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="cart-table-head">
                                    <tr>
                                        <td class="text-center"> Sản Phẩm</td>
                                        <td class="text-center"> Đơn Giá</td>
                                        <td class="text-center"> Số Lượng</td>
                                        <td class="text-center"> Tổng Tiền</td>
                                        <td class="text-center"> Xóa</td>
                                    </tr>
                                </thead>
                                @foreach ($cart as $c)


                                <tbody>
                                    <tr>
                                        <td class="text-left shopping-cart-breif">
                                            <a href="#"><img  src="{{$c['hinh']}}" alt="#" style="width:68px; height: "  /></a>
                                            <h5><a href="#" class="text-uppercase">{{$c['ten_sp']}}</a></h5>
                                            <p>Color: Blue</p>
                                            <p>Size: SL</p>
                                        </td>
                                        <td class="text-center">
                                            <div class="custom-cart">{{number_format($c['gia'] , 0, ',' , '.' )}} VNĐ</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="{{$c['soluong']}}"  name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            {{number_format($c['thanhtien'], 0 , ',' , '.') }} VNĐ
                                        </td>
                                        <td class="text-center remove">
                                            <a href="/xoasp/{{$c['id_sp']}}"><i class="pe-7s-close"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                 @endforeach
                                {{-- <tbody>
                                    <tr>
                                        <td class="text-left shopping-cart-breif">
                                            <a href="#"><img src="img/cart/2.jpg" alt="#" /></a>
                                            <h5><a href="#" class="text-uppercase">Product Title Demo</a></h5>
                                            <p>Color: Blue</p>
                                            <p>Size: SL</p>
                                        </td>
                                        <td class="text-center">
                                            <div class="custom-cart">$52.00</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            $104.00
                                        </td>
                                        <td class="text-center remove">
                                            <a href="#"><i class="pe-7s-close"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="text-left shopping-cart-breif">
                                            <a href="#"><img src="img/cart/1.jpg" alt="#" /></a>
                                            <h5><a href="#" class="text-uppercase">Product Title Demo</a></h5>
                                            <p>Color: Blue</p>
                                            <p>Size: SL</p>
                                        </td>
                                        <td class="text-center">
                                            <div class="custom-cart">$52.00</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            $104.00
                                        </td>
                                        <td class="text-center remove">
                                            <a href="#"><i class="pe-7s-close"></i></a>
                                        </td>
                                    </tr>
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
                <div class="shipping-discount-details">
                    <div class="row">
                        {{-- <div class="col-sm-4 col-sm-12">
                            <label class="custom-form custom-submit active-submit">Calculate Shipping</label>
                            <p>Enter your coupun code if you have one!</p>
                            <select class="custom-select custom-form">
                                <option>Country</option>
                                <option>Bangladesh</option>
                                <option>United States</option>
                                <option>United Kingdom</option>
                                <option>Australia</option>
                            </select>
                            <select class="custom-select custom-form">
                                <option>City</option>
                                <option>Dhaka</option>
                                <option>New York</option>
                                <option>London</option>
                                <option>Melbourne</option>
                            </select>
                            <input type="text" class="custom-form" placeholder="Post Code" />
                            <input type="submit" class="custom-submit-2" value="Apply Coupon" />
                        </div> --}}
                        <div class="col-sm-4 col-sm-12">
                            <label class="custom-form custom-submit active-submit">Mã giảm giá</label>
                            <p>Nhập mã giảm giá bên dưới</p>
                            <input type="text" class="custom-form" placeholder="Nhập vào Đây" />
                            <input type="submit" class="custom-submit-2" value="Apply Coupon" />
                        </div>
                        <div class="col-sm-4 col-sm-12">
                            <label class="custom-form custom-submit active-submit">Áp mã</label>
                            <div class="order">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-left">Số Lượng</td>
                                            <td class="text-right">{{$tongsoluong}} </td>
                                        </tr>
                                        {{-- <tr>
                                            <td class="text-left">Shipping</td>
                                            <td class="text-right"> 13.00</td>
                                        </tr> --}}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="text-right custom-td"><strong>Tổng Tiền:</strong></td>
                                            <td class="text-right custom-td"><strong>{{number_format($tongtien, 0,',','.')}} VNĐ</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <input type="submit" class="custom-submit-2" value="Procced To Checkout" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- CART-AREA END -->
    <!-- BRANDS-LOGO-AREA START -->
    <div class="brands-logo-area">
        <div class="container">
            <div class="row">
                <div class="active-brands-logo">
                    <!-- Single-Brand-Logo Start -->
                    <div class="col-md-12">
                        <div class="single-brand-logo">
                            <img src="img/brand/1.png" alt="" />
                        </div>
                    </div>
                    <!-- Single-Brand-Logo End -->
                    <!-- Single-Brand-Logo Start -->
                    <div class="col-md-12">
                        <div class="single-brand-logo">
                            <img src="img/brand/2.png" alt="" />
                        </div>
                    </div>
                    <!-- Single-Brand-Logo End -->
                    <!-- Single-Brand-Logo Start -->
                    <div class="col-md-12">
                        <div class="single-brand-logo">
                            <img src="img/brand/3.png" alt="" />
                        </div>
                    </div>
                    <!-- Single-Brand-Logo End -->
                    <!-- Single-Brand-Logo Start -->
                    <div class="col-md-12">
                        <div class="single-brand-logo">
                            <img src="img/brand/4.png" alt="" />
                        </div>
                    </div>
                    <!-- Single-Brand-Logo End -->
                    <!-- Single-Brand-Logo Start -->
                    <div class="col-md-12">
                        <div class="single-brand-logo">
                            <img src="img/brand/5.png" alt="" />
                        </div>
                    </div>
                    <!-- Single-Brand-Logo End -->
                    <!-- Single-Brand-Logo Start -->
                    <div class="col-md-12">
                        <div class="single-brand-logo">
                            <img src="img/brand/6.png" alt="" />
                        </div>
                    </div>
                    <!-- Single-Brand-Logo End -->
                    <!-- Single-Brand-Logo Start -->
                    <div class="col-md-12">
                        <div class="single-brand-logo">
                            <img src="img/brand/1.png" alt="" />
                        </div>
                    </div>
                    <!-- Single-Brand-Logo End -->
                </div>
            </div>
        </div>
    </div>
    <!-- BRANDS-LOGO-AREA END -->
</section>
@endsection
