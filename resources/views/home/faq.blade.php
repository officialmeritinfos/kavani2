@extends('home.base')
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <section class="inner-header divider layer-overlay overlay-dark-4" data-bg-img="{{asset('home/images/bg/bg8.jpg')}}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">{{$pageName}}</h2>
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


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-2">
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
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse5" aria-expanded="false" aria-controls="collapse4">
                                            How do I make a withdrawal?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="panel-body">
                                        <p>To make a withdrawal request click the WITHDRAW button at the top center of your {{$siteName}} account dashboard and input the required details to withdraw</p>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse6" aria-expanded="false" aria-controls="collapse4">
                                            How long does it take to process my withdrawal?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="panel-body">
                                        <p>Once we receive your withdrawal request we process immediately and send to your bitcoin wallet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse7" aria-expanded="false" aria-controls="collapse4">
                                            Can I have more than one account?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="panel-body">
                                        <p>No you cannot have more than one account only investors on the vip plan are allowed to do so</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse8" aria-expanded="false" aria-controls="collapse4">
                                            Is this company properly registered?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="panel-body">
                                        <p>Yes we are officially and properly registered with the United State . our company registration number is USFDAISO34847676   and registered with the name {{$siteName}}</p>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse9" aria-expanded="false" aria-controls="collapse4">
                                            Can I have more than two accounts?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="panel-body">
                                        <p>We do not allow multiple accounts except only for our investors on the VIP plan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse10" aria-expanded="false" aria-controls="collapse4">
                                            how many times can i make a deposit?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="panel-body">
                                        <p>You can make as many deposit as you want on any of our investment plans except theHERCULES ARBITRAGE PLAN where you can only invest two times. And you can only withdraw once in the HERCULES ARBITRAGE PLAN.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
