<!-- ========== Menu ========== -->
<div class="site-header dsn-container dsn-load-animate">
    <div class="extend-container d-flex w-100 align-items-baseline justify-content-between align-items-end">
        <div class="inner-header p-relative">
            <div class="main-logo">
                <a href="/{{app()->getLocale()}}" data-dsn="parallax">
                    <img class="light-logo"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-dsn-src="{{asset('assets')}}/img/logo.png" alt="">
                    <img class="dark-logo"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-dsn-src="{{asset('assets')}}/img/logo-dark.png" alt="">
                </a>

                <li>
                    <select id="langlist" class="btn btn-danger"
                    onchange="if (this.value) window.location.href=this.value">
                    <option value="/tr" @if (App::getLocale()) @endif @if (App::isLocale('tr')) selected @endif>
                        Türkçe</option>
                    <option value="/en" @if (App::isLocale('en')) selected @endif>English</option>
                    <option value="/ru" @if (App::isLocale('ru')) selected @endif>Pусский</option>
                    <option value="/fr" @if (App::isLocale('fr')) selected @endif>Français</option>

                </select>

                </li>
            </div>
        </div>
        <div class="menu-icon d-flex align-items-baseline">


            <div class="text-menu p-relative  font-heading text-transform-upper">
                <div class="p-absolute text-button">
                    {{__('menu')}}</div>
                <div class="p-absolute text-open">{{__('ac')}}
                </div>
                <div class="p-absolute text-close">
                    {{__('kapat')}}</div>


            </div>



            <div class="icon-m" data-dsn="parallax" data-dsn-move="10">

                <span class="menu-icon-line p-relative d-inline-block icon-top"></span>

                <span class="menu-icon-line p-relative d-inline-block icon-center"></span>
                <span class="menu-icon-line p-relative d-block icon-bottom"></span>



            </div>


        </div>
        <nav class="accent-menu dsn-container main-navigation p-absolute  w-100  d-flex align-items-baseline ">
            <div class="menu-cover-title">{{__('menu')}}</div>
            <ul class="extend-container p-relative d-flex flex-column justify-content-center h-100">

                <li class="dsn-active dsn-drop-down">
                    <a href="/{{app()->getLocale()}}" class="user-no-selection">

                        <span class="dsn-title-menu">{{__('anasayfa')}}</span>
                        <span class="dsn-meta-menu">01</span>
                        <span class="dsn-bg-arrow"></span>
                    </a>


                    <!-- 193453 -->
                </li>

                <li class="dsn-drop-down">
                    <a href="#" class="user-no-selection">

                        <span class="dsn-title-menu">{{__('kurumsal')}}</span>
                        <span class="dsn-meta-menu">02</span>
                        <span class="dsn-bg-arrow"></span>
                    </a>


                    <ul>
                        <li class="dsn-back-menu">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-dsn-src="{{asset('assets')}}/img/left-chevron.svg" alt="">
                            <span class="dsn-title-menu">{{__('geri')}}</span>
                        </li>

                        <li>
                            <a href="{{route('hakkimizda' , app()->getLocale() ) }}">

                                <span class="dsn-title-menu">{{__('hakkimizda')}}</span>
                                <span class="dsn-meta-menu">01</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('misyon' , app()->getLocale() ) }}">
                                <span class="dsn-title-menu">{{__('misyon')}}/{{__('vizyon')}}</span>
                                <span class="dsn-meta-menu">02</span>
                            </a>
                        </li>



                        <li>
                            <a href="{{route('kunye' , app()->getLocale() ) }}">
                                <span class="dsn-title-menu">{{__('kunye')}}</span>
                                <span class="dsn-meta-menu">04</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('tarihce' , app()->getLocale() ) }}">
                                <span class="dsn-title-menu">{{__('tarihce')}}</span>
                                <span class="dsn-meta-menu">04</span>
                            </a>
                        </li>



                    </ul>

                </li>

                <li class="dsn-drop-down">
                    <a href="#" class="user-no-selection">

                        <span class="dsn-title-menu">{{__('uretim')}}</span>
                        <span class="dsn-meta-menu">03</span>
                        <span class="dsn-bg-arrow"></span>
                    </a>


                    <ul>
                        <li class="dsn-back-menu">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-dsn-src="{{asset('assets')}}/img/left-chevron.svg" alt="">
                            <span class="dsn-title-menu">{{__('geri')}}</span>
                        </li>

                        <li>
                            <a href="{{route('kapasite' , app()->getLocale() ) }}">
                                <span class="dsn-title-menu">{{__('kapasite')}}</span>
                                <span class="dsn-meta-menu">01</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('sertifikalar' , app()->getLocale() ) }}">
                                <span class="dsn-title-menu">{{__('sertifikalar')}}</span>
                                <span class="dsn-meta-menu">02</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('cevre' , app()->getLocale() ) }}">
                                <span class="dsn-title-menu">{{__('cevre')}}</span>
                                <span class="dsn-meta-menu">03</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('ihracatagı' , app()->getLocale() ) }}">
                                <span class="dsn-title-menu">{{__('ihracatagı')}}</span>
                                <span class="dsn-meta-menu">04</span>
                            </a>
                        </li>




                    </ul>

                </li>

                <li class="dsn-drop-down">
                    <a href="#" class="user-no-selection">

                        <span class="dsn-title-menu">{{__('urunler')}}</span>
                        <span class="dsn-meta-menu">03</span>
                        <span class="dsn-bg-arrow"></span>
                    </a>


                    <ul>
                        <li class="dsn-back-menu">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-dsn-src="{{asset('assets')}}/img/left-chevron.svg" alt="">
                            <span class="dsn-title-menu">{{__('geri')}}</span>
                        </li>

                        <li>
                            <a href="{{route('ormehamkumas' , app()->getLocale() ) }}">
                                <span class="dsn-title-menu">{{__('ormehamkumas')}}</span>
                                <span class="dsn-meta-menu">01</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('ormeboyalikumas' , app()->getLocale() ) }}">
                                <span class="dsn-title-menu">{{__('ormeboyalıkumas')}}</span>
                                <span class="dsn-meta-menu">02</span>
                            </a>
                        </li>


                        <li>
                            <a href="{{route('iplik' , app()->getLocale() ) }}" class="user-no-selection">

                                <span class="dsn-title-menu">{{__('iplik')}}</span>
                                <span class="dsn-meta-menu">04</span>
                                <span class="dsn-bg-arrow"></span>
                            </a>

                        </li>

                        <li>
                            <a href="{{route('inovatifkumas' , app()->getLocale() ) }}" class="user-no-selection">

                                <span class="dsn-title-menu">{{__('inovatifkumas')}}</span>
                                <span class="dsn-meta-menu">05</span>
                                <span class="dsn-bg-arrow"></span>
                            </a>

                        </li>
















                    </ul>

                </li>


                <li>
                    <a href="{{route('sustainability' , app()->getLocale() ) }}" class="user-no-selection">

                        <span class="dsn-title-menu">{{__('sustainability')}}</span>
                        <span class="dsn-meta-menu">04</span>
                        <span class="dsn-bg-arrow"></span>
                    </a>

                </li>

                <li>
                    <a href="{{route('iletisim' , app()->getLocale() ) }}" class="user-no-selection">
                        <span class="dsn-title-menu">{{__('iletisim')}}</span>
                        <span class="dsn-meta-menu">05</span>
                        <span class="dsn-bg-arrow"></span>
                    </a>

                </li>



            </ul>



            <div class="container-content  p-absolute h-100 left-60 d-flex flex-column justify-content-center">
                <div class="nav__info">
                    <div class="nav-content">
                        <p class="title-line">
                            {{__('adres')}}</p>
                        <p>
                            Gaziantep Yolu Üzeri Karacasu Mevkii Karaçay Yanı PK.65 Kahramanmaraş / TÜRKİYE</p>
                    </div>
                    <div class="nav-content">
                        <p class="title-line">
                            {{__('iletisim')}}</p>
                        <p class="links over-hidden">
                            <a href="#" data-hover-text="Tel: +90 344 251 28 90
                            Faks: +90 344 251 28 94" class="link-hover">
                                Tel: +90 344 251 28 90
                                Faks: +90 344 251 28 94</a>
                        </p>
                        <p class="links  over-hidden">
                            <a href="#" data-hover-text="info@moteks.com.tr" class="link-hover">info@moteks.com.tr</a>
                        </p>
                    </div>
                </div>
                <div class="nav-social nav-content">
                    <div class="nav-social-inner p-relative">
                        <p class="title-line">
                            {{__('sosyallink')}}</p>
                        <ul>

                            <li>
                                <a href="https://www.facebook.com/moteksmoderntekstil" target="_blank"
                                    rel="nofollow">Facebook.
                                    <div class="icon-circle"></div>
                                </a>
                            </li>

                            <li> <a href="/tr"> TR</a></li>
                            <li> <a href="/en"> EN</a></li>
                            <li> <a href="/ru"> RU</a></li>
                            <li> <a href="/fr"> FR</a></li>




                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- ========== End Menu ========== -->
