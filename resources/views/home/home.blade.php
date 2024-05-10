@extends('home.base')
@section('content')
    @push('css')
        <style>
            .single-price {
                text-align: center;
                background: #262626;
                transition: .7s;
                margin-top: 20px;
            }
            .single-price h3 {
                font-size: 30px;
                color: #000;
                font-weight: 600;
                text-align: center;
                margin: 0;
                margin-top: -80px;
                margin-bottom: 1rem;
                font-family: poppins;
                color: #fff;
            }
            .single-price h4 {
                font-size: 20px;
                font-weight: 500;
                color: #fff;
            }
            .single-price h4 span.sup {
                vertical-align: text-top;
                font-size: 15px;
            }
            .deal-top {
                position: relative;
                background: #000080;
                font-size: 16px;
                text-transform: uppercase;
                padding: 136px 24px 0;
            }
            .deal-top::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: -50px;
                width: 0;
                height: 0;
                border-top: 50px solid #000080;
                border-left: 175px solid transparent;
                border-right: 183px solid transparent;
            }
            .deal-bottom {
                padding: 56px 16px 0;
            }
            .deal-bottom ul {
                margin: 0;
                padding: 0;
            }
            .deal-bottom  ul li {
                font-size: 16px;
                color: #fff;
                font-weight: 300;
                margin-top: 16px;
                border-top: 1px solid #E4E4E4;
                padding-top: 16px;
                list-style: none;
            }
            .btn-area a {
                display: inline-block;
                font-size: 18px;
                color: #fff;
                background: #000080;
                padding: 8px 64px;
                margin-top: 32px;
                border-radius: 4px;
                margin-bottom: 40px;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }


            .single-price:hover {
                background: #000080;
            }
            .single-price:hover .deal-top {
                background: #262626;
            }
            .single-price:hover .deal-top:after {
                border-top: 50px solid #262626;
            }
            .single-price:hover .btn-area a {
                background: #262626;
            }
            /* ignore the code below */


            .link-area
            {
                position:fixed;
                bottom:20px;
                left:20px;
                padding:15px;
                border-radius:40px;
                background:#000080;
            }
            .link-area a
            {
                text-decoration:none;
                color:#fff;
                font-size:25px;
            }
            small {
                font-size: 12px;
                text-transform: initial;
            }
        </style>
    @endpush

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider">
            <div class="container-fluid p-0">

                <!-- START REVOLUTION SLIDER 5.0.7 -->
                <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34"
                     style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                    <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                        <ul>
                            <!-- SLIDE 1 -->
                            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default"
                                data-easeout="default" data-masterspeed="default" data-thumb="{{asset('home/serv/stock.jpg')}}" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('home/serv/stock.jpg')}}" alt="" data-bgposition="center 40%" data-bgfit="cover"
                                     data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-black-333 rs-parallaxlevel-0"
                                     id="slide-1-layer-1"
                                     data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                     data-y="['top','top','top','top']" data-voffset="['120','100','70','90']"
                                     data-fontsize="['52','46','40','28']"
                                     data-lineheight="['70','60','50','45']"
                                     data-fontweight="['800','700','700','700']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">
                                    An <span class="text-theme-colored2"> Innovative</span> Way to Grow Your <span class="text-theme-colored2"> Wealth</span>
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-black-888 rs-parallaxlevel-0"
                                     id="slide-1-layer-2"
                                     data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                     data-y="['top','top','top','top']" data-voffset="['280','220','180','180']"
                                     data-fontsize="['18','18','16','13']"
                                     data-lineheight="['30','30','28','25']"
                                     data-fontweight="['600','600','600','600']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;">
                                    We provide the expertise needed to navigate the stocks world and earn unlimited returns from the comfort of
                                    your home.
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-1-layer-3"
                                     data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']"
                                     data-y="['top','top','top','top']" data-voffset="['360','290','260','260']"
                                     data-fontsize="['18','18','16','16']"
                                     data-lineheight="['30','30','30','30']"
                                     data-fontweight="['600','600','600','600']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;"><a href="{{route('register')}}" class="btn btn-dark btn-theme-colored2 btn-xl mr-10">Get Started</a>
                                    <a href="{{route('login')}}" class="btn btn-theme-colored2 btn-default btn-xl">Login Now</a>
                                </div>
                            </li>
                            <!-- SLIDE 2 -->
                            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default"
                                data-masterspeed="default" data-thumb="{{asset('home/serv/6.jpg')}}" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('home/serv/6.jpg')}}" alt="" data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-black-333 rs-parallaxlevel-0"
                                     id="slide-2-layer-1"
                                     data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                     data-y="['top','top','top','top']" data-voffset="['120','100','70','90']"
                                     data-fontsize="['52','46','40','36']"
                                     data-lineheight="['70','60','50','45']"
                                     data-fontweight="['800','700','700','700']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Mulit-faceted <span class="text-theme-colored2"> Earning
                                    </span> Structure for <span class="text-theme-colored2"> your money</span>
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-black-888 rs-parallaxlevel-0"
                                     id="slide-2-layer-2"
                                     data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                     data-y="['top','top','top','top']" data-voffset="['280','220','180','180']"
                                     data-fontsize="['18','18','16','13']"
                                     data-lineheight="['30','30','28','25']"
                                     data-fontweight="['600','600','600','600']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;">
                                    We invest in multi-faceted industries that range from Forex, to stock to Agriculture to oil and Gas, and to<br/>
                                    Gold Mining including Clean energy that guarantees returns
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-2-layer-3"
                                     data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']"
                                     data-y="['top','top','top','top']" data-voffset="['360','290','260','260']"
                                     data-fontsize="['18','18','16','16']"
                                     data-lineheight="['30','30','30','30']"
                                     data-fontweight="['600','600','600','600']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;"><a href="{{route('register')}}" class="btn btn-dark btn-theme-colored2 btn-xl mr-10">Start Earning</a>
                                    <a href="{{route('login')}}" class="btn btn-theme-colored2 btn-default btn-xl">Login Now</a>
                                </div>
                            </li>
                            <!-- SLIDE 3 -->
                            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default"
                                data-masterspeed="default" data-thumb="{{asset('home/serv/5.jpg')}}" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('home/serv/5.jpg')}}" alt="" data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-black-333 rs-parallaxlevel-0"
                                     id="slide-3-layer-1"
                                     data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                     data-y="['top','top','top','top']" data-voffset="['120','100','70','90']"
                                     data-fontsize="['52','46','40','36']"
                                     data-lineheight="['70','60','50','45']"
                                     data-fontweight="['800','700','700','700']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Invest <span class="text-theme-colored2"> In </span>
                                    Real Estate <span class="text-theme-colored2"> for secure tomorrow</span>
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-black-888 rs-parallaxlevel-0"
                                     id="slide-3-layer-2"
                                     data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                     data-y="['top','top','top','top']" data-voffset="['280','220','180','180']"
                                     data-fontsize="['18','18','16','13']"
                                     data-lineheight="['30','30','28','25']"
                                     data-fontweight="['600','600','600','600']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;">
                                    A vast opportunity awaits you in the Real Estate industry<br/> as estates and estate resources
                                    have become the main deal today
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-3-layer-3"
                                     data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']"
                                     data-y="['top','top','top','top']" data-voffset="['360','290','260','260']"
                                     data-fontsize="['18','18','16','16']"
                                     data-lineheight="['30','30','30','30']"
                                     data-fontweight="['600','600','600','600']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;"><a href="{{route('register')}}" class="btn btn-dark btn-theme-colored2 btn-xl mr-10">Invest Now</a>
                                    <a href="{{route('login')}}" class="btn btn-theme-colored2 btn-default btn-xl">Login Now</a>
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.4);"></div>
                    </div>
                </div>

                <!-- END REVOLUTION SLIDER -->
                <script type="text/javascript">
                    var tpj=jQuery;
                    var revapi34;
                    tpj(document).ready(function() {
                        if(tpj("#rev_slider_home").revolution == undefined){
                            revslider_showDoubleJqueryError("#rev_slider_home");
                        }else{
                            revapi34 = tpj("#rev_slider_home").show().revolution({
                                sliderType:"standard",
                                jsFileLocation:"{{asset('home/js/revolution-slider/js/')}}",
                                sliderLayout:"fullwidth",
                                dottedOverlay:"none",
                                delay:9000,
                                navigation: {
                                    keyboardNavigation:"on",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation:"off",
                                    onHoverStop:"on",
                                    touch:{
                                        touchenabled:"on",
                                        swipe_threshold: 75,
                                        swipe_min_touches: 1,
                                        swipe_direction: "horizontal",
                                        drag_block_vertical: false
                                    }
                                    ,
                                    arrows: {
                                        style:"zeus",
                                        enable:true,
                                        hide_onmobile:true,
                                        hide_under:600,
                                        hide_onleave:true,
                                        hide_delay:200,
                                        hide_delay_mobile:1200,
                                        tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                        left: {
                                            h_align:"left",
                                            v_align:"center",
                                            h_offset:30,
                                            v_offset:0
                                        },
                                        right: {
                                            h_align:"right",
                                            v_align:"center",
                                            h_offset:30,
                                            v_offset:0
                                        }
                                    },
                                    bullets: {
                                        enable:true,
                                        hide_onmobile:true,
                                        hide_under:600,
                                        style:"metis",
                                        hide_onleave:true,
                                        hide_delay:200,
                                        hide_delay_mobile:1200,
                                        direction:"horizontal",
                                        h_align:"center",
                                        v_align:"bottom",
                                        h_offset:0,
                                        v_offset:30,
                                        space:5,
                                        tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                                    }
                                },
                                viewPort: {
                                    enable:true,
                                    outof:"pause",
                                    visible_area:"80%"
                                },
                                responsiveLevels:[1240,1024,778,480],
                                gridwidth:[1240,1024,778,480],
                                gridheight:[600,550,500,450],
                                lazyType:"none",
                                parallax: {
                                    type:"scroll",
                                    origo:"enterpoint",
                                    speed:400,
                                    levels:[5,10,15,20,25,30,35,40,45,50],
                                },
                                shadow:0,
                                spinner:"off",
                                stopLoop:"off",
                                stopAfterLoops:-1,
                                stopAtSlide:1,
                                shuffle:"off",
                                autoHeight:"off",
                                hideThumbsOnMobile:"off",
                                hideSliderAtLimit:0,
                                hideCaptionAtLimit:0,
                                hideAllCaptionAtLilmit:0,
                                debugMode:false,
                                fallbacks: {
                                    simplifyAll:"off",
                                    nextSlideOnWindowFocus:"off",
                                    disableFocusListener:false,
                                }
                            });
                        }
                    }); /*ready*/
                </script>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </section>

        <!-- Section: Features -->
        <section id="features">
            <div class="container pb-sm-40">
                <div class="section-content">
                    <div class="row text-center mb-50">
                        <div class="col-md-12">
                            <h4 class="mt-0">Welcome to {{$siteName}}</h4>
                            <div class="line-bottom-centered"></div>
                            <h2 class="font-weight-500 font-28">We provide the best <span class="text-theme-colored2">Investment</span>, financial &amp; professional
                                wealth solution and strategy for increasing your <span class="text-theme-colored2"> financial</span> growth</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="feature-item maxwidth400 mb-sm-30">
                                <div class="thumb">
                                    <img src="{{asset('home/images/about/ab1.jpg')}}" alt="" class="img-fullwidth">
                                    <div class="features-description">
                                        <h3 class="text-white mt-0 mb-5"> Financial Analysis</h3>
                                        <p class="text-white font-13">We deliver true results, focusing on strategic decisions and practical actions tailored to our
                                            clients needs. </p>
                                    </div>
                                </div>
                                <div class="features-title">
                                    <div class="features-icon"><i class="pe-7s-display1"></i></div>
                                    <a href="#"><h3 class=""> Business Analysis</h3></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="feature-item maxwidth400 mb-sm-30">
                                <div class="thumb">
                                    <img src="{{asset('home/images/about/ab2.jpg')}}" alt="" class="img-fullwidth">
                                    <div class="features-description">
                                        <h3 class="text-white mt-0 mb-5"> AI-Integrated Service</h3>
                                        <p class="text-white font-13">
                                            To foster quicker result and accurate calculation, we use AI-integrated solutions to
                                            provide optimized experience and guaranteed returns
                                        </p>
                                    </div>
                                </div>
                                <div class="features-title">
                                    <div class="features-icon"><i class="pe-7s-graph1"></i></div>
                                    <a href="#"><h3 class=""> AI-Integrated Service</h3></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="feature-item maxwidth400 mb-sm-30">
                                <div class="thumb">
                                    <img src="{{asset('home/images/about/ab3.jpg')}}" alt="" class="img-fullwidth">
                                    <div class="features-description">
                                        <h3 class="text-white mt-0 mb-5"> Expertise Unfeigned</h3>
                                        <p class="text-white font-13">
                                            With over 100+ experts and over a decade experience in the financial business, we ensure that both
                                            your funds are insured, guaranteed and safe.
                                        </p>
                                    </div>
                                </div>
                                <div class="features-title">
                                    <div class="features-icon"><i class="pe-7s-display2"></i></div>
                                    <a href="#"><h3 class=""> Expertise Unfeigned</h3></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section About -->
        <section class="bg-silver-light">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-uppercasetext-theme-colored mt-0 line-bottom-theme-colored2 mb-20">Who We <span class="text-theme-colored2">Are?</span></h2>
                            <p class="lead mb-10">
                                Founded in 2012, we are a global investment agency helping individuals build their financial dreams into reality. From a humble beginning, we have grown to become a notable force in the investment industry with over 40K+ users.
                            </p>
                            <p class="lead mb-10">
                                We are your all-in-one destination for navigating the world of investments. Specializing in Crypto Mining, stocks, retirement planning, gold, medical cannabis, and oil and gas, {{$siteName}} is
                                your gateway to a diverse range of lucrative opportunities.
                            </p>
                            <p>
                                At {{$siteName}}, we're not just an investment platform; we're your financial ally on the path to
                                success. Our mission is to empower investors with the knowledge and tools they need to make informed
                                decisions across various financial landscapes.
                            </p>
                            <div class="row">
                                @if(!empty($web->phone))
                                    <div class="col-sm-6 col-md-4">
                                        <div class="about-info mt-10 mb-sm-30">
                                            <i class="fa fa-phone font-24 text-theme-colored2"></i>
                                            <h5>Contact Number</h5>
                                            <p>{{$web->phone}}</p>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-sm-6 col-md-4">
                                    <div class="about-info mt-10 mb-sm-30">
                                        <i class="fa fa-map font-24 text-theme-colored2"></i>
                                        <h5>Office Address</h5>
                                        <p>{!! $web->address !!} </p>
                                    </div>
                                </div><div class="col-sm-6 col-md-4">
                                    <div class="about-info mt-10 mb-sm-30">
                                        <i class="fa fa-send font-24 text-theme-colored2"></i>
                                        <h5>Mailing Address</h5>
                                        <p>{{$web->email}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-hover-effect about-video mt-sm-30">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('home/images/about/1.jpg')}}" alt="project">
                                    </div>
                                    <div class="video-button"></div>
                                    <a class="hover-link" data-lightbox-gallery="youtube-video" href="#" title="Youtube Video">Youtube Video</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Services -->
        <section id="services" class="services">
            <div class="container pb-40">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title font-weight-300 text-center">We Are<span class="text-theme-colored2 font-weight-600"> Providing</span> You Some <span class="text-theme-colored2 font-weight-600">Special</span> Services Since  <span class="text-theme-colored2 font-weight-600">25+</span> Years</h2>
                            <div class="line-bottom-centered"></div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box  icon-filled left media p-0 mb-40"> <a class="media-left pull-left flip" href="#"><i class="fa fa-bar-chart-o"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading font-weight-600">Financial Analysis</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box  icon-filled left media p-0 mb-40"> <a class="media-left pull-left flip" href="#"><i class="fa fa-area-chart"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading font-weight-600">Wealth Growth</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box  icon-filled left media p-0 mb-40"> <a class="media-left pull-left flip" href="#"><i class="fa fa-pie-chart"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading font-weight-600">Success Report</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box  icon-filled left media p-0 mb-40"> <a class="media-left pull-left flip" href="#"><i class="fa fa-cubes"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading font-weight-600">Diversification Plan</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box  icon-filled left media p-0 mb-40"> <a class="media-left pull-left flip" href="#"><i class="fa fa-globe"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading font-weight-600">Global Business</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box  icon-filled left media p-0 mb-40"> <a class="media-left pull-left flip" href="#"><i class="fa fa-bug"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading font-weight-600">Risk Management</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Team -->
        <section class="parallax layer-overlay overlay-dark-8" data-bg-img="{{asset('home/images/bg/bg6.jpg')}}" data-bg-parallax="0.3">
            <div class="container pb-sm-20">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="text-uppercase text-white title">Our <span class="text-theme-colored2">Services</span></h2>
                            <div class="line-bottom-theme-colored2"></div>
                        </div>
                        <div class="col-md-8">
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        @foreach($services as $service)
                            <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
                                <div class="image-box-thumb">
                                    <img class="img-fullwidth" alt="" src="{{asset('home/serv/'.$service->photo)}}">
                                </div>
                                <div class="image-box-details pt-15 pb-sm-20">
                                    <a href="{{route('service.details',['id'=>$service->id])}}"><h4 class="title text-uppercase text-white font-weight-600 mt-0 mb-5">{{$service->title}}</h4></a>
                                    <h6 class="text-gray-lightgray mt-0"><em>{{$service->short}}</em></h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Gallery -->
        <section id="gallery">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-uppercase title">Work <span class="text-theme-colored2">Gallery</span></h2>
                            <div class="circled-line-left-theme-colored2"></div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Works Filter -->
                            <div class="portfolio-filter">
                                {{--                                <a href="#" class="active" data-filter="*">All</a>--}}
                            </div>
                            <!-- End Works Filter -->

                            <!-- Portfolio Gallery Grid -->
                            <div id="grid" class="gallery-isotope default-animation-effect grid-3 gutter clearfix">
                                @foreach($services as $serv)
                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item marketing finance">
                                        <div class="project-gallery">
                                            <div class="project-thumb">
                                                <img class="img-fullwidth" alt="" src="{{asset('home/serv/'.$serv->photo)}}">
                                                <div class="project-caption">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">{{$serv->title}}</h3>
                                                    <a href="{{route('service.details',['id'=>$serv->id])}}" class="text-white font-13">Read More <span class="fa fa-angle-right"></span></a>
                                                    <div class="show-icon"><a class="hover-link" data-lightbox="image" href="{{asset('home/serv/'.$serv->photo)}}"><i class="pe-7s-expand1 text-white"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->
                                @endforeach


                            </div>
                            <!-- End Portfolio Gallery Grid -->
                        </div>
                    </div>
                </div>
            </div >
        </section>

        <div class="pricing-area" style="margin-bottom: 5rem;margin-top: 5rem;">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Our Packages</span>
                    <h2>Specialized Investment Packages</h2>
                </div>
                <div class="row justify-content-center">
                    @foreach($packages as $package)
                        @inject('option','App\Defaults\Custom')
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-price">
                                <div class="deal-top">
                                    <h3>{{$package->name}}</h3>
                                    <h4> {{$package->roi}}%/ <span class="sup">{{$option->getReturnType($package->returnType)}}</span> </h4>
                                    <small class="text-white">{{$package->note}}</small>
                                </div>
                                <div class="deal-bottom">
                                    <ul class="deal-item">
                                        <li>
                                            Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                                ${{number_format($package->maxAmount,2)}}
                                            @else
                                                Unlimited
                                            @endif
                                        </li>
                                        <li>Profit return: {{$package->roi}}% {{$option->getReturnType($package->returnType)}}</li>
                                        <li>Contract Duration: {{$package->Duration}}</li>
                                        <li>Referral Bonus: {{$package->referral}}% </li>
                                    </ul>
                                    <div class="btn-area">
                                        <a href="{{route('register')}}">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <!-- Divider: Funfact -->
        <section class="layer-overlay overlay-dark-7 parallax" data-bg-img="{{asset('home/images/bg/bg7.jpg')}}">
            <div class="container pt-70 pb-sm-30">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h5 class="text-white mb-0"><em>Some Statistics</em></h5>
                        <h2 class="text-white mt-0">See Some Records In Numbers</h2>
                        <div class="line-bottom-centered"></div>
                    </div>
                </div>
                <div class="row mt-30 text-center">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact">
                            <i class="pe-7s-smile text-theme-colored2 font-48 mb-20"></i>
                            <h2 data-animation-duration="2000" data-value="75400" class="animate-number text-white font-42 font-weight-600 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">Happy Investors</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact">
                            <i class="pe-7s-notebook text-theme-colored2 font-48 mb-20"></i>
                            <h2 data-animation-duration="2000" data-value="10" class="animate-number text-white font-42 font-weight-600 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">Years of Experience</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact">
                            <i class="pe-7s-users text-theme-colored2 font-48 mb-20"></i>
                            <h2 data-animation-duration="2000" data-value="27456222" class="animate-number text-white font-42 font-weight-600 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">Investment completed</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact">
                            <i class="pe-7s-study text-theme-colored2 font-48 mb-20"></i>
                            <h2 data-animation-duration="2000" data-value="5" class="animate-number text-white font-42 font-weight-600 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">Awards won</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Testimonials -->
        <section class="layer-overlay overlay-white-9" data-bg-img="{{asset('home/images/bg/bg9.jpg')}}">
            <div class="container pb-50 pb-sm-0">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="font-30 font-weight-500 line-bottom-theme-colored2 mt-0 mb-20 mt-sm-0">Client's <span class="text-theme-colored2">Testimonials</span></h3>
                            <div class="owl-carousel-1col owl-nav-bottom" data-nav="true">
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="comment mt-20">
                                            <p class="font-16 text-black-666">
                                                Investing with {{$siteName}} has been a game-changer for my financial world.
                                                My first investment of $150 grew to yield over $1000 and that increased my faith in them.
                                            </p>
                                        </div>
                                        <div class="content mt-30">
                                            <div class="thumb"> <img class="img-circle" alt="" src="https://ui-avatars.com/api/?name=Jonathan&background=0D8ABC&color=fff"> </div>
                                            <div class="mr-20 mt-0">
                                                <h5 class="author font-weight-600">Jonathan S</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="comment mt-20">
                                            <p class="font-16 text-black-666">
                                                {{$siteName}} is simply the best. I started out trading cryptocurrencies on Binance but
                                                after so many losses, I decided to seek for a real Broker to help me;{{$siteName}} has been
                                                that real broker for me for the past 1 year
                                            </p>
                                        </div>
                                        <div class="content mt-30">
                                            <div class="thumb"> <img class="img-circle" alt="" src="https://ui-avatars.com/api/?name=Rachel&background=0D8ABC&color=fff"> </div>
                                            <div class="mr-20 mt-0">
                                                <h5 class="author font-weight-600">Rachel A.</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="comment mt-20">
                                            <p class="font-16 text-black-666">
                                                Navigating the world of financial freedom has been a hectic journey for me until I met with
                                                {{$siteName}}. Since then, I just relax and plan my vacation from my returns on {{$siteName}}.
                                            </p>
                                        </div>
                                        <div class="content mt-30">
                                            <div class="thumb"> <img class="img-circle" alt="" src="https://ui-avatars.com/api/?name=Adrew324&background=0D8ABC&color=fff"> </div>
                                            <div class="mr-20 mt-0">
                                                <h5 class="author font-weight-600">Andrew324</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="font-30 font-weight-500 line-bottom-theme-colored2 mt-0 mb-20 mt-sm-90">Frequently Asked <span class="text-theme-colored2">Questions</span></h3>
                            <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2 accordion-large" id="accordion6" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headin1">
                                        <h6 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collaps1" aria-expanded="true" aria-controls="collaps1">
                                                What is {{$siteName}}?
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collaps1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headin1">
                                        <div class="panel-body">
                                            <p>{{$siteName}} our company provides a full investment service focused on the bitcoin and cryptocurrency market We are among the best platforms to invest and grow your bitcoin and other cryptocurrency</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading2">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                How do I create my account?
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                        <div class="panel-body">
                                            <p>Registration process is very easy and will take a few moments to complete Simply click CREATE ACCOUNT button  and fill in all the required fields</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading3">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                How do I make a deposit?
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                        <div class="panel-body">
                                            <p>
                                                To deposit funds in your trading account is quick and simple. For your
                                                convenience you may choose one of the several available deposit methods.
                                                To make a successful deposit please follow the steps below:<br>
                                            <ul>
                                                <li>Login to your account Click on the New Investment button in the
                                                    DASHBOARD section.<br>
                                                </li>

                                                <li>Choose the deposit option And fill the form including the amount and
                                                    the package.
                                                </li>
                                                <li>
                                                    You will receive the wallet address to make payment to on the next page.
                                                    After payment, contact support.
                                                </li>
                                                <li>
                                                    Once your deposit has been confirmed, the status of the investment will change
                                                    to <span class="text-primary">Ongoing</span> which means that it has been confirmed
                                                    and your investment started.
                                                </li>
                                            </ul>


                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading4">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                How long does my deposit take before it can reflect on my {{$siteName}} account dashboard?
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                        <div class="panel-body">
                                            <p>Your deposit will be reflected immediately once it is confirmed on the blockchain network</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Blog Area -->
        <div class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Latest Transactions</span>
                    <h2>Most Recent Transactions</h2>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Recent Deposits</div>
                        <table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                            <tr>
                                <th>Name</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($deposits as $deposit)
                                @inject('option','App\Defaults\Custom')
                                <tr>
                                    <td>{{$option->getInvestor($deposit->user)}}</td>
                                    <td>${{number_format($deposit->amount,2)}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>

                    <div class="col-md-6">
                        <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Latest Withdrawals</div>
                        <table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                            <tr>
                                <th>Name</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($withdrawals as $withdrawal)
                                @inject('option','App\Defaults\Custom')
                                <tr>
                                    <td>{{$option->getInvestor($withdrawal->user)}}</td>
                                    <td>${{number_format($withdrawal->amount,2)}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
            </section>
            <!-- End News One -->

        <!-- Section: blog -->
        <section id="blog">
            <div class="container pb-sm-40">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-uppercase title">Latest <span class="text-theme-colored2">News</span></h2>
                            <div class="circled-line-left-theme-colored2"></div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 mb-sm-40">
                            <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                            <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Clients -->
        <section class="clients">
            <div class="container pt-15 pb-15">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Section: Clients -->
                        <div class="owl-carousel-6col clients-logo transparent text-center">
                            <div class="item"> <a href="#"><img src="{{asset('home/images/clients/1.png')}}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{asset('home/images/clients/2.png')}}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{asset('home/images/clients/3.png')}}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{asset('home/images/clients/4.png')}}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{asset('home/images/clients/5.png')}}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{asset('home/images/clients/6.png')}}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{asset('home/images/clients/3.png')}}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{asset('home/images/clients/4.png')}}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{asset('home/images/clients/5.png')}}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{asset('home/images/clients/6.png')}}" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

@endsection
