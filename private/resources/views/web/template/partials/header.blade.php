
<div class="container"></div>
<div class="wrapper-both"><div></div></div>
<div class="wrapper-both-2x"><div></div></div>
<div class="wrapper-both-3x"><div></div></div>
<header class="header-wrapper">
    <div class="container">
        <div class="header {{ $headerClass ?? '' }}">
            <div class="pt-20 header__top wrapper-both d-none d-lg-flex align-items-end justify-content-end mt-md--40 mb-30 mb-lg-35 mr--10 pl-lg-70 pr-lg-70 opacity-90">
                @if (count(config('app.locales')) > 1)
                    @foreach(config('app.locales') as $key => $locale)
                        <div class="header__top__lang-switcher relavtive mr-5 ">
                            <a href="{{ $localizationURLs[$key] }}" class="lang-style relative font-size-14 font-weight-600 lang-border opacity-90 fixed-top">{{ textUppercase($key) }}</a>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="header__bottom wrapper-both d-flex align-items-center mt-lg--50 ">
                <div class="w-100 row no-gutters align-items-right align-items-lg-end">
                    <div class="col-38 col-lg-10">
                        <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="header__bottom__logo" title="LiveWell Giyilebilir Sağlık Ürünleri">
                            <div class="logo-container"></div>
                        </a>
                    </div>
                    <div class="col-10 col-lg-38 pl-10 text-right">
                        <div class="header__bottom__menu font-size-16 font-size-md-10 font-size-lg-13 font-size-xxl-13 font-size-xxxl-16 font-weight-500 d-none d-lg-block mr-0 pr-0">
                            @if (getPageByTemplate('Home'))
                                <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="header__bottom__menu__item mr-5 mr-lg-10">
                                {{ (getPageByTemplate('Home')['title']) }}
                                </a>
                            @endif
                            @if (getPageByTemplate('HowToUse'))
                                <a href="{{ getPageByTemplate('HowToUse')['viewLink'] }}" class="header__bottom__menu__item mr-5 mr-lg-10">
                                    {{ (getPageByTemplate('HowToUse')['title']) }}
                                </a>
                            @endif
                            @if (getPageByTemplate('Specs'))
                                <a href="{{ getPageByTemplate('Specs')['viewLink'] }}" class="header__bottom__menu__item mr-5 mr-lg-10">
                                    {{ (getPageByTemplate('Specs')['title']) }}
                                </a>
                            @endif  
                            @if (getPageByTemplate('FAQ'))
                                <a href="{{ getPageByTemplate('FAQ')['viewLink'] }}" class="header__bottom__menu__item mr-5 mr-lg-10">
                                    {{ (getPageByTemplate('FAQ')['title']) }}
                                </a>
                            @endif
                            @if (getPageByTemplate('Contact'))
                                <a href="http://www.livewell.com.tr/tr/Iletisim" class="header__bottom__menu__item ">
                                    {{ (getPageByTemplate('Contact')['title']) }}
                                </a>
                            @endif
                        </div>
                        <div class="hamburger-menu-button-wrapper d-lg-none">
                            <button class="js-hamburger-menu-trigger hamburger hamburger--spin" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
