<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:description" content="ILA Du Học giới thiệu chương trình Du Học Hè 2018 với 4 giá trị cốt lõi: Phiêu Lưu, Trải Nghiệm, Tự Lập và Trưởng Thành." >
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    @yield('meta')
    <title>@yield('title','ILA Du Học 2018')</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <!-- Custom Css -->
    <link rel="stylesheet" href="{!!asset('public') !!}/assets/frontend/css/swiper.css">
    <link rel="stylesheet" href="{!!asset('public') !!}/assets/frontend/css/animate.min.css">
    <link href="{!!asset('public') !!}/assets/frontend/css/style.css" rel="stylesheet">
    <link href="{!!asset('public') !!}/assets/frontend/css/reponsive.css" rel="stylesheet">
    <link href="{!!asset('public') !!}/assets/frontend/css/custom-lp.css" rel="stylesheet">
    <link href="{!!asset('public') !!}/assets/frontend/css/duhoche2018.css" rel="stylesheet">

</head>

<body>
    <div class="osc-summer">
        <div class="container-fluid">
            <div class="row">
                <article class="container-fluid">
                    <div class="row home">
                        @include('Client::layouts.header')
                        @yield('content')
                        @include("Client::layouts.footer")
                    </div>
                </article>
            </div>
        </div>
    </div> <!-- end osc-summer-->

    <script src="{!!asset('public') !!}/assets/frontend/js/jquery-2.1.1.js" type="text/javascript"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/jquery.validate.min.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/swiper.min.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/jquery.sticky.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/scrolla.jquery.min.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/customScript.js"></script>
    <!-- REVOLUTION -->
    <link rel="stylesheet" href="{!!asset('public') !!}/assets/frontend/js/revolution/css/settings.css">
    <script src="{!!asset('public') !!}/assets/frontend/js/revolution/jquery.themepunch.plugins.min.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/revolution/jquery.themepunch.revolution.min.js"></script>
    @yield("script")
</body>
</html>