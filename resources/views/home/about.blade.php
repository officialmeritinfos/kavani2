@extends('home.base')
@section('content')

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark-4" data-bg-img="{{asset('home/images/bg/bg8.jpg')}}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">About</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">{{$pageName}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
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
                            <p class="about-one__text-2">
                                {{$siteName}} is managed by a team of trading experts specializing in generating profits through currency, stocks, options, and commodities trading on the foreign exchange market. We employ a variety of trading techniques to meet client goals.
                            </p>
                            <p class="about-one__text-2">
                                The {{$siteName}} team comprises financial market professionals assembled to provide the best possible trading conditions. Our specialists played a key role in developing technical specifications for a modern platform suitable for both beginners and experienced traders.
                            </p>
                            <p class="about-one__text-2">
                                Throughout our existence, we've aimed to balance lower risk and higher profits for our customers through innovative analysis, information dispersion, and expert assistance. Our team includes experienced professionals with diverse and in-depth knowledge, enhancing the entire investing process.
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



    </div>


@endsection
