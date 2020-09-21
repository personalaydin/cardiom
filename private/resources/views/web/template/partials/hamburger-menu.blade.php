<div class="hamburger-menu background-cover text-black d-flex d-lg-none align-items-center">
    <div class="h-100 w-100 d-flex flex-column justify-content-between">
        <div class="container py-5 py-xs-10 h-100 d-flex flex-column justify-content-between">
            <div class="px-4 w-100 font-size-14 font-size-sm-16 font-weight-600 text-white mb-4">
                <div class="mb-6 mb-sm-10 mt-50">
                    @if (count(config('app.locales')) > 1)
                     @foreach(config('app.locales') as $key => $locale)
                        <a href="{{ $localizationURLs[$key] }}" class="hamburger-menu__lang-switcher d-inline-flex align-items-center justify-content-center animate animate--fadeIn" data-animate="fadeInDown" data-animate-delay="100">{{ textUppercase($key) }}</a>
                     @endforeach
                    @endif
                </div>
                @if (getPageByTemplate('Home'))
                <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn mt-45" data-animate="fadeInLeft" data-animate-delay="700" >
                    {{ textUppercase(getPageByTemplate('Home')['title']) }}
                </a>
                @endif
                @if (getPageByTemplate('HowToUse'))
                    <a href="{{ getPageByTemplate('HowToUse')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="700">
                        {{ textUppercase(getPageByTemplate('HowToUse')['title']) }}
                    </a>
                @endif
                @if (getPageByTemplate('Specs'))
                    <a href="{{ getPageByTemplate('Specs')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="700">
                        {{ textUppercase(getPageByTemplate('Specs')['title']) }}
                    </a>
                @endif
                @if (getPageByTemplate('FAQ'))
                    <a href="{{ getPageByTemplate('FAQ')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="700">
                        {{ textUppercase(getPageByTemplate('FAQ')['title']) }}
                    </a>
                @endif
                @if (getPageByTemplate('Contact'))
                    <a href="{{ getPageByTemplate('Contact')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="700">
                        {{ textUppercase(getPageByTemplate('Contact')['title']) }}
                    </a>
                @endif
            </div>
            <div class="px-4 w-100 text-white animate animate--fadeIn mb-60 text-color-main" data-animate="fadeInDown" data-animate-delay="1000" >
                <div class="text-line ml-10 mb-4 mb-sm-7 font-size-16 connect-to-social-media">
                    {!! theSentence('social-medya', false) !!}
                </div>
                <div class="d-flex align-items-center m-n3 text-blue-400  mr-20">
                    @if (setting('social_facebook'))
                    <div class="w-80 p-10 mt-5 card ml-5 ml-p-lg-5">
                        <a href="https://facebook.com/livewell.wearable" target="_blank" rel="nofollow">
                            <span class="img-bottom">{{ svg_image('assets/img/icons/social/fb-b') }}</span>
                            <span class="img-top">{{ svg_image('assets/img/icons/social/fb-f') }}</span>
                        </a>
                    </div>
                    @endif
                    {{--  @if (setting('social_twitter'))
                    <div class="w-80 p-10 mt-5 card ml-20 ml-lg-30">
                        <a href="{{ setting('social_twitter') }}" target="_blank" rel="nofollow">
                            <span class="img-bottom">{{ svg_image('assets/img/icons/social/tw-b') }}</span>
                            <span class="img-top">{{ svg_image('assets/img/icons/social/tw-f') }}</span>
                        </a>
                    </div>
                    @endif  --}}
                    @if (setting('social_instagram'))
                    <div class="w-80 p-10 mt-5 card ml-20 ml-lg-30">
                        <a href="https://www.instagram.com/livewellwearable/?hl=en" target="_blank" rel="nofollow">
                            <span class="img-bottom">{{ svg_image('assets/img/icons/social/ins-b') }}</span>
                            <span class="img-top">{{ svg_image('assets/img/icons/social/ins-f') }}</span>
                        </a>
                    </div>
                    @endif
                    @if (setting('social_linkedin'))
                    <div class="w-80 p-10 mt-5 card ml-20 ml-lg-30">
                        <a href="https://linkedin.com/company/livewell-a-s" target="_blank" rel="nofollow">
                            <span class="img-bottom">{{ svg_image('assets/img/icons/social/in-b') }}</span>
                            <span class="img-top">{{ svg_image('assets/img/icons/social/in-f') }}</span>
                        </a>
                    </div>
                    @endif
                    @if (setting('social_youtube'))
                    <div class="w-80 p-10 mt-5 card ml-20 ml-lg-30">
                        <a href="https://www.youtube.com/channel/UC2LAi_9hO9jvJURXDcT6Vxw/" target="_blank" rel="nofollow">
                            <span class="img-bottom">{{ svg_image('assets/img/icons/social/yt-b') }}</span>
                            <span class="img-top">{{ svg_image('assets/img/icons/social/yt-f') }}</span>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>