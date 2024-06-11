@extends('layout')
@section('tieuDe', 'Chi tiết')
@section('conten')
<section class="page-banner-area">
    <div class="col-xs-12">
        <div class="page-banner-brief">
            <h2>Product Detail</h2>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="product-detail.html">Product Detail</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- Page-Banner-AREA END -->
<section class="content">
    <!-- ABOUT-AREA START -->
    <div class="product-detail-area margin-70">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-product-view">
                        <!-- Nav tabs -->
                        <div class="large-product-tab-menu">
                            <div role="tablist" class="product-details-menu product-details-carousel navigation-center">
                                <div role="presentation" class="active">
                                    <a href="#img-1" role="tab" data-toggle="tab">
                                        <img src="{{$sp->hinh}}" alt="" />
                                    </a>
                                </div>
                                <div role="presentation">
                                    <a href="#img-2" role="tab" data-toggle="tab">
                                        <img src="{{$sp->hinh}}" alt="" />
                                    </a>
                                </div>
                                <div role="presentation">
                                    <a href="#img-3" role="tab" data-toggle="tab">
                                        <img src="{{$sp->hinh}}" alt="" />
                                    </a>
                                </div>
                                <div role="presentation">
                                    <a href="#img-4" role="tab" data-toggle="tab">
                                        <img src="{{$sp->hinh}}" alt="" />
                                    </a>
                                </div>
                            <!-- </ul>
                            <ul role="tablist" class="product-details-menu"> -->
                                <div role="presentation" class="active">
                                    <a href="#img-1" role="tab" data-toggle="tab">
                                        <img src="{{$sp->hinh}}" alt="" />
                                    </a>
                                </div>
                                <div role="presentation">
                                    <a href="#img-2" role="tab" data-toggle="tab">
                                        <img src="{{$sp->hinh}}" alt="" />
                                    </a>
                                </div>
                                <div role="presentation">
                                    <a href="#img-3" role="tab" data-toggle="tab">
                                        <img src="{{$sp->hinh}}" alt="" />
                                    </a>
                                </div>
                                <div role="presentation">
                                    <a href="#img-4" role="tab" data-toggle="tab">
                                        <img src="{{$sp->hinh}}" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="view-large-photo">
                            <!-- Tab panes -->
                            <div class="simpleLens-container tab-content">
                                <div role="tabpanel" class="tab-pane active" id="img-1">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="{{$sp->hinh}}" href="#">
                                            <img src="{{$sp->hinh}}" alt="" class="simpleLens-big-image"/>
                                        </a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="img-2">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="img/product/single-product/large/2.jpg" href="#">
                                            <img src="{{$sp->hinh}}" alt="" class="simpleLens-big-image"/>
                                        </a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="img-3">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="img/product/single-product/large/3.jpg" href="#">
                                            <img src="{{$sp->hinh}}" alt="" class="simpleLens-big-image"/>
                                        </a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="img-4">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="img/product/single-product/large/4.jpg" href="#">
                                            <img src="img/product/single-product/medium/4.jpg" alt="" class="simpleLens-big-image"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-details listview">
                        <div class="product-content">
                            <h2 class="product-name">
                                <a href="#">{{$sp->ten_sp}}</a>
                            </h2>
                            <div class="rating-review">
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <a class="reviews" href="#">{{$sp->luot_xem}}</a>
                                <a class="add-review" href="#">Add Your Review</a>
                            </div>
                            <div class="stock">
                                <a href="#">In Stock</a>
                            </div>
                            <div class="price-box">
                                <span class="old-price">{{ number_format($sp->gia, 0, ',', '.') }} VNĐ</span>
                                <span class="new-price">{{ number_format($sp->gia_km, 0, ',', '.') }} VNĐ</span>
                            </div>
                            <div class="description">
                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                            </div>
                            <div class="color-choose">
                                <span class="choose-title">Color : </span>
                                <a class="color-1" href="#"></a>
                                <a class="color-2" href="#"></a>
                                <a class="color-3" href="#"></a>
                                <a class="color-4" href="#"></a>
                            </div>
                            <div class="size">
                                <span class="choose-title">Size : </span>
                                <ul>
                                    <li class="active"><a href="#">XL</a></li>
                                    <li><a href="#">SSL</a></li>
                                    <li><a href="#">SL</a></li>
                                    <li><a href="#">m</a></li>
                                    <li><a href="#">s</a></li>
                                    <li><a href="#">L</a></li>
                                </ul>
                            </div>
                            <div class="qty">
                                <span class="choose-title">Qty : </span>
                                <input type="number" placeholder="1" />
                            </div>
                            <div class="pro-actions">
                                <a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i>Add to Cart</a>
                                <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                            </div>
                        </div>
                        <div class="product-description-tab">
                            <!-- Nav tabs -->
                            <ul role="tablist">
                                <li role="presentation" class="active"><a href="#reviews" role="tab" data-toggle="tab">Reviews</a></li>
                                <li role="presentation"><a href="#add-info" role="tab" data-toggle="tab">Additional Information</a></li>
                                <li role="presentation"><a href="#custom-info" role="tab" data-toggle="tab">Custom Tab Info</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="reviews">
                                    <div class="reviews-list">
                                        <!-- Single-Review Start -->
                                        <div class="single-reviews fix">
                                            @foreach($binh_luan_arr as $bl)
                                            <div class="reviews-details">
                                                <div class="reviewer-photo">
                                                    <img src="img/review/1.jpg" alt="" />
                                                </div>
                                                <div class="reviewer-reply">
                                                    <div class="about-reviewer">
                                                        <div class="name-date">
                                                            <h2 class="reviewer-name"><a href="#">{{$bl->user->name}}</a></h2>
                                                            <span class="raply-date">{{ gmdate('d/m/Y H:m:s', strtotime($bl->thoi_diem)+3600*7)}}</span>
                                                        </div>
                                                        <div class="reviewer-rating">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                    </div>
                                                    <p>{{$bl->noi_dung}}</p>
                                                    {{-- <a class="reply" href="#">Reply</a> --}}
                                                </div>
                                            </div>
                                            @endforeach

                                            <!-- Review-Child Start -->
                                            <div class="reviews-details reviews-child">
                                                {{-- <div class="reviewer-photo">
                                                    <img src="img/review/2.jpg" alt="" />
                                                </div> --}}
                                                @if(session('thongbao'))
        <div class="alert alert-success alert-dismissible" id="thongbao">
            {{ session('thongbao') }}
        </div>
    @endif
                                                <form class="border border-success p-3" method="post" action="/luubinhluan">
                                                    <p>
                                                    <textarea class="form-control shadow-none fs-5"
                                                    name="noi_dung" rows="4" placeholder="Mời nhập bình luận"></textarea>
                                                    </p>
                                                    <p class="text-end"> @csrf
                                                      <input type="hidden" name="id_sp" value="{{$sp->id}}">
                                                      <button class="btn btn-success "> Gửi bình luận</button>
                                                    <p>
                                                    </form>


                                            </div>
                                            <!-- Review-Child End -->
                                        </div>
                                        <!-- Single-Review End -->
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="add-info">
                                    <div class="additional-info">
                                        <p>Lorem Ispum is simpy dummy text of the printing and typesetting. Lorm Ispum has been the industry's text ever since. Lorem Ispum is simpy dummy text of the printing and typesetting. Lorm Ispum has been the industry's text ever since. Lorem Ispum is simpy dummy text of the printing and typesetting. Lorm Ispum has been the industry's text ever since. Lorem Ispum is simpy dummy text of the printing and typesetting. Lorm Ispum has been the industry's text ever since.</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="custom-info">
                                    <div class="custom-info">
                                        <p>Lorem Ispum is simpy dummy text of the printing and typesetting. Lorm Ispum has been the industry's text ever since.
                                        Lorem Ispum is simpy dummy text of the printing and typesetting. Lorm Ispum has been the industry's text ever since.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT-AREA END -->
    <!-- FEATURED-PRODUCTS-AREA START -->
    <div class="featured-products-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="area-title title-top-border">
                        <h2>Featured Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-product-carousel navigation-top">
                    <!-- Single-Product Start -->
                    <div class="col-md-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="product-sticker">
                                    <div class="label-new">
                                        <span class="new">New</span>
                                    </div>
                                    <div class="label-parcent">
                                        <span class="parcent">-45%</span>
                                    </div>
                                </div>
                                <a class="pro-image" href="#">
                                    <img class="primary-image" src="img/product/featured/5.jpg" alt="#">
                                    <img class="secondary-image" src="img/product/featured/2.jpg" alt="#">
                                </a>
                                <div class="pro-actions">
                                    <a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i>Add to Cart</a>
                                    <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2 class="product-name">
                                    <a href="#">Women's Dresses</a>
                                </h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$90.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single-Product End -->
                    <!-- Single-Product Start -->
                    <div class="col-md-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="product-sticker">
                                    <div class="label-parcent">
                                        <span class="parcent">Sale</span>
                                    </div>
                                </div>
                                <a class="pro-image" href="#">
                                    <img class="primary-image" src="img/product/featured/2.jpg" alt="#">
                                    <img class="secondary-image" src="img/product/featured/4.jpg" alt="#">
                                </a>
                                <div class="pro-actions">
                                    <a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i>Add to Cart</a>
                                    <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2 class="product-name">
                                    <a href="#">Women's Dresses</a>
                                </h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$90.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single-Product End -->
                    <!-- Single-Product Start -->
                    <div class="col-md-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="product-sticker">
                                    <div class="label-parcent">
                                        <span class="parcent">-55%</span>
                                    </div>
                                </div>
                                <a class="pro-image" href="#">
                                    <img class="primary-image" src="img/product/featured/4.jpg" alt="#">
                                    <img class="secondary-image" src="img/product/featured/1.jpg" alt="#">
                                </a>
                                <div class="pro-actions">
                                    <a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i>Add to Cart</a>
                                    <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2 class="product-name">
                                    <a href="#">Women's Dresses</a>
                                </h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$90.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single-Product End -->
                    <!-- Single-Product Start -->
                    <div class="col-md-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="product-sticker">
                                    <div class="label-new">
                                        <span class="new">New</span>
                                    </div>
                                    <div class="label-parcent">
                                        <span class="parcent">-45%</span>
                                    </div>
                                </div>
                                <a class="pro-image" href="#">
                                    <img class="primary-image" src="img/product/featured/3.jpg" alt="#">
                                    <img class="secondary-image" src="img/product/featured/2.jpg" alt="#">
                                </a>
                                <div class="pro-actions">
                                    <a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i>Add to Cart</a>
                                    <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2 class="product-name">
                                    <a href="#">Women's Dresses</a>
                                </h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$90.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single-Product End -->
                    <!-- Single-Product Start -->
                    <div class="col-md-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="product-sticker">
                                    <div class="label-new">
                                        <span class="new">New</span>
                                    </div>
                                    <div class="label-parcent">
                                        <span class="parcent">-45%</span>
                                    </div>
                                </div>
                                <a class="pro-image" href="#">
                                    <img class="primary-image" src="img/product/featured/5.jpg" alt="#">
                                    <img class="secondary-image" src="img/product/featured/2.jpg" alt="#">
                                </a>
                                <div class="pro-actions">
                                    <a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i>Add to Cart</a>
                                    <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2 class="product-name">
                                    <a href="#">Women's Dresses</a>
                                </h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$90.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single-Product End -->
                    <!-- Single-Product Start -->
                    <div class="col-md-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="product-sticker">
                                    <div class="label-parcent">
                                        <span class="parcent">Sale</span>
                                    </div>
                                </div>
                                <a class="pro-image" href="#">
                                    <img class="primary-image" src="img/product/featured/2.jpg" alt="#">
                                    <img class="secondary-image" src="img/product/featured/4.jpg" alt="#">
                                </a>
                                <div class="pro-actions">
                                    <a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i>Add to Cart</a>
                                    <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2 class="product-name">
                                    <a href="#">Women's Dresses</a>
                                </h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$90.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single-Product End -->
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURED-PRODUCTS-AREA END -->
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
@section('scripts')
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#thongbao').fadeOut('slow');
            }, 3000); // Thời gian tính bằng milisecond (3000ms = 3s)
        });
    </script>
@endsection
