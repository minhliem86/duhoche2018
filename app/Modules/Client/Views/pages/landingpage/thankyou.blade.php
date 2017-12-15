@extends("Client::layouts.default")

@section("meta")
    <meta name="keywords" content="ILA Du Học, Hè 2018, Đăng ký du học hè">
    <meta name="description" content="Đăng ký tham gia du học hè 2018 cùng ILA Du Học">
@stop

@section("title", "ILA Du Học Hè 2018 - Đăng ký thành công")

@section("content")
    <section class="banner clearfix">
        <div class="row">
            <div class="banner-homepage visible-md visible-lg">
                <div class="tp-banner-container">
                    <div class="tp-banner" >
                        <ul>
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-link="http://ila-duhoc.edu.vn/duhoche2018/dang-ky?utm_campaign=OSC+Summer+2018&utm_medium=statis&utm_source=Organic">
                                <!-- MAIN IMAGE -->
                                <img src="{!! asset('public') !!}/assets/frontend/extentions/images/didelon.jpg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                            </li>
                        </ul>
                    </div>
                </div>
            </div>  <!-- banner-homepage -->
        </div>
    </section>

    <section class="register thankyou bg-yellow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="register-container" id="startForm">
                        <h2 class="title">CẢM ƠN BẠN ĐÃ ĐĂNG KÝ THÔNG TIN <span> ILA DU HỌC SẼ LIÊN LẠC VỚI BẠN TRONG THƠI GIAN SỚM NHẤT.</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include("Client::layouts.why")
@stop

@section("script")
    <script defer>
        $(document).ready(function () {
            $('.banner-homepage .tp-banner').revolution({
                delay: 5000,
                startwidth: 1920,
                startheight: 700,
                hideThumbs: 10,
                navigationType: 'none'
            })
        })
    </script>
    <link rel="stylesheet" href="{!! asset('public/assets/frontend')!!}/js/icheck/skins/square/square.css">
    <link rel="stylesheet" href="{!! asset('public/assets/frontend')!!}/js/icheck/skins/square/orange.css">
    <script src="{!! asset('public/assets/frontend')!!}/js/icheck/icheck.min.js "></script>
    <script>
        $(document).ready(function () {
            $('input.radio-city, input.radio-quocgia').iCheck({
                radioClass: 'iradio_square-orange',
            });
        })
        $(window).load(function () {
            $('html, body').animate({
                scrollTop:$('#startForm').offset().top - 120
            },1000)
        })
    </script>
@stop