<header class="bg-yellow">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="logo-flex clearfix">
                    <div class="logo-box">
                        <a href="#">
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
                                <li class="active"><a href="index.html">TRANG CHỦ</a></li>
                                @if(!$country_composer->isEmpty())
                                <li class="dropdown">
                                    <a href="destination.html" class="dropdown-toggle" data-toggle="dropdown">QUỐC GIA <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        @foreach($country_composer as $item_menu)
                                        <li><a href="{!! route('country') !!}">{!! $item_menu->title !!}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endif
                                <li><a href="promotion.html">KHUYẾN MÃI</a></li>
                                <li><a href="testimonial.html">TRẢI NGHIỆM DU HỌC</a></li>
                                <li><a href="#"><b>ĐĂNG KÝ</b></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>