<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:description" content="ILA Du Học giới thiệu chương trình Du Học Hè 2018 với 4 giá trị cốt lõi: Phiêu Lưu, Trải Nghiệm, Tự Lập và Trưởng Thành." >
    <meta name="robots" content="index, follow">
    <link rel="icon" href="{!!asset('public') !!}/favicon.ico">
    @yield('meta')
    <title>@yield('title','ILA Du Học 2018')</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
    <script src="{!!asset('public') !!}/assets/frontend/js/jquery-2.1.1.js" type="text/javascript"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/vivus.min.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/cookies.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/common.js"   ></script>
    <script async>
        function renderSVG(sgvID, loadingID){
            new Vivus(sgvID, {duration: 250, file: "{!!asset('public') !!}/assets/frontend/images/duhoc.svg", start: 'autostart', dashGap: 2, forceRender: true });
            setInterval(function () {
                $("#"+loadingID).css({'opacity' : 1})
            },3000);
        }
    </script>
    <!-- Custom Css -->
    <link rel="stylesheet" href="{!!asset('public') !!}/assets/frontend/css/swiper.min.css">
    <link rel="stylesheet" href="{!!asset('public') !!}/assets/frontend/css/animate.min.css">
    <link href="{!!asset('public') !!}/assets/frontend/css/style.min.css" rel="stylesheet">
    <link href="{!!asset('public') !!}/assets/frontend/css/reponsive.min.css" rel="stylesheet">
    <link href="{!!asset('public') !!}/assets/frontend/css/custom-lp.min.css" rel="stylesheet">
    <link href="{!!asset('public') !!}/assets/frontend/css/duhoche2018.min.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-60129748-7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-60129748-7');
    </script>

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

    <script src="{!!asset('public') !!}/assets/frontend/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/jquery.validate.min.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/swiper.min.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/jquery.sticky.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/scrolla.jquery.min.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/customScript.min.js"></script>
    <!-- REVOLUTION -->
    <link rel="stylesheet" href="{!!asset('public') !!}/assets/frontend/js/revolution/css/settings.css">
    <script src="{!!asset('public') !!}/assets/frontend/js/revolution/jquery.themepunch.plugins.min.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/revolution/jquery.themepunch.revolution.min.js"></script>
    @yield("script")
</body>
</html>