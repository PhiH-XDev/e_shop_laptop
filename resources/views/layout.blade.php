<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('tieuDe')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">

    @vite(['public/assets/css/bootstrap.min.css', 'public/assets/css/animate.css', 'public/assets/css/jquery-ui.min.css', 'public/assets/css/meanmenu.min.css', 'public/assets/lib/css/nivo-slider.css', 'public/assets/css/owl.carousel.css', 'public/assets/css/jquery.simpleLens.css', 'public/assets/css/font-awesome.min.css', 'public/assets/css/fontello.css', 'public/assets/style.css', 'public/assets/css/latofonts.css', 'public/assets/css/responsive.css', 'public/assets/js/vendor/modernizr-2.8.3.min.js'])
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    <!-- animate css -->
    {{-- <link rel="stylesheet" href="css/animate.css"> --}}
    <!-- jquery-ui.min css -->
    {{-- <link rel="stylesheet" href="css/jquery-ui.min.css"> --}}
    <!-- meanmenu css -->
    {{-- <link rel="stylesheet" href="css/meanmenu.min.css"> --}}
    <!-- nivo slider css -->
    {{-- <link rel="stylesheet" href="" /> --}}
    <!-- owl.carousel css -->
    {{-- <link rel="stylesheet" href="css/owl.carousel.css"> --}}
    <!-- Simple Lence css -->
    {{-- <link rel="stylesheet" href="css/jquery.simpleLens.css"> --}}
    <!-- font-awesome css -->
    {{-- <link rel="stylesheet" href="css/font-awesome.min.css"> --}}
    <!-- fontello css -->
    {{-- <link rel="stylesheet" href="css/fontello.css"> --}}
    <!-- latofonts css -->
    {{-- <link rel="stylesheet" href="css/latofonts.css"> --}}
    <!-- style css -->
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <!-- responsive css -->
    {{-- <link rel="stylesheet" href="css/responsive.css"> --}}
    <!-- modernizr js -->
    {{-- <script src="js/vendor/modernizr-2.8.3.min.js"></script> --}}
</head>

