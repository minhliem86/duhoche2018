@extends("Client::layouts.default")

@section("meta")
    <meta name="keywords" content="ILA, ILA Du Học Hè 2018, Hè 2018, Khoảng khắc Du họ hè 2017">
    <meta name="description" content="ĐIỂM LẠI DU HỌC HÈ 2017: Phiêu Lưu, Trải Nghiệm, Tự Lập và Trưởng Thành.">
@stop

@section("title", "ĐIỂM LẠI DU HỌC HÈ 2017")

@section('content')
    <!-- **************** Wellcome ****************-->
    <section class="destination-main destination-travel-blog album-travel-blog clearfix">
        <div class="container">
            <h2>ĐIỂM LẠI DU HỌC HÈ 2017</h2>
            <p class="title-sub">{!! $course_name->title !!}</p>
            @if(count(!$album))
                <div class="destination-main-container">
                    <div class="container-fluid">
                        @foreach(array_chunk($album, 3) as $item_chunk)
                            <div class="row">
                                @foreach($item_chunk as $item_ablum)
                                    <div class="col-sm-4">
                                        <figure class="effect-layla each-img-figure">
                                            <a href="{!! route('travelbog.album', [$course_name->tour_code, $item_ablum->id]) !!}">
                                                <img src="{!! $item_ablum->img_url !!}" class="img-responsive" alt="{!! $item_ablum->title !!}"/>
                                                <figcaption>
                                                    <h3><span>{!! $item_ablum->title !!}</span></h3>
                                                </figcaption>
                                            </a>
                                        </figure>
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
@stop

@section('script')

@stop