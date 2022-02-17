@extends('layouts.app')

@section('content')



<main class="main-root">

    <div id="dsn-scrollbar">
        <div class="main-content">
            <div class="wrapper">


                <!-- ========== Header Normal ========== -->
                <header
                    class="header-page over-hidden p-relative header-padding-top header-padding-bottom border-bottom dsn-header-animation">
                    <div class="bg-circle-dotted"></div>
                    <div class="dsn-container">
                        <div class="content-hero p-relative d-flex flex-column h-100 dsn-hero-parallax-title">
                            <p class="subtitle p-relative line-shap  line-shap-after">

                            </p>
                            <h1 class="title mt-30 dsn-load-animate text-transform-upper center">
                                {{__('cevre')}}
                            </h1>
                        </div>
                    </div>
                </header>
                <!-- ========== End Header Normal ========== -->


                <div class="wrapper">

                    <div class="image-head p-relative">
                        <div class="before-z-index" data-dsn-grid="move-up" data-overlay="5">
                            <img class="cover-bg-img has-bigger-scale"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-dsn-src="{{asset('assets')}}/img/slider/cevre.jpg" alt="">
                        </div>
                    </div>

                    <!-- ========== About Section ========== -->
                    <section class="about-section-2 p-relative section-margin" data-dsn-title="About">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <p class="sub-heading line-shap line-shap-before mb-15">
                                        <span class="line-bg-right">
                                            {{__('cevre')}}
                                        </span>

                                    </p>
                                </div>
                                <div class="col-lg-10">
                                    <div class="box-left">
                                        <div class="section-title">
                                            <h4> {{__('cevreuzun')}}</h4>

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </section>

                </div>

            </div>
            @endsection
