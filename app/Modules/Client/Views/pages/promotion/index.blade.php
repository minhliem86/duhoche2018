@extends("Client::layouts.default")

@section("meta")

@stop

@section('content')
    @include("Client::layouts.banner_general")
    <!-- **************** Promotion ****************-->
    <section class="promotion-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>CHƯƠNG TRÌNH KHUYẾN MÃI</h2>
                </div>
                <div class="col-md-6">
                    <div class="promotion-container">
                        <div class="img-box">
                            <img src="{!! asset('public/assets/frontend') !!}/images/1486453613_dangkysom-slide.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="promotion-box">
                            <h3>PROMOTION<br>UT ALIQUAM IPSUM DORA </h3>
                            <p>Cover each side of the cucumber with one jar of ground beef.</p>
                            <a href="#" class="btn">Đăng Ký</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="promotion-container">
                        <div class="img-box">
                            <img src="{!! asset('public/assets/frontend') !!}/images/1486453613_dangkysom-slide.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="promotion-box">
                            <h3>PROMOTION<br>UT ALIQUAM IPSUM DORA </h3>
                            <p>Cover each side of the cucumber with one jar of ground beef.</p>
                            <a href="#" class="btn">Đăng Ký</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="promotion-container">
                        <div class="img-box">
                            <img src="{!! asset('public/assets/frontend') !!}/images/1486453613_dangkysom-slide.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="promotion-box">
                            <h3>PROMOTION<br>UT ALIQUAM IPSUM DORA </h3>
                            <p>Cover each side of the cucumber with one jar of ground beef.</p>
                            <a href="#" class="btn">Đăng Ký</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="promotion-container">
                        <div class="img-box">
                            <img src="{!! asset('public/assets/frontend') !!}/images/1486453613_dangkysom-slide.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="promotion-box">
                            <h3>PROMOTION<br>UT ALIQUAM IPSUM DORA </h3>
                            <p>Cover each side of the cucumber with one jar of ground beef.</p>
                            <a href="#" class="btn">Đăng Ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="promotion-bar hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="promotion-bottom">
                    <div class="wrap-promo-bottom">
                        <div class="left-promo-inner">
                            <h3>Đăng Ký Sớm</h3>
                            <p>Để nhận ngay ưu đãi lên đến <b>12.500.000đ </b></p>
                        </div>
                        <div class="right-promo-inner">
                            <a href="lien-he.html" class="btn btn-register">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **************** /Promotion ****************-->

    @include("Client::layouts.discover")

    @include("Client::layouts.why")
@stop

@section("script")
    <script defer>
        $(document).ready(function(){
            $('.banner-homepage .tp-banner').revolution({
                delay:5000,
                startwidth:1920,
                startheight:700,
                hideThumbs:10,
                navigationType:'none'
            })
        })
    </script>
@stop