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
                                {{__('iletisim')}}
                            </h1>
                        </div>
                    </div>
                </header>
                <!-- ========== End Header Normal ========== -->


                <div class="wrapper">

                    <div class="container root-contact">

                        <div class="box-contact-inner section-margin">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6328.64282156104!2d36.97717301639073!3d37.52392007192131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152de7359233b553%3A0x7db6ef67ffc7ec75!2s%C3%87abasan%20Tekstil%20Boya!5e0!3m2!1str!2sus!4v1625902180293!5m2!1str!2sus" width="550" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="form-box">
                                        <div class="line line-top"></div>
                                        <div class="line line-bottom"></div>
                                        <div class="line line-left"></div>
                                        <div class="line line-right"></div>

                                        <div class="mb-30 d-flex text-left flex-column align-items-start">
                                            <p class="sub-heading line-shap line-shap-before mb-15">
                                                <span class="line-bg-right">          {{__('anasayfa')}}</span>
                                            </p>
                                            <h2 class="section-title  title-cap">
                                                {{__('iletisim')}}
                                            </h2>
                                        </div>
                                        <p class="mb-30">
                                          {{__('iletisimuzun')}}
                                        </p>

                                        <form id="contact-form" class="form" method="post" action="contact.php"
                                            data-toggle="validator">
                                            <div class="messages"></div>
                                            <div class="input__wrap controls">
                                                <div class="form-group">
                                                    <div class="entry-box">
                                                        <label> {{__('adiniz')}}</label>
                                                        <input id="form_name" type="text" name="name"
                                                            placeholder=" {{__('adiniz')}}" required="required"
                                                            data-error="name is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="entry-box">
                                                        <label> {{__('mailadresiniz')}}</label>
                                                        <input id="form_email" type="email" name="email"
                                                            placeholder=" {{__('mailadresiniz')}}" required="required"
                                                            data-error="Valid email is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="entry-box">
                                                        <label> {{__('aciklama')}}</label>
                                                        <textarea id="form_message" class="form-control" name="message"
                                                            placeholder=" {{__('aciklama')}}"
                                                            required="required"
                                                            data-error="Please,leave us a message."></textarea>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="text-right">
                                                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                                        <button type="submit" class="dsn-button ">
                                                            <span class="dsn-border border-color-default"></span>
                                                            <span class="text-button"> {{__('gonder')}}</span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="box-info-contact">

                                        <ul>
                                            <li>
                                                <h5 class="title-block mb-15">{{__('iletisim')}}</h5>
                                                <p class="text-p ">Tel: +90 344 251 28 90
                                                                   Faks: +90 344 251 28 94</p>
                                                <div class="over-hidden mt-5">
                                                    <a class="link-hover" data-hover-text="info@moteks.com.tr
                                                    "
                                                        href="#">info@moteks.com.tr
                                                    </a>
                                                </div>

                                            </li>
                                            <li>
                                                <h5 class="title-block mb-15">{{__('adres')}}</h5>
                                                <p class="text-p">Adres : Gaziantep Yolu Üzeri Karacasu Mevkii Karaçay Yanı PK.65 Kahramanmaraş / TÜRKİYE</p>
                                            </li>
                                            <li>
                                                <h5 class="title-block mb-15">{{__('sosyal')}}</h5>
                                                <div class="social-item over-hidden">
                                                    <a class="link-hover" data-hover-text="Instagram." href="#"
                                                        target="_blank" rel="nofollow">Instagram.</a>
                                                </div>
                                                <div class="social-item over-hidden">
                                                    <a class="link-hover" data-hover-text="Facebook." href="https://www.facebook.com/motekstekstil"
                                                        target="_blank" rel="nofollow">Facebook.</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            @endsection
