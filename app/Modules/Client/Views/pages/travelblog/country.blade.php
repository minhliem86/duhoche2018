@extends("Client::layouts.default")

@section("meta")

@stop

@section('content')
    <!-- **************** Wellcome ****************-->
    <section class="destination-main clearfix">
        <div class="container">
            <h2>ĐIỂM LẠI DU HỌC HÈ 2017</h2>
            @if(count(!$country))
                <div class="destination-main-container">
                    <div class="container-fluid">
                            @foreach(array_chunk($country, 3) as $item_chunk)
                            <div class="row">
                                @foreach($item_chunk as $item_country)
                                    <div class="col-sm-4">
                                        <figure class="effect-layla each-img-figure">
                                            <a href="{!! route('travelblog.country', $item_country->slug) !!}">
                                                <img src="{!! $item_country->img_avatar !!}" class="img-responsive" alt="{!! $item_country->name !!}"/>
                                                <figcaption>
                                                    <h3><span>{!! $item_country->name !!}</span></h3>
                                                    <button class="btn btn-fake">Tìm hiểu thêm</button>
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