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
                                {{__('kunye')}}
                            </h1>
                        </div>
                    </div>
                </header>
                <!-- ========== End Header Normal ========== -->


                <div class="wrapper">


                    <!-- ========== About Section ========== -->
                    <section class="about-section-2 p-relative section-margin" data-dsn-title="About">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <p class="sub-heading line-shap line-shap-before mb-15">
                                        <span class="line-bg-right">
                                            {{__('kunye')}}
                                        </span>

                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left">
                                        <div class="section-title">
                                            <h4>   {{__('k1')}} </h4>




                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </section>

                </div>

            </div>
            @endsection
