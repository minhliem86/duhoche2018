<!-- **************** Discover ****************-->
<section class="discover bg-yellow">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="m-haft">KHÁM PHÁ ĐIỂM ĐẾN HẤP DẪN 2018</h2>
                <ul class="to-local nopadding inline-list">
                    @if(!$country_composer->isEmpty())
                        @foreach($country_composer as $list_country)
                            @if($list_country->slug === 'my' || $list_country->slug === 'canada' || $list_country->slug === 'uc' || $list_country->slug === 'singapore' || $list_country->slug === 'anh' || $list_country->slug === 'nhat-ban' )
                            <li><a href="{!! route('country',$list_country->slug ) !!}">{!! $list_country->title !!}</a></li>
                            @endif
                        @endforeach
                    @endif
                </ul>
                <ul class="to-local nopadding inline-list">
                    @foreach($country_composer as $list_country_multi)
                        @if($list_country_multi->slug === 'lien-tuyen-my-canada' || $list_country_multi->slug === 'lien-tuyen-anh-phap' || $list_country_multi->slug === 'lien-tuyen-uc-new-zealand')
                        <li><a href="{!! route('country', $list_country_multi->slug) !!}">{!! $list_country_multi->title !!}</a></li>
                        @endif
                    @endforeach
                </ul>
                <div class="discover-container">
                    <div class="container-fluid">
                        @if(!$country_composer->isEmpty())
                        <div class="row top-box">
                            <div class="col-sm-12 col-md-7 nopadding">
                                <div class="swiper-container slider-lv2">
                                    <div class="swiper-wrapper">
                                        @foreach( $country_composer as $item_countrycomposer)
                                        <div class="swiper-slide">
                                            <div class="each-discover">
                                                <img src="{!! asset($item_countrycomposer->img_url) !!}" class="img-responsive" alt="{!! asset($item_countrycomposer->title) !!}">
                                                <a href="{!! route('country', $item_countrycomposer->slug) !!}" class="btn btn-xemthem">Tìm hiểu thêm</a>
                                            </div>


                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 nopadding">
                                @foreach($country_composer as $item_smallcountry)
                                    @if($item_smallcountry->slug === 'my' || $item_smallcountry->slug === 'canada' || $item_smallcountry->slug === 'uc' || $item_smallcountry->slug === 'singapore' )
                                    <div class="col-sm-6 nopadding">
                                        <div class="overlay-img">
                                            <div class="img-hack hack-style01" style="background-image:url('{!! asset($item_smallcountry->img_url) !!}')"></div>
                                        </div>
                                        <p class="title-country">{!! $item_smallcountry->title !!}</p>
                                        <a href="{!! route('country', $item_smallcountry->slug) !!}" class="btn-dis">ĐĂNG KÝ</a>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div> <!-- end top-box-->
                        @endif
                        <div class="bottom-box row">
                            @foreach($country_composer as $item_mediumcountry)
                                @if($item_mediumcountry->slug === 'lien-tuyen-my-canada' || $item_mediumcountry->slug === 'lien-tuyen-anh-phap' || $item_mediumcountry->slug === 'lien-tuyen-uc-new-zealand')
                                <div class="col-sm-12 col-md-4 nopadding">
                                    <div class="overlay-img">
                                        <div class="img-hack hack-style02" style="background-image:url('{!! asset($item_mediumcountry->img_url) !!}')"></div>
                                    </div>
                                    <p class="title-country">{!! $item_mediumcountry->title !!}</p>
                                    <a href="{!! route('country', $item_mediumcountry->slug) !!}" class="btn-dis">ĐĂNG KÝ</a>
                                </div>
                                @endif
                            @endforeach

                        </div> <!-- end bottom-box-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- **************** /Discover ****************-->