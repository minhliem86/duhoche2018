@extends("Client::layouts.default")

@section("meta")

@stop

@section("content")
    <div id="preloader">
        <div class="sgv-container">
            <div id="my-logo"></div>
            <p id="loading-img">
                <img src="{!!asset('public') !!}/assets/frontend/images/gif-load.gif" alt="Loading">
            </p>
            <script>
                if(!Cookies.get('firsttime')){
                    renderSVG("my-logo","loading-img");
                    HidePreLoader("preloader");
                    Cookies.set("firsttime",1,{expires: 3600});
                }else{
                    $("#preloader").remove();
                }
            </script>
        </div>
    </div>
    @include("Client::layouts.banner_general")
    <!-- **************** Wellcome ****************-->
    <section class="wellcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>CHÀO MỪNG ĐẾN VỚI<span> CHƯƠNG TRÌNH DU HỌC HÈ 2018</span></h2>
                    <div class="welcome-container">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-15">
                                    <div class="each-welcome each animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.2s">
                                        <div class="img-shadow-container" >
                                            <span class="img-load" style="background-image:url({!!asset('public/assets/frontend') !!}/images/keypoint/morongtamnhin.png)"></span>
                                        </div>
                                        <p class="title title-inner-section">MỞ RỘNG TẦM NHÌN <span>RA THẾ GIỚI</span></p>
                                    </div>
                                </div>
                                <div class="col-md-15">
                                    <div class="each-welcome each animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.3s">
                                        <div class="img-shadow-container" >
                                            <span class="img-load" style="background-image:url({!!asset('public/assets/frontend') !!}/images/keypoint/renluyen.png)"></span>
                                        </div>
                                        <p class="title title-inner-section">RÈN LUYỆN TÍNH TỰ LẬP</p>
                                    </div>
                                </div>
                                <div class="col-md-15">
                                    <div class="each-welcome each animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
                                        <div class="img-shadow-container" >
                                            <span class="img-load" style="background-image:url({!!asset('public/assets/frontend') !!}/images/keypoint/gapgo-giaoluu.png)"></span>
                                        </div>
                                        <p class="title title-inner-section">GẶP GỠ VÀ GIAO LƯU <span>BẠN BÈ QUỐC TẾ</span></p>
                                    </div>
                                </div>
                                <div class="col-md-15">
                                    <div class="each-welcome each animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.4s">
                                        <div class="img-shadow-container" >
                                            <span class="img-load" style="background-image:url({!!asset('public/assets/frontend') !!}/images/keypoint/thunghiem.png)"></span>
                                        </div>
                                        <p class="title title-inner-section">THỬ NGHIỆM HÀNH TRÌNH DU HỌC</p>
                                    </div>
                                </div>
                                <div class="col-md-15">
                                    <div class="each-welcome each animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.5s">
                                        <div class="img-shadow-container" >
                                            <span class="img-load" style="background-image:url({!!asset('public/assets/frontend') !!}/images/keypoint/trainghiem.png)"></span>
                                        </div>
                                        <p class="title title-inner-section">TRẢI NGHIỆM THỰC TẾ <span>CUỘC SỐNG TẠI NHÀ BẢN XỨ HOẶC KÝ TÚC XÁ</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **************** /Wellcome ****************-->
    <!--REVIEW 2017-->
    <section class="review bg-yellow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="animate" data-animate="fadeInUp">ĐIỂM LẠI DU HỌC HÈ 2017</h2>
                    <div class="review-container">
                        <div class="video-wrapper">
                            <div data-type="youtube" data-video-id="gHSbes0tXaQ"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END-->
    @include("Client::layouts.discover")

    <!--PROMOTION-->
    <section class="pro-test bg-yellow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="promotion-container">
                        <h2>CHƯƠNG TRÌNH KHUYẾN MÃI</h2>
                        <div class="promotion-content">
                            <div class="container-fluid">
                                <div class="row">
                                    @if(!$promotion->isEmpty())
                                        @foreach($promotion as $item_promotion)
                                        <div class="col-sm-3">
                                            <div class="each-promotion each animate" data-animate="fadeInUp" data-duration="1.0s" >
                                                <a href="{!! route('khuyenmai') !!}">
                                                    <div class="img-shadow-container white-shadow" >
                                                        <span class="img-load" style="background-image:url({!! asset($item_promotion->img_homepage) !!})"></span>
                                                    </div>
                                                    <p class="title title-inner-section">
                                                        {!! $item_promotion->title !!}</span>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END-->

    <!--TESTIMONIAL-->
    <section class="testi">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-container">
                        <h2>CHIA SẺ TRẢI NGHIỆM DU HỌC HÈ</h2>
                        <div class="testi-content">
                            <div class="container-fluid">
                                <div class="row">
                                    @if(!$testimonial->isEmpty())
                                        @foreach($testimonial as $item_testimonial)
                                        <div class="col-sm-6">
                                            <div class="each-testi each animate" data-animate="zoomIn">
                                                <img src="{!!asset($item_testimonial->img_url) !!}" class="img-responsive img-inner-section" alt="{!! $item_testimonial->author !!}">
                                                <div class="content">
                                                    <h4 class="author">{!! $item_testimonial->author !!}</h4>
                                                    <p class="desc">{!! $item_testimonial->description !!}</p>
                                                    <a href="#" class="btn btn-yl">Đọc thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END-->

    @include("Client::layouts.why")
@stop

@section("script")
    <link rel="stylesheet" href="{!! asset('public/assets/frontend') !!}/js/video/plyr.css">
    <script src="{!! asset('public/assets/frontend') !!}/js/video/plyr.js"></script>
    <script>
        $(document).ready(function(){
            $('.banner-homepage .tp-banner').revolution({
                delay:5000,
                startwidth:1920,
                startheight:700,
                hideThumbs:10,
                navigationType:'none'
            })

            /*INITIAL VIDEO*/
            plyr.setup();
        })
    </script>
@stop