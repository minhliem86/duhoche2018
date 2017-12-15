@extends("Client::layouts.default")

@section("meta")
    <meta name="keywords" content="ILA Du Học, Hè 2018, Cuộc Thi Viết Đi Để Lớn">
    <meta name="description" content="Đăng ký tham gia Cuộc Thi Viết 'Đi Để Lớn' cùng ILA Du Học">
@stop

@section("title", "ILA Du Học Hè 2018 - Cuộc Thi Viết Đi Để Lớn")

@section("content")
    <section class="banner clearfix">
        <div class="row">
            <div class="banner-homepage visible-md visible-lg">
                <div class="tp-banner-container">
                    <div class="tp-banner" >
                        <ul>
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-link="http://ila-duhoc.edu.vn/duhoche2018/dang-ky?utm_campaign=OSC+Summer+2018&utm_medium=statis&utm_source=Organic">
                                <!-- MAIN IMAGE -->
                                <img src="{!! asset('public') !!}/assets/frontend/extentions/images/didelon.jpg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                            </li>
                        </ul>
                    </div>
                </div>
            </div>  <!-- banner-homepage -->
        </div>
    </section>

    <section class="register bg-yellow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="register-container" id="startForm">
                        <h2 class="title">ĐỂ THAM GIA CUỘC THI <span>VUI LÒNG HOÀN THÀNH BẢN THÔNG TIN DƯỚI ĐÂY</span></h2>
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
                            {!! Form::open(['route' => 'contest.post','method' => 'POST', 'class' => 'form', 'id' => "form_register", 'files' =>true]) !!}
                                <input type="hidden" value="21" name="id_program">
                                <input type="hidden" value="osc@du-hoc-he-new" name="content_type">
                                <input type="hidden" name="id_hash">
                                <div class="form-group">
                                    <label for="fullname">Họ và Tên</label>
                                    {!! Form::text('fullname',old('fullname'), ['class'=>'form-control', 'required']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="dob">Ngày tháng năm sinh</label>
                                    {!! Form::text('dob',old('dob'), ['class'=>'form-control', 'required', "id"=>"date"]) !!}
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
                                    <label for="school">Bạn đang theo học tại ngôi trường nào?</label>
                                    {!! Form::text('school', old('school'), ['class'=>'form-control', 'required']) !!}
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
                                </div>
                                <div class="form-group">
                                    <label for="file">Vui lòng đính kèm bài dự thi tại đây (file word - tối đa 5MB)</label>
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                            <span class="btn btn-primary btn-upload">
                                                Upload Bài Thi&hellip; <input type="file" name="file" style="display: none;" multiple>
                                            </span>
                                        </label>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group btn-container">
                                    <div class="wrap-btn">
                                        <input type="submit" class="btn-reg btn-contest" id="submit-btn" name="btn-submit" value="Nộp Bài">
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script defer>
        $(document).ready(function(){
            $('.banner-homepage .tp-banner').revolution({
                delay:5000,
                startwidth:1920,
                startheight:700,
                hideThumbs:10,
                navigationType:'none'
            })
            /*UPLOAD*/
            $(':file').on('change', function(event, numFiles, label) {
                var val = $(this).val();
                var input = $(this).parents('.input-group').find(':text');
                input.val(val);
            });
            /*DATE TIME*/
            $('#date').datepicker({
                yearRange: '1980:2015',
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy',
                showAnim: 'slide',
                maxDate: '0'
            })


        })
    </script>
    <link rel="stylesheet" href="{!! asset('public/assets/frontend')!!}/js/icheck/skins/square/square.css">
    <link rel="stylesheet" href="{!! asset('public/assets/frontend')!!}/js/icheck/skins/square/orange.css">
    <script src="{!! asset('public/assets/frontend')!!}/js/icheck/icheck.min.js "></script>

    <script>
        $(document).ready(function(){
            $('input.radio-city, input.radio-quocgia').iCheck({
                radioClass: 'iradio_square-orange',
            });

            /*FORM PROCESS*/
            $("#form_register").validate({
                errorElement: "span",
                rules: {
                    fullname: "required",
                    email: "required",
                    dob: 'required',
                    phone: {required: true, digits: true, minlength: 7, maxlength: 11},
                    city: "required",
                    quocgia: "required",
                    file: "required",
                    school: "required"

                },
                messages: {
                    fullname: "Vui lòng nhập họ tên",
                    dob: 'Vui lòng chọn Ngày/Tháng/Năm Sinh',
                    phone: {
                        required: "Vui lòng nhập số điện thoại di động",
                        digits: "Vui lòng nhập số điện thoại di động",
                        minlength: "Vui lòng nhập số điện thoại di động",
                    },
                    email: "Vui lòng nhập email",
                    city: "Vui lòng chọn khu vực tham dự",
                    quocgia: "Vui lòng chọn quốc gia bạn quan tâm",
                    file: "Vui lòng Upload bài dự thi",
                    school: "Vui lòng nhập tên ngôi trường bạn đang học"
                }
            });
        })

    </script>
@stop