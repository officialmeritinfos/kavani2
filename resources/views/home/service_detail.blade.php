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

    <!-- Start Services Details Area -->
    <div class="services-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="services-details-desc">
                        <h3>{{$service->title}}</h3>
                        <p>{{$service->short}}</p>
                        <img src="{{asset('home/serv/'.$service->photo)}}" alt="image">
                        <p>
                            {!! str_replace('MYSITE',$siteName,$service->content) !!}
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    </div>

@endsection
