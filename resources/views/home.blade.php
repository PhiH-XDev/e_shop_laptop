@extends('layout')
@section('tieuDe', 'Trang Chủ')
@section('conten')



    <!-- SLIDER-AREA END -->
    <section class="content">
        <div class="fashion-collection-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fashion-collection">
                            <div class="fashion-photo">
                                <img src="https://cdn.tgdd.vn/Files/2021/03/04/1332362/1_800x450.jpg" alt="#">
                            </div>
                            <div class="fashion-details pt-2">
                                <h2>
                                    <span class="color-white">20</span>25 <br>
                                    <span class="color-white">La</span>ptop ASUSA
                                </h2>
                                <div class="mt-2">

                                </div>
                                <p class="">Thiết kế hiện đại, chất liệu cao cấp, phù hợp với mọi cá tính. Sản phẩm kết hợp giữa sự tinh tế và hiệu năng, mang đến trải nghiệm vượt trội cho người dùng yêu thích công nghệ và thời trang.
                                Đừng bỏ lỡ – sự lựa chọn hàng đầu cho thế hệ mới!</p>
                                <div class="view-collection-wrapper">
                                    <a href="#" class="view-collection-btn">View collection</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="featured-products-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-title title-top-border">
                            <h2>Sản Phẩm HOT</h2>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        @php
                            $columns = [[], [], []];
                            foreach ($spnoibat_arr as $index => $sp) {
                                $columns[$index % 3][] = $sp;
                            }
                        @endphp

                        <div class="col-md-4">
                            @foreach($columns[0] as $sp)
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="label-new">
                                            <span class="new">Hot</span>
                                        </div>
                                        <div class="label-parcent">
                                            <span class="parcent">-45%</span>
                                        </div>
                                        <a class="pro-image" href="#">
                                            <img class="primary-image" src="{{$sp->hinh}}" alt="#">
                                            <img class="secondary-image" src="/assets/img/product/featured/2.jpg" alt="#">
                                        </a>
                                        <div class="pro-actions">
                                            <a class="action-btn action-btn-1" href="/addcart/{{$sp->id}}"><i class="pe-7s-cart"></i><span>Thêm vào giỏ</span></a>
                                            <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a class="name_product" href="/sp/{{$sp->id}}" >{{$sp->ten_sp}}</a>
                                        </h2>
                                        <div class="pro-rating">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">{{ number_format($sp->gia, 0, ",", ".") }} VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="col-md-4">
                            @foreach($columns[1] as $sp)
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="label-new">
                                            <span class="new">Hot</span>
                                        </div>
                                        <div class="label-parcent">
                                            <span class="parcent">-45%</span>
                                        </div>
                                        <a class="pro-image" href="#">
                                            <img class="primary-image" src="{{$sp->hinh}}" alt="#">
                                            <img class="secondary-image" src="/assets/img/product/featured/2.jpg" alt="#">
                                        </a>
                                        <div class="pro-actions">
                                            <a class="action-btn action-btn-1" href="/addcart/{{$sp->id}}"><i class="pe-7s-cart"></i><span>Thêm vào giỏ</span></a>
                                            <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a class="name_product" href="/sp/{{$sp->id}}" >{{$sp->ten_sp}}</a>
                                        </h2>
                                        <div class="pro-rating">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">{{ number_format($sp->gia, 0, ",", ".") }} VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="col-md-4">
                            @foreach($columns[2] as $sp)
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="label-new">
                                            <span class="new">Hot</span>
                                        </div>
                                        <div class="label-parcent">
                                            <span class="parcent">-45%</span>
                                        </div>
                                        <a class="pro-image" href="#">
                                            <img class="primary-image" src="{{$sp->hinh}}" alt="#">
                                            <img class="secondary-image" src="/assets/img/product/featured/2.jpg" alt="#">
                                        </a>
                                        <div class="pro-actions">
                                            <a class="action-btn action-btn-1" href="/addcart/{{$sp->id}}"><i class="pe-7s-cart"></i><span>Thêm vào giỏ</span></a>
                                            <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a class="name_product" href="/sp/{{$sp->id}}" >{{$sp->ten_sp}}</a>
                                        </h2>
                                        <div class="pro-rating">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">{{ number_format($sp->gia, 0, ",", ".") }} VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


            </div>
        </div>



        <div class="product-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="product-banner">
                            <a class="banner-photo" href="#"><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Fpremium-psd%2Fhorizontal-web-banner-with-laptop-laptop-mockup_17957161.htm&psig=AOvVaw3L3X2koQ9iBI8CKfKlSUpE&ust=1747143940549000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCJj3rcWIno0DFQAAAAAdAAAAABAW" alt="#" /></a>
                            <div class="banner-brief">
                                <h2>belt for mens</h2>
                                <a href="#" class="shop-now">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="product-banner banner-2">
                            <a class="banner-photo" href="#"><img src="/assets/img/banner/2.jpg" alt="#" /></a>
                            <div class="banner-brief">
                                <h2>Dresses For Women</h2>
                                <p>Winter Collection</p>
                                <a href="#" class="shop-now">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT-BANNER-AREA END -->
        <!-- NEW-ARRIVAL-AREA START -->
        <div class="new-arrival-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-title title-top-border">
                            <h2>Sản Phẩm Mới</h2>
                        </div>
                    </div>
                </div>
                <div class="new-arrival">
                    <div class="row">
                        <div class="col-md-2 hidden-sm hidden-xs">
                            <div class="product-banner banner-3 single-product">
                                <a class="banner-photo" href="#"><img src="/assets/img/banner/3.jpg" alt="#" /></a>
                                <h4>25% <br> Discount</h4>
                                <a href="#" class="shop-now">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <div class="active-arrival-carousel navigation-top">
                                <div class="sin-items">
                                </div>
                                @php
                            $columns = [[], [], []];
                            foreach ($spgiamsoc_arr as $index => $sp) {
                                $columns[$index % 3][] = $sp;
                            }
