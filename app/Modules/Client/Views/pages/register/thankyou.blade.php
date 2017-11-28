@extends("Client::layouts.default")

@section("meta")
    <meta name="keywords" content="ILA Du Học, Hè 2018, Đăng ký du học hè">
    <meta name="description" content="Đăng ký tham gia du học hè 2018 cùng ILA Du Học">
@stop

@section("title", "ILA Du Học Hè 2018 - Đăng ký thành công")

@section("content")
    @include("Client::layouts.banner_general")

    <section class="register thankyou bg-yellow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="register-container" id="startForm">
                        <h2 class="title">CẢM ƠN BẠN ĐÃ ĐĂNG KÝ THÔNG TIN <span> ILA DU HỌC SẼ LIÊN LẠC VỚI BẠN TRONG THƠI GIAN SỚM NHẤT.</span>
                        </h2>
                        <div class="form-container">
                            {!! Form::model(Session::get('data'),['method' => 'PUT', 'class' => 'form', 'id' => "form_register"]) !!}
                            <div class="form-group">
                                <label for="fullname">Họ và Tên</label>
                                {!! Form::text('fullname',old('fullname'), ['class'=>'form-control', 'required', 'disabled']) !!}
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'required', 'disabled']) !!}
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                {!! Form::text('email', old('email'), ['class'=>'form-control', 'required', 'disabled']) !!}
                            </div>
                            <div class="form-group">
                                <label for="city_id">Bạn sinh sống tại khu vực nào?</label>
                                <div class="wrap-city">
                                    <span class="inline-text">
                                        <lable>
                                            {!! Form::radio('city','48',$data->city === 48 ? true : false,['class' => 'radio-city', 'disabled']) !!}
                                            TP.HCM
                                        </lable>
                                    </span>
                                    <span class="inline-text">
                                        <lable>
                                            {!! Form::radio('city','20',$data->city === 20 ? true : false,['class' => 'radio-city', 'disabled']) !!}
                                            Hà Nội
                                        </lable>
                                    </span>
                                    <span class="inline-text">
                                        <lable>
                                            {!! Form::radio('city','1',$data->city === 1 ? true : false,['class' => 'radio-city', 'disabled']) !!}
                                            Đà Nẵng
                                        </lable>
                                    </span>
                                    <span class="inline-text">
                                        <lable>
                                            {!! Form::radio('city','70',$data->city === 70 ? true : false,['class' => 'radio-city', 'disabled']) !!}
                                            Vũng Tàu
                                        </lable>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quocgia">Quốc gia/Liên tuyến cần tư vấn</label>
                                <div class="wrap-quocgia">
                                    <span class="col-quocgia">
                                        <span class="inline-column"><label for="my">
                                                {!! Form::radio('quocgia','Mỹ',$data->quocgia === "Mỹ" ? true : false,['class' => 'radio-quocgia', 'disabled']) !!}
                                                Mỹ</label></span>
                                        <span class="inline-column"><label for="canada">{!! Form::radio('quocgia','Canada',$data->quocgia === "Canada" ? true : false,['class' => 'radio-quocgia', 'disabled']) !!}
                                                Canada</label></span>
                                        <span class="inline-column"><label for="anh">{!! Form::radio('quocgia','Anh',$data->quocgia === "Anh" ? true : false,['class' => 'radio-quocgia', 'disabled']) !!}
                                                Anh</label></span>
                                    </span>
                                    <span class="col-quocgia">
                                        <span class="inline-column"><label for="uc">{!! Form::radio('quocgia','Úc',$data->quocgia === "Úc" ? true : false,['class' => 'radio-quocgia', 'disabled']) !!}
                                                Úc</label></span>
                                        <span class="inline-column"><label for="singapore">{!! Form::radio('quocgia','Singapore',$data->quocgia === "Singapore" ? true : false,['class' => 'radio-quocgia', 'disabled']) !!}
                                                Singapore</label></span>
                                        <span class="inline-column"><label for="nhatban">{!! Form::radio('quocgia','Nhật Bản',$data->quocgia === "Nhật Bản" ? true : false,['class' => 'radio-quocgia', 'disabled']) !!}
                                                Nhật Bản</label></span>
                                    </span>
                                    <span class="col-quocgia">
                                        <span class="inline-column"><label for="lientuyenmy">{!! Form::radio('quocgia','Liên tuyến Mỹ - Canada',$data->quocgia === "Liên tuyến Mỹ - Canada" ? true : false,['class' => 'radio-quocgia', 'disabled']) !!}
                                                Liên tuyến Mỹ - Canada</label></span>
                                        <span class="inline-column"><label for="lientuyenanh">{!! Form::radio('quocgia','Liên tuyến Anh - Pháp',$data->quocgia === "Liên tuyến Anh - Pháp" ? true : false,['class' => 'radio-quocgia', 'disabled']) !!}
                                                Liên tuyến Anh - Pháp</label></span>
                                        <span class="inline-column"><label for="lientuyenuc">{!! Form::radio('quocgia','Liên tuyến Úc - New zealand',$data->quocgia === "Liên tuyến Úc - New zealand" ? true : false,['class' => 'radio-quocgia', 'disabled']) !!}
                                                Liên tuyến Úc - New zealand</label></span>
                                    </span>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include("Client::layouts.why")
@stop

@section("script")
    <script defer>
        $(document).ready(function () {
            $('.banner-homepage .tp-banner').revolution({
                delay: 5000,
                startwidth: 1920,
                startheight: 700,
                hideThumbs: 10,
                navigationType: 'none'
            })
        })
    </script>
    <link rel="stylesheet" href="{!! asset('public/assets/frontend')!!}/js/icheck/skins/square/square.css">
    <link rel="stylesheet" href="{!! asset('public/assets/frontend')!!}/js/icheck/skins/square/orange.css">
    <script src="{!! asset('public/assets/frontend')!!}/js/icheck/icheck.min.js "></script>
    <script>
        $(document).ready(function () {
            $('input.radio-city, input.radio-quocgia').iCheck({
                radioClass: 'iradio_square-orange',
            });
        })
        $(window).load(function () {
            $('html, body').animate({
                scrollTop:$('#startForm').offset().top - 120
            },1000)
        })
    </script>
@stop