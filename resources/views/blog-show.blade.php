@extends('layouts.frontend')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
@endsection

@section('menu')
    <div class="container secondary-navbar">
        <div class="row">

            <nav class="navbar navbar-expand-lg navbar-light w-100" id="navbar-responsive">
                <a class="navbar-brand" href="{{ url('/') }}"><img id="brand-img"  src="{{ URL::asset('img/brand/logo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse section-links" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link scroll active" href="{{ url('/') }}/#main-wrapper">{{ __('Home') }} <span class="sr-only">(current)</span></a>
                        </li>		
                        @if (config('frontend.features_section') == 'on')
                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{ url('/') }}/#features-wrapper">{{ __('Features') }}</a>
                            </li>
                        @endif	
                        @if (config('frontend.pricing_section') == 'on')
                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{ url('/') }}/#prices-wrapper">{{ __('Prices') }}</a>
                            </li>
                        @endif	
                        @if (config('frontend.faq_section') == 'on')
                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{ url('/') }}/#faq-wrapper">{{ __('FAQs') }}</a>
                            </li>
                        @endif						
                        @if (config('frontend.blogs_section') == 'on')
                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{ url('/') }}/#blog-wrapper">{{ __('Blogs') }}</a>
                            </li>
                        @endif                       											
                    </ul>

                    @if (Route::has('login'))
                        <div id="login-buttons">
                            @auth
                                <a href="{{ route('user.templates') }}" class="action-button dashboard-button pl-5 pr-5">{{ __('Dashboard') }}</a>
                            @else
                                <a href="{{ route('login') }}" class="" id="login-button">{{ __('Sign In') }}</a>

                                @if (config('settings.registration') == 'enabled')
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-2 action-button register-button pl-5 pr-5">{{ __('Sign Up') }}</a>
                                    @endif
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </nav>

        </div>
    </div>
@endsection

@section('content')

    <div class="container-fluid secondary-background">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="section-title">
                    <!-- SECTION TITLE -->
                    <div class="text-center mb-9 mt-9 pt-9" id="contact-row">

                        <h6 class="fs-30 mt-6 font-weight-bold text-center">{{ $blog->title }}</h6>
                        <p class="fs-12 text-center text-muted mb-5"><span><i class="mdi mdi-account-edit mr-1"></i>{{ $blog->created_by }}</span> / <span><i class="mdi mdi-alarm mr-1"></i>{{ date('F j, Y', strtotime($blog->created_at)) }}</span></p>


                    </div> <!-- END SECTION TITLE -->
                </div>
            </div>
        </div>
    </div>

    <section id="blog-wrapper" class="secondary-background">

        <div class="container">

            <div class="row justify-content-md-center">

                <div class="col-md-12 col-sm-12">
                    <div class="blog mb-7">
                        <img src="{{ URL::asset($blog->image) }}" alt="Blog Image" class="main-image">
                    </div>
                    
                    <div class="fs-14 main-text" id="blog-view-mobile">{!! $blog->body !!}</div>
                </div>
     
            </div>        
        </div>

    </section>
@endsection

@section('js')
	<!-- Awselect JS -->
	<script src="{{URL::asset('plugins/awselect/awselect.min.js')}}"></script>
	<script src="{{URL::asset('js/awselect.js')}}"></script>  
    <script src="{{URL::asset('js/minimize.js')}}"></script> 
@endsection
