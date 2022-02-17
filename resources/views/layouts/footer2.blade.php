<!-- ==========  next page  ========== -->

<!-- ========== End next page ========== -->




<!-- ========== Contact Form Model ========== -->
<div class="contact-btn">
    <div class="contact-btn-txt">{{__('iletisim')}}</div>

</div>


<div class="contact-modal background-section">
    <div class="contact-container h-100 w-100  border-left">
        <div class="box-contact-inner section-padding ">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="form-box">
                        <div class="line line-top"></div>
                        <div class="line line-bottom"></div>
                        <div class="line line-left"></div>
                        <div class="line line-right"></div>

                        <div class="mb-30 d-flex text-left flex-column align-items-start">
                            <p class="sub-heading line-shap line-shap-before mb-15">
                                <span class="line-bg-right"> {{__('iletisim')}}</span>
                            </p>
                            <h2 class="section-title  title-cap">
                                {{__('iletisimuzun')}}
                            </h2>
                        </div>

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
                                    <a class="link-hover" data-hover-text="info@moteks.com.tr"                                    "
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
<!-- ========== End Contact Form Model ========== -->
</main>


<!-- ========== Scroll Right Page To Top Page ========== -->
<div class="scroll-to-top">
    <img src="{{asset('assets')}}/img/scroll_top.svg" alt="">
    <div class="box-numper">
        <span>10%</span>
    </div>
</div>
<!-- ========== End Scroll Right Page To Top Page ========== -->


<!-- ========== Cursor Page ========== -->
<div class="cursor">

    <div class="cursor-helper">
        <span class="cursor-drag">{{__('surukle')}}</span>
        <span class="cursor-view">{{__('goruntule')}}</span>
        <span class="cursor-open"><i class="fas fa-plus"></i></span>
        <span class="cursor-close">{{__('kapat')}}</span>
        <span class="cursor-play">{{__('oynat')}}</span>
        <span class="cursor-next"><i class="fas fa-chevron-right"></i></span>
        <span class="cursor-prev"><i class="fas fa-chevron-left"></i></span>
    </div>

</div>
<!-- ========== End Cursor Page ========== -->

<!-- ========== Style Option Page ========== -->


<!-- ========== social network ========== -->
<div class="social-side social-network d-flex align-items-center ">
    <div class="icon" data-dsn="parallax">
        <i class="fa fa-share-alt" aria-hidden="true"></i>
    </div>
    <ul class="socials d-flex flex-column p-absolute ">
        <li>
            <a href="" target="_blank">
                <i class="fab fa-dribbble"></i>
                <span>Db</span>
            </a>
        </li>
        <li>
            <a href="" target="_blank">
                <i class="fab fa-twitter"></i>
                <span>Tw</span>
            </a>
        </li>
        <li>
            <a href="" target="_blank">
                <i class="fab fa-behance"></i>
                <span>Be</span>
            </a>
        </li>
        <li>
            <a href="" target="_blank">
                <i class="fab fa-facebook-f"></i>
                <span>Fb</span>
            </a>
        </li>
    </ul>
</div>
<!-- ========== End social network ========== -->
