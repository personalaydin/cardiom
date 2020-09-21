@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')
<div class="position-relative ">
    <div class="js-slick main-slider slick-carousel--full-height" >        
         <div class="main-slider__item main-slider__item--4 background-cover text-white d-flex align-items-center">
            <div class="container mb-65 mb-lg-5">
                <div class="">
                    <div class="">
                        <div class="animate animate--fadeIn " data-animate="fadeInLeft" data-animate-delay="100">
                            <div class="ml-p-sm-2 ml-p-md-3 ml-p-lg-7 font-size-50 font-size-lg-70 text-color-white font-weight-400 font-size-sm-60 font-size-md-55 font-size-lg-70 font-size-xxl-90 font-size-xxxl-110 line-height-1-5 line-height-xs-1 mb-xs-20 text-left">
                                {!! theSentence('how-to-use-1', false) !!}
                            </div>
                            <div class="row">
                                <div class="col-48 col-lg-48">
                                    <div class="mt-sm-3 mt-xxxl-8">
                                        <div class="ml-p-2 ml-p-sm-2 ml-p-md-4 ml-p-lg-7 for-width font-size-15 font-size-xs-15 font-size-sm-15 font-size-md-15 font-size-lg-15 font-size-xl-24 font-size-xxl-24 font-size-xxxl-24 font-weight-400 mb-5 text-left ">
                                            {!! theSentence('how-to-use-2', false) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--  <div class="button_cont all-image-center all-text-center">
                        <a class="button-position  example_b mt-15 mt-sm-25 mt-md-30 mt-lg-45 button button-light--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-180 min-height-sm-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10" href="add-website-here" target="_blank" rel="nofollow noopener">
                            <img src="{{asset('/assets/img/icons/play-icon.png')}}" alt="" style="width:27px;  height:27px;" class="mr-10"> {!! theSentence('watch-button', false) !!}
                        </a>
                    </div>  --}}
                </div>
            </div>
        </div>
    </div>
