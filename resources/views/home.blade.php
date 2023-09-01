@extends('layouts.frontend')

@section('css')
    <link href="{{URL::asset('plugins/slick/slick.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('plugins/slick/slick-theme.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('plugins/aos/aos.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('plugins/animatedheadline/jquery.animatedheadline.css')}}" rel="stylesheet" />
@endsection

@section('menu')
    <div class="container">
        <div class="row">

            <nav class="navbar navbar-expand-lg navbar-light w-100" id="navbar-responsive">
                <a class="navbar-brand" href="{{ url('/') }}"><img id="brand-img"  src="{{ URL::asset('img/brand/logo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse section-links" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link scroll active" href="#main-wrapper">{{ __('Home') }} <span class="sr-only">(current)</span></a>
                        </li>	
                        @if (config('frontend.features_section') == 'on')
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#features-wrapper">{{ __('Features') }}</a>
                            </li>
                        @endif	
                        @if (config('frontend.pricing_section') == 'on')
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#prices-wrapper">{{ __('Prices') }}</a>
                            </li>
                        @endif							
                        @if (config('frontend.faq_section') == 'on')
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#faq-wrapper">{{ __('FAQs') }}</a>
                            </li>
                        @endif	
                        @if (config('frontend.blogs_section') == 'on')
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#blog-wrapper">{{ __('Blogs') }}</a>
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

        <section id="main-wrapper">
            
            <div class="h-100vh justify-center min-h-screen" id="main-background">

                <div class="container h-100vh ">
                    <div class="row h-100vh vertical-center">
                        <div class="col-sm-12 upload-responsive">
                            <div class="text-container text-center">
                                <h6 class="mb-4 fs-14" data-aos="fade-up" data-aos-delay="100" data-aos-once="true" data-aos-duration="400"><i class="fa-sharp fa-solid fa-sparkles mr-1"></i> {{ __('Meet') }}, {{ config('app.name') }}</span></h6>
                                <h1 data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="500">{{ __('Ultimate AI Creator') }}</span></h1>
                                <div class="word-container" data-aos="fade-up" data-aos-delay="300" data-aos-once="true" data-aos-duration="600">
                                    <h1 class="ah-headline">
                                      <span class="ah-words-wrapper text-center">
                                        <b class="is-visible">{{ __('Article Generator') }}</b>
                                        <b>{{ __('Content Improver') }}</b>
                                        <b>{{ __('Blog Contents') }}</b>
                                        <b>{{ __('Ad Creations') }}</b>
                                        <b>{{ __('Text to Speech') }}</b>
                                        <b>{{ __('And Many More!') }}</b>
                                      </span>
                                    </h1>
                                  </div>
                                <p class="fs-16" data-aos="fade-up" data-aos-delay="400" data-aos-once="true" data-aos-duration="700">{{ __('One platform to generate all AI contents & AI Voiceovers') }}</p>

                                <a href="{{ route('register') }}" class="btn-primary-frontend btn-frontend-scroll-effect mb-2" id="top-main-button"  data-aos="fade-up" data-aos-delay="500" data-aos-once="true" data-aos-duration="800">
                                    <div>
                                        <span>{{ __('Start Creating for Free') }}</span>
                                        <span>{{ __('Start Creating for Free') }}</span>
                                    </div>
                                </a>
                                <div>
                                    <span class="fs-12" data-aos="fade-up" data-aos-delay="900" data-aos-once="true" data-aos-duration="1300">{{ __('No credit card required') }}</span>
                                </div>
                                <div class="text-center d-flex mx-auto justify-content-center mt-5" data-aos="fade-up" data-aos-delay="600" data-aos-once="true" data-aos-duration="900">
                                    <div class="happy-customers">
                                        <div class="customer-avatars">
                                            <img src="{{ URL::asset('img/frontend/customers/1.png') }}" alt="" class="small-avatar">
                                            <img src="{{ URL::asset('img/frontend/customers/2.png') }}" alt="" class="small-avatar overlap">
                                            <img src="{{ URL::asset('img/frontend/customers/3.png') }}" alt="" class="small-avatar overlap">
                                            <img src="{{ URL::asset('img/frontend/customers/4.png') }}" alt="" class="small-avatar overlap">
                                            <img src="{{ URL::asset('img/frontend/customers/5.png') }}" alt="" class="small-avatar overlap">
                                        </div>
                                        <div>
                                            <span class="fs-12">12,577 {{ __('Happy Customers') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                
                    </div>           
                </div>

            </div> 
            
            <div class="container-fluid" id="curve-container">
                <div class="curve-box">
                    <div class="overflow-hidden">
                        <svg class="curve" width="1440" height="105" viewBox="0 0 1440 105" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                            <path d="M0 0C240 68.7147 480 103.072 720 103.072C960 103.072 1200 68.7147 1440 0V104.113H0V0Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION - STEPS
        ========================================================-->
        <section id="steps-wrapper">

            <div class="container pt-9 text-center">

                <!-- SECTION TITLE -->
                <div class="row mb-6">
                    <div class="title">
                        <p class="m-2">{{ __('Start Writing in 3 Easy Steps') }}</p>
                        <h3><span>{{ __('How') }} </span>{{ __('does it work?') }}</h3>                        
                    </div>
                </div> <!-- END SECTION TITLE --> 
                              
            </div> <!-- END CONTAINER -->

            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">
                        <div class="steps-box-wrapper">
                            <div class="steps-box">
                                <div class="step-number-big">
                                    <p>1</p>
                                </div>
                                <div class="step-number">
                                    <h6>{{ __('Step 1') }}</h6>
                                </div>
                                <div class="step-title">
                                    <h2>{{ __('Select a writing tool') }}</h2>
                                </div>
                                <div class="step-description">
                                    <p>{{ __('Choose from a wide array of AI tools to write social media ads, hero sections, blog posts, essays, etc...') }}</p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="500">
                        <div class="steps-box-wrapper">
                            <div class="steps-box">
                                <div class="step-number-big">
                                    <p class="right-space">2</p>
                                </div>
                                <div class="step-number">
                                    <h6>{{ __('Step 2') }}</h6>
                                </div>
                                <div class="step-title">
                                    <h2>{{ __('Tell us what to write about') }}</h2>
                                </div>
                                <div class="step-description">
                                    <p>{{ __('Explain with as many details as possible to the AI what you would like to write about.') }}</p>
                                </div>
                            </div>   
                        </div>                     
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="300" data-aos-once="true" data-aos-duration="600">
                        <div class="steps-box-wrapper">
                            <div class="steps-box">
                                <div class="step-number-big">
                                    <p class="right-space">3</p>
                                </div>
                                <div class="step-number">
                                    <h6>{{ __('Step 3') }}</h6>
                                </div>
                                <div class="step-title">
                                    <h2>{{ __('Generate AI content') }}</h2>
                                </div>
                                <div class="step-description">
                                    <p>{{ __('Our highly trained AI understands your details and generate unique and human-like content in seconds.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </section> <!-- END SECTION STEPS -->
      

        <!-- SECTION - FEATURES
        ========================================================-->
        @if (config('frontend.features_section') == 'on')
            <section id="features-wrapper">

                {!! adsense_frontend_features_728x90() !!}
                
                <div class="container pt-7 text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-6">
                        <div class="title">
                            <p class="m-2">{{ __('Discover available AI tools') }}</p>
                            <h3>{{ __('The') }}<span> {{ __('Ultimate Power') }} </span>{{ __('of AI') }}</h3>                        
                        </div>
                    </div> <!-- END SECTION TITLE --> 
                                  
                </div> <!-- END CONTAINER -->


                <div class="container">    
                    
                    <div class="row">
    
                        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">                
                            <div class="features-nav-menu">
                                <div class="features-nav-menu-inner">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="ai-chat-tab" data-bs-toggle="tab" data-bs-target="#ai-chat" type="button" role="tab" aria-controls="ai-chat" aria-selected="true">{{ __('AI Chat Bots') }}</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="ai-content-tab" data-bs-toggle="tab" data-bs-target="#ai-content" type="button" role="tab" aria-controls="ai-content" aria-selected="false">{{ __('AI Contents') }}</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="ai-image-tab" data-bs-toggle="tab" data-bs-target="#ai-image" type="button" role="tab" aria-controls="ai-image" aria-selected="false">{{ __('AI Images') }}</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="ai-voiceover-tab" data-bs-toggle="tab" data-bs-target="#ai-voiceover" type="button" role="tab" aria-controls="ai-voiceover" aria-selected="false">{{ __('AI Voiceovers') }}</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="ai-speech-tab" data-bs-toggle="tab" data-bs-target="#ai-speech" type="button" role="tab" aria-controls="ai-speech" aria-selected="false">{{ __('AI Speech to Text') }}</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="ai-code-tab" data-bs-toggle="tab" data-bs-target="#ai-code" type="button" role="tab" aria-controls="ai-code" aria-selected="false">{{ __('AI Codes') }}</button>
                                        </li>
			
                                    </ul>
                                </div>
                            </div>					
                        </div>
                
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="pt-6">
                                <div class="features-panel">
                
                                    <div class="tab-content" id="myTabContent">
                
                                        <div class="tab-pane fade show active" id="ai-chat" role="tabpanel" aria-labelledby="ai-chat">
                                            <div class="row features-outer-wrapper">

                                                <div class="col-lg-6 col-md-6 col-sm-12 pl-6 pr-6 align-middle" data-aos="fade-right" data-aos-delay="200" data-aos-once="true" data-aos-duration="500">                                                    
                                                    <div class="features-inner-wrapper text-center">                                                                  
                                                    
                                                        <div class="feature-title">
                                                            <h6 class="fs-12 mb-5"><i class="fa-solid fa-message-captions mr-2 purple-icon"></i>{{ __('AI Chat Bots') }}</h6>
                                                            <h4 class="mb-5 fs-30">{{ __('Creative Virtual AI Assistants') }}</h4>                                                            
                                                        </div>	

                                                        <div class="feature-description">
                                                            <p class="mb-6">{{ __('We have trained our AI Chat Bots with the knowledge of industry experts and conversion experts so you can be sure it knows how to do its job and answer all your questions instantly and provide requested information') }}</p>
                                                        </div>

                                                        <div class="feature-footer text-center">
                                                            <p class="fs-12">{{ __('Powered By OpenAi') }}</p>
                                                        </div>
                                                        
                                                    </div>                                                                                                  						
                                                </div>	

                                                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left" data-aos-delay="300" data-aos-once="true" data-aos-duration="600">
                                                    <div class="feature-image-wrapper">
                                                        <img src="{{ URL::asset('img/frontend/features/chat.webp') }}" alt="">
                                                    </div>
                                                    <div class="feature-footer text-center">
                                                        <p class="fs-12 text-muted">{{ __('Train. Deploy. Enjoy.') }}</p>
                                                    </div>
                                                </div>
                
                                            </div>	
                                        </div>

                                        <div class="tab-pane fade" id="ai-content" role="tabpanel" aria-labelledby="ai-content">
                                            <div class="row features-outer-wrapper">

                                                <div class="col-lg-6 col-md-6 col-sm-12 pl-6 pr-6 align-middle">                                                    
                                                    <div class="features-inner-wrapper text-center">                                                                  
                                                    
                                                        <div class="feature-title">
                                                            <h6 class="fs-12 mb-5"><i class="fa-solid fa-microchip-ai yellow-icon mr-2"></i>{{ __('AI Content Generation') }}</h6>
                                                            <h4 class="mb-5 fs-30 number-font">{{ __('Create amazing content 10X faster') }}</h4>                                                            
                                                        </div>	

                                                        <div class="feature-description">
                                                            <p class="mb-6">{{ config('app.name') }} {{ __('can help you with a variety of writing tasks, from writing blog post, creating better resumes and job descriptions to composing emails and social media content, and many more. With 70+ templates, we can save you time and improve your writing skills.') }}</p>
                                                        </div>

                                                        <div class="feature-footer text-center">
                                                            <p class="fs-12">{{ __('Powered By OpenAi') }}</p>
                                                        </div>
                                                        
                                                    </div>                                                                                                  						
                                                </div>	

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="feature-image-wrapper">
                                                        <img src="{{ URL::asset('img/frontend/features/main-templates.png') }}" alt="">
                                                    </div>
                                                    <div class="feature-footer text-center">
                                                        <p class="fs-12 text-muted">{{ __('Select. Create. Download.') }}</p>
                                                    </div>
                                                </div>
                
                                            </div>	
                                        </div>

                                        <div class="tab-pane fade" id="ai-image" role="tabpanel" aria-labelledby="ai-image">
                                            <div class="row features-outer-wrapper">

                                                <div class="col-lg-6 col-md-6 col-sm-12 pl-6 pr-6 align-middle">                                                    
                                                    <div class="features-inner-wrapper text-center">                                                                  
                                                    
                                                        <div class="feature-title">
                                                            <h6 class="fs-12 mb-5"><i class="fa-solid fa-camera-viewfinder blue-icon mr-2"></i>{{ __('AI Image Creation') }}</h6>
                                                            <h4 class="mb-5 fs-30 number-font">{{ __('Use AI to create any art or image') }}</h4>                                                            
                                                        </div>	

                                                        <div class="feature-description">
                                                            <p class="mb-6">{{ __('Are you looking for a tool to help you create unique beautiful artwork and images quickly and easily? Look no further! Our AI-powered software makes it simple to generate high-quality art and images with just a few clicks. With our intuitive interface and powerful technology, you can create stunning visuals in minutes instead of hours.') }}</p>
                                                        </div>

                                                        <div class="feature-footer text-center">
                                                            <p class="fs-12">{{ __('Powered By OpenAi DALL-E 2 & Stable Diffusion') }}</p>
                                                        </div>
                                                        
                                                    </div>                                                                                                  						
                                                </div>	

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="feature-image-wrapper">
                                                        <img src="{{ URL::asset('img/frontend/features/image.webp') }}" alt="">
                                                    </div>
                                                </div>
                
                                            </div>	
                                        </div>

                                        <div class="tab-pane fade" id="ai-voiceover" role="tabpanel" aria-labelledby="ai-voiceover">
                                            <div class="row features-outer-wrapper">

                                                <div class="col-lg-6 col-md-6 col-sm-12 pl-6 pr-6 align-middle">                                                    
                                                    <div class="features-inner-wrapper text-center">                                                                  
                                                    
                                                        <div class="feature-title">
                                                            <h6 class="fs-12 mb-5"><i class="fa-solid fa-waveform-lines yellow-icon mr-2"></i>{{ __('AI Voiceover Synthesize') }}</h6>
                                                            <h4 class="mb-5 fs-30 number-font">{{ __('Make studio-quality voice overs in minutes') }}</h4>                                                            
                                                        </div>	

                                                        <div class="feature-description">
                                                            <p class="mb-6">{{ __('Truly human emotions in every voice over generated, breathing life into your voice overs. Our AI voices have elements that make a voice sound NATURAL and have all the expressions and tone inflections that are needed to make people more engaged in your content ') }}</p>
                                                        </div>

                                                        <div class="feature-footer text-center">
                                                            <p class="fs-12">{{ __('Powered By Azure & GCP') }}</p>
                                                        </div>
                                                        
                                                    </div>                                                                                                  						
                                                </div>	

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="feature-image-wrapper">
                                                        <img src="{{ URL::asset('img/frontend/features/voiceover.webp') }}" alt="">
                                                    </div>
                                                    <div class="feature-footer text-center">
                                                        <p class="fs-12 text-muted">{{ __('Select. Type. Listen.') }}</p>
                                                    </div>
                                                </div>
                
                                            </div>	
                                        </div>

                                        <div class="tab-pane fade" id="ai-speech" role="tabpanel" aria-labelledby="ai-speech">
                                            <div class="row features-outer-wrapper">

                                                <div class="col-lg-6 col-md-6 col-sm-12 pl-6 pr-6 align-middle">                                                    
                                                    <div class="features-inner-wrapper text-center">                                                                  
                                                    
                                                        <div class="feature-title">
                                                            <h6 class="fs-12 mb-5"><i class="fa-solid fa-music blue-icon mr-2"></i>{{ __('AI Speech to Text Transcribe') }}</h6>
                                                            <h4 class="mb-5 fs-30 number-font">{{ __('Transcribe accurately your audio') }}</h4>                                                            
                                                        </div>	

                                                        <div class="feature-description">
                                                            <p class="mb-6">{{ __('Accurately transcribe audio content in various formats. Enable transcription of your audio files in multiple languages, as well as translation from those languages into English. ') }}</p>
                                                        </div>

                                                        <div class="feature-footer text-center">
                                                            <p class="fs-12">{{ __('Powered By OpenAi Whisper') }}</p>
                                                        </div>
                                                        
                                                    </div>                                                                                                  						
                                                </div>	

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="feature-image-wrapper">
                                                        <img src="{{ URL::asset('img/frontend/features/transcribe.webp') }}" alt="">
                                                    </div>
                                                    <div class="feature-footer text-center">
                                                        <p class="fs-12 text-muted">{{ __('Choose. Upload. Transcribe.') }}</p>
                                                    </div>
                                                </div>
                
                                            </div>	
                                        </div>

                                        <div class="tab-pane fade" id="ai-code" role="tabpanel" aria-labelledby="ai-code">
                                            <div class="row features-outer-wrapper">

                                                <div class="col-lg-6 col-md-6 col-sm-12 pl-6 pr-6 align-middle">                                                    
                                                    <div class="features-inner-wrapper text-center">                                                                  
                                                    
                                                        <div class="feature-title">
                                                            <h6 class="fs-12 mb-5"><i class="fa-solid fa-square-code black-icon mr-2"></i>{{ __('AI Code Generation') }}</h6>
                                                            <h4 class="mb-5 fs-30 number-font">{{ __('Write code like a Pro') }}</h4>                                                            
                                                        </div>	

                                                        <div class="feature-description">
                                                            <p class="mb-6">{{ __('Generate complex algorithms simply by using natural language to explain what you are after, we will take care rest for you. Write code like Pro in Python, Flutter, PHP, JavaScript, Ruby and other programming languages.') }}</p>
                                                        </div>

                                                        <div class="feature-footer text-center">
                                                            <p class="fs-12">{{ __('Powered By OpenAi') }}</p>
                                                        </div>
                                                        
                                                    </div>                                                                                                  						
                                                </div>	

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="feature-image-wrapper">
                                                        <img src="{{ URL::asset('img/frontend/features/code.webp') }}" alt="">
                                                    </div>
                                                    <div class="feature-footer text-center">
                                                        <p class="fs-12 text-muted">{{ __('Think. Generate. Use.') }}</p>
                                                    </div>
                                                </div>
                
                                            </div>	
                                        </div>

                                        

                
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                
                    </div>
            
    
                </div>

            </section>
        @endif
        

        <!-- SECTION - BANNER
        ========================================================-->
        <section id="info-banner">
            <div class="container">
                
                <!-- SECTION TITLE -->
                <div class="row pl-7">
                    <div class="title">
                        <h3>{{ __('What else is') }}<span> {{ __('there?') }} </span></h3>                        
                    </div>
                </div> <!-- END SECTION TITLE -->          

                <div class="row justify-content-center pl-7 pr-7 pt-1 pb-5">
                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">
                        <div class="info-box mr-3 d-flex">
                            <div class="info-text text-center w-80">
                                <h4>{{__ ('Advanced') }}</h4>
                                <h4>{{__ ('Analytics') }}</h4>
                                <p class="fs-12 mt-2 w-90 mx-auto">{{__('Closely monitor and control your AI usage')}}</p>
                            </div>
                            <div class="info-img text-right w-100">
                                <img src="{{ URL::asset('img/frontend/customers/extra-monitoring.webp') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="500">
                        <div class="info-box ml-3 mr-3 team-wrapper">                            
                            <img src="{{ URL::asset('img/frontend/customers/extra1.webp') }}" alt="" class="team-image-1">
                            <img src="{{ URL::asset('img/frontend/customers/extra2.webp') }}" alt="" class="team-image-2">
                            <img src="{{ URL::asset('img/frontend/customers/extra3.webp') }}" alt="" class="team-image-3">
                            <img src="{{ URL::asset('img/frontend/customers/extra4.webp') }}" alt="" class="team-image-4">
                            
                            <div class="team-text text-center">
                                <h4>{{__ ('Team') }}</h4>
                                <h4>{{__ ('Management') }}</h4>
                                <p class="fs-12 mt-2 w-90 mx-auto">{{__('Collaborate with your team to create your desired dream content')}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="300" data-aos-once="true" data-aos-duration="600">
                        <div class="info-box mr-3 d-flex">
                            <div class="info-text pl-4 text-center w-80">
                                <h4>{{__ ('Project') }}</h4>
                                <h4>{{__ ('Management') }}</h4>
                                <p class="fs-12 mt-2 w-90 mx-auto">{{__('Organize your creative projects')}}</p>
                            </div>
                            <div class="info-img text-right w-100">
                                <img src="{{ URL::asset('img/frontend/customers/extra-project.webp') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION - TEMPLATES
        ========================================================-->
        <section id="templates-wrapper">

            {!! adsense_frontend_features_728x90() !!}
            

            <div class="container pt-9 text-center">

                <!-- SECTION TITLE -->
                <div class="row mb-6">
                    <div class="title">
                        <p class="m-2">{{ __('Custom Templates') }}</p>
                        <h3><span> {{ __('Unlimited Templates') }} </span>{{ __('to get started') }}</h3>                        
                    </div>
                </div> <!-- END SECTION TITLE --> 
                              
            </div> <!-- END CONTAINER -->

            <div class="container">    
                    
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">                
                        <div class="templates-nav-menu">
                            <div class="template-nav-menu-inner">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">{{ __('All Templates') }}</button>
                                    </li>
                                    @foreach ($categories as $category)
                                        @if (strtolower($category->name) != 'other')
                                            <li class="nav-item category-check" role="presentation">
                                                <button class="nav-link" id="{{ $category->code }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $category->code }}" type="button" role="tab" aria-controls="{{ $category->code }}" aria-selected="false">{{ __($category->name) }}</button>
                                            </li>
                                        @endif									
                                    @endforeach	
                                    @foreach ($categories as $category)
                                    @if (strtolower($category->name) == 'other')
                                        <li class="nav-item category-check" role="presentation">
                                            <button class="nav-link" id="{{ $category->code }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $category->code }}" type="button" role="tab" aria-controls="{{ $category->code }}" aria-selected="false">{{ __($category->name) }}</button>
                                        </li>
                                    @endif									
                                @endforeach				
                                </ul>
                            </div>
                        </div>					
                    </div>
            
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="pt-2">
                            <div class="favorite-templates-panel show-templates">
            
                                <div class="tab-content" id="myTabContent">
            
                                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                        <div class="row templates-panel">
                                            @foreach ($categories as $category)
                                                @if (strtolower($category->name) != 'other')
                                                    <div class="col-12 templates-panel-group @if($loop->first) @else  mt-3 @endif">
                                                        <h6 class="fs-14 font-weight-bold text-muted">{{ __($category->name) }}</h6>
                                                        <h4 class="fs-12 text-muted">{{ __($category->description) }}</h4>
                                                    </div>						
                            
                                                    @foreach ($other_templates as $template)
                                                        @if ($template->group == $category->code)
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="template">                                                                        
                                                                    <div class="card @if($template->package == 'professional') professional @elseif($template->package == 'premium') premium @elseif($template->favorite) favorite @endif" id="{{ $template->template_code }}-card" onclick="window.location.href='{{ url('user/templates/original-template') }}/{{ $template->slug }}'">
                                                                        <div class="card-body pt-5">
                                                                            <div class="template-icon mb-4">
                                                                                {!! $template->icon !!}												
                                                                            </div>
                                                                            <div class="template-title">
                                                                                <h6 class="mb-2 fs-15 number-font">{{ __($template->name) }}</h6>
                                                                            </div>
                                                                            <div class="template-info">
                                                                                <p class="fs-13 text-muted mb-2">{{ __($template->description) }}</p>
                                                                            </div>
                                                                            @if($template->package == 'professional') 
                                                                                <p class="fs-8 btn btn-pro mb-0"><i class="fa-sharp fa-solid fa-crown mr-2"></i>{{ __('Pro') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-pro"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'free')
                                                                                <p class="fs-8 btn btn-free mb-0"><i class="fa-sharp fa-solid fa-gift mr-2"></i>{{ __('Free') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-free"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'premium')
                                                                                <p class="fs-8 btn btn-yellow mb-0"><i class="fa-sharp fa-solid fa-gem mr-2"></i>{{ __('Premium') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-premium"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->new)
                                                                                <span class="fs-8 btn btn-new mb-0"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</span>
                                                                            @endif		
                                                                        </div>
                                                                    </div>
                                                                </div>							
                                                            </div>
                                                        @endif
                                                    @endforeach	
                                                    
                                                    @foreach ($custom_templates as $template)
                                                        @if ($template->group == $category->code)
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="template">                                                                       
                                                                    <div class="card @if($template->package == 'professional') professional @elseif($template->package == 'premium') premium @elseif($template->favorite) favorite @endif" id="{{ $template->template_code }}-card" onclick="window.location.href='{{ url('user/templates') }}/{{ $template->slug }}/{{ $template->template_code }}'">
                                                                        <div class="card-body pt-5">
                                                                            <div class="template-icon mb-4">
                                                                                {!! $template->icon !!}												
                                                                            </div>
                                                                            <div class="template-title">
                                                                                <h6 class="mb-2 fs-15 number-font">{{ __($template->name) }}</h6>
                                                                            </div>
                                                                            <div class="template-info">
                                                                                <p class="fs-13 text-muted mb-2">{{ __($template->description) }}</p>
                                                                            </div>
                                                                            @if($template->package == 'professional') 
                                                                                <p class="fs-8 btn btn-pro mb-0"><i class="fa-sharp fa-solid fa-crown mr-2"></i>{{ __('Pro') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-pro"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'free')
                                                                                <p class="fs-8 btn btn-free mb-0"><i class="fa-sharp fa-solid fa-gift mr-2"></i>{{ __('Free') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-free"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'premium')
                                                                                <p class="fs-8 btn btn-yellow mb-0"><i class="fa-sharp fa-solid fa-gem mr-2"></i>{{ __('Premium') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-premium"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->new)
                                                                                <span class="fs-8 btn btn-new mb-0"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</span>
                                                                            @endif	
                                                                        </div>
                                                                    </div>
                                                                </div>							
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif	
                                            @endforeach		
            
                                            @foreach ($categories as $category)
                                                @if (strtolower($category->name) == 'other')
                                                    <div class="col-12 templates-panel-group @if($loop->first) @else  mt-3 @endif">
                                                        <h6 class="fs-14 font-weight-bold text-muted">{{ __($category->name) }}</h6>
                                                        <h4 class="fs-12 text-muted">{{ __($category->description) }}</h4>
                                                    </div>					
                            
                                                    @foreach ($other_templates as $template)
                                                        @if ($template->group == $category->code)
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="template">                                                                        
                                                                    <div class="card @if($template->package == 'professional') professional @elseif($template->package == 'premium') premium @elseif($template->favorite) favorite @endif" id="{{ $template->template_code }}-card" onclick="window.location.href='{{ url('user/templates/original-template') }}/{{ $template->slug }}'">
                                                                        <div class="card-body pt-5">
                                                                            <div class="template-icon mb-4">
                                                                                {!! $template->icon !!}												
                                                                            </div>
                                                                            <div class="template-title">
                                                                                <h6 class="mb-2 fs-15 number-font">{{ __($template->name) }}</h6>
                                                                            </div>
                                                                            <div class="template-info">
                                                                                <p class="fs-13 text-muted mb-2">{{ __($template->description) }}</p>
                                                                            </div>
                                                                            @if($template->package == 'professional') 
                                                                                <p class="fs-8 btn btn-pro mb-0"><i class="fa-sharp fa-solid fa-crown mr-2"></i>{{ __('Pro') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-pro"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'free')
                                                                                <p class="fs-8 btn btn-free mb-0"><i class="fa-sharp fa-solid fa-gift mr-2"></i>{{ __('Free') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-free"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'premium')
                                                                                <p class="fs-8 btn btn-yellow mb-0"><i class="fa-sharp fa-solid fa-gem mr-2"></i>{{ __('Premium') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-premium"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->new)
                                                                                <span class="fs-8 btn btn-new mb-0"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</span>
                                                                            @endif	
                                                                        </div>
                                                                    </div>
                                                                </div>							
                                                            </div>
                                                        @endif
                                                    @endforeach	
                                                    
                                                    @foreach ($custom_templates as $template)
                                                        @if ($template->group == $category->code)
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="template">                                                                      
                                                                    <div class="card @if($template->package == 'professional') professional @elseif($template->package == 'premium') premium @elseif($template->favorite) favorite @endif" id="{{ $template->template_code }}-card" onclick="window.location.href='{{ url('user/templates') }}/{{ $template->slug }}/{{ $template->template_code }}'">
                                                                        <div class="card-body pt-5">
                                                                            <div class="template-icon mb-4">
                                                                                {!! $template->icon !!}												
                                                                            </div>
                                                                            <div class="template-title">
                                                                                <h6 class="mb-2 fs-15 number-font">{{ __($template->name) }}</h6>
                                                                            </div>
                                                                            <div class="template-info">
                                                                                <p class="fs-13 text-muted mb-2">{{ __($template->description) }}</p>
                                                                            </div>
                                                                            @if($template->package == 'professional') 
                                                                                <p class="fs-8 btn btn-pro mb-0"><i class="fa-sharp fa-solid fa-crown mr-2"></i>{{ __('Pro') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-pro"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'free')
                                                                                <p class="fs-8 btn btn-free mb-0"><i class="fa-sharp fa-solid fa-gift mr-2"></i>{{ __('Free') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-free"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'premium')
                                                                                <p class="fs-8 btn btn-yellow mb-0"><i class="fa-sharp fa-solid fa-gem mr-2"></i>{{ __('Premium') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-premium"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->new)
                                                                                <span class="fs-8 btn btn-new mb-0"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</span>
                                                                            @endif	
                                                                        </div>
                                                                    </div>
                                                                </div>							
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif	
                                            @endforeach	
                                        </div>	
                                    </div>
            
                                    @foreach ($categories as $category)
                                        <div class="tab-pane fade" id="{{ $category->code }}" role="tabpanel" aria-labelledby="{{ $category->code }}-tab">
                                            <div class="row templates-panel">
                        
                                                @foreach ($other_templates as $template)
                                                    @if ($template->group == $category->code)
                                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                                            <div class="template">                                                                    
                                                                <div class="card @if($template->package == 'professional') professional @elseif($template->package == 'premium') premium @elseif($template->favorite) favorite @endif" id="{{ $template->template_code }}-card" onclick="window.location.href='{{ url('user/templates/original-template') }}/{{ $template->slug }}'">
                                                                    <div class="card-body pt-5">
                                                                        <div class="template-icon mb-4">
                                                                            {!! $template->icon !!}												
                                                                        </div>
                                                                        <div class="template-title">
                                                                            <h6 class="mb-2 fs-15 number-font">{{ __($template->name) }}</h6>
                                                                        </div>
                                                                        <div class="template-info">
                                                                            <p class="fs-13 text-muted mb-2">{{ __($template->description) }}</p>
                                                                        </div>
                                                                        @if($template->package == 'professional') 
                                                                            <p class="fs-8 btn btn-pro mb-0"><i class="fa-sharp fa-solid fa-crown mr-2"></i>{{ __('Pro') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-pro"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                        @elseif($template->package == 'free')
                                                                            <p class="fs-8 btn btn-free mb-0"><i class="fa-sharp fa-solid fa-gift mr-2"></i>{{ __('Free') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-free"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                        @elseif($template->package == 'premium')
                                                                            <p class="fs-8 btn btn-yellow mb-0"><i class="fa-sharp fa-solid fa-gem mr-2"></i>{{ __('Premium') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-premium"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                        @elseif($template->new)
                                                                            <span class="fs-8 btn btn-new mb-0"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</span>
                                                                        @endif	
                                                                    </div>
                                                                </div>
                                                            </div>							
                                                        </div>	
                                                    @endif									
                                                @endforeach		
            
                                                @foreach ($custom_templates as $template)
                                                    @if ($template->group == $category->code)
                                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                                            <div class="template">                                                                   
                                                                <div class="card @if($template->package == 'professional') professional @elseif($template->package == 'premium') premium @elseif($template->favorite) favorite @endif" id="{{ $template->template_code }}-card" onclick="window.location.href='{{ url('user/templates') }}/{{ $template->slug }}/{{ $template->template_code }}'">
                                                                    <div class="card-body pt-5">
                                                                        <div class="template-icon mb-4">
                                                                            {!! $template->icon !!}												
                                                                        </div>
                                                                        <div class="template-title">
                                                                            <h6 class="mb-2 fs-15 number-font">{{ __($template->name) }}</h6>
                                                                        </div>
                                                                        <div class="template-info">
                                                                            <p class="fs-13 text-muted mb-2">{{ __($template->description) }}</p>
                                                                        </div>
                                                                        @if($template->package == 'professional') 
                                                                            <p class="fs-8 btn btn-pro mb-0"><i class="fa-sharp fa-solid fa-crown mr-2"></i>{{ __('Pro') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-pro"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                        @elseif($template->package == 'free')
                                                                            <p class="fs-8 btn btn-free mb-0"><i class="fa-sharp fa-solid fa-gift mr-2"></i>{{ __('Free') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-free"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                        @elseif($template->package == 'premium')
                                                                            <p class="fs-8 btn btn-yellow mb-0"><i class="fa-sharp fa-solid fa-gem mr-2"></i>{{ __('Premium') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-premium"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                        @elseif($template->new)
                                                                            <span class="fs-8 btn btn-new mb-0"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</span>
                                                                        @endif	
                                                                    </div>
                                                                </div>
                                                            </div>							
                                                        </div>
                                                    @endif
                                                @endforeach	
                                            </div>
                                        </div>
                                    @endforeach	
                                
            
                                </div>
                                
                                <div class="show-templates-button">
                                    <a href="#">
                                        <span>{{ __('Show More') }} <i class="ml-2 fs-10 fa-solid fa-chevrons-down"></i></span>
                                        <span>{{ __('Show Less') }} <i class="ml-2 fs-10 fa-solid fa-chevrons-up"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
        

            </div>

        </section>


        <!-- SECTION - BENEFITS
        ========================================================-->
        <section id="benefits-wrapper">

            <div class="container pt-9"> 
                
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="fade-right" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">                        
                        <div class="title">
                            <p class="m-2">{{ __('Features List') }}</p>
                            <h3><span> {{ __('Only platform') }} </span>{{ __('that you will ever need') }}</h3>     
                            <h6 class="font-weight-normal fs-14 mb-4">{{ __('We have you covered from all AI Text & Audio generation aspects to allow you to focus only on your content creation') }}</h6>                    
                            <a href="{{ route('register') }}" class="btn-primary-frontend-small btn-frontend-scroll-effect mb-2">
                                <div>
                                    <span>{{ __('Try Creating for Free') }}</span>
                                    <span>{{ __('Try Creating for Free') }}</span>
                                </div>
                            </a>
                        </div>                                               
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="200" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="{{ URL::asset('img/frontend/features/templates.webp') }}" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6>{{ __('Customize Templates') }}</h6>
                                </div>
                                <div class="benefit-description">
                                    <p>{{ __('Create and train your unique custom template and enjoy') }}</p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="300" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="{{ URL::asset('img/frontend/features/languages.webp') }}" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6>{{ __('Variety of Languages') }}</h6>
                                </div>
                                <div class="benefit-description">
                                    <p>{{ __('Generate AI content in more than 54 languages and increasing') }}</p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="400" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="{{ URL::asset('img/frontend/features/voiceover-languages.webp') }}" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6>{{ __('144+ AI Voiceover Languages') }}</h6>
                                </div>
                                <div class="benefit-description">
                                    <p>{{ __('Wide variety of languages and dialects for AI Voiceovers') }}</p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="500" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="{{ URL::asset('img/frontend/features/voices.webp') }}" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6>{{ __('Mix up to 20 voices') }}</h6>
                                </div>
                                <div class="benefit-description">
                                    <p>{{ __('Select from more than 540+ AI Neural Voices and mix in a single text synthesize task') }}</p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="600" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="{{ URL::asset('img/frontend/features/ssml.webp') }}" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6>{{ __('SSML & Tones') }}</h6>
                                </div>
                                <div class="benefit-description">
                                    <p>{{ __('Configure flow of the speech & text with SSML tags and tones') }}</p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="700" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="{{ URL::asset('img/frontend/features/gateways.webp') }}" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6>{{ __('Convenient Payments') }}</h6>
                                </div>
                                <div class="benefit-description">
                                    <p>{{ __('12 different payment gateways that you can use at anytime') }}</p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="800" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="{{ URL::asset('img/frontend/features/referral.webp') }}" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6>{{ __('Earn with Referrals') }}</h6>
                                </div>
                                <div class="benefit-description">
                                    <p>{{ __('Bring your friends and earn when they subscribe') }}</p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="900" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="{{ URL::asset('img/frontend/features/security.webp') }}" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6>{{ __('Enhanced Security and Support') }}</h6>
                                </div>
                                <div class="benefit-description">
                                    <p>{{ __('Secure 2FA authentication and 24/7 customer support to address any concerns') }}</p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    
                </div>
            </div>

        </section>

        <!-- SECTION - IMAGES
        ========================================================-->
        <section id="images-wrapper">

            <div class="container-fluid m-0 pl-0 pr-0">
                <div class="slider-container">
                    <div class="halo"></div>
                    
                        <div class="slider-image-container left-60">
                            <div class="track-horizontal left1">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/78.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/77.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/76.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/75.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/74.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/73.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/72.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/78.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/77.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/76.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/75.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/74.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/73.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/72.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left2">
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/71.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/70.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/69.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/68.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/67.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/66.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/65.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/6.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/5.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/71.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/70.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/69.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/68.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/67.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/66.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/65.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/6.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/5.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left3">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/64.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/63.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/62.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/61.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/60.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/59.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/58.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/64.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/63.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/62.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/61.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/60.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/59.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/58.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left4">
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/57.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/56.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/55.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/54.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/53.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/52.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/51.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/8.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/7.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/57.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/56.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/55.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/54.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/53.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/52.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/51.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/8.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/7.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left5">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/50.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/49.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/48.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/47.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/46.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/45.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/44.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/10.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/9.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/50.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/49.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/48.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/47.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/46.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/45.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/44.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/10.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/9.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                        <div class="marquee-slider-content">
                            <div class="m-marquee-slider-content bottom"></div>
                            <div class="m-marquee-slider-content"></div>
                            <h2>{{ __('Visualize your ') }} <span class="text-primary">{{ __('Dream') }}</span></h2>
                            <h2 class="mb-6 visualize-responsize">{{ __('Create AI Art and Images with Text') }}</h2>
                            <a href="{{ route('register') }}" target="_blank" class="btn-primary-frontend btn-frontend-scroll-effect mb-2">
                                <div>
                                    <span>{{ __('Start Creating Now') }}</span>
                                    <span>{{ __('Start Creating Now') }}</span>
                                </div>
                            </a>
                            <span class="text-muted fs-12">{{ __('No credit card required') }}</span>
                        </div>
                  
                        <div class="slider-image-container right-60">
                            <div class="track-horizontal left1">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/43.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/42.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/41.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/40.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/39.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/38.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/37.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/43.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/42.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/41.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/40.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/39.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/38.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/37.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left2">
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/36.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/35.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/34.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/33.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/32.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/31.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/30.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/36.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/35.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/34.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/33.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/32.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/31.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/30.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left3">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/29.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/28.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/27.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/26.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/25.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/4.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/3.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/2.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/1.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/29.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/28.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/27.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/26.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/25.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/4.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/3.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/2.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/1.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left4">
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/24.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/23.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/22.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/21.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/20.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/19.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/18.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/24.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/23.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/22.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/21.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/20.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/19.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/18.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left5">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/17.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/16.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/15.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/14.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/13.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/12.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/11.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/17.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/16.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/15.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/14.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/13.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/12.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/11.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <div class="slider-overlay-top"></div>
                    <div class="slider-overlay-top bottom"></div>
                </div>
            </div>


        </section> <!-- END SECTION BANNER -->


        <!-- SECTION - PRICING
        ========================================================-->
        @if (config('frontend.pricing_section') == 'on')
            <section id="prices-wrapper">

                <div class="container pt-9 text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-6">
                        <div class="title">
                            <p class="m-2">{{ __('Our Pricing') }}</p>
                            <h3 class="mb-4"><span> {{ __('Simple') }}</span> {{ __('Pricing') }}, <span>{{ __('Unbeatable') }}</span> {{ __('Value') }}</h3>     
                            <h6 class="font-weight-normal fs-14 text-center">{{ __('Subscribe to your preferred Subscription Plan or Top Up your credits and get started') }}</h6>                   
                        </div>
                    </div> <!-- END SECTION TITLE --> 
                                  
                </div> <!-- END CONTAINER -->

                <div class="container">
                    
                    <div class="row">
                        <div class="card-body">			
			
                            @if ($monthly || $yearly || $prepaid || $lifetime)
                
                                <div class="tab-menu-heading text-center">
                                    <div class="tabs-menu">								
                                        <ul class="nav">
                                            @if ($prepaid)						
                                                <li><a href="#prepaid" class="@if (!$monthly && !$yearly && $prepaid) active @else '' @endif" data-bs-toggle="tab"> {{ __('Prepaid Packs') }}</a></li>
                                            @endif							
                                            @if ($monthly)
                                                <li><a href="#monthly_plans" class="@if (($monthly && $prepaid && $yearly) || ($monthly && !$prepaid && !$yearly) || ($monthly && $prepaid && !$yearly) || ($monthly && !$prepaid && $yearly)) active @else '' @endif" data-bs-toggle="tab"> {{ __('Monthly Plans') }}</a></li>
                                            @endif	
                                            @if ($yearly)
                                                <li><a href="#yearly_plans" class="@if (!$monthly && !$prepaid && $yearly) active @else '' @endif" data-bs-toggle="tab"> {{ __('Yearly Plans') }}</a></li>
                                            @endif		
                                            @if ($lifetime)
                                                <li><a href="#lifetime" class="@if (!$monthly && !$yearly && !$prepaid &&  $lifetime) active @else '' @endif" data-bs-toggle="tab"> {{ __('Lifetime Plans') }}</a></li>
                                            @endif							
                                        </ul>
                                    </div>
                                </div>
                
                            
                
                                <div class="tabs-menu-body">
                                    <div class="tab-content">
                
                                        @if ($prepaid)
                                            <div class="tab-pane @if ((!$monthly && $prepaid) && (!$yearly && $prepaid)) active @else '' @endif" id="prepaid">
                
                                                @if ($prepaids->count())
                                                                    
                                                    <div class="row justify-content-md-center">
                                                    
                                                        @foreach ( $prepaids as $prepaid )																			
                                                            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                <div class="price-card pl-3 pr-3 pt-2 mb-6">
                                                                    <div class="card p-4 pl-5 prepaid-cards @if ($prepaid->featured) price-card-border @endif">
                                                                        @if ($prepaid->featured)
                                                                            <span class="plan-featured-prepaid">{{ __('Most Popular') }}</span>
                                                                        @endif
                                                                        <div class="plan prepaid-plan">
                                                                            <div class="plan-title">{{ $prepaid->plan_name }} </div>
                                                                            <div class="plan-cost-wrapper mt-2 text-center mb-3 p-1"><span class="plan-cost">@if (config('payment.decimal_points') == 'allow') {{ number_format((float)$prepaid->price, 2) }} @else {{ number_format($prepaid->price) }} @endif</span><span class="prepaid-currency-sign text-muted">{{ $prepaid->currency }}</span></div>
                                                                            <p class="fs-12 mb-3 text-muted">{{ __('Included Credits') }}</p>	
                                                                            <div class="credits-box">
                                                                                @if ($prepaid->words != 0) <p class="fs-12 mt-2 mb-0"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> {{ __('Words Included') }}: <span class="ml-2 font-weight-bold text-primary">{{ number_format($prepaid->words) }}</span></p>@endif
                                                                                 @if ($prepaid->images != 0) <p class="fs-12 mt-2 mb-0"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> {{ __('Images Included') }}: <span class="ml-2 font-weight-bold text-primary">{{ number_format($prepaid->images) }}</span></p>@endif
                                                                                 @if ($prepaid->characters != 0) <p class="fs-12 mt-2 mb-0"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> {{ __('Characters Included') }}: <span class="ml-2 font-weight-bold text-primary">{{ number_format($prepaid->characters) }}</span></p>@endif																							
                                                                                 @if ($prepaid->minutes != 0) <p class="fs-12 mt-2 mb-0"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> {{ __('Minutes Included') }}: <span class="ml-2 font-weight-bold text-primary">{{ number_format($prepaid->minutes) }}</span></p>@endif	
                                                                            </div>
                                                                            <div class="text-center action-button mt-2 mb-2">
                                                                                <a href="{{ route('register') }}" class="btn btn-primary-pricing">{{ __('Select Package') }}</a> 
                                                                            </div>																								                                                                          
                                                                        </div>							
                                                                    </div>	
                                                                </div>							
                                                            </div>										
                                                        @endforeach						
                
                                                    </div>
                
                                                @else
                                                    <div class="row text-center">
                                                        <div class="col-sm-12 mt-6 mb-6">
                                                            <h6 class="fs-12 font-weight-bold text-center">{{ __('No Prepaid plans were set yet') }}</h6>
                                                        </div>
                                                    </div>
                                                @endif
                
                                            </div>			
                                        @endif	
                
                                        @if ($monthly)	
                                            <div class="tab-pane @if (($monthly && $prepaid) || ($monthly && !$prepaid) || ($monthly && !$yearly)) active @else '' @endif" id="monthly_plans">
                
                                                @if ($monthly_subscriptions->count())		
                
                                                    <div class="row justify-content-md-center">
                
                                                        @foreach ( $monthly_subscriptions as $subscription )																			
                                                            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                <div class="pt-2 ml-2 mr-2 h-100 prices-responsive">
                                                                    <div class="card p-5 mb-4 pl-7 pr-7 h-100 price-card @if ($subscription->featured) price-card-border @endif">
                                                                        @if ($subscription->featured)
                                                                            <span class="plan-featured">{{ __('Most Popular') }}</span>
                                                                        @endif
                                                                        <div class="plan">			
                                                                            <div class="plan-title">{{ $subscription->plan_name }}</div>																						
                                                                            <p class="plan-cost mb-5">{!! config('payment.default_system_currency_symbol') !!}@if(config('payment.decimal_points') == 'allow'){{ number_format((float)$subscription->price, 2) }} @else{{ number_format($subscription->price) }} @endif<span class="fs-12 text-muted"><span class="mr-1">/</span> {{ __('per month') }}</span></p>
                                                                            <div class="text-center action-button mt-2 mb-5">
                                                                                <a href="{{ route('register') }}" class="btn btn-primary-pricing">{{ __('Subscribe Now') }}</a>                                               														
                                                                            </div>
                                                                            <p class="fs-12 mb-3 text-muted">{{ __('Included Features') }}</p>																		
                                                                            <ul class="fs-12 pl-3">		
                                                                                @if($subscription->words != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->words }}</span> <span class="plan-feature-text">{{ __('words / month') }}</span></li> @endif
                                                                                @if($subscription->images != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->images }}</span> <span class="plan-feature-text">{{ __('images / month') }}</span></li> @endif
                                                                                @if($subscription->minutes != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->minutes }}</span> <span class="plan-feature-text">{{ __('minutes / month') }}</span></li> @endif
                                                                                @if($subscription->characters != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->characters }}</span> <span class="plan-feature-text">{{ __('characters / month') }}</span></li> @endif
                                                                                @if($subscription->team_members != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->team_members }}</span> <span class="plan-feature-text">{{ __('team members') }}</span></li> @endif
                                                                                @if($subscription->chat_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Chats Feature') }}</span></li> @endif
                                                                                @if($subscription->image_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Images Feature') }}</span></li> @endif
                                                                                @if($subscription->voiceover_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Voiceover Feature') }}</span></li> @endif
                                                                                @if($subscription->transcribe_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Speech to Text Feature') }}</span></li> @endif
                                                                                @if($subscription->code_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Code Feature') }}</span></li> @endif
                                                                                @if($subscription->team_members) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('Team Members Option') }}</span></li> @endif
                                                                                @foreach ( (explode(',', $subscription->plan_features)) as $feature )
                                                                                    @if ($feature)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> {{ $feature }}</li>
                                                                                    @endif																
                                                                                @endforeach															
                                                                            </ul>																
                                                                        </div>					
                                                                    </div>	
                                                                </div>							
                                                            </div>										
                                                        @endforeach
                
                                                    </div>	
                                                
                                                @else
                                                    <div class="row text-center">
                                                        <div class="col-sm-12 mt-6 mb-6">
                                                            <h6 class="fs-12 font-weight-bold text-center">{{ __('No Subscriptions plans were set yet') }}</h6>
                                                        </div>
                                                    </div>
                                                @endif					
                                            </div>	
                                        @endif	
                                        
                                        @if ($yearly)	
                                            <div class="tab-pane @if (($yearly && $prepaid) && ($yearly && !$prepaid) && ($yearly && !$monthly)) active @else '' @endif" id="yearly_plans">
                
                                                @if ($yearly_subscriptions->count())		
                
                                                    <div class="row justify-content-md-center">
                
                                                        @foreach ( $yearly_subscriptions as $subscription )																			
                                                            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                <div class="pt-2 ml-2 mr-2 h-100 prices-responsive">
                                                                    <div class="card p-5 mb-4 pl-7 pr-7 h-100 price-card @if ($subscription->featured) price-card-border @endif">
                                                                        @if ($subscription->featured)
                                                                            <span class="plan-featured">{{ __('Most Popular') }}</span>
                                                                        @endif
                                                                        <div class="plan">			
                                                                            <div class="plan-title">{{ $subscription->plan_name }}</div>																						
                                                                            <p class="plan-cost mb-5">{!! config('payment.default_system_currency_symbol') !!}@if(config('payment.decimal_points') == 'allow'){{ number_format((float)$subscription->price, 2) }} @else{{ number_format($subscription->price) }} @endif<span class="fs-12 text-muted"><span class="mr-1">/</span> {{ __('per year') }}</span></p>
                                                                            <div class="text-center action-button mt-2 mb-5">
                                                                                <a href="{{ route('register') }}" class="btn btn-primary-pricing">{{ __('Subscribe Now') }}</a>                                               														
                                                                            </div>
                                                                            <p class="fs-12 mb-3 text-muted">{{ __('Included Features') }}</p>																	
                                                                            <ul class="fs-12 pl-3">		
                                                                                @if($subscription->words != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->words }}</span> <span class="plan-feature-text">{{ __('words / month') }}</span></li> @endif
                                                                                @if($subscription->images != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->images }}</span> <span class="plan-feature-text">{{ __('images / month') }}</span></li> @endif
                                                                                @if($subscription->minutes != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->minutes }}</span> <span class="plan-feature-text">{{ __('minutes / month') }}</span></li> @endif
                                                                                @if($subscription->characters != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->characters }}</span> <span class="plan-feature-text">{{ __('characters / month') }}</span></li> @endif
                                                                                @if($subscription->team_members != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->team_members }}</span> <span class="plan-feature-text">{{ __('team members') }}</span></li> @endif
                                                                                @if($subscription->chat_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Chats Feature') }}</span></li> @endif
                                                                                @if($subscription->image_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Images Feature') }}</span></li> @endif
                                                                                @if($subscription->voiceover_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Voiceover Feature') }}</span></li> @endif
                                                                                @if($subscription->transcribe_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Speech to Text Feature') }}</span></li> @endif
                                                                                @if($subscription->code_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Code Feature') }}</span></li> @endif
                                                                                @if($subscription->team_members) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('Team Members Option') }}</span></li> @endif
                                                                                @foreach ( (explode(',', $subscription->plan_features)) as $feature )
                                                                                    @if ($feature)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> {{ $feature }}</li>
                                                                                    @endif																
                                                                                @endforeach															
                                                                            </ul>																
                                                                        </div>					
                                                                    </div>	
                                                                </div>							
                                                            </div>											
                                                        @endforeach
                
                                                    </div>	
                                                
                                                @else
                                                    <div class="row text-center">
                                                        <div class="col-sm-12 mt-6 mb-6">
                                                            <h6 class="fs-12 font-weight-bold text-center">{{ __('No Subscriptions plans were set yet') }}</h6>
                                                        </div>
                                                    </div>
                                                @endif					
                                            </div>
                                        @endif	
                                        
                                        @if ($lifetime)
                                            <div class="tab-pane @if ((!$monthly && $lifetime) && (!$yearly && $lifetime)) active @else '' @endif" id="lifetime">

                                                @if ($lifetime_subscriptions->count())                                                    
                                                    
                                                    <div class="row justify-content-md-center">
                                                    
                                                        @foreach ( $lifetime_subscriptions as $subscription )																			
                                                            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                <div class="pt-2 ml-2 mr-2 h-100 prices-responsive">
                                                                    <div class="card p-5 mb-4 pl-7 pr-7 h-100 price-card @if ($subscription->featured) price-card-border @endif">
                                                                        @if ($subscription->featured)
                                                                            <span class="plan-featured">{{ __('Most Popular') }}</span>
                                                                        @endif
                                                                        <div class="plan">			
                                                                            <div class="plan-title">{{ $subscription->plan_name }}</div>																						
                                                                            <p class="plan-cost mb-5">{!! config('payment.default_system_currency_symbol') !!}@if(config('payment.decimal_points') == 'allow'){{ number_format((float)$subscription->price, 2) }} @else{{ number_format($subscription->price) }} @endif<span class="fs-12 text-muted"><span class="mr-1">/</span> {{ __('for lifetime') }}</span></p>
                                                                            <div class="text-center action-button mt-2 mb-5">
                                                                                <a href="{{ route('register') }}" class="btn btn-primary-pricing">{{ __('Subscribe Now') }}</a>                                               														
                                                                            </div>
                                                                            <p class="fs-12 mb-3 text-muted">{{ __('Included Features') }}</p>																	
                                                                            <ul class="fs-12 pl-3">		
                                                                                @if($subscription->words != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->words }}</span> <span class="plan-feature-text">{{ __('words / month') }}</span></li> @endif
                                                                                @if($subscription->images != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->images }}</span> <span class="plan-feature-text">{{ __('images / month') }}</span></li> @endif
                                                                                @if($subscription->minutes != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->minutes }}</span> <span class="plan-feature-text">{{ __('minutes / month') }}</span></li> @endif
                                                                                @if($subscription->characters != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->characters }}</span> <span class="plan-feature-text">{{ __('characters / month') }}</span></li> @endif
                                                                                @if($subscription->team_members != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->team_members }}</span> <span class="plan-feature-text">{{ __('team members') }}</span></li> @endif
                                                                                @if($subscription->chat_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Chats Feature') }}</span></li> @endif
                                                                                @if($subscription->image_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Images Feature') }}</span></li> @endif
                                                                                @if($subscription->voiceover_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Voiceover Feature') }}</span></li> @endif
                                                                                @if($subscription->transcribe_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Speech to Text Feature') }}</span></li> @endif
                                                                                @if($subscription->code_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Code Feature') }}</span></li> @endif
                                                                                @if($subscription->team_members) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('Team Members Option') }}</span></li> @endif
                                                                                @foreach ( (explode(',', $subscription->plan_features)) as $feature )
                                                                                    @if ($feature)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> {{ $feature }}</li>
                                                                                    @endif																
                                                                                @endforeach															
                                                                            </ul>																
                                                                        </div>					
                                                                    </div>	
                                                                </div>							
                                                            </div>											
                                                        @endforeach					

                                                    </div>

                                                @else
                                                    <div class="row text-center">
                                                        <div class="col-sm-12 mt-6 mb-6">
                                                            <h6 class="fs-12 font-weight-bold text-center">{{ __('No lifetime plans were set yet') }}</h6>
                                                        </div>
                                                    </div>
                                                @endif

                                            </div>	
                                        @endif	
                                    </div>
                                </div>
                            
                            @else
                                <div class="row text-center">
                                    <div class="col-sm-12 mt-6 mb-6">
                                        <h6 class="fs-12 font-weight-bold text-center">{{ __('No Subscriptions or Prepaid plans were set yet') }}</h6>
                                    </div>
                                </div>
                            @endif

                            <div class="text-center">
                                <p class="mb-0 mt-2"><i class="fa-solid fa-shield-check text-success mr-2"></i><span class="text-muted fs-12">{{ __('PCI DSS Compliant') }}</span></p>
                            </div>
                
                        </div>
                    </div>
                
                </div>
        
            </section>
        @endif


         <!-- SECTION - BANNER
        ========================================================-->
        <section id="banner-wrapper">

            <div class="container">

                <!-- SECTION TITLE -->
                <div class="mb-7 text-center">

                    <h6>{{ __('Join the 10.000+ Companies trusting') }} {{ config('app.name') }}</h6>

                </div> <!-- END SECTION TITLE -->

                <div class="row" id="partners">
                            
                    <div class="partner" data-aos="flip-down" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-1.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div>    
                    
                    <div class="partner" data-aos="flip-down" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-2.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="300" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-3.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="400" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-4.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="500" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-5.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="600" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-6.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="600" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-3.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div> 
                </div>
            </div>

        </section> <!-- END SECTION BANNER -->


        <!-- SECTION - REVIEWS
        ========================================================-->
        @if (config('frontend.reviews_section') == 'on')
            <section id="reviews-wrapper">

                <div class="container text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-7">
                        <div class="title">
                            <p class="m-2 white">{{ __('Testimonials & Reviews') }}</p>
                            <h3 class="white">{{ __('Be one of our') }} <span> {{ __('Happy Customers') }} </span></h3>                        
                        </div>
                    </div> <!-- END SECTION TITLE --> 
                                
                </div> <!-- END CONTAINER -->

                <div class="container">

                    @if ($review_exists)
                        <div class="reviews-card-wrapper">                               
                            <div class="review-list-wrapper">
                                <div class="reviews-list">
                                    
                                    @foreach ($reviews as $review) 
                                        @if ($review->row == 'first')
                                            <div class="review-card-scroll w-inline-block">
                                                <div class="hori-between-div">
                                                    <div class="horizontal-div mb-4">
                                                        <img src="{{ URL::asset($review->image_url) }}" loading="lazy" class="reviewer-portrait">
                                                        <div>
                                                            <div class="reviewer-name">{{ __($review->name) }}</div>
                                                            <div class="reviewer-title">{{ __($review->position) }}</div>
                                                        </div>                                                        
                                                        <div class="reviewer-star">
                                                            <span class="fs-11 mr-1">{{ $review->rating }}</span><i class="fa-solid fa-star fs-9 text-yellow"></i>
                                                        </div>                                              
                                                    </div>                                    
                                                </div>
                                                <p class="review-text"><i class="fa-solid fa-quote-left mr-2"></i>{{ __($review->text) }}<i class="fa-solid fa-quote-right ml-2"></i></p>
                                            </div>
                                        @endif                                        
                                    @endforeach

                                </div>
                                <div class="reviews-list">
                                    @foreach ($reviews as $review) 
                                        @if ($review->row == 'first')
                                            <div class="review-card-scroll w-inline-block">
                                                <div class="hori-between-div">
                                                    <div class="horizontal-div mb-4">
                                                        <img src="{{ URL::asset($review->image_url) }}" loading="lazy" class="reviewer-portrait">
                                                        <div>
                                                            <div class="reviewer-name">{{ __($review->name) }}</div>
                                                            <div class="reviewer-title">{{ __($review->position) }}</div>
                                                        </div>
                                                        <div class="reviewer-star">
                                                            <span class="fs-11 mr-1">{{ $review->rating }}</span><i class="fa-solid fa-star fs-9 text-yellow"></i>
                                                        </div> 
                                                    </div>                                    
                                                </div>
                                                <p class="review-text"><i class="fa-solid fa-quote-left mr-2"></i>{{ __($review->text) }}<i class="fa-solid fa-quote-right ml-2"></i></p>
                                            </div>
                                        @endif                                        
                                    @endforeach
                                </div>
                            </div>

                            @if ($review_second_exists)
                                <div class="review-list-wrapper second">
                                    <div class="reviews-list">
                                        @foreach ($reviews as $review) 
                                            @if ($review->row == 'second')
                                                <div class="review-card-scroll w-inline-block">
                                                    <div class="hori-between-div">
                                                        <div class="horizontal-div mb-4">
                                                            <img src="{{ URL::asset($review->image_url) }}" loading="lazy" class="reviewer-portrait">
                                                            <div>
                                                                <div class="reviewer-name">{{ __($review->name) }}</div>
                                                                <div class="reviewer-title">{{ __($review->position) }}</div>
                                                            </div>
                                                            <div class="reviewer-star">
                                                                <span class="fs-11 mr-1">{{ $review->rating }}</span><i class="fa-solid fa-star fs-9 text-yellow"></i>
                                                            </div> 
                                                        </div>                                    
                                                    </div>
                                                    <p class="review-text"><i class="fa-solid fa-quote-left mr-2"></i>{{ __($review->text) }}<i class="fa-solid fa-quote-right ml-2"></i></p>
                                                </div>
                                            @endif                                        
                                        @endforeach
                                    </div>
                                    <div class="reviews-list">
                                        @foreach ($reviews as $review) 
                                            @if ($review->row == 'second')
                                                <div class="review-card-scroll w-inline-block">
                                                    <div class="hori-between-div">
                                                        <div class="horizontal-div mb-4">
                                                            <img src="{{ URL::asset($review->image_url) }}" loading="lazy" class="reviewer-portrait">
                                                            <div>
                                                                <div class="reviewer-name">{{ __($review->name) }}</div>
                                                                <div class="reviewer-title">{{ __($review->position) }}</div>
                                                            </div>
                                                            <div class="reviewer-star">
                                                                <span class="fs-11 mr-1">{{ $review->rating }}</span><i class="fa-solid fa-star fs-9 text-yellow"></i>
                                                            </div> 
                                                        </div>                                    
                                                    </div>
                                                    <p class="review-text"><i class="fa-solid fa-quote-left mr-2"></i>{{ __($review->text) }}<i class="fa-solid fa-quote-right ml-2"></i></p>
                                                </div>
                                            @endif                                        
                                        @endforeach
                                    </div>
                                </div>
                            @endif                           
                            
                        </div>
                    @else
                        <div class="row text-center">
                            <div class="col-sm-12 mt-6 mb-6">
                                <h6 class="fs-12 font-weight-bold text-center">{{ __('No customer reviews were published yet') }}</h6>
                            </div>
                        </div>
                    @endif

                </div>


            </section> <!-- END SECTION BANNER -->
        @endif


        <!-- SECTION - FAQ
        ========================================================-->
        @if (config('frontend.faq_section') == 'on')
            <section id="faq-wrapper">   

                <div class="container pt-9 text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-7">
                        <div class="title">
                            <p class="m-2">{{ __('Frequently Asked Questions') }}</p>
                            <h3 class="mb-4"><span> {{ __('Got Questions?') }} </span>{{ __('We have you covered') }}</h3> 
                            <h6 class="font-weight-normal fs-14 text-center">{{ __('We are always here to provide full support and clear any doubts that you might have') }}</h6>                        
                        </div>
                    </div> <!-- END SECTION TITLE --> 
                                  
                </div> <!-- END CONTAINER -->

                <div class="container">

                    <div class="row">
        
                        @if ($faq_exists)                          
        
                            @foreach ( $faqs as $faq )

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div id="accordion" data-aos="fade-left" data-aos-delay="200" data-aos-once="true" data-aos-duration="700">
                                        <div class="card">
                                            <div class="card-header" id="heading{{ $faq->id }}">
                                                <h5 class="mb-0">
                                                <span class="btn btn-link faq-button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $faq->id }}" aria-expanded="false" aria-controls="collapse-{{ $faq->id }}">
                                                    <i class="fa-solid fa-messages-question fs-14 text-muted mr-2"></i> {{ __($faq->question) }}
                                                </span>
                                                </h5>
                                                <i class="fa-solid fa-plus fs-10"></i>
                                            </div>
                                        
                                            <div id="collapse-{{ $faq->id }}" class="collapse" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordion">
                                                <div class="card-body">
                                                    {!! __($faq->answer) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
        
                        @else
                            <div class="row text-center">
                                <div class="col-sm-12 mt-6 mb-6">
                                    <h6 class="fs-12 font-weight-bold text-center">{{ __('No FAQ answers were published yet') }}</h6>
                                </div>
                            </div>
                        @endif
            
                    </div>        
                </div>
        
            </section> <!-- END SECTION FAQ -->
        @endif


        <!-- SECTION - BLOGS
        ========================================================-->
        @if (config('frontend.blogs_section') == 'on')
            <section id="blog-wrapper">

                <div class="container pt-9 text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-7">
                        <div class="title">
                            <p class="m-2">{{ __('Stay up to Date') }}</p>
                            <h3>{{ __('Our Latest') }} <span>{{ __('Blogs') }}</span></h3>                        
                        </div>
                    </div> <!-- END SECTION TITLE --> 
                                  
                </div> <!-- END CONTAINER -->

                <div class="container">

                    @if ($blog_exists)
                        
                        <!-- BLOGS -->
                        <div class="row" id="blogs">
                            @foreach ( $blogs as $blog )
                            <div class="blog" data-aos="zoom-in" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">			
                                <div class="blog-box">
                                    <div class="blog-img">
                                        <a href="{{ route('blogs.show', $blog->url) }}"><img src="{{ URL::asset($blog->image) }}" alt="Blog Image"></a>
                                        <span>{{ $blog->created_by }}</span>
                                    </div>
                                    <div class="blog-info mt-0">
                                        <h6 class="blog-date text-left mt-1 mb-4">{{ date('F j, Y', strtotime($blog->created_at)) }}</h6>
                                        <h5 class="blog-title fs-20 text-left mb-4"><a href="{{ route('blogs.show', $blog->url) }}">{{ __($blog->title) }}</a></h5>  
                                        <h6><a href="{{ route('blogs.show', $blog->url) }}">{{ __('Read More') }}</a> <i class="fa-solid fa-chevrons-right"></i></h6>                                   
                                    </div>
                                </div>                        
                            </div> 
                            @endforeach
                        </div> 
                        

                        <!-- ROTATORS BUTTONS -->
                        <div class="blogs-nav">
                            <a class="blogs-prev"><i class="fa fa-chevron-left"></i></a>
                            <a class="blogs-next"><i class="fa fa-chevron-right"></i></a>                                
                        </div>

                    @else
                        <div class="row text-center">
                            <div class="col-sm-12 mt-6 mb-6">
                                <h6 class="fs-12 font-weight-bold text-center">{{ __('No blog articles were published yet') }}</h6>
                            </div>
                        </div>
                    @endif

                    <div class="text-center blog-all mt-6">
                        <a href="#">{{ __('Show more') }} <i class="fa-solid fa-chevrons-right fs-10"></i></a>
                    </div>

                </div> <!-- END CONTAINER -->

                {!! adsense_frontend_blogs_728x90() !!}
                
            </section> <!-- END SECTION BLOGS -->
        @endif

@endsection

@section('js')
    <script src="{{URL::asset('plugins/slick/slick.min.js')}}"></script>  
    <script src="{{URL::asset('plugins/aos/aos.js')}}"></script> 
    <script src="{{URL::asset('plugins/animatedheadline/jquery.animatedheadline.min.js')}}"></script> 
    <script src="{{URL::asset('js/frontend.js')}}"></script>  
    <script type="text/javascript">
		$(function () {

            $('.word-container').animatedHeadline({
                animationType: "slide",
                animationDelay: 2500,
                barAnimationDelay: 3800,
                barWaiting: 800,
                lettersDelay: 50,
                typeLettersDelay: 150,
                selectionDuration: 500,
                typeAnimationDelay: 1300,
                revealDuration: 600,
                revealAnimationDelay: 1500
            });

            AOS.init();

		});    
    </script>

    @if (config('services.google.recaptcha.enable') == 'on')
         <!-- Google reCaptcha JS -->
        <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.google.recaptcha.site_key') }}"></script>
        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.google.recaptcha.site_key') }}', {action: 'contact'}).then(function(token) {
                    if (token) {
                    document.getElementById('recaptcha').value = token;
                    }
                });
            });
        </script>
    @endif
@endsection
        
        
       
        
       
    

