@extends('layout')
@section('tieuDe', 'liên hệ')
@section('conten')


 <!-- Page-Banner-AREA START -->
 <section class="page-banner-area">
    <div class="col-xs-12">
        <div class="page-banner-brief">
            <h2>Liên Hệ</h2>
            <nav>
                <ul>
                    <li><a href="/">Trang Chủ</a></li>
                    <li class="active"><a href="/lienhe">Liên Hệ</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- Page-Banner-AREA END -->
<section class="content">
    <!-- CONTACT-AREA START -->
    <div class="contact-area margin-70">
        <!-- Contact-Address Start -->
        <div class="contact-address">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!-- Single-Contact Start -->
                        <div class="single-contact">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="contact-photo">
                                        <a href="#"><img src="/assets/img/contact/1.jpg" alt="#" /></a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="contact-brief">
                                        <h2 class="title-3">Hà Nội</h2>
                                        <ul>
                                            <li>
                                                <i class="pe-7s-map-marker"></i>
                                                <span>Đống Đa, Hà Nội </span>
                                                <span>162 - 164 Thái Hà</span>
                                            </li>
                                            <li>
                                                <i class="pe-7s-call"></i>
                                                <span>(123) 123.456.7890</span>
                                                <span>(123) 123.456.789</span>
                                            </li>
                                            <li>
                                                <i class="pe-7s-mail-open"></i>
                                                <span>thunnminn155@gmail.com.com</span>
                                                <span>60fashion@gmail.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single-Contact End -->
                        <!-- Single-Contact Start -->
                        <div class="single-contact">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="contact-brief contact-brief-2">
                                        <h2 class="title-3">Sài Gòn</h2>
                                        <ul>
                                            <li>
                                                <i class="pe-7s-map-marker"></i>
                                                <span>Quận 9, Thủ Đức </span>
                                                <span>190 Lê Văn Việt</span>
                                            </li>
                                            <li>
                                                <i class="pe-7s-call"></i>
                                                <span>(123) 123.456.7890</span>
                                                <span>(123) 123.456.789</span>
                                            </li>
                                            <li>
                                                <i class="pe-7s-mail-open"></i>
                                                <span>thunnminn155@gmail.com.com</span>
                                                <span>69fahion@gmail.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="contact-photo">
                                        <a href="#"><img src="/assets/img/contact/2.jpg" alt="#" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single-Contact End -->
                        <!-- Single-Contact Start -->
                        <div class="single-contact">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="contact-photo">
                                        <a href="#"><img src="/assets/img/contact/3.jpg" alt="#" /></a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="contact-brief">
                                        <h2 class="title-3">Long An </h2>
                                        <ul>
                                            <li>
                                                <i class="pe-7s-map-marker"></i>
                                                <span>Long An, Cần Giuộc </span>
                                                <span>Nguyễn Thị Bảy</span>
                                            </li>
                                            <li>
                                                <i class="pe-7s-call"></i>
                                                <span>(123) 123.456.7890</span>
                                                <span>(123) 123.456.789</span>
                                            </li>
                                            <li>
                                                <i class="pe-7s-mail-open"></i>
                                                <span>thunnminn155@gmail.com</span>
                                                <span>69fashiono@gmail.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single-Contact End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-Address End -->
        <!-- Contact-Map-Message-Box -->
        <div class="google-map-message-box">
            <div class="col-sm-6 col-xs-12 no-padding">
                <!-- Start Map area -->
                <div class="map-area">
                    <div id="googleMap" style="width:100%;height:500px;"></div>
                </div>
                <!-- End Map area -->
            </div>
            <div class="col-sm-6 col-xs-12 no-padding">
                <div class="message-box">
                    <h2 class="title-3">Gửi liên hệ</h2>
                    @if (session('thongbao'))
                    <div class="alert alert-success">
                        {{ session('thongbao') }}
                    </div>
                @endif
                    <form method="post" action="/guilienhe">
                        @csrf
                        <input class="message-form" type="text" name="name" placeholder="tên" />
                        <input class="message-form" type="text" name="email" placeholder="Email" />
                        <input class="message-form" type="text" name="td" placeholder="Tiêu đề " />
                        <textarea class="message-form" name="nd" placeholder="Nội dung"></textarea>
                        <input type="submit" class="custom-submit-2" value="Gửi" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT-AREA END -->
    <!-- BRANDS-LOGO-AREA START -->
    <div class="brands-logo-area contact-page">
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
                </div>
            </div>
        </div>
    </div>
    <!-- BRANDS-LOGO-AREA END -->
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>

<script>
    function initialize() {
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(23.81033, 90.41252)
        };

        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);

        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation:google.maps.Animation.BOUNCE,
            icon: 'img/map-marker.png',
            map: map
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection
