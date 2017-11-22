@extends("Client::layouts.default")

@section("meta")

@stop

@section("content")
    <!--REVIEW 2017-->
    <section class="review">
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
    <!-- **************** Wellcome ****************-->
    <section class="destination-main clearfix">
        <div class="container">
            <h2>ILA DU HỌC {!! $country->title !!} 2018</h2>
            @if(!$course->isEmpty())
            <div class="destination-main-container">
                <div class="container-fluid">
                    @foreach($course->chunk(3) as $item_chunk)
                    <div class="row">
                        @foreach($item_chunk as $item_course)
                        <div class="col-sm-4">
                            <div class="box-destination box-active">
                                <div class="content-destination">
                                    <div class="box-destination-header">
                                        <h4>{!! $item_course->title !!}</h4>
                                        <a href="{!! route('country.course',[$country->slug, $item_course->slug]) !!}">Dành cho học sinh từ {!! $item_course->age !!} tuổi</a>
                                        <a href="{!! route('country.course',[$country->slug, $item_course->slug]) !!}">Ngày khởi hành: {!! $item_course->time !!}</a>
                                    </div>
                                    <div class="box-destination-content">
                                        <div class="box-destination-footer">
                                            <a href="{!! route('country.course',[$country->slug, $item_course->slug]) !!}" class="btn">Xem thêm</a>
                                            <a href="#" class="btn-02">Đăng ký</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-destination">
                                    <a href="{!! route('country.course',[$country->slug, $item_course->slug]) !!}"><img src="{!!asset($item_course->img_url) !!}" class="img-responsive" alt="{!! $item_course->title !!}"></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

        </div>
    </section>
    <!-- **************** /Wellcome ****************-->

    @include("Client::layouts.why")


@stop

@section("script")

@stop