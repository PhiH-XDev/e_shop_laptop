@extends('layout')
@section('tieuDe','danh muc')
@section('conten')
@foreach ($datab as $category)

<section id="billboard" class="position-relative overflow-hidden bg-light-blue">
    <div class="swiper main-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h1 class="display-2 text-uppercase text-dark pb-5">Your Products Are Great.</h1>
                                <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop
                                    Product</a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="image-holder">
                                <img src="{{ asset('assets/img/banner-image.png') }}" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-wrap align-items-center">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h1 class="display-2 text-uppercase text-dark pb-5">Technology Hack You Won't Get</h1>
                                <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop
                                    Product</a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="image-holder">
                                <img src="{{ asset('assets/img/banner-image.png') }}" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-icon swiper-arrow swiper-arrow-prev">
        <svg class="chevron-left w-25 h-25">
            <use xlink:href="#chevron-left" />
        </svg>
    </div>
    <div class="swiper-icon swiper-arrow swiper-arrow-next">
        <svg class="chevron-right w-25 h-25">
            <use xlink:href="#chevron-right" />
        </svg>
    </div>
</section>

<div class="container my-5">
    @foreach ($datab as $item)
    <h1>Danh Mục {{$item->name}}</h1>
    @endforeach

    <div class="row">
        @foreach ($data as $item)
        <div class="col-md-3">
            <div class="card h-100">
                <img src="{{ asset('assets/img/' . $item->img) }}" class="card-img-top" >
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    {{-- <p class="card-text flex-grow-1">
                        {{ \Illuminate\Support\Str::limit($item->tomTat, 100) }}
                    </p> --}}
                    <a href="{{ url('/ct/'.$item->id) }}" class="btn btn-primary mt-auto">xem ngay</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endforeach
@endsection
