@extends('layout')
@section('tieuDe', 'Doanh Mục')
@section('conten')
<section class="page-banner-area">
    <div class="col-xs-12">
        <div class="page-banner-brief">
            <h2>Contact</h2>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active"><a href="/lienhe">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<div class="featured-products-area mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="area-title title-top-border">
                    <h2>Sản Phẩm {{ $ten_loai }}</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($sptrongloai_arr as $sp)
                    <div class="col-md-4 mb-4">
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
                                    <a class="action-btn action-btn-1" href="/addcart/{{$sp->id}}">
                                        <i class="pe-7s-cart"></i><span>Thêm vào giỏ</span>
                                    </a>
                                    <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare">
                                        <i class="pe-7s-repeat"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2 class="product-name">
                                    <a href="/sp/{{$sp->id}}">{{$sp->ten_sp}}</a>
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

                    </div>
                @endforeach
            </div>
            <!-- Hiển thị phân trang -->
            <div class="d-flex justify-content-center">
                {{ $sptrongloai_arr->links() }}
            </div>

        </div>
    </div>
</div>
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
@endsection
