@extends("Client::layouts.default")

@section("meta")
    <meta name="keywords" content="ILA Du Học, Hè 2018, Đăng ký du học hè">
    <meta name="description" content="Đăng ký tham gia du học hè 2018 cùng ILA Du Học">
@stop

@section("title", "ILA Du Học Hè 2018 - Đăng Ký")

@section("content")
    @include("Client::layouts.banner_general")

    <section class="register bg-yellow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="register-container" id="startForm">
                        <h2 class="title">ĐỂ ĐƯỢC HỖ TRỢ TƯ VẤN <span> VUI LÒNG HOÀN THÀNH BẢN THÔNG TIN DƯỚI ĐÂY</span></h2>
                        <div class="form-container">
                            @if($errors->any())
                                <script>
                                    $(window).load(function () {
                                        $('html, body').animate({
                                            scrollTop:$('#startForm').offset().top - 120
                                        },1000)
                                    })
                                </script>
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{!! $error !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            {!! Form::open(['route' => 'register.post','method' => 'POST', 'class' => 'form', 'id' => "form_register"]) !!}
                                <input type="hidden" value="21" name="id_program">
                                <input type="hidden" value="osc@du-hoc-he-new" name="content_type">
                                <input type="hidden" name="id_hash">
                                <div class="form-group">
                                    <label for="fullname">Họ và Tên</label>
                                    {!! Form::text('fullname',old('fullname'), ['class'=>'form-control', 'required']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="phone">Số điện thoại</label>
                                    {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'required']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'required']) !!}
                                </div>
                            <div class="form-group">
                                <label for="city_id">Bạn sinh sống tại khu vực nào?</label>
                                <div class="wrap-city">
                                    <span class="inline-text">
                                        <lable>
                                            {!! Form::radio('city','48',true,['class' => 'radio-city','tabindex'=>1]) !!} TP.HCM
                                        </lable>
                                    </span>
                                    <span class="inline-text">
                                        <lable>
                                            {!! Form::radio('city','20',"",['class' => 'radio-city']) !!} Hà Nội
                                        </lable>
                                    </span>
                                    <span class="inline-text">
                                        <lable>
                                            {!! Form::radio('city','1',"",['class' => 'radio-city']) !!} Đà Nẵng
                                        </lable>
                                    </span>
                                    <span class="inline-text">
                                        <lable>
                                            {!! Form::radio('city','70',"",['class' => 'radio-city']) !!} Vũng Tàu
                                        </lable>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quocgia">Quốc gia/Liên tuyến cần tư vấn</label>
                                <div class="wrap-quocgia">
                                    <span class="col-quocgia">
                                        <span class="inline-column"><label for="my">{!! Form::radio('quocgia','Mỹ',true,['class' => 'radio-quocgia']) !!} Mỹ</label></span>
                                        <span class="inline-column"><label for="canada">{!! Form::radio('quocgia','Canada',"",['class' => 'radio-quocgia']) !!} Canada</label></span>
                                        <span class="inline-column"><label for="anh">{!! Form::radio('quocgia','Anh',"",['class' => 'radio-quocgia']) !!} Anh</label></span>
                                    </span>
                                    <span class="col-quocgia">
                                        <span class="inline-column"><label for="uc">{!! Form::radio('quocgia','Úc',"",['class' => 'radio-quocgia']) !!} Úc</label></span>
                                        <span class="inline-column"><label for="singapore">{!! Form::radio('quocgia','Singapore',"",['class' => 'radio-quocgia']) !!} Singapore</label></span>
                                        <span class="inline-column"><label for="nhatban">{!! Form::radio('quocgia','Nhật Bản',"",['class' => 'radio-quocgia']) !!} Nhật Bản</label></span>
                                    </span>
                                    <span class="col-quocgia">
                                        <span class="inline-column"><label for="lientuyenmy">{!! Form::radio('quocgia','Liên tuyến Mỹ - Canada',"",['class' => 'radio-quocgia']) !!} Liên tuyến Mỹ - Canada</label></span>
                                        <span class="inline-column"><label for="lientuyenanh">{!! Form::radio('quocgia','Liên tuyến Anh - Pháp',"",['class' => 'radio-quocgia']) !!} Liên tuyến Anh - Pháp</label></span>
                                        <span class="inline-column"><label for="lientuyenuc">{!! Form::radio('quocgia','Liên tuyến Úc - New zealand',"",['class' => 'radio-quocgia']) !!} Liên tuyến Úc - New zealand</label></span>
                                    </span>
                                </div>
                                <div class="form-group btn-container">
                                    <div class="wrap-btn">
                                        <input type="submit" class="btn-reg" id="submit-btn" name="btn-submit" value="Đăng ký ngay">
                                    </div>
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
    <link rel="stylesheet" href="{!! asset('public/assets/frontend')!!}/js/icheck/skins/square/square.css">
    <link rel="stylesheet" href="{!! asset('public/assets/frontend')!!}/js/icheck/skins/square/orange.css">
    <script src="{!! asset('public/assets/frontend')!!}/js/icheck/icheck.min.js "></script>
    <script src="http://ila-duhoc.edu.vn/static/default/js/jquery.md5.js"></script>

    <script>
        $(document).ready(function(){
            $('input.radio-city, input.radio-quocgia').iCheck({
                radioClass: 'iradio_square-orange',
            });

            /*FORM PROCESS*/
            $("#form_register").validate({
                errorElement: "span",
//                errorPlacement: function(error, element) {
//                    //Custom position: first name
//                    if (element.attr("name") == "study_ila" ) {
//                        $("#error_study_id").text($(error).html());
//                    }else if(element.attr("name") == "area"){
//                        $("#error_area").text($(error).html());
//                    }else{
//                        element.after(error);
//                    }
//                },

                rules: {
                    fullname: "required",
                    email: "required",
                    phone: {required: true, digits: true, minlength: 7, maxlength: 11},
                    city: "required",
                    quocgia: "required"
                },
                messages: {
                    fullname: "Vui lòng nhập họ tên",
                    phone: {
                        required: "Vui lòng nhập số điện thoại di động",
                        digits: "Vui lòng nhập số điện thoại di động",
                        minlength: "Vui lòng nhập số điện thoại di động",
                    },
                    email: "Vui lòng nhập email",
                    city: "Vui lòng chọn khu vực tham dự",
                    quocgia: "Vui lòng chọn quốc gia bạn quan tâm"
                },
                submitHandler:function(data){
                    var strRandom = Math.random().toString(36);
                    var d = new Date();
                    strRandom += d.toLocaleString();
                    $("input[name='id_hash']").val($.md5(strRandom));
                    _swga.postLead();
                },
            });
        })

    </script>
    <script src="//marketingtool.ilavietnam.edu.vn/static/api/dms-analytics.js"></script>
    <script type="text/javascript">
        _swga.base_url_post = 'http://marketingtool.ilavietnam.edu.vn';
        _swga.init('SW-000019', "form_register", "manual");
        _swga.loadForm({
            fullname: 'fullname',
            phone: 'phone',
            email: 'email',
            id_city: 'city',
            id_program: 'id_program',
            content_type: 'content_type',
            quocgia_osc : 'quocgia',
            id_hash: 'id_hash'
            })
    </script>
@stop