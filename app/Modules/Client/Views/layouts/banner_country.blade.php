@if(!$country->media()->where('type','banner')->get()->isEmpty())
<section class="banner clearfix">
    <div class="row">
        <div class="banner-homepage visible-md visible-lg">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>
                        @foreach($country->media()->where('type','banner')->get() as $banner)
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-link="http://ila-duhoc.edu.vn/duhoche2018/dang-ky?utm_campaign=OSC+Summer+2018&utm_medium=statis&utm_source=Organic">
                            <!-- MAIN IMAGE -->
                            <img src="{!! asset($banner->img_url) !!}"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            {{--<div class="caption sfr"--}}
                                 {{--data-x="40" data-y="100" data-speed="700" data-start="200" data-easing="easeOutBack">--}}
                                {{--<img src="{!! asset('public') !!}/assets/frontend/images/slider/2018/text-banner-01.png" class="img-responsive" alt="">--}}
                            {{--</div>--}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>  <!-- banner-homepage -->
    </div>
</section>
@endif
