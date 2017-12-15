@extends("Client::layouts.default")

@section("meta")
    <meta name="keywords" content="{!! $course->m_keywords !!}">
    <meta name="description" content="{!! $course->m_description !!}">
    <meta property="og:image" content="{!! $course->m_img !!}" />
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="350">
@stop

@section("title")
    ILA Du Học {!! $country->title !!} - {!!  $course->title !!}
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
                <div class="col-md-12">
                    <div class="img-box">
                        <div class="img-container">
                            <div class="left-img">
                                <img src="{!! asset($course->img_url) !!}" class="img-responsive" alt="{!! $course->title !!}">
                            </div>
                            <div class="right-img">
                                <div class="img-hack" style="background-image: url('{!! asset($course->img_map) !!}')">
                                    <img src="{!! asset($course->img_map) !!}" class="img-responsive visible-xs" alt="{!! $course->title !!}">
                                </div>
                            </div>
                        </div>
                        <div class="wrap-title">
                            <h3 class="title-course">{!! $course->title !!}</h3>
                            <p class="sub-title"><b>Đối tượng: </b>{!! $course->age !!} </p>
                            <p class="sub-title"><b>Lịch trình: </b>{!! $course->time !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="wrap-content">
                        {!! $course->content !!}
                    </div>
                </div>
                <div class="col-md-5">
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
@stop

@section("script")
@stop