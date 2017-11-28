@extends("Client::layouts.default")

@section("meta")
    <meta name="keywords" content="ILA Du Học, Hè 2018, Chia sẻ những trải nghiệm du học hè">
    <meta name="description" content="Chia sẻ những trải nghiệm du học hè không thể nào quên của học viên tham gia ILA Du học hè 2017">
@stop

@section("title", "ILA Du Học Hè 2018 - Trải Nghiệm Du Học Hè")

@section('content')
    <!-- **************** Testtimonial ****************-->
    <section class="testtimonial">
        <div class="container">
            <div class="row">
                <div class="inner-section">
                    <div class="container-fluid">
                        <div class="row">

                            @if(!$testimonial->isEmpty())
                                @if(!$mobile_detect->isMobile())
                                    <div class="wrap-top-testimonial clearfix">
                                        <div class="col-xs-12 col-sm-8 testimonial-slide-same-height">
                                            <div class="row testtimanial-slider">
                                                <div class="wrap-slider-landscape">
                                                    <div class="swiper-container testimonial-slider-hori">
                                                        <div class="swiper-wrapper">
                                                            @foreach($testimonial as $item_testimonial)
                                                            <div class="swiper-slide">
                                                                <div class="each-wrap-landscape">
                                                                    <img src="{!!asset($item_testimonial->img_url) !!}" class="img-responisve" alt="{!! $item_testimonial->author !!}">
                                                                    <div class="testtimanial-slider-item">
                                                                        <h4>{!! $item_testimonial->author !!}</h4>
                                                                        <blockquote>{!! Str::words($item_testimonial->description, 40) !!}</blockquote>
                                                                        <a href="{!! route('testimonial.detail', $item_testimonial->slug ) !!}" class="btn btn-readmore">XEM THÊM</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        <!--Add Pagination -->
                                                        <div class="swiper-pagination"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- testimonial-slider-ver -->
                                        <div class="col-xs-12 col-sm-4 clearfix fullheight ">
                                            <div class="testimonial-list fullheight">
                                                <h4 class="title-testi">CHIA SẺ TRẢI NGHIỆM DU HỌC HÈ</h4>
                                                <div class="testtimanial-avartar-slider">
                                                    <div class="swiper-container testimonial-slider-ver">
                                                        <div class="swiper-wrapper">
                                                            @foreach($testimonial as $item_testimonial_thumb)
                                                            <div class="swiper-slide">
                                                                <div class="testtimonial-list-item ">
                                                                    <img src="{!!asset($item_testimonial_thumb->img_avatar) !!}" class="img-circle img-avatar" width="80" height="80" alt="{!! $item_testimonial_thumb->author !!}">
                                                                    <div class="wrap-content-slide-v">
                                                                        <h4>{!! $item_testimonial_thumb->author !!}</h4>
                                                                        <p>{!! Str::words($item_testimonial_thumb->description, 25) !!}</p>
                                                                        <a href="{!! route('testimonial.detail', $item_testimonial_thumb->slug) !!}" class="btn btn-readmore">XEM THÊM</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Add Pagination -->
                                                <div class="swiper-pagination-ver swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="wrap-mobile-type clearfix ">
                                        <div class="col-xs-12 col-sm-12 ">
                                            <div class="wrap-title-page-testi">
                                                <h4 class="title-testi">CHIA SẺ TRẢI NGHIỆM DU HỌC HÈ</h4>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 ">
                                            @foreach($testimonial as $item_testimonial)
                                            <div class="wrap-each-testi-mobile">
                                                <a href="{!! route('testimonial.detail', $item_testimonial->slug) !!}"><img src="{!!asset($item_testimonial->img_url) !!}" class="img-responsive" alt="{!! $item_testimonial->author !!}"></a>
                                                <div class="testtimanial-slider-item">
                                                    <h4><span>{!! $item_testimonial->author !!}</span><a href="trai-nghiem-du-hoc/minh-thanh-minh-tam-du-hoc-he-2016.html" class="xemthem">Đọc thêm</a></h4>
                                                    <a href="{!! route('testimonial.detail', $item_testimonial->slug) !!}"><blockquote>{!! Str::words($item_testimonial->description, 30) !!}</blockquote></a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **************** /Testtimonial ****************-->

    <!--REVIEW 2017-->
    <section class="review bg-yellow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>ĐIỂM LẠI DU HỌC HÈ 2017</h2>
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

    @include("Client::layouts.why")
@stop

@section("script")
    <link rel="stylesheet" href="{!! asset('public/assets/frontend') !!}/js/video/plyr.css">
    <script src="{!! asset('public/assets/frontend') !!}/js/video/plyr.js"></script>
    <script defer>
        $(document).ready(function(){
            $('.banner-homepage .tp-banner').revolution({
                delay:5000,
                startwidth:1920,
                startheight:700,
                hideThumbs:10,
                navigationType:'none'
            })

            var mySwiper = new Swiper ('.testimonial-slider-ver', {
                // Optional parameters
                direction: 'vertical',
                slidesPerView: 3,
                height: 440,
                pagination: '.swiper-pagination-ver',
                autoplay: 3000,
                speed: 1000,
                preventClicks: false,
                paginationClickable: true,
                breakpoints:{
                    480: {
                        slidesPerView: 2
                    }
                }
                // pagination: '.swiper-pagination',
            });
            var SwiperTestiHori = new Swiper ('.testimonial-slider-hori', {
                // Optional parameters
                slidesPerView: 1,
                autoplay: 3000,
                speed: 1000,
                pagination: '.swiper-pagination',
                spaceBetween: 5,
                autoplay: false,
                autoplayDisableOnInteraction: false,
                preventClicks: false,
                paginationClickable: true,
            });

            mySwiper.params.control = SwiperTestiHori;
            SwiperTestiHori.params.control = mySwiper;
        })
    </script>
    <script>
        $(document).ready(function(){
            /*INITIAL VIDEO*/
            plyr.setup();
        })
    </script>
@stop