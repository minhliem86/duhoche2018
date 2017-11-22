@extends("Client::layouts.default")

@section("meta")

@stop

@section('content')

    <!-- **************** Testtimonial ****************-->
    <section class="testtimonial">
        <div class="container">
            <div class="row">
                <div class="inner-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="wrap-top-testimonial clearfix hidden-xs hidden-sm">
                                <div class="col-xs-12 col-sm-8 testimonial-slide-same-height">
                                    <div class="row testtimanial-slider">
                                        <div class="wrap-slider-landscape">
                                            <div class="swiper-container testimonial-slider-hori">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="each-wrap-landscape">
                                                            <img src="{!!asset('public/assets/frontend') !!}/images/1486103337_thieny-canh.jpg" class="img-responisve" alt="">
                                                            <div class="col-xs-11 col-sm-10 col-md-6 testtimanial-slider-item">
                                                                <h4>Minh Thanh & Minh Tâm</h4>
                                                                <blockquote>“Con tôi học tiếng Anh tại ILA đã được 7 năm, từ khi cho con theo học tại đây, tôi nhận thấy các con không còn nhút nhát như xưa...</blockquote>
                                                                <a href="trai-nghiem-du-hoc/minh-thanh-minh-tam-du-hoc-he-2016.html" class="btn btn-readmore">XEM THÊM</a>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <div class="swiper-slide">
                                                        <div class="testtimonial-list-item ">
                                                            <img src="{!!asset('public/assets/frontend') !!}/images/1484822730_thieny.jpg" class="img-circle img-avatar" width="80" height="80" alt="Minh Thanh & Minh Tâm">
                                                            <div class="wrap-content-slide-v">
                                                                <h4>Minh Thanh & Minh Tâm</h4>
                                                                <p>“Con tôi học tiếng Anh tại ILA đã được 7 năm, từ khi cho con theo học tại đây,...</p>
                                                                <a href="trai-nghiem-du-hoc/minh-thanh-minh-tam-du-hoc-he-2016.html" class="btn btn-readmore">XEM THÊM</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Add Pagination -->
                                        <div class="swiper-pagination-ver swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-mobile-type clearfix visible-sm visible-xs">
                                <div class="col-xs-12 col-sm-12 ">
                                    <div class="wrap-title-page-testi">
                                        <h4 class="title-testi">CHIA SẺ TRẢI NGHIỆM DU HỌC HÈ</h4>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 ">

                                    <div class="wrap-each-testi-mobile">
                                        <a href="trai-nghiem-du-hoc/minh-thanh-minh-tam-du-hoc-he-2016.html"><img src="{!!asset('public/assets/frontend') !!}/images//1486114476_minhtam-canh.jpg" class="img-responsive" alt=""></a>
                                        <div class="testtimanial-slider-item">
                                            <h4><span>Minh Thanh & Minh Tâm</span><a href="trai-nghiem-du-hoc/minh-thanh-minh-tam-du-hoc-he-2016.html" class="xemthem">Đọc thêm</a></h4>
                                            <a href="trai-nghiem-du-hoc/minh-thanh-minh-tam-du-hoc-he-2016.html"><blockquote>“Con tôi học tiếng Anh tại ILA đã được 7 năm, từ khi cho con theo học tại đây, tôi nhận thấy các con không...</blockquote></a>
                                        </div>
                                    </div>


                                    <div class="wrap-each-testi-mobile">
                                        <a href="trai-nghiem-du-hoc/ly-nguyen-thien-y-du-hoc-he-2016.html"><img src="{!!asset('public/assets/frontend') !!}/images//1486103337_thieny-canh.jpg" class="img-responsive" alt=""></a>
                                        <div class="testtimanial-slider-item">
                                            <h4><span>Lý Nguyễn Thiên Y</span><a href="trai-nghiem-du-hoc/ly-nguyen-thien-y-du-hoc-he-2016.html" class="xemthem">Đọc thêm</a></h4>
                                            <a href="trai-nghiem-du-hoc/ly-nguyen-thien-y-du-hoc-he-2016.html"><blockquote>Qua chuyến đi du học hè Mĩ - Canada, con đã được học rất nhiều điều mới lạ, con được quen rất nhiều bạn mới...</blockquote></a>
                                        </div>
                                    </div>


                                    <div class="wrap-each-testi-mobile">
                                        <a href="trai-nghiem-du-hoc/phuc-khang-du-hoc-he-2016.html"><img src="{!!asset('public/assets/frontend') !!}/images//1486103378_PhucKhang-canh.jpg" class="img-responsive" alt=""></a>
                                        <div class="testtimanial-slider-item">
                                            <h4><span>Phúc Khang</span><a href="trai-nghiem-du-hoc/phuc-khang-du-hoc-he-2016.html" class="xemthem">Đọc thêm</a></h4>
                                            <a href="trai-nghiem-du-hoc/phuc-khang-du-hoc-he-2016.html"><blockquote>Chị Mai Anh, có con du học hè 2016 đến Singapore: "Các con từ hôm qua từ sân bay về nhắc tới hai anh chị...</blockquote></a>
                                        </div>
                                    </div>


                                    <div class="wrap-each-testi-mobile">
                                        <a href="trai-nghiem-du-hoc/huynh-van-duy-dat-du-hoc-he-2016.html"><img src="{!!asset('public/assets/frontend') !!}/images//1486117130_duydat-canh.jpg" class="img-responsive" alt=""></a>
                                        <div class="testtimanial-slider-item">
                                            <h4><span>Huỳnh Văn Duy Đạt </span><a href="trai-nghiem-du-hoc/huynh-van-duy-dat-du-hoc-he-2016.html" class="xemthem">Đọc thêm</a></h4>
                                            <a href="trai-nghiem-du-hoc/huynh-van-duy-dat-du-hoc-he-2016.html"><blockquote>Chị Lan, có con du học hè 2016 đến Washington Dc, New York & Boston, Mỹ: "Cho phụ huynh cám ơn thầy Trung "nam thần"...</blockquote></a>
                                        </div>
                                    </div>


                                    <div class="wrap-each-testi-mobile">
                                        <a href="trai-nghiem-du-hoc/lau-my-khiet-du-hoc-he-2016.html"><img src="{!!asset('public/assets/frontend') !!}/images//1486115427_MyKhiet-canh.jpg" class="img-responsive" alt=""></a>
                                        <div class="testtimanial-slider-item">
                                            <h4><span>Lầu Mỹ Khiết </span><a href="trai-nghiem-du-hoc/lau-my-khiet-du-hoc-he-2016.html" class="xemthem">Đọc thêm</a></h4>
                                            <a href="trai-nghiem-du-hoc/lau-my-khiet-du-hoc-he-2016.html"><blockquote>Em Lầu Mỹ Khiết , du học hè 2016 đến Los Angeles & Hawaii, Mỹ: "Sau chuyến du học hè này con thấy mình biết...</blockquote></a>
                                        </div>
                                    </div>


                                    <div class="wrap-each-testi-mobile">
                                        <a href="trai-nghiem-du-hoc/nguyen-thi-thuy-duong-du-hoc-he-2016.html"><img src="{!!asset('public/assets/frontend') !!}/images//1486378995_testimonial-thuyduong.jpg" class="img-responsive" alt=""></a>
                                        <div class="testtimanial-slider-item">
                                            <h4><span>Nguyễn Thị Thuỳ Dương </span><a href="trai-nghiem-du-hoc/nguyen-thi-thuy-duong-du-hoc-he-2016.html" class="xemthem">Đọc thêm</a></h4>
                                            <a href="trai-nghiem-du-hoc/nguyen-thi-thuy-duong-du-hoc-he-2016.html"><blockquote>Con thấy chương trình Mỹ - Ca con được tham gia hè vừa rồi rất vui và bổ ích.</blockquote></a>
                                        </div>
                                    </div>


                                    <div class="wrap-each-testi-mobile">
                                        <a href="trai-nghiem-du-hoc/thai-hai-dang-du-hoc-he-2016.html"><img src="{!!asset('public/assets/frontend') !!}/images//1486114463_haidang-canh.jpg" class="img-responsive" alt=""></a>
                                        <div class="testtimanial-slider-item">
                                            <h4><span>Thái Hải Đăng </span><a href="trai-nghiem-du-hoc/thai-hai-dang-du-hoc-he-2016.html" class="xemthem">Đọc thêm</a></h4>
                                            <a href="trai-nghiem-du-hoc/thai-hai-dang-du-hoc-he-2016.html"><blockquote>Đi rất là vui Được gặp thêm bạn mới thầy cô mới và tham quan những địa điểm nổi tiếng Được học nhiều điều hay...</blockquote></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

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
@stop