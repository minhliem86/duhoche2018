@extends("Client::layouts.default")

@section("meta")
    <meta name="keywords" content="ILA Du Học, Hè 2018, Chia sẻ những trải nghiệm du học hè">
    <meta name="description" content="Chia sẻ những trải nghiệm du học hè không thể nào quên của học viên {!! $testmonial_detail->author !!}">
@stop

@section("title")
    Trải Nghiệm Du Học Hè - {!! $testmonial_detail->author !!}
@stop

@section("content")
    @include('Client::layouts.banner_general')

    <section class="testimonial-detail">
        <div class="container">
            <div class="row">
                <div class="inner-section testtimonial testtimonial-detail">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="wrap-title-page-testi">
                                    <h4 class="title-testi">CHIA SẺ TRẢI NGHIỆM DU HỌC HÈ</h4>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-8">
                                <div class="wrap-content-testimonial">
                                    <div class="testimonial-img-box">
                                        <img src="{!! asset($testmonial_detail->img_url) !!}" class="img-responsive" alt="{!! $testmonial_detail->author !!}">
                                    </div>
                                    <div class="authorsign visible-xs visible-sm">
                                        <p style="margin:10px 0 0;"><b>{!! $testmonial_detail->author !!}</b></p>
                                    </div>
                                    <div class="box-text">
                                        {!! $testmonial_detail->description !!}
                                    </div>
                                    <div class="authorsign text-right hidden-xs hidden-sm">
                                        <p><b>{!! $testmonial_detail->author !!}</b></p>
                                    </div>
                                    <div>
                                        <p class="text-bold recommend">Các chương trình du học hấp dẫn</p>
                                        <ul class="list-duhoc">
                                            @if(!$random_country->isEmpty())
                                                @foreach($random_country as $item_country)
                                                <li><a href="{!! route('country.course',[$item_country->countries->slug, $item_country->slug]) !!}">{!! $item_country->title !!}</a></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div> <!-- end wrap-content-testimonial -->
                            </div>
                            <div class="col-xs-12 col-md-4 hidden-sm hidden-xs">
                                @if(!$testimonial->isEmpty())
                                <div class="testtimanial-avartar-slider">
                                    <div class="swiper-container testidetial-swiper">
                                        <div class="swiper-wrapper">
                                            @foreach($testimonial as $item_testi)
                                            <div class="swiper-slide">
                                                <div class="testtimonial-list-item clearfix">
                                                    <div class="col-xs-12 col-sm-4 col-md-3 nopadding">
                                                        <img src="{!! asset($item_testi->img_avatar) !!}" class="img-circle" width="80" height="80" alt="{!! $item_testi->author !!}">
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 col-md-9">
                                                        <div class="testi-list-content">
                                                            <h4>{!! $item_testi->author !!}</h4>
                                                            <p>{!! Str::words($item_testi->description,25) !!}</p>
                                                            <a href="{!! route('testimonial.detail', $item_testi->slug) !!}" class="btn-readmore btn">XEM THÊM</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!--Add Pagination -->
                                    <div class="swiper-pagination swiper-pagination-testidetail"></div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **************** /Testtimonial ****************-->
    <!-- **************** Promotion ****************-->
    <section class="promotion-bar hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="promotion-bottom">
                    <div class="wrap-promo-bottom">
                        <div class="left-promo-inner">
                            <h3>Đăng Ký Sớm</h3>
                            <p>Để nhận ngay ưu đãi</p>
                        </div>
                        <div class="right-promo-inner">
                            <a href="http://ila-duhoc.edu.vn/duhoche2018/dang-ky?utm_campaign=OSC+Summer+2018&utm_medium=statis&utm_source=Organic" class="btn btn-register">Đăng ký Ngay</a>
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