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
            <h2>ILA DU HỌC MỸ 2018</h2>
            <div class="destination-main-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="box-destination box-active">
                                <div class="content-destination">
                                    <div class="box-destination-header">
                                        <h4>LOS ANGELES + SAN FRANCISCO</h4>
                                        <a href="#">Dành cho học sinh từ 14 - 17 tuổi</a>
                                        <a href="#">Ngày khởi hành: 02/07 – 22/07/2017</a>
                                    </div>
                                    <div class="box-destination-content">
                                        <div class="box-destination-footer">
                                            <button class="btn">Read more</button>
                                            <button class="btn-02">Register</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-destination">
                                    <img src="{!!asset('public/assets/frontend') !!}/images/LOSANGELES-LASVEGAS2.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- **************** /Wellcome ****************-->

    @include("Client::layouts.why")


@stop

@section("script")

@stop