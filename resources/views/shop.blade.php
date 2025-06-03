

@extends('layout')
@section('tieuDe', 'Shop')
@section('conten')


 <section class="page-banner-area style-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-banner-brief">
                    <h2>Sản Phẩm</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page-Banner-AREA END -->
<section class="content shop-page">
    <!-- PRODUCT-BANNER-AREA START -->
    <div class="product-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="product-banner">
                        <a class="banner-photo" href="#"><img src="/assets/img/banner/1.jpg" alt="#" /></a>
                        <div class="banner-brief">
                            <h2>asus</h2>
                            <a href="#" class="shop-now">mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="product-banner banner-2">
                        <a class="banner-photo" href="#"><img src="/assets/img/banner/2.jpg" alt="#" /></a>
                        <div class="banner-brief">
                            <h2>MSI</h2>
                            <p>Winter Collection</p>
                            <a href="#" class="shop-now">mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT-BANNER-AREA END -->
    <!-- SHOP-CATEGROY-MENU START -->
    <div class="shop-category-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shop-menu">
                        <nav>
                            <ul>
                                @foreach ($loai_arr as $lt)
                                <li><a href="/loai/{{$lt->id}}">{{ $lt->ten_loai }}</a></li>
                            @endforeach

                                {{-- <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Bag & Purses</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Jacket</a></li>
                                <li><a href="#">Sport</a></li>
                                <li><a href="#">Jewelry</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP-CATEGROY-MENU END -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="widget-area">
                    <h2 class="filter-title-1">Filter By</h2>
                    <aside class="widget shop-filter">
                        <h2 class="filter-title-2">filter by price</h2>
                        <div class="price_filter">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                <input type="submit"  value="Price:"/>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget color">
                        <h2 class="filter-title-2">filter by Color</h2>
                        <ul class="sidebar-menu">
                            <li class="active"><a href="#"><span class="color-name">red</span><span class="number">25</span></a></li>
                            <li><a href="#"><span class="color-name">green</span><span class="number">25</span></a></li>
                            <li><a href="#"><span class="color-name">Yallow</span><span class="number">25</span></a></li>
                            <li><a href="#"><span class="color-name">Magenta</span><span class="number">25</span></a></li>
                            <li><a href="#"><span class="color-name">Black</span><span class="number">25</span></a></li>
                        </ul>
                    </aside>
                    <aside class="widget size">
                        <h2 class="filter-title-2">filter by Size</h2>
                        <ul>
                            <li class="active"><a href="#">All Size</a></li>
                            <li><a href="#">XL</a></li>
                            <li><a href="#">SSL</a></li>
                            <li><a href="#">SL</a></li>
                            <li><a href="#">m</a></li>
                            <li><a href="#">s</a></li>
                            <li><a href="#">L</a></li>
                        </ul>
                    </aside>
                </div>
                {{-- <div class="widget-area">
                    <h2 class="filter-title-1">popular tags</h2>
                    <aside class="widget popular-tag">
                        <nav>
                            <ul class="single-tag-list">
                                <li class="active"><a href="#">Clothes</a></li>
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Bag</a></li>
                                <li><a href="#">Purses</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Jacket</a></li>
                            </ul>
                        </nav>
                        <nav>
                            <ul class="single-tag-list">
                                <li><a href="#">Sport</a></li>
                                <li><a href="#">Jewelry</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Belt</a></li>
                                <li><a href="#">Cap</a></li>
                                <li><a href="#">Beautiful</a></li>
                            </ul>
                        </nav>
                    </aside>
                </div> --}}
            </div>
            <div class="col-md-9 col-sm-12">
                <!-- FEATURED-PRODUCTS-AREA START -->
                <div class="featured-products-area">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter-menu">
                                <div class="short">
                                    {{-- <select id="selLoai" class="py-1 px-3 shadow-none" onchange="locsp(this.value)" >




                                    </select> --}}

                                    <label >
                                        <span><i class="fa fa-sort-amount-desc"></i></span>
                                        sắp Xếp theo Danh mục :
                                    </label>

                                    <select id="selLoai" class="py-1 px-3 shadow-none" onchange="locsp(this.value)">
                                        <option value="-1">Lọc theo NSX</option>
                                        @foreach ($loai_arr as $loai)
                                        <option value="{{$loai->id}}" {{$loai->id == $id_loai? "selected":""}} >
                                            {{$loai->ten_loai}}
                                        </option>
                                        @endforeach
                                        {{-- <option>Name (A - Z)</option>
                                        <option>Name (Z - A)</option>
                                        <option>Model (Z - A)</option>
                                        <option>Model (A - Z)</option> --}}
                                    </select>
                                     <script>
                                        function locsp(id_loai) {
                                            document.location=`/shop?id_loai=${id_loai}`;
                                        }
                                        </script>
                                </div>
                                <div class="limit">
                                    <label>Show :</label>
                                    <select>
                                        <option>09</option>
                                        <option>15</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>40</option>
                                    </select>
                                </div>
                                <div class="tab-menu">
                                    <nav>
                                        <ul role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#display-1-1" role="tab" data-toggle="tab" title="Grid View"><i class="fa fa-th"></i></a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#display-1-2" role="tab" data-toggle="tab" title="List View"><i class="fa fa-bars"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="shop-pagination">
                                    <nav>
                                        <ul>
                                            {{-- Hiển thị nút "Quay lại" --}}
                                            @if ($sanpham_arr->onFirstPage())
                                                <li class="disabled"><span><i class="fa fa-caret-left"></i></span></li>
                                            @else
                                                <li><a href="{{ $sanpham_arr->previousPageUrl() }}"><i class="fa fa-caret-left"></i></a></li>
                                            @endif

                                            {{-- Hiển thị các trang --}}
                                            @foreach ($sanpham_arr->getUrlRange(1, $sanpham_arr->lastPage()) as $page => $url)
                                                <li class="{{ $sanpham_arr->currentPage() == $page ? 'active' : '' }}"><a href="{{ $url }}">{{ $page }}</a></li>
                                            @endforeach

                                            {{-- Hiển thị nút "Tiếp theo" --}}
                                            @if ($sanpham_arr->hasMorePages())
                                                <li><a href="{{ $sanpham_arr->nextPageUrl() }}"><i class="fa fa-caret-right"></i></a></li>
                                            @else
                                                <li class="disabled"><span><i class="fa fa-caret-right"></i></span></li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                            <div class="row">
                                @foreach ($sanpham_arr as $item)
                                <div class="col-sm-4 col-xs-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <div class="product-sticker">
                                                <div class="label-new">
                                                    <span class="new">New</span>
                                                </div>
                                                <div class="label-parcent">
                                                    <span class="parcent">- 45%</span>
                                                </div>
                                            </div>
                                            <a class="pro-image" href="#">
                                                <img class="primary-image" src="{{ $item->hinh }}" alt="Primary Image" style="height:175px">
                                                <img class="secondary-image" src="img/product/featured/2.jpg" alt="Secondary Image"  style="height:175px">
                                            </a>
                                            <div class="pro-actions">
                                                <a class="action-btn action-btn-1" href="/addcart/{{ $item->id }}"><i class="pe-7s-cart"></i>Add to Cart</a>
                                                <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"  style="height:45px">
                                                <a href="/sp/{{ $item->id }}">{{ $item->ten_sp }}</a>
                                            </h2>
                                            <div class="pro-rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">{{ number_format($item->gia, 0, ',', '.') }} VNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="display-1-2">
                            <div class="row">
                                <div class="listview">
                                    @foreach ($sanpham_arr as $item)
                                    <div class="single-product">
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="product-img">
                                                <div class="product-sticker">
                                                    <div class="label-new">
                                                        <span class="new">New</span>
                                                    </div>
                                                    <div class="label-parcent">
                                                        <span class="parcent">- 55%</span>
                                                    </div>
                                                </div>
                                                <a class="pro-image" href="#">
                                                    <img class="primary-image" src="{{ $item->hinh }}" alt="Primary Image">
                                                    <img class="secondary-image" src="img/product/featured/2.jpg" alt="Secondary Image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-xs-12">
                                            <div class="product-content">
                                                <h2 class="product-name">
                                                    <a href="/sp/{{ $item->id }}">{{ $item->ten_sp }}</a>
                                                </h2>
                                                <div class="rating-review">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <a class="reviews" href="#">6 Reviews</a>
                                                    <a class="add-review" href="#">Add Your Review</a>
                                                </div>
                                                <div class="stock">
                                                    <a href="#">In Stock</a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="old-price">{{ number_format($item->gia_km, 0, ',', '.') }} VNĐ</span>
                                                    <span class="new-price">{{ number_format($item->gia, 0, ',', '.') }} VNĐ</span>
                                                </div>
                                                <div class="description">
                                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices Curae...</p>
                                                </div>
                                                <div class="pro-actions">
                                                    <a class="action-btn action-btn-1" href="/addcart/{{ $item->id }}"><i class="pe-7s-cart"></i>Add to Cart</a>
                                                    <a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                    <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare"><i class="pe-7s-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- FEATURED-PRODUCTS-AREA END -->
            </div>
        </div>
    </div>
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