@endphp

<div class="container">
    <div class="row">
        <div class="col-md-4">
            @foreach($columns[0] as $sp)
            <div class="single-product">
                <div class="product-img">
                    <div class="label-new">
                        <span class="new">New</span>
                    </div>
                    <div class="label-parcent">
                        <span class="parcent">-40%</span>
                    </div>
                    <a class="pro-image" href="#">
                        <img class="primary-image" src="{{ $sp->hinh }}" alt="#">
                        <img class="secondary-image" src="/assets/img/product/arrival/1-bg.jpg" alt="#">
                    </a>
                    <div class="pro-actions large-pro-actions">
                        <a class="action-btn action-btn-1" href="/addcart/{{$sp->id}}"><i class="pe-7s-cart"></i><span>Thêm vào giỏ hàng</span></a>
                        <a class="action-btn modal-view" href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="pe-7s-look"></i></a>
                        <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                        <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                    </div>
                    <div class="pro-name-price">
                        <h3><a href="/sp/{{$sp->id}}" >{{ $sp->ten_sp }}</a></h3>
                        <h4>{{ number_format($sp->gia, 0, ',', '.') }} VNĐ</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="col-md-4">
            @foreach($columns[1] as $sp)
            <div class="single-product">
                <div class="product-img">
                    <div class="label-new">
                        <span class="new">New</span>
                    </div>
                    <div class="label-parcent">
                        <span class="parcent">-40%</span>
                    </div>
                    <a class="pro-image" href="#">
                        <img class="primary-image" src="{{ $sp->hinh }}" alt="#">
                        <img class="secondary-image" src="/assets/img/product/arrival/1-bg.jpg" alt="#">
                    </a>
                    <div class="pro-actions large-pro-actions">
                        <a class="action-btn action-btn-1" href="/addcart/{{$sp->id}}"><i class="pe-7s-cart"></i><span>Thêm vào giỏ hàng</span></a>
                        <a class="action-btn modal-view" href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="pe-7s-look"></i></a>
                        <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                        <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                    </div>
                    <div class="pro-name-price">
                        <h3><a href="/sp/{{$sp->id}}">{{ $sp->ten_sp }}</a></h3>
                        <h4>{{ number_format($sp->gia, 0, ',', '.') }} VNĐ</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="col-md-4">
            @foreach($columns[2] as $sp)
            <div class="single-product">
                <div class="product-img">
                    <div class="label-new">
                        <span class="new">New</span>
                    </div>
                    <div class="label-parcent">
                        <span class="parcent">-40%</span>
                    </div>
                    <a class="pro-image" href="#">
                        <img class="primary-image" src="{{ $sp->hinh }}" alt="#">
                        <img class="secondary-image" src="/assets/img/product/arrival/1-bg.jpg" alt="#">
                    </a>
                    <div class="pro-actions large-pro-actions">
                        <a class="action-btn action-btn-1" href="/addcart/{{$sp->id}}"><i class="pe-7s-cart"></i><span>Thêm vào giỏ hàng</span></a>
                        <a class="action-btn modal-view" href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="pe-7s-look"></i></a>
                        <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                        <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                    </div>
                    <div class="pro-name-price">
                        <h3><a href="/sp/{{$sp->id}}" >{{ $sp->ten_sp }}</a></h3>
                        <h4>{{ number_format($sp->gia, 0, ',', '.') }} VNĐ</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- NEW-ARRIVAL-AREA END -->
        <!-- TESTIMONIALS-AREA START -->
        <div class="testimonials-area">
            <div class="testimonials">
                <div class="container">
                    <div class="row">
                        <div class="active-testimonial-carousel navigation-bottom">
                            <div class="col-lg-12 col-md-12">
                                <div class="single-testimonial">
                                    <h2>Robert Miller</h2>
                                    <h3>Chairman</h3>
                                    <p>"Với hơn 20 năm kinh nghiệm trong ngành bán lẻ, tôi tin rằng công nghệ và phong cách cần đi đôi để tạo nên giá trị thật sự. Sứ mệnh của chúng tôi là mang đến cho khách hàng những sản phẩm vừa thời trang, vừa thông minh – kết nối mọi khía cạnh của cuộc sống hiện đại"</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="single-testimonial">
                                    <h2>Robert Miller</h2>
                                    <h3>Chairman</h3>
                                    <p>"Với hơn 20 năm kinh nghiệm trong ngành bán lẻ, tôi tin rằng công nghệ và phong cách cần đi đôi để tạo nên giá trị thật sự. Sứ mệnh của chúng tôi là mang đến cho khách hàng những sản phẩm vừa thời trang, vừa thông minh – kết nối mọi khía cạnh của cuộc sống hiện đại"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TESTIMONIALS-AREA END -->
        <!-- BLOG-POST-AREA START -->
        <div class="blog-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-title  title-top-border">
                            <h2>last from blogs</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="active-blog-post  navigation-top">
                        <!-- Blog-Post-Inner Start -->
                        <div class="col-lg-12 col-md-12">
                            <div class="blog-post-inner">
                                <div class="post-thumbnail">
                                    <a href="single-blog.html">
                                        <img src="/assets/img/blog/1.jpg" alt="" />
                                        <span class="moretag"></span>
                                    </a>
                                    <div class="post-meta">
                                        <div class="single-meta date">
                                            <p>25<span>June</span></p>
                                        </div>
                                        <div class="single-meta like">
                                            <button class="post-like"><i class="pe-7s-like"></i></button><sup>55</sup>
                                        </div>
                                        <div class="single-meta comments">
                                            <a href="single-blog.html"><i class="pe-7s-comment"></i><sup>42</sup></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-brief">
                                    <h3><a href="#">Blog Title Le Luong</a></h3>
                                    <p>"Tôi đánh giá cao sự chỉn chu trong từng khâu phục vụ. Dù đặt hàng online nhưng cảm giác vẫn được chăm sóc như khách VIP tại cửa hàng."</p>
                                </div>
                            </div>
                        </div>
                        <!-- Blog-Post-Inner End -->
                        <!-- Blog-Post-Inner Start -->
                        <div class="col-lg-12 col-md-12">
                            <div class="blog-post-inner">
                                <div class="post-thumbnail">
                                    <a href="single-blog.html">
                                        <img src="/assets/img/blog/2.jpg" alt="" />
                                        <span class="moretag"></span>
                                    </a>
                                    <div class="post-meta">
                                        <div class="single-meta date">
                                            <p>18<span>April</span></p>
                                        </div>
                                        <div class="single-meta like">
                                            <button class="post-like"><i class="pe-7s-like"></i></button><sup>65</sup>
                                        </div>
                                        <div class="single-meta comments">
                                            <a href="single-blog.html"><i class="pe-7s-comment"></i><sup>48</sup></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-brief">
                                    <h3><a href="#">Blog Title Dong Trieu</a></h3>
                                    <p>"Tôi thật sự ấn tượng với chất lượng sản phẩm và dịch vụ ở đây. Giao hàng nhanh, tư vấn nhiệt tình và đặc biệt là thiết kế rất thời trang. Sẽ tiếp tục ủng hộ dài lâu!" </p>
                                </div>
                            </div>
                        </div>
                        <!-- Blog-Post-Inner End -->
                        <!-- Blog-Post-Inner Start -->
                        <div class="col-lg-12 col-md-12">
                            <div class="blog-post-inner">
                                <div class="post-thumbnail">
                                    <a href="single-blog.html">
                                        <img src="/assets/img/blog/1.jpg" alt="" />
                                        <span class="moretag"></span>
                                    </a>
                                    <div class="post-meta">
                                        <div class="single-meta date">
                                            <p>16<span>March</span></p>
                                        </div>
                                        <div class="single-meta like">
                                            <button class="post-like"><i class="pe-7s-like"></i></button><sup>72</sup>
                                        </div>
                                        <div class="single-meta comments">
                                            <a href="single-blog.html"><i class="pe-7s-comment"></i><sup>60</sup></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-brief">
                                    <h3><a href="#">Blog Title Minh Anh</a></h3>
                                    <p>"Sản phẩm giống y hình, chất lượng vượt mong đợi. Mình rất hài lòng, đặc biệt là cách đóng gói rất cẩn thận. Sẽ giới thiệu cho bạn bè!" </p>
                                </div>
                            </div>
                        </div>
                        <!-- Blog-Post-Inner End -->
                        <!-- Blog-Post-Inner Start -->
                        <div class="col-lg-12 col-md-12">
                            <div class="blog-post-inner">
                                <div class="post-thumbnail">
                                    <a href="single-blog.html">
                                        <img src="/assets/img/blog/2.jpg" alt="" />
                                        <span class="moretag"></span>
                                    </a>
                                    <div class="post-meta">
                                        <div class="single-meta date">
                                            <p>25<span>June</span></p>
                                        </div>
                                        <div class="single-meta like">
                                            <button class="post-like"><i class="pe-7s-like"></i></button><sup>25</sup>
                                        </div>
                                        <div class="single-meta comments">
                                            <a href="single-blog.html"><i class="pe-7s-comment"></i><sup>25</sup></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-brief">
                                    <h3><a href="#">Blog Title Dummy</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.... </p>
                                </div>
                            </div>
                        </div>
                        <!-- Blog-Post-Inner End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG-POST-AREA END -->
        <!-- BRANDS-LOGO-AREA START -->
        <div class="brands-logo-area">
            <div class="container">
                <div class="row">
                    <div class="active-brands-logo">
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="/assets/img/brand/1.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="/assets/img/brand/2.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="/assets/img/brand/3.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="/assets/img/brand/4.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="/assets/img/brand/5.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="/assets/img/brand/6.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="/assets/img/brand/1.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="/assets/img/brand/2.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="/assets/img/brand/3.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="/assets/img/brand/4.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="/assets/img/brand/5.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="/assets/img/brand/6.png" alt="" />
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
