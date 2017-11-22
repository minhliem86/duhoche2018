@extends("Client::layouts.default")

@section("meta")

@stop

@section("content")
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
                                    <div class="each-welcome each">
                                        <img src="{!!asset('public/assets/frontend') !!}/images/layouts/170x170.png" class="img-responsive img-inner-section" alt="">
                                        <p class="title title-inner-section">Mở rộng tầm nhìn</p>
                                    </div>
                                </div>
                                <div class="col-md-15">
                                    <div class="each-welcome each">
                                        <img src="{!!asset('public/assets/frontend') !!}/images/layouts/170x170.png" class="img-responsive img-inner-section" alt="">
                                        <p class="title title-inner-section">Mở rộng tầm nhìn</p>
                                    </div>
                                </div>
                                <div class="col-md-15">
                                    <div class="each-welcome each">
                                        <img src="{!!asset('public/assets/frontend') !!}/images/layouts/170x170.png" class="img-responsive img-inner-section" alt="">
                                        <p class="title title-inner-section">Mở rộng tầm nhìn</p>
                                    </div>
                                </div>
                                <div class="col-md-15">
                                    <div class="each-welcome each">
                                        <img src="{!!asset('public/assets/frontend') !!}/images/layouts/170x170.png" class="img-responsive img-inner-section" alt="">
                                        <p class="title title-inner-section">Mở rộng tầm nhìn</p>
                                    </div>
                                </div>
                                <div class="col-md-15">
                                    <div class="each-welcome each">
                                        <img src="{!!asset('public/assets/frontend') !!}/images/layouts/170x170.png" class="img-responsive img-inner-section" alt="">
                                        <p class="title title-inner-section">Mở rộng tầm nhìn</p>
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
                    <h2>ĐIỂM LẠI DU HỌC HÈ 2017</h2>
                    <div class="review-container">
                        <div class="video-wrapper">

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
                                            <div class="each-promotion each">
                                                <img src="{!! asset($item_promotion->img_url) !!}" class="img-responsive img-inner-section" alt="{!! $item_promotion->title !!}">
                                                <p class="title title-inner-section">
                                                    {!! $item_promotion->title !!}</span>
                                                </p>
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
                                            <div class="each-testi each">
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
    <script>
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