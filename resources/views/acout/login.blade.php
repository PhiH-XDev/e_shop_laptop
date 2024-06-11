@extends('layout')
@section('tieuDe', 'loginadmin')
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
                    <div class="col-md-12">
                        <form action="{{ url('admin/dangnhap') }}" method="post">
                            <div class="registered-customers margin-65">
                                <h2 class="title-3">loginS Admin</h2>
                                <div class="registered">

                                    @if (session()->has('thongbao'))
                                        <div class="alert alert-danger p-3 mx-auto my-3 col-10 fs-5 text-center">
                                            {!! session('thongbao') !!}
                                        </div>
                                    @endif

                                    <p>If you have an account with us, Please log in.</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="email" class="custom-form" placeholder="Email Address" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="password" name="password" class="custom-form" placeholder="Password" />
                                        </div>
                                    </div>
                                    <p><label class="forgot"><a href="#">Forgot our password?</a></label></p>
                                    <input type="submit" class="custom-submit-2" value="login" />
                                </div>
                            </div>
                            @csrf
                        </form>

                    </div>
                    <!-- Registered-Customers End -->
                    {{-- <div class="col-md-6">
                        <form action="#">
                            <div class="new-customers margin-65">
                                <h2 class="title-3">NEW CUSTOMERS</h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="custom-form" placeholder="Subaash" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="custom-form" placeholder="Chandra" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="text" class="custom-form" placeholder="Address" />
                                    </div>
                                </div>
                                <div class="row">
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
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="custom-form" placeholder="Phone Number" />
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="custom-select custom-form">
                                            <option>Post Code</option>
                                            <option>012345</option>
                                            <option>0123456</option>
                                            <option>01234567</option>
                                            <option>012345678</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="custom-form" type="text" placeholder="Email" name="email" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="custom-form" type="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="custom-form" type="password" placeholder="Confirm Password" />
                                    </div>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked" name="create-account" />
                                        Sign up for our newsletter!
                                    </label>
                                    <label>
                                        <input type="checkbox" name="billing-address" />
                                        Receive special offers from our partners!
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="submit" class="custom-form custom-submit no-margin"
                                            value="register" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="submit" class="custom-form custom-submit no-margin" value="clear" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> --}}
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

<!-- FOOTER-
