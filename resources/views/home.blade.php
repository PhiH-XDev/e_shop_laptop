@extends('layout')
@section('tieuDe', 'trang Chủ')
@section('conten')



    <!-- SLIDER-AREA END -->
    <section class="content">
        <!-- CATEGORY-PRODUCT-AREA START -->
        {{-- <div class="category-product-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="single-category border-hover">
                        <a href="#"><img src="/assets/img/product/category/1.jpg" alt=""></a>
                        <h2>Fashion</h2>
                        <span><a class="shop-now" href="single-blog.html">Shop Now</a></span>
                    </div>
                    <div class="single-category border-hover">
                        <a href="#"><img src="/assets/img/product/category/2.jpg" alt=""></a>
                        <h2>New Shirt</h2>
                        <span><a class="shop-now" href="single-blog.html">Shop Now</a></span>
                    </div>
                    <div class="single-category border-hover">
                        <a href="#"><img src="/assets/img/product/category/3.jpg" alt=""></a>
                        <h2>Fashion</h2>
                        <span><a class="shop-now" href="single-blog.html">Shop Now</a></span>
                    </div>
                    <div class="single-category border-hover">
                        <a href="#"><img src="/assets/img/product/category/4.jpg" alt=""></a>
                        <h2>New Bag</h2>
                        <span><a class="shop-now" href="single-blog.html">Shop Now</a></span>
                    </div>
                    <div class="single-category border-hover">
                        <a href="#"><img src="/assets/img/product/category/5.jpg" alt=""></a>
                        <h2>New Shoes</h2>
                        <span><a class="shop-now" href="single-blog.html">Shop Now</a></span>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- CATEGORY-PRODUCT-AREA END -->
        <!-- FASHION-COLLECTION-AREA START -->
        <div class="fashion-collection-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fashion-collection">
                            <div class="fashion-photo">
                                <img src="/assets/img/product/10.jpg" alt="#">
                            </div>
                            <div class="fashion-details">
                                <h2>
                                    <span class="color-white">20</span>24 <br>
                                    <span class="color-white">Laptop</span> ASUSA
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi perspiciatis eius quis quam odio, error accusantium, quis ullam sint exercitationem mollitia accusa mus magnam debitis dolor culpa quibusdam animi adipisci ducimus magnam debi tis dolor culpa quibusdam animi adipisci ducimus natus?</p>
                                <a href="#">View <span> collection</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         {{-- <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product">
                        @foreach($spnoibat_arr as $sp)
                        <div class="product-img">

                            <div class="label-new">
                                <span class="new">Hot</span>
                            </div>
                            <div class="label-parcent">
                                <span class="parcent">-45%</span>
                            </div>

                            <a class="pro-image" href="#">
                                <img class="primary-image" src=" {{$sp->hinh}}" alt="#">
                                <img class="secondary-image" src="/assets/img/product/featured/2.jpg" alt="#">
                            </a>
                            <div class="pro-actions">
                                <a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i><span>Thêm vào giỏ</span></a>
                                <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                            </div>
                        </div>

                        <div class="product-content">
                            <h2 class="product-name">
                                <a href="#">{{$sp->ten_sp}} </a>
                            </h2>
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="price-box">
                                <span class="new-price">{{ number_format( $sp->gia , 0 , "," , ".") }} VNĐ </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>



            </div>

        </div> --}}


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
                                            <a href="/sp/{{$sp->id}}" >{{$sp->ten_sp}}</a>
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
                                            <a href="/sp/{{$sp->id}}" >{{$sp->ten_sp}}</a>
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
                                            <a href="/sp/{{$sp->id}}" >{{$sp->ten_sp}}</a>
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
                            <a class="banner-photo" href="#"><img src="/assets/img/banner/1.jpg" alt="#" /></a>
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
                            <h2>Sản Mới</h2>
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

                                {{-- <div class="sin-items">
                                    <div class="row">
                                        <div class="col-sm-5 arrival-1">
                                            <!-- Single-Product Start -->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="label-new">
                                                        <span class="new">New</span>
                                                    </div>
                                                    <div class="label-parcent">
                                                        <span class="parcent">-40%</span>
                                                    </div>
                                                    <a class="pro-image" href="#">
                                                        <img class="primary-image" src="/assets/img/product/arrival/1-bg.jpg" alt="#">
                                                        <img class="secondary-image" src="/assets/img/product/arrival/1.jpg" alt="#">
                                                    </a>
                                                    <div class="pro-actions large-pro-actions">
                                                        <a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i><span>Add to Cart</span></a>
                                                        <a class="action-btn modal-view" href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="pe-7s-look"></i></a>
                                                        <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                        <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                                    </div>
                                                    <div class="pro-name-price">
                                                        <h3><a href="#">Men's Dresses</a></h3>
                                                        <h4>$85.00</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single-Product End -->
                                        </div>
                                        <div class="col-sm-7  arrival-2">
                                            <div class="row">
                                                <!-- Single-Product Start -->
                                                <div class="col-sm-6">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="label-parcent">
                                                                <span class="parcent">Sale</span>
                                                            </div>
                                                            <a class="pro-image" href="#">
                                                                <img class="primary-image" src="/assets/img/product/arrival/2.jpg" alt="#">
                                                                <img class="secondary-image" src="/assets/img/product/arrival/3.jpg" alt="#">
                                                            </a>
                                                            <div class="pro-actions">
                                                                <a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i><span>Add to Cart</span></a>
                                                                <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                                            </div>
                                                            <div class="pro-name-price">
                                                                <h3><a href="#">back t-shirt</a></h3>
                                                                <h4>$55.00</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a class="pro-image" href="#">
                                                                <img class="primary-image" src="/assets/img/product/arrival/3.jpg" alt="#">
                                                                <img class="secondary-image" src="/assets/img/product/arrival/4.jpg" alt="#">
                                                            </a>
                                                            <div class="pro-actions">
                                                                <a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i><span>Add to Cart</span></a>
                                                                <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                                            </div>
                                                            <div class="pro-name-price">
                                                                <h3><a href="#">White t-shirt</a></h3>
                                                                <h4>$25.00</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single-Product End -->
                                                <!-- Single-Product Start -->
                                                <div class="col-sm-6">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="label-new">
                                                                <span class="new">New</span>
                                                            </div>
                                                            <div class="label-parcent">
                                                                <span class="parcent">-38%</span>
                                                            </div>
                                                            <a class="pro-image" href="#">
                                                                <img class="primary-image" src="/assets/img/product/arrival/5.jpg" alt="#">
                                                                <img class="secondary-image" src="/assets/img/product/arrival/2.jpg" alt="#">
                                                            </a>
                                                            <div class="pro-actions">
                                                                <a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i><span>Add to Cart</span></a>
                                                                <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                                            </div>
                                                            <div class="pro-name-price">
                                                                <h3><a href="#">Women's Dresses</a></h3>
                                                                <h4>$65.00</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a class="pro-image" href="#">
                                                                <img class="primary-image" src="/assets/img/product/arrival/4.jpg" alt="#">
                                                                <img class="secondary-image" src="/assets/img/product/arrival/5.jpg" alt="#">
                                                            </a>
                                                            <div class="pro-actions">
                                                                <a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i><span>Add to Cart</span></a>
                                                                <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                                            </div>
                                                            <div class="pro-name-price">
                                                                <h3><a href="#">back t-shirt</a></h3>
                                                                <h4>$25.00</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single-Product End -->
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
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
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="single-testimonial">
                                    <h2>Robert Miller</h2>
                                    <h3>Chairman</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
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
                                    <h3><a href="#">Blog Title Dummy</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.... </p>
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
                                    <h3><a href="#">Blog Title Dummy</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.... </p>
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
                                    <h3><a href="#">Blog Title Dummy</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.... </p>
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
