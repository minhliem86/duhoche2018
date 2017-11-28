@extends("Client::layouts.default")

@section("meta")
    <meta name="keywords" content="ILA, ILA Du Học Hè 2018, {!! $album_name->title !!}">
    <meta name="description" content="ĐIỂM LẠI DU HỌC HÈ 2017: Phiêu Lưu, Trải Nghiệm, Tự Lập và Trưởng Thành.">
@stop

@section("title")
    ĐIỂM LẠI DU HỌC HÈ 2017 - {!! $album_name->title !!}
@stop

@section('content')
    <!-- **************** Wellcome ****************-->
    <section class="destination-main destination-travel-blog album-travel-blog clearfix">
        <div class="container">
            <h2>ĐIỂM LẠI DU HỌC HÈ 2017</h2>
            <p class="title-sub">{!! $album_name->title !!}</p>
            @if(count(!$photo))
                <div class="destination-main-container">
                    <div class="container-fluid">
                        @foreach(array_chunk($photo, 3) as $item_chunk)
                            <div class="row">
                                @foreach($item_chunk as $item_photo)
                                    <div class="col-sm-4">
                                        <figure class="effect-layla each-img-figure">
                                            <a href="{!! $item_photo->img_url !!}" data-lightbox="gallery-travelblog">
                                                <img src="{!! $item_photo->thumbnail_url !!}" class="img-responsive" alt="{!! $item_photo->title !!}"/>
                                                <figcaption>
                                                    {{--<h3><span>{!! $item_photo->title !!}</span></h3>--}}
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
    <link rel="stylesheet" href="{!! asset('public/assets/frontend') !!}/js/lightbox/css/lightbox.min.css">
    <script src="{!! asset('public/assets/frontend') !!}/js/lightbox/js/lightbox.min.js"></script>
@stop