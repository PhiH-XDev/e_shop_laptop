@extends('layout')
@section('title') Đăng ký thành viên @endsection
@section('conten')
<section class="page-banner-area">
    <div class="col-xs-12">
        <div class="page-banner-brief">
            <h2>Registration</h2>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Registration</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- Page-Banner-AREA END -->
<section class="content">
    <!-- LOGIN-AREA START -->
    <div class="lognin-area">
        <div class="container">
            <div class="row">
                <!-- Registered-Customers Start -->
                <div class="col-md-6">
                    <form method="post" action="{{url('/dangnhap')}}">
                        <div class="registered-customers margin-65">
                            <h2 class="title-3">Đăng Nhập </h2>
                            <div class="registered">


                                @if(Session::exists('thongbao'))
                                <h5 class="alert alert-info text-center"> {{ Session::get('thongbao') }} </h5>
                                @endif

                                <p>Nếu bạn có tài khoản với chúng tôi, vui lòng đăng nhập.                                </p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="email" class="custom-form" placeholder="Email Address" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="password" name="matkhau" class="custom-form" placeholder="Password" />
                                    </div>
                                </div>
                                <p><label class="forgot"><a href="#">Quên mật khẩu của chúng tôi?</a></label></p>
                                <div id="dngooggle"  class="text-left">
                                    <a href="http://localhost:8000/login/google">
                                        <img width="150" src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
                                    </a>
                                    </div>

                                <input type="submit" name="btn" class="custom-submit-2" value="Đăng nhập" />
                            </div>
                        </div>
                        @csrf
                    </form>

                </div>
                <!-- Registered-Customers End -->
                <div class="col-md-6">
                    <form method="post"  action="{{url('/dangky')}}">
                        @csrf
                        <div class="new-customers margin-65">
                            <h2 class="title-3">Đăng Kí</h2>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="name" value="{{old('name')}}"  class="custom-form" placeholder="Họ và tên" />
                                    <b class="text-danger"> @error('name') {{ $message }} @enderror </b>
                                </div>
                                {{-- <div class="col-sm-6">
                                    <input type="text" class="custom-form" placeholder="Tên" />
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input name="dia_chi" value="{{old('dia_chi')}}" type="text" class="custom-form" placeholder="Địa Chỉ" />
                                    <b class="text-danger"> @error('dia_chi') {{ $message }} @enderror </b>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-sm-6">
                                    <select class="custom-select custom-form">
                                        <option>City</option>
                                        <option>Dhaka</option>
                                        <option>New York</option>
                                        <option>London</option>
                                        <option>Melbourne</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="custom-select custom-form">
                                        <option>Country</option>
                                        <option>Bangladesh</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <input name="dien_thoai" value="{{old('dien_thoai')}}"  type="text" class="custom-form" placeholder="số điện thoại" />
                                    <b class="text-danger"> @error('dien_thoai') {{ $message }} @enderror </b>
                                </div>
                                {{-- <div class="col-sm-6">
                                    <select class="custom-select custom-form">
                                        <option>Post Code</option>
                                        <option>012345</option>
                                        <option>0123456</option>
                                        <option>01234567</option>
                                        <option>012345678</option>
                                    </select>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input name="email" value="{{old('email')}}"  class="custom-form" type="text" placeholder="Email"  />
                                    <b class="text-danger"> @error('email') {{ $message }} @enderror </b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input name="mk1" value="{{old('mk1')}}"  class="custom-form" type="password" placeholder="mật khẩu" />
                                    <b class="text-danger"> @error('mk1') {{ $message }} @enderror </b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input name="mk2"  value="{{old('mk2')}}"  class="custom-form" type="password" placeholder="Xác nhận mật khẩu" />
                                    <b class="text-danger"> @error('mk2') {{ $message }} @enderror </b>
                                </div>
                            </div>
                            {{-- <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked="checked" name="create-account" />
                                    Sign up for our newsletter!
                                </label>
                                <label>
                                    <input type="checkbox" name="billing-address" />
                                    Receive special offers from our partners!
                                </label>
                            </div> --}}


                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" class="custom-form custom-submit no-margin"
                                        value="Đăng kí" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="submit" class="custom-form custom-submit no-margin" value="xóa tất cả" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN-AREA END -->
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
