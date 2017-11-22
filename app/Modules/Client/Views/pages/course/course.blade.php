@extends("Client::layouts.default")

@section("meta")

@stop

@section("content")
    <section class="course-detail-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>ILA DU HỌC {!! $country->title !!}</h2>
                    <p class="title-sub">Mã đoàn: {!! $course->code !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="wrap-content">
                        {!! $course->content !!}
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="img-box">
                        <img src="{!! $course->img_url !!}" class="img-responsive" alt="{!! $course->title !!}">
                    </div>
                    <div class="content-2">
                        {!! $course->content_column2 !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-schedule">
                        {!! $course->schedule !!}
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
@stop

@section("script")

@stop