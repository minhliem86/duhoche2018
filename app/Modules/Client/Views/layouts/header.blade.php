<header class="bg-yellow">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="logo-flex clearfix">
                    <div class="logo-box">
                        <a href="{!! route('homepage') !!}">
                            <img class="img-responsive" src="{!!asset('public/assets/frontend') !!}/images/logo.png" alt="Ila Edu">
                        </a>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="topmenu clearfix">
                    <nav class=" navbar-default navbar-right" role="navigation">
                        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
                            <ul class="nav navbar-nav">
                                <li class="{!! LP_lib::setActive(1,'') !!}"><a href="{!! route('homepage') !!}">TRANG CHỦ</a></li>
                                @if(!$country_composer->isEmpty())
                                <li class="dropdown">
                                    <a href="javascript:avoid()" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">QUỐC GIA <span class="caret"></span></a>
                                    <div class="dropdown-menu">
                                        <ul class="list-dropdown-menu">
                                                @foreach($country_composer as $item_menu)
                                                    <li><a href="{!! route('country', $item_menu->slug) !!}">{!! $item_menu->title !!}</a></li>
                                                @endforeach
                                        </ul>
                                    </div>
                                </li>
                                @endif
                                <li class="{!! LP_lib::setActive(1,'khuyen-mai') !!}"><a href="{!! route('khuyenmai') !!}">KHUYẾN MÃI</a></li>
                                <li class="{!! LP_lib::setActive(1,'chia-se-trai-nghiem') !!}"><a href="{!! route('testimonial') !!}">TRẢI NGHIỆM DU HỌC</a></li>
                                <li class="{!! LP_lib::setActive(1,'dang-ky') !!}"><a href="{!! route('register') !!}"><b>ĐĂNG KÝ</b></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>