<body>

    <header class="header-area">
        <!-- Header-Top Start -->
        <div class="header-top hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-3">
                        <div class="header-top-left">
                            <ul class="top-menu top-menu-left">
                                <li>
                                    <a href="#"><span><i class="pe-7s-clock"></i></span>

                                        Mon-fri: 9:00-19:00</a>
                                </li>
                            </ul>
                            <ul class="top-menu top-menu-left hidden-sm">
                                <li><a href="#">Tiếng Việt<span><i class="pe-7s-angle-down"></i></span></a>
                                    <ul class="top-submenu">
                                        <li><a href="#">Language</a></li>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Bangla</a></li>
                                        <li><a href="#">Arabic</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="top-menu top-menu-left hidden-sm">
                                <li><a href="#">VNĐ <span><i class="pe-7s-angle-down"></i></span></a>
                                    <ul class="top-submenu">
                                        <li><a href="#">URO</a></li>
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">GBP</a></li>
                                        <li><a href="#">USD</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-9">
                        <div class="header-top-right">
                            <!-- <ul class="top-menu">
         <li> -->
                            <div class="header-search">
                                <form action="#">
                                    <input class="top-search" type="text" placeholder="Search Here...">
                                    <button type="submit"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                            <!-- </li>
        </ul> -->
                            {{-- <ul class="top-menu">
                                <li><a href="my-account.html"><span><i class="pe-7s-user"></i></span>Thông Tin cá nhân</a></li>
                            </ul> --}}
                            <ul class="top-menu">
                                @if (Auth::check())
                                {{Auth::user()->ho}} {{Auth::user()->name}}!
                                <li> <form action="{{route('verification.send')}}" method="post" class="w-75 mx-auto mt-3 text-center" > @csrf
                                    <button type="submit" class="btn btn-primary p-2"> Gửi lại email xác thực</button>
                                </form>
                            </li>
                               <li><a href="/thoat" class="text-decoration-none text-white">Thoát</a></li>
                            @else
                            <li><a href="/dangnhap" class="text-decoration-none text-white">Đăng nhập</a></li>

                            @endif

                                <li><a href="{{url('/admin/dangnhap')}}"><span><i class="pe-7s-key"></i></span>Đăng Nhập Admin</a></li>
                            </ul>
                            <ul class="top-menu">
                                <li><a href="/đăng nhập"><span><i class="pe-7s-lock"></i></span>Đăng ký</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header-Top End -->
        <!-- Header Start -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <!-- Logo Start -->
                    <div class="col-md-2 col-sm-6">
                        <div class="logo">
                            <a href="index.html"><img src="/assets/img/logo.png" alt="69 Fashion"></a>
                        </div>
                    </div>
                    <!-- Logo End -->
                    <!-- MainMenu Start -->
                    <div class="col-md-7 hidden-sm hidden-xs">
                        <div class="mainmenu">
                            <nav>
                                <ul>
                                    <li><a href="/">Trang Chủ</a>
                                        {{-- <ul class="submenu">
												<li><a href="index.html">Home Page 1</a></li>
												<li><a href="index-2.html">Home Page 2</a></li>
											</ul> --}}
                                    </li>
                                    {{-- <li><a href="about.html">Abou</a></li> --}}
                                    <li><a href="/shop">Cửa Hàng</a>
                                        <div class="megamenu">
                                            <div class="mega-top">
                                                @foreach ($loai_arr as $lt)
                                                    <span>
                                                        <a class="mega-menu-title"
                                                            href="/loai/{{$lt->id}}">{{ $lt->ten_loai }}</a>
                                                        {{-- <a href="#">Casual Dresses</a>
														<a href="#">Evening</a>
														<a href="#">Designer</a>
														<a href="#">Party</a> --}}
                                                    </span>
                                                @endforeach
                                                {{-- <span>
														<a class="mega-menu-title" href="#">Shoes</a>
														<a href="#">Sport shoes</a>
														<a href="#">Casual shoes</a>
														<a href="#">Leather shoes</a>
														<a href="#">Canvas shoes</a>
													</span>
													<span>
														<a class="mega-menu-title" href="#">Accesories</a>
														<a href="#">Backpacks</a>
														<a href="#">Wallets</a>
														<a href="#">Laptops Bags</a>
														<a href="#">Belts</a>
													</span> --}}
                                            </div>
                                            <div class="mega-bottom">
                                                <a href="#"><img src="/assets/img/megamenu/1.jpg" alt="#"></a>
                                            </div>
                                        </div>
                                    </li>
                                    {{-- <li><a href="shop-list.html">Men</a></li> --}}
                                    {{-- <li><a href="#">page's</a>
                                        <ul class="submenu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="shop.html">Shop Grid View</a></li>
                                            <li><a href="shop-list.html">Shop List View</a></li>
                                            <li><a href="single-product.html">Single-Product</a></li>
                                            <li><a href="single-blog.html">Single-blog</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="/login">Login</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li><a href="blog.html">Blog</a></li> --}}
                                    <li><a href="/lienhe">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- MainMenu End -->
                    <!-- Cart-Total Start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="cart-total">
                            <ul>
                                <li>
                                     @if (empty($cart))
                                    <a href="#">
                                        <span class="cart-icon"><i
                                                class="pe-7s-cart"></i><sup>0</sup></span>
                                        <span class="cart-brief">Cửa hàng:0
                                            VNĐ</span>
                                    </a>
                                     @else

                                        <a href="#">
                                            <span class="cart-icon"><i
                                                    class="pe-7s-cart"></i><sup>{{$soluong}}</sup></span>
                                            <span class="cart-brief">Tổng tiền:{{ number_format($tongtien, 0, ',', '.') }}
                                                VNĐ</span>
                                        </a>
                                        <div class="mini-cart-content">

                                              @foreach ($cart as $c)

                                                <div class="cart-img-details">
                                                    <div class="cart-img-photo">
                                                        <a href="#"><img src="{{ $c['hinh'] }}"
                                                                alt="#"></a>
                                                    </div>
                                                    <div class="cart-img-content">
                                                        <h4><a href="#">{{ $c['ten_sp'] }}</a></h4>
                                                        <span></span>
                                                    </div>
                                                    <div class="pro-del">
                                                        <a href="/xoasp/{{ $c['id_sp'] }}"><i
                                                                class="pe-7s-trash"></i></a>
                                                    </div>
                                                </div>
                                            @endforeach

                                            {{-- <div class="clear"></div> --}}
                                            {{-- <div class="cart-img-details">
												<div class="cart-img-photo">
													<a href="#"><img src="/assets/img/cart/1.jpg" alt="#"></a>
												</div>
												<div class="cart-img-content">
													<h4><a href="#">Men's Shirt</a></h4>
													<span>$25.25</span>
												</div>
												<div class="pro-del">
													<a href="#"><i class="pe-7s-trash"></i></a>
												</div>
											</div> --}}
                                             <div class="cart-inner-bottom">
                                                <p class="total">{{ number_format($tongtien, 0, ',', '.') }} VNĐ</p>
                                                <a href="/cart" class="cart-button-top cart-left">Giỏ hàng</a></a>
                                                <a href="/checkout" class="cart-button-top">Checkout</a>
                                            </div>
                                      @endif

                        </div>
                        </li>
                        </ul>
                    </div>
                </div>
                <!-- Cart-Total End -->
            </div>
        </div>
        </div>
        <!-- Header END -->
    </header>

    <div class="mobile-menu-area hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="/">Home</a>
                                    {{-- <ul class="submenu">
											<li><a href="index.html">Home Page 1</a></li>
											<li><a href="index-2.html">Home Page 2</a></li>
										</ul> --}}
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="shop.html">Women</a></li>
                                <li><a href="shop-list.html">Men</a></li>
                                <li><a href="#">page's</a>
                                    <ul class="submenu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="shop.html">Shop Grid View</a></li>
                                        <li><a href="shop-list.html">Shop List View</a></li>
                                        <li><a href="single-product.html">Single-Product</a></li>
                                        <li><a href="single-blog.html">Single-blog</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('conten')
    <!-- FOOTER-AREA START -->
    <footer class="footer-area">
        <!-- Footer-Top-Area Start -->
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-top">
                            <div class="footer-logo">
                                <img src="/assets/img/logo.png" alt="" />
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="social-media">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Top-Area End -->
        <!-- Footer-Middle-Area Start -->
        <div class="footer-middle-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <div class="single-footer footer-about">
                            <h4 class="widget-title title-top-border">Contact us</h4>
                            <ul>
                                <li>
                                    <i class="pe-7s-map-marker"></i>
                                    <span>United Kingdom, London</span><br>
                                    <span> Simple Street 15A </span>
                                </li>
                                <li>
                                    <i class="pe-7s-call"></i>
                                    <span>(123) 123.456.7890</span><br>
                                    <span>(123) 123.456.7890</span>

                                </li>
                                <li>
                                    <i class="pe-7s-mail-open"></i>
                                    <span>info@comanyname.com</span><br>
                                    <span>companyname@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 hidden-md hidden-sm">
                        <div class="single-footer footer-menu">
                            <h4 class="widget-title title-top-border">our offers</h4>
                            <nav>
                                <ul>
                                    <li><a href="#">New Collection</a></li>
                                    <li><a href="#">Best Sellers</a></li>
                                    <li><a href="#">Manufacturers</a></li>
                                    <li><a href="#">New Products</a></li>
                                    <li><a href="#">Suppliers</a></li>
                                    <li><a href="#">Delivery & Returns</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <div class="single-footer footer-menu">
                            <h4 class="widget-title title-top-border">my account</h4>
                            <nav>
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Office Information</a></li>
                                    <li><a href="#">Address</a></li>
                                    <li><a href="#">Discount</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">My Credit Slip</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2  hidden-md hidden-sm">
                        <div class="single-footer instagram">
                            <h4 class="widget-title title-top-border">instagram</h4>
                            <div class="instagram-thumb">
                                <a href="#"><img src="/assets/img/instagram/1.jpg" alt="" /></a>
                                <a href="#"><img src="/assets/img/instagram/2.jpg" alt="" /></a>
                                <a href="#"><img src="/assets/img/instagram/3.jpg" alt="" /></a>
                                <a href="#"><img src="/assets/img/instagram/4.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <div class="single-footer newslatter">
                            <h4 class="widget-title title-top-border">newslatter</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            <form action="#">
                                <input type="text" name="email" placeholder="Enter your email..." />
                                <input type="submit" value="Subscribe" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Middle-Area End -->
        <!-- Copyright-Area Start -->
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="copyright">
                            <p>Copyright &copy; <a href="#" target="_blank"><b> Codecarnival </b></a> All rights
                                reserved.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="payment">
                            <a href="#"><i class="fa fa-cc-paypal"></i></a>
                            <a href="#"><i class="fa fa-cc-visa"></i></a>
                            <a href="#"><i class="fa fa-cc-mastercard"></i></a>
                            <a href="#"><i class="fa fa-cc-stripe"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright-Area End -->
    </footer>
    <!-- FOOTER-AREA END -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="#" src="/assets/img/product/quickview-photo.jpg" />
                                </div>
                            </div><!-- .product-images -->

                            <div class="product-info">
                                <h1>Aenean eu tristique</h1>
                                <div class="price-box-3">
                                    <hr />
                                    <div class="s-price-box">
                                        <span class="new-price">$160.00</span>
                                        <span class="old-price">$190.00</span>
                                    </div>
                                    <hr />
                                </div>
                                <a href="shop.html" class="see-all">See all features</a>
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="numbers-row">
                                            <input type="number" id="french-hens" value="3">
                                        </div>
                                        <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                    </form>
                                </div>
                                <div class="quick-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor. Donec non est at libero.
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="Facebook" href="#"
                                                    class="facebook social-icon"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a target="_blank" title="Twitter" href="#"
                                                    class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#"
                                                    class="pinterest social-icon"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li><a target="_blank" title="Google +" href="#"
                                                    class="gplus social-icon"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li><a target="_blank" title="LinkedIn" href="#"
                                                    class="linkedin social-icon"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    {{-- <section id="company-services" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="cart-outline">
                  <use xlink:href="#cart-outline" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Free delivery</h3>
                <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="quality">
                  <use xlink:href="#quality" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Quality guarantee</h3>
                <p>Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="price-tag">
                  <use xlink:href="#price-tag" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Daily offers</h3>
                <p>Amet consectetur adipi elit loreme ipsum dolor sit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="shield-plus">
                  <use xlink:href="#shield-plus" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">100% secure payment</h3>
                <p>Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    {{-- @yield('conten') --}}





    @vite(['public/assets/js/bootstrap.min.js', 'public/assets/lib/js/jquery.nivo.slider.js', 'public/assets/js/owl.carousel.min.js', 'public/assets/js/jquery-ui.min.js', 'public/assets/js/countdon.min.js', 'public/assets/js/jquery.meanmenu.js', 'public/assets/js/jquery.simpleLens.min.js', 'public/assets/js/plugins.js', 'public/assets/js/main.js']);
    <script src=" {{ asset('assets/js/vendor/jquery-1.12.0.min.js') }}"></script>
    <!-- bootstrap js -->

    <script src=" {{ asset('assets/js/bootstrap.min.js"') }}"></script>
    <!-- Nivo slider js -->

    <script src=" {{ asset('assets/lib/js/jquery.nivo.slider.js') }}"></script>
    <!-- owl.carousel js -->

    <script src="  {{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- jquery-ui js -->

    <script src=" {{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- countdon.min js -->

    <script src=" {{ asset('assets/js/countdon.min.js') }}"></script>
    <!-- jquery.meanmenu js -->

    <script src=" {{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <!-- Simple Lence JS -->
    <script src="{{ asset('assets/js/jquery.simpleLens.min.js') }} "></script>
    <!-- wow js -->

    <script src=" {{ asset('assets/js/wow.min.js') }}"></script>
    <!-- plugins js -->
    {{-- <script src="js/plugins.js"></script> --}}
    <!-- main js -->

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
