
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>


    <!-- Stylesheet -->
    <link href="{{asset('home/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('home/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('home/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('home/css/css-plugin-collections.css')}}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{asset('home/css/menuzord-megamenu.css')}}" rel="stylesheet"/>
    <link id="menuzord-menu-skins" href="{{asset('home/css/menuzord-skins/menuzord-boxed.css')}}" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{asset('home/css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{asset('home/css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{asset('home/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="{{asset('home/css/style.css')}}" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="{{asset('home/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{asset('home/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{asset('home/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="{{asset('home/css/colors/theme-skin-color-set1.css')}}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{asset('home/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('home/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('home/js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{asset('home/js/jquery-plugin-collection.js')}}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{asset('home/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('home/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />
    @stack('css')
</head>
<body class="has-side-panel side-panel-right fullwidth-page">
@inject('injected','App\Defaults\Custom')
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <img alt="" src="{{asset('home/images/preloaders/5.gif')}}">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-top bg-theme-colored border-top-theme-colored2-2px sm-text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="widget text-white">
                            <ul class="list-inline xs-text-center text-white">
                                <li class="m-0 pl-10 pr-10">
                                    <a href="mailto:{{$web->email}}" class="text-white"><i class="fa fa-envelope-o text-theme-colored2 mr-5"></i>
                                        {{$web->email}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="side-panel-trigger" class="side-panel-trigger ml-15 mt-8 pull-right sm-pull-none"><a href="#"><i class="fa fa-bars font-24"></i></a>
                        </div>
                        <div class="widget">
                            <ul class="list-inline text-right flip sm-text-center">
                                <li>
                                    <a class="text-white" href="{{url('faq')}}">FAQ</a>
                                </li>
                                <li class="text-white">|</li>
                                <li>
                                    <a class="text-white" href="{{url('plans')}}">Plans</a>
                                </li>
                                <li class="text-white">|</li>
                                <li>
                                    <a class="text-white" href="{{route('register')}}">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle bg-lightest xs-text-center p-0">
            <div class="container pt-20 pb-15">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <a class="menuzord-brand pull-left flip sm-pull-center mt-10" href="{{url('/')}}"><img src="{{asset('home/images/'.$web->logo)}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                <div class="container">
                    <nav id="menuzord" class="menuzord default theme-colored menuzord-responsive">
                        <ul class="menuzord-menu">
                            <li class="active"><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('about')}}">About</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{url('plans')}}" class="nav-link">Plans</a></li>
                                    <li ><a href="{{url('faqs')}}" class="nav-link">Frequently Asked Questions</a></li>
                                    <li><a href="{{url('terms')}}" class="nav-link">Terms & Conditions</a></li>
                                    <li><a href="{{url('privacy')}}" class="nav-link">Privacy policy</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Service</a>
                                <ul class="dropdown">
                                    @foreach($injected->getServices() as $service)
                                        <li><a href="{{route('service.details',['id'=>$service->id])}}" class="nav-link">{{$service->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="#">Account</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('login')}}" class="nav-link">Login</a></li>

                                    <li><a href="{{route('register')}}" class="nav-link">Register</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-color="#152029">
        <div class="container pt-60 pb-20">
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <img alt="" src="{{asset('home/images/'.$web->logo)}}">
                    <p class="mt-20">{!! $web->address !!}</p>
                    <ul class="list-inline">
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-gray mr-5"></i> <a class="text-gray" href="mailto:{{$web->email}}">{{$web->email}}</a> </li>
                    </ul>
                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 icon-circled clearfix mt-10">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h4 class="widget-title line-bottom-theme-colored2">Useful Links</h4>
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <ul>
                                <li ><a href="{{url('plans')}}" class="nav-link">Plans</a></li>
                                <li ><a href="{{url('faqs')}}" class="nav-link">Frequently Asked Questions</a></li>
                                <li ><a href="{{url('terms')}}" class="nav-link">Terms & Conditions</a></li>
                                <li ><a href="{{url('privacy')}}" class="nav-link">Privacy policy</a></li>

                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <ul>
                                <li ><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
                                <li ><a href="{{route('register')}}" class="nav-link">Register</a></li>
                                <li ><a href="{{route('login')}}" class="nav-link">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h4 class="widget-title line-bottom-theme-colored2">Opening Hours</h4>
                    <div class="opening-hours">
                        <ul class="list-border">
                            <li class="clearfix"> <span> Mon - Sun :  </span>
                                <div class="value pull-right"> Open 24/7 </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" data-bg-color="#253039">
            <div class="container pt-20 pb-20">
                <div class="row">
                    <div class="col-md-6">
                        <p class="font-14 text-black-777 m-0">Copyright &copy;2012 - {{date('Y')}} <span class="text-theme-colored2">{{$siteName}}</span>. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="widget no-border m-0">
                            <ul class="list-inline sm-text-center mt-5 font-14">
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Help Desk</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Chart-->
<script src="{{asset('home/js/chart.js')}}"></script>
<!-- JS | Custom script for all pages -->
<script src="{{asset('home/js/custom.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset('home/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
@stack('js')
</body>
</html>