</div> 
    <div class="bg-color-5">
        <div class="pl-lg-100 pr-lg-100" >
            <div class="col-md-42 offset-md-3 mt-20 pb-20 bg-color-9 zindex-2 pt-20 pl-xs-40"  data-aos="fade-up" >
                <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                    <div class="row d-flex align-items-center  ">
                        <div class="col-18 offset-md-2 col-md-10 all-text-center">
                            <img src="{{asset('/assets/img/how-to-use/content-icon-1.png')}}" class="media-figure"  alt="cardiom">  
                        </div>
                        <div class="col-42 col-md-28 all-text-center">
                            <h3 class="mb-20 mb-lg-30 font-size-18 font-size-md-20 font-size-lg-22 font-size-xl-28 font-size-xxl-24 font-size-xxxl-30 font-weight-600" >{!! theSentence('how-to-use-content-title-1', false) !!}</h3>
                            <div class="all-text-center just-left font-size-13 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-18 font-weight-400 text-color-gray">
                                <span class="">
                                    {!! theSentence('how-to-use-content-1', false) !!}
                                </span>
                            </div>
                            <div class="content-minus ml-125 ml-lg-0" ></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-42 offset-md-3 mt-20 pb-20 bg-color-5 zindex-2 pt-20 pl-xs-40"  data-aos="fade-up" >
                <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                    <div class="row d-flex align-items-center  ">
                        <div class="col-18 offset-md-2 col-md-10 all-text-center">
                            <img src="{{asset('/assets/img/how-to-use/content-icon-2.png')}}" class="media-figure"  alt="cardiom">  
                        </div>
                        <div class="col-42 col-md-28 all-text-center">
                            <h3 class=" mb-15 font-size- font-size-md-20 font-size-lg-22 font-size-xl-28 font-size-xxl-24 font-size-xxxl-30 font-weight-600" >{!! theSentence('how-to-use-content-title-2', false) !!}</h3>
                        <div class="just-left mt-md-20 pr-p-md-20 font-size-13 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-18 font-weight-400 text-color-gray">
                            <span class="">
                                {!! theSentence('how-to-use-content-2', false) !!}
                            </span>
                        </div>      
                        <div class="row" >
                            <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">
                                <div>
                                    <a class="uk-inline" href="/assets/img/how-to-use/content-image-woman.png" data-caption="Caption 1">
                                        <img src="{{asset('/assets/img/how-to-use/content-image-woman.png')}}" class="media-figure mb-0 mb-md-10 zoom"  alt="cardiom">
                                    <span class="mt-10 mt-md-0 text-color-dark-blue font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-14 font-size-lg-15 font-weight-400 d-block">
                                        {!! theSentence('how-to-use-content-2-img-woman', false) !!}
                                    </span>
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="/assets/img/how-to-use/content-image-man.png" data-caption="Caption 1"> 
                                        <img src="/assets/img/how-to-use/content-image-man.png" alt="...">
                                        <span class="mt-10 mt-md-0 text-color-dark-blue font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-14 font-size-lg-15 font-weight-400 d-block">
                                            {!! theSentence('how-to-use-content-2-img-man', false) !!}
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12"></div>
                            <div class="col-md-12"></div>
                        </div>
                        <div class="content-minus ml-125 ml-lg-0" ></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-42 offset-md-3 mt-20 pb-20 bg-color-9 zindex-2 pt-20 pl-xs-40"  data-aos="fade-up" >
                <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                    <div class="row d-flex align-items-center  ">
                        <div class="col-18 offset-md-2 col-md-10 all-text-center">
                            <img src="{{asset('/assets/img/how-to-use/content-icon-3.png')}}" class="media-figure"  alt="cardiom">  
                        </div>
                        <div class="col-42 col-md-28 all-text-center">
                            <h3 class="mb-20 mb-lg-30 ont-size-18 font-size-md-20 font-size-lg-22 font-size-xl-28 font-size-xxl-24 font-size-xxxl-30 font-weight-600" >{!! theSentence('how-to-use-content-title-3', false) !!}</h3>
                            <div class="just-left font-size-13 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-18 font-weight-400 text-color-gray">
                                <span class="">
                                    {!! theSentence('how-to-use-content-3', false) !!}
                                </span>
                            </div>
                            <div class="content-minus ml-125 ml-lg-0" ></div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-42 offset-md-3 mt-20 pb-20 bg-color-5 zindex-2 pt-20 pl-xs-40"  data-aos="fade-up" >
                <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                    <div class="row d-flex align-items-center  ">
                        <div class="col-18 offset-md-2 col-md-10 all-text-center">
                            <img src="{{asset('/assets/img/how-to-use/content-icon-4.png')}}" class="media-figure"  alt="cardiom">  
                        </div>
                        <div class="col-42 col-md-28 all-text-center">
                            <h3 class="mb-20 mb-lg-30 ont-size-18 font-size-md-20 font-size-lg-22 font-size-xl-28 font-size-xxl-24 font-size-xxxl-30 font-weight-600" >{!! theSentence('how-to-use-content-title-4', false) !!}</h3>
                            <div class="just-left  font-size-13 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-18 font-weight-400 text-color-gray">
                                <span class="">
                                    {!! theSentence('how-to-use-content-4', false) !!}
                                </span>
                            </div>
                            <div class="content-minus ml-125 ml-lg-0" ></div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-42 offset-md-3 mt-20 pb-20 bg-color-9 zindex-2 pt-20 pl-xs-40"  data-aos="fade-up" >
                <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                    <div class="row d-flex align-items-center  ">
                        <div class="col-18 offset-md-2 col-md-10 all-text-center">
                            <img src="{{asset('/assets/img/how-to-use/content-icon-5.png')}}" class="media-figure"  alt="cardiom">  
                        </div>
                        <div class="col-42 col-md-28 all-text-center">
                            <h3 class="mb-20 mb-lg-30 ont-size-18 font-size-md-20 font-size-lg-22 font-size-xl-28 font-size-xxl-24 font-size-xxxl-30 font-weight-600" >{!! theSentence('how-to-use-title-5', false) !!}</h3>
                            <div class="just-left  font-size-13 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-18 font-weight-400 text-color-gray">
                                <span class="">
                                    {!! theSentence('how-to-use-content-5', false) !!}
                                </span>
                            </div>
                            <div class="content-minus ml-125 ml-lg-0" ></div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-42 offset-md-3 mt-20 pb-20 bg-color-5 zindex-2 pt-20 pl-xs-40"  data-aos="fade-up" >
                <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                    <div class="row d-flex align-items-center  ">
                        <div class="col-18 offset-md-2 col-md-10 all-text-center">
                            <img src="{{asset('/assets/img/how-to-use/content-icon-6.png')}}" class="media-figure"  alt="cardiom">  
                        </div>
                        <div class="col-42 col-md-28 all-text-center">
                            <h3 class="mb-20 mb-lg-30 ont-size-18 font-size-md-20 font-size-lg-22 font-size-xl-28 font-size-xxl-24 font-size-xxxl-30 font-weight-600" >{!! theSentence('how-to-use-title-6', false) !!}</h3>
                            <div class="just-left  font-size-13 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-18 font-weight-400 text-color-gray">
                                <span class="">
                                    {!! theSentence('how-to-use-content-6', false) !!}
                                </span>
                            </div>
                            <div class="content-minus ml-125 ml-lg-0" ></div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-42 offset-md-3  bg-color-9 mt-50 mt-md-40"  data-aos="fade-up" >
                <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                    <div class="row d-flex align-items-center">
                        <div class="col-18 offset-md-2 col-md-10 all-text-center d-none d-block">
                        </div>
                        <div class="col-42 col-md-28 all-text-center">
                            <h3 class="pt-30 text-center font-size-22 font-size-md-22 font-size-lg-26 font-size-xl-30 font-size-xxl-40 font-size-xxxl-50 font-weight-500 line-height-1-5" >{!! theSentence('troubleshooting-title-dark', false) !!} 
                                <span class="mt-50 font-size-22 font-size-md-22 font-size-lg-26 font-size-xl-30 font-size-xxl-40 font-size-xxxl-50 font-weight-400" >
                                    {!! theSentence('troubleshooting-title-light', false) !!}
                                </span>
                            </h3>
                            <div class="all-text-center text-center font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-14 font-size-lg-14 font-weight-400">
                                <span class="just-left font-size-14 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-20 font-weight-400 text-color-gray">
                                    {!! theSentence('troubleshooting-content', false) !!}
                                </span>
                                <div class="button_cont all-text-center pt-20 pb-20 ">
                                   
                                    @if (getPageByTemplate('FAQ')) 
                                    <a href="{{ getPageByTemplate('FAQ')['viewLink'] }}" class="button-position all-text-center  example_a all-text-center button button-pink--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-155 min-width-md-200 min-width-lg-200 min-height-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10"  rel="nofollow noopener">
                                        <span class="pr-20 ">{{ svg_image('assets/img/icons/troubleshooting') }}</span>
                                        {!! theSentence('troubleshooting-button', false) !!}
                                    </a> 
                                
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-md-48  bg-color-5 bg-footer-carousel zindex-2 py-16 bg-color-5 mt-40 mt-md-40" data-aos="fade-up" >
            <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                <div class="row d-flex align-items-center">
                    <div class="col-18 offset-md-2 col-md-10 all-text-center d-none d-block">
                    </div>
                    <div class="col-42 col-md-28 all-text-center">
                        <h3 class="pl-15 pt-0 text-center font-size-45 font-size-md-22 font-size-lg-26 font-size-xl-30 font-size-xxl-40 font-size-xxxl-50 font-weight-500 line-height-1-5 text-color-white" >{!! theSentence('specs-footer-carousel-title', false) !!} 
                            
                        </h3>
                        <div class="all-text-center text-center font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-14 font-size-lg-14 font-weight-400">
                            <span class="font-size-14 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-20 font-weight-400 text-color-gray">
                                {!! theSentence('specs-footer-carousel-content', false) !!}
                            </span>
                            <div class="button_cont mt-20 pt-20 pb-20 mb-40">
                                @if (getPageByTemplate('Contact'))  
                                <a href="{{ getPageByTemplate('Contact')['viewLink'] }}" class="button-position example_b all-image-center button button-light--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-155 min-width-md-200 min-width-lg-200 min-height-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10" href="add-website-here" rel="nofollow noopener">
                                    {!! theSentence('contact-us-button', false) !!}
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span id="product-3">&nbsp;</span>
    </div>
    <div class="position-relative bg-color-6 h-px-200 mt--170">
    </div>
</div>
@endsection
