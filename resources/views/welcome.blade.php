@extends('layouts.app2')

@section('content')



<main class="main-root">

    <div id="dsn-scrollbar">
        <div class="main-content">
            <div class="wrapper">
                <!-- ========== Slider Parallax ========== -->
                <div class="main-slider full-width has-horizontal p-relative w-100 h-100-v  v-dark-head">
                    <div class="content-slider p-relative w-100 h-100 over-hidden">
                        <div class="bg-container  dsn-hero-parallax-img p-relative w-100 h-100">
                            <div class="slide-inner h-100">
                                <div class="swiper-wrapper">
                                    <div class="slide-item swiper-slide over-hidden">
                                        <div class="image-bg cover-bg w-100 h-100 " data-overlay="6" data-swiper-parallax="50%" data-swiper-parallax-scale="1.1">
                                            <img class="cover-bg-img" src="{{asset('assets')}}/img/slider/12.jpg" data-dsn-src="{{asset('assets')}}/img/slider/12.jpg" alt="">
                                        </div>
                                        <div class="slide-content p-absolute ">
                                            <div class="content p-relative">
                                                <div class="metas d-inline-block mb-30">
                                                    <span>Moteks</span>

                                                </div>
                                                <div class="d-block"></div>
                                                <h1 class="title user-no-selection d-inline-block ">
                                                    <a href="{{route('hakkimizda'  , App()->getLocale()  )}}" class="effect-ajax" data-dsn-ajax="slider">{{__('hosgeldiniz')}} </a>
                                                </h1>

                                                <p class="max-w570 mt-30 description ">{{__('o1')}}</p>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="slide-item swiper-slide over-hidden">
                                        <div class="image-bg cover-bg w-100 h-100 " data-overlay="4" data-swiper-parallax="50%" data-swiper-parallax-scale="1.1">
                                            <img class="cover-bg-img" src="{{asset('assets')}}/img/slider/13.jpg" data-dsn-src="{{asset('assets')}}/img/slider/13.jpg" alt="">
                                        </div>
                                        <div class="slide-content p-absolute  ">
                                            <div class="content p-relative">
                                                <div class="metas d-inline-block mb-30">
                                                    <span>{{__('kumas')}}</span>
                                                </div>
                                                <div class="d-block"></div>
                                                <h1 class="title user-no-selection d-inline-block ">
                                                    <a href="{{route('ormeboyalikumas'  , App()->getLocale()  )}}" class="effect-ajax" data-dsn-ajax="slider">{{__('ormeboyalıkumas')}}</a>
                                                </h1>

                                                <p class="max-w570 mt-30 description ">{{__('h8')}}</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="slide-item swiper-slide over-hidden">
                                        <div class="image-bg cover-bg w-100 h-100 " data-overlay="4" data-swiper-parallax="50%" data-swiper-parallax-scale="1.1">
                                            <img class="cover-bg-img" src="{{asset('assets')}}/img/slider/14.jpg" data-dsn-src="{{asset('assets')}}/img/slider/14.jpg" alt="">
                                        </div>
                                        <div class="slide-content p-absolute  ">
                                            <div class="content p-relative">
                                                <div class="metas d-inline-block mb-30">
                                                    <span>{{__('kumas')}}</span>
                                                </div>
                                                <div class="d-block"></div>
                                                <h1 class="title user-no-selection d-inline-block ">
                                                    <a href="{{route('ormeboyalikumas'  , App()->getLocale()  )}}" class="effect-ajax" data-dsn-ajax="slider">{{__('ormeboyalıkumas')}}</a>
                                                </h1>

                                                <p class="max-w570 mt-30 description ">{{__('h6')}}</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="slide-item swiper-slide over-hidden">
                                        <div class="image-bg cover-bg w-100 h-100 " data-overlay="4" data-swiper-parallax="50%" data-swiper-parallax-scale="1.1">
                                            <img class="cover-bg-img" src="{{asset('assets')}}/img/slider/15.jpg" data-dsn-src="{{asset('assets')}}/img/slider/15.jpg" alt="">
                                        </div>
                                        <div class="slide-content p-absolute  ">
                                            <div class="content p-relative">
                                                <div class="metas d-inline-block mb-30">
                                                    <span>{{__('kumas')}}</span>
                                                </div>
                                                <div class="d-block"></div>
                                                <h1 class="title user-no-selection d-inline-block ">
                                                    <a href="{{route('ormehamkumas'  , App()->getLocale()  )}}" class="effect-ajax" data-dsn-ajax="slider">{{__('ormehamkumas')}}</a>
                                                </h1>

                                                <p class="max-w570 mt-30 description ">{{__('h7')}}</p>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="slide-item swiper-slide over-hidden">
                                        <div class="image-bg cover-bg w-100 h-100 " data-overlay="4" data-swiper-parallax="50%" data-swiper-parallax-scale="1.1">
                                            <img class="cover-bg-img" src="{{asset('assets')}}/img/slider/iplik.jpg" data-dsn-src="{{asset('assets')}}/img/slider/iplik.jpg" alt="">
                                        </div>
                                        <div class="slide-content p-absolute  ">
                                            <div class="content p-relative">
                                                <div class="metas d-inline-block mb-30">
                                                    <span>{{__('iplik')}}</span>
                                                </div>
                                                <div class="d-block"></div>
                                                <h1 class="title user-no-selection d-inline-block ">
                                                    <a href="{{route('iplik' , app()->getLocale() ) }}" class="effect-ajax" data-dsn-ajax="slider">{{__('i1')}}</a>
                                                </h1>

                                                <p class="max-w570 mt-30 description ">{{__('i2')}}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dsn-slider-content p-absolute h-100 w-100 ">

                            <div class="dsn-container  d-flex align-items-center justify-content-center text-center">
                            </div>
                        </div>
                    </div>



                    <div class="control-nav p-absolute w-100  d-flex dsn-container  align-items-center justify-content-center ">
                        <hr class="mb-30">
                        <div class="prev-container">
                            <div class="container-inner">
                                <div class="triangle"></div>
                                <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24">
                                    <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round" stroke-miterlimit="10">
                                        <circle cx="12" cy="12" r="10.5"></circle>
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <div class="slider-counter d-flex align-items-center">
                            <span class="slider-current-index">01</span>
                            <span class="slider-counter-delimiter"></span>
                            <span class="slider-total-index">05</span>
                        </div>

                        <div class="next-container">
                            <div class="container-inner">
                                <div class="triangle"></div>
                                <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                                    <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round" stroke-miterlimit="10">
                                        <circle cx="12" cy="12" r="10.5"></circle>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== End Slider Parallax ========== -->

            </div>
        </div>
    </div>


    <!-- ========== End Contact Form Model ========== -->
</main>

@endsection
