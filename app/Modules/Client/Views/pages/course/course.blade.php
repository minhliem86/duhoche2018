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
                        <h3 class="title-course">{!! $course->title !!}</h3>
                        {!! $course->content !!}
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="img-box">
                        <img src="{!! asset($course->img_url) !!}" class="img-responsive" alt="{!! $course->title !!}">
                    </div>
                    <div class="content-2">
                        {!! $course->content_column2 !!}
                        <div class="wrap-btnblog">
                            <a href="{!! route('travelblog') !!}" class="btn btn-travel" >Điểm lại du học hè 2017</a>
                        </div>
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
                            <p>Để nhận ngay ưu đãi </p>
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