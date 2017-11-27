@extends("Client::layouts.default")

@section('meta')

@stop

@section("title", 'Page Not Found')

@section("content")
    <!--====================== Content ======================-->
    <section class="404-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="404-container">
                        <h2 class="title">Chúng tôi rất tiếc vì trang bạn đang tìm <span>kiếm hiện không có trên website ILA Du Học</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====================== /Content ======================-->
    @include("Client::layouts.discover")

    @include("Client::layouts.why")
@stop