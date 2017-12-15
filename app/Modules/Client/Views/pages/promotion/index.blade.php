@extends("Client::layouts.default")

@section("meta")
    <meta name="keywords" content="ILA Du Học, Hè 2018, chương trình khuyến mãi">
    <meta name="description" content="Những chương trình khuyến mãi cực kỳ hấp dẫn và không thể bỏ lỡ của chương trình ILA Du học hè 2018">
@stop

@section("title", "ILA Du Học Hè 2018 - Khuyến Mãi")

@section('content')
    @include("Client::layouts.banner_general")
    <!-- **************** Promotion ****************-->
    <section class="promotion-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>CHƯƠNG TRÌNH KHUYẾN MÃI</h2>
                </div>
            </div>
            @if(!$promotion->isEmpty())
                @foreach($promotion->chunk(2) as $item_chunk)
                <div class="row">
                    @foreach($item_chunk as $item_promotion)
                        <div class="col-md-6">
                            <div class="promotion-container animate" data-animate="zoomIn">
                                <div class="img-box">
                                    <img src="{!! asset($item_promotion->img_url) !!}" class="img-responsive" alt="{!! $item_promotion->title !!}">
                                </div>
                                <div class="promotion-box">
                                    <h3>{!! $item_promotion->title !!}</h3>
                                    <p>{!! $item_promotion->description !!}</p>
                                    <a href="http://ila-duhoc.edu.vn/duhoche2018/dang-ky?utm_campaign=OSC+Summer+2018&utm_medium=statis&utm_source=Organic" class="btn">Đăng Ký</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @endforeach
            @endif
        </div>
    </section>

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
        })
    </script>
@stop