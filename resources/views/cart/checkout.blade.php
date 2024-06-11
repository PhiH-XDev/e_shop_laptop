

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
            <form action="#">
                <div class="row">
                    <!-- Shipping-Address Start -->
                    <div class="col-sm-6">
                        <div class="shipping-address margin-65">
                            <h2 class="title-3">shipping address</h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="custom-select custom-form">
                                        <option>Select Delivery Method</option>
                                        <option>Hand to Hand</option>
                                        <option>Select Delivery Method</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="custom-form" type="text" placeholder="Subash" name="firstname"/>
                                </div>
                                <div class="col-sm-6">
                                    <input class="custom-form" type="text" placeholder="Chandra" name="lastname"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
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
                                    <input class="custom-form" type="text" placeholder="Phone Number" />
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
                                <div class="col-md-12">
                                    <input type="text" class="custom-form" placeholder="Email" name="email" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="custom-form" placeholder="Order Note"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shipping-Address End -->
                    <div class="col-sm-6">
                        <div class="billing-address margin-65">
                            <h2 class="title-3">billing addrss</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="custom-form" placeholder="First Name" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="custom-form" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="custom-form" placeholder="Office Address" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="custom-form" placeholder="Home Address" />
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
                                    <select class="custom-select custom-form">
                                        <option>Post Code</option>
                                        <option>012345</option>
                                        <option>0123456</option>
                                        <option>01234567</option>
                                        <option>012345678</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <input class="custom-form" type="password" placeholder="Password" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="custom-form" placeholder="Cell Number" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="custom-form" placeholder="Phone Number" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="custom-form" placeholder="Email" name="email" />
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked="checked" name="create-account"/>
                                    Create an account?
                                </label>
                                <label>
                                    <input type="checkbox" name="billing-address"/>
                                    Skip to billing address
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Enter-Payment Start -->
                    <div class="col-md-9 col-sm-7">
                        <div class="enter-payment margin-65">
                            <h2 class="title-3">Enter Payment</h2>
                            <div class="row">
                                <div class="col-sm-5">
                                    <input type="text" class="custom-form" placeholder="Card Type" />
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" class="custom-form" placeholder="Card Number" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select class="custom-select custom-form">
                                                <option>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="custom-select custom-form">
                                                <option>Year</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12">
                                    <input type="text" class="custom-form" placeholder="Card Security Code" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="submit" class="custom-form custom-submit no-margin" value="pay now" />
                                </div>
                                <div class="col-sm-4">
                                    <input type="submit" class="custom-form custom-submit no-margin" value="cancel order" />
                                </div>
                                <div class="col-sm-4">
                                    <a class="custom-form custom-submit no-margin" href="#">continue shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5">
                        <div class="order margin-65">
                            <h2 class="title-3">Review your order</h2>
                            <div>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-left">Sub Total</td>
                                            <td class="text-right">$ 2750.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Packaging</td>
                                            <td class="text-right">$ 07.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Shipping</td>
                                            <td class="text-right">$ 13.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Discount off</td>
                                            <td class="text-right">$ 00.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="text-right custom-td"><strong>Total =</strong></td>
                                            <td class="text-right custom-td"><strong>$ 2770.00</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Enter-Payment End -->
                </div>
            </form>
        </div>
    </div>
    <!-- CHECKOUT-AREA END -->
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
