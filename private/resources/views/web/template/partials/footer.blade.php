<footer class="footer mt--10 py-8 pt-lg-90 ">
    <div id="cookieConsent">
        <div id="closeCookieConsent">x</div>
        {!! theSentence('cookies-text', false) !!}
        <a class="cookieConsentOK  button button-white--fill font-weight-600 font-size-13 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10 ">
            <span style="">{!! theSentence('cookies-button-text', false) !!}</span>
        </a>
    </div>
    <div class="container">
        <div class="row mr-30 mr-lg-0 mb-md-30 mb-lg-70 flex-item-container ">
            <div class="col-20 col-md-10 ml-5 mr-50">
                <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="header__bottom__logo" title="Cardiom">
                    {{ svg_image('assets/img/logo/logo-footer') }}
                </a> 
            </div>
            <div class=" col-4 offset-3 text-right pt-30 font-size-13 font-size-sm-14 font-size-md-14 font-weight-600 font-size-lg-15 text-color-gray d-none d-lg-block ">
            @if (getPageByTemplate('Home'))
                <a href="{{ getPageByTemplate('Home')['viewLink'] }}" >
                {{ (getPageByTemplate('Home')['title']) }}
                </a>
            @endif       
            </div>
            <div class=" col-4 text-right pt-30 text-color-gray ml-sm-0 ml-xs-0 font-size-13 font-size-sm-14 font-size-md-14 font-weight-600 font-size-lg-15  d-none d-lg-block min-width-200">
                @if (getPageByTemplate('HowToUse'))
                <a href="{{ getPageByTemplate('HowToUse')['viewLink'] }}" >
                    {{ (getPageByTemplate('HowToUse')['title']) }}
                </a>
            @endif     
            </div>
            <div class=" col-4 text-right pt-30 font-size-13 font-size-sm-14 font-size-md-14 font-weight-600 font-size-lg-15  text-color-gray d-none d-lg-block ">
                @if (getPageByTemplate('Specs'))
                <a href="{{ getPageByTemplate('Specs')['viewLink'] }}" >
                    {{ (getPageByTemplate('Specs')['title']) }}
                </a>
            @endif       
            </div>
            <div class=" col-4 text-right pt-30  font-size-13 font-size-sm-14 font-size-md-14 font-weight-600 font-size-lg-15  text-color-gray d-none d-lg-block">
                @if (getPageByTemplate('FAQ'))
                <a href="{{ getPageByTemplate('FAQ')['viewLink'] }}" >
                    {{ (getPageByTemplate('FAQ')['title']) }}
                </a>
            @endif  
            </div>
            <div class="mr--15 col-4 text-right pt-30 font-size-13 font-size-sm-14 font-size-md-14 font-weight-600 font-size-lg-15 text-color-gray d-none d-lg-block">
                @if (getPageByTemplate('Contact'))
                <a href="http://www.livewell.com.tr/tr/Iletisim" >
                    {{ (getPageByTemplate('Contact')['title']) }}
                </a>
            @endif   
            </div>
        </div> 
        <div class="row social-footer justify-content-around ">            
            <div class="d-none d-xs-none d-xxs-none mr-0 mr-p-lg-20  d-lg-block font-size-12 text-color-light-blue font-weight-600 copyright-footer">
                {!! theSentence('copyright', false) !!}
                <input name="information_text"  class="custom-control-input " id="information_text" data-rule-required="true">
                <label class="pl-md-10 pt-md-0 pt-lg-0 font-size-xs-12 text-color-gray font-size-14 mb-5 mb-lg-0 font-weight-400 js-popup-ajax" for="information_text">
                    {!! theSentence('contact-information-text-footer', false, [
                        'link' => getPageByTemplate('InformationText')['viewLink']
                    ]) !!} 
                </label>
                <input name="information_text"  class="custom-control-input " id="information_text" data-rule-required="true">
                <label class="pl-md-10 pt-md-0 pt-lg-0 font-size-xs-12 text-color-gray font-size-14 mb-5 mb-lg-0 font-weight-400" for="information_text">
                @if (App::getLocale() == 'tr')
                    <a href="{{ asset('/assets/downloads/tr-erdem-cardiom-kvk-politikasi.pdf') }}">
                        {!! theSentence('kvkk-text', false) !!}
                    </a>
                @elseif (App::getLocale() == 'en')
                    <a href="{{ asset('/assets/downloads/en-erdem-cardiom-kvk-politikasi.pdf') }}">
                        {!! theSentence('kvkk-text', false) !!}
                    </a>
                @endif 
                </label>
            </div>          
            <div class="row mr-20 justify-content-center">
                <div>
                    @if (setting('social_facebook'))
                        <div class="card ml-5 ml-p-lg-5">
                            <a  href="https://facebook.com/livewell.wearable" target="_blank" rel="nofollow">
                                <span class="img-bottom">{{ svg_image('assets/img/icons/social/fb-b') }}</span>
                                <span class="img-top">{{ svg_image('assets/img/icons/social/fb-f') }}</span>
                            </a>
                        </div>
                    @endif
                </div>
                {{--  <div>
                    @if (setting('social_twitter'))
                        <div class="card ml-5 ml-30 ml-lg-30">
                                <a href="{{ setting('social_twitter') }}" target="_blank" rel="nofollow">
                                    <span class="img-bottom">{{ svg_image('assets/img/icons/social/tw-b') }}</span>
                                    <span class="img-top">{{ svg_image('assets/img/icons/social/tw-f') }}</span>
                                </a>
                        </div>
                    @endif
                </div>  --}}
                <div class="">
                    @if (setting('social_instagram'))
                        <div class="card ml-30 ml-lg-30">
                            <a href="https://www.instagram.com/livewellwearable/?hl=en" target="_blank" rel="nofollow">
                                <span class="img-bottom">{{ svg_image('assets/img/icons/social/ins-b') }}</span>
                                <span class="img-top">{{ svg_image('assets/img/icons/social/ins-f') }}</span>
                            </a>
                        </div>
                    @endif
                </div>
                <div class="">
                    @if (setting('social_linkedin'))
                        <div class="card ml-30 ml-lg-30">
                            <a href="https://linkedin.com/company/livewell-a-s" target="_blank" rel="nofollow">
                                <span class="img-bottom">{{ svg_image('assets/img/icons/social/in-b') }}</span>
                                <span class="img-top">{{ svg_image('assets/img/icons/social/in-f') }}</span>
                            </a>
                        </div>
                    @endif
                </div>
                <div class="">
                    @if (setting('social_youtube'))
                        <div class="card ml-30 ml-lg-30">
                            <a href="https://www.youtube.com/channel/UCIPr7NOMxkwg-c3a1c5FogQ" target="_blank" rel="nofollow">
                                <span class="img-bottom">{{ svg_image('assets/img/icons/social/yt-b') }}</span>
                                <span class="img-top">{{ svg_image('assets/img/icons/social/yt-f') }}</span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
            <div class=" mt-15 mt-lg-0 d-md-block d-lg-none font-size-10 text-color-light-blue font-weight-600 text-center copyright-footer ml-lg-20 ml-xl-30 mt-xs-10">
                {!! theSentence('copyright', false) !!}
            </div> 
        </div>       
    </div>
</footer>
