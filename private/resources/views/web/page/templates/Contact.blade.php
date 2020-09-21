@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')
<div class="bg-color-10">
    <div class="position-relative bg-color-10 side-space ">
        <div class="js-slick main-slider slick-carousel--full-height position-relative bg-color-10" >        
             <div class="main-slider__item main-slider__item--5 background-cover text-white d-flex align-items-center bg-color-10 mobile-height">
                <div class="container">
                    <div class="">
                        <div class="">
                            <div class="animate animate--fadeIn  " data-animate="fadeInLeft" data-animate-delay="100">
                                <div class="ml-p-2 ml-p-sm-2 ml-p-md-3 ml-p-lg-2 font-size-50 text-color-white font-weight-400 font-size-sm-60 font-size-md-55 font-size-lg-60 font-size-xxl-60 font-size-xxxl-110 line-height-1-5 line-height-xs-1 mb-xs-20 text-left">
                                    {!! theSentence('contact-us-slider-title', false) !!}
                                </div>
                                <div class="row">
                                    <div class="col-48 col-lg-48">
                                        <div class="mt-sm-3 mt-xxxl-8">
                                            <div class="ml-p-2 ml-p-sm-2 ml-p-md-4 ml-p-lg-2 font-size-15 font-size-xs-15 font-size-sm-15 font-size-md-15 font-size-lg-16 font-size-xl-16 font-size-xxl-16 font-size-xxxl-16 font-weight-400 mb-5 text-left ">
                                                {!! theSentence('contact-us-slider-content', false) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
            <span id="product-3 bg-color-10">&nbsp;</span>
       
    </div>
            <div class="col-48 col-md-48 offset-md-8  mt--20 bg-color-10 zindex-2 pl-xs-40 ml-10 ml-xs-0 ml-md-0"  data-aos="fade-up" >
                <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                    <div class="row d-flex align-items-center bg-color-10">
                        <div class="col-48 col-md-12 offset-md-4 col-md-20 ">
                            <div data-aos="fade-right" class="">
                                <h3 class="mb-10 font-size-25 font-size-sm-18 font-size-md-28 font-size-lg-38 font-weight-600" >{!! theSentence('contact-us-content-title-dark', false) !!} 
                                    <span class="mb-30 font-weight-400 font-size-26 font-size-md-32 font-size-lg-40 line-height-1-5 text-color-black" >
                                        {!! theSentence('contact-us-content-title-light', false) !!}
                                    </span>
                                </h3>
                                <div class=" pr-md-100 font-size-16 font-size-xs-14 font-size-sm-14 font-size-md-15 font-size-lg-18 font-weight-400 text-color-gray" >
                                    <span>
                                        {!! theSentence('contact-us-content', false) !!}
                                    </span>
                                </div>
                                <div class="content-minus ml-140 ml-lg-0" ></div>
                            </div>  
                        </div>
                        <div class="col-48  col-md-24 col-lg-16 col-xl-16">
                            <div class="js-set-container-offset-right" data-breakpoint-down="xxl">
                                <div class="pr-xxl-0">
                                    <div class="px-2 py-6 zindex-2 ">
                                        <div class="font-size-sm-19 line-height-1-4 text-blue-900 font-weight-700 mb-8">
                                        </div>
                                        <form action="{{ route('web.'.app()->getLocale().'.ajax.contact') }}" class="contact-form js-form-validation-handle font-size-13 font-size-16 font-size-xs-14 font-size-sm-14 font-size-md-15 font-size-lg-18 font-weight-400 text-color-gray" method="post">
                                            @honeypot
                                            @csrf
                                            <div class="alert alert-success d-none"></div>
                                            <div class="form-group">
                                                <input name="name" type="text" class="form-control rounded-lg bg-color-5 pt-lg-30 pb-lg-30  " id="name" placeholder="{!! theSentence('contact-name-surname', false) !!}" data-rule-required="true"> 
                                            </div>
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control rounded-lg bg-color-5 pt-lg-30 pb-lg-30 " id="email" placeholder="{!! theSentence('contact-email', false) !!}" data-rule-required="true" data-rule-email="true">
                                            </div>
                                            <div class="form-group">
                                                <input name="phone" type="phone" class="form-control rounded-lg bg-color-5 pt-lg-30 pb-lg-30 " id="phone" placeholder="{!! theSentence('contact-telephone', false) !!}" data-rule-required="true" data-rule-phone="true">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="message" class="form-control rounded bg-color-5" id="message" rows="5"  placeholder="{!! theSentence('contact-message', false) !!}" data-rule-required="true" data-gramm_editor="false"></textarea>
                                            </div>
                                             <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input name="information_text" type="checkbox" class="custom-control-input" id="information_text" data-rule-required="true">
                                                    <label class=" pt-md-0 pt-lg-0 custom-control-label font-size-xs-13 text-color-gray font-size-15 mb-5 mb-lg-0 font-weight-400 js-popup-ajax" for="information_text">
                                                        {!! theSentence('contact-information-text-read', false, [
                                                            'link' => getPageByTemplate('InformationText')['viewLink']
                                                        ]) !!}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input name="information_text_1," type="checkbox" class="custom-control-input" id="information_text_1" data-rule-required="true">
                                                    <label class=" pt-md-0 pt-lg-0 custom-control-label font-size-xs-13 text-color-gray font-size-15 mt-lg-0 mb-20 font-weight-400 js-popup-ajax" for="information_text">
                                                        {!! theSentence('contact-information-text-agree', false, ['link' => getPageByTemplate('InformationTextTwo')['viewLink']
                                                        ]) !!}
                                                    </label>
                                                </div>
                                            </div>
                                                                               
                                            <button type="submit" id="submit_contact_form_button" disabled class=" button_cont ml-20 mt-10 ml-lg-65 button-position example_b button button-light--disabled font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-290 min-height-sm-51 py-4 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10">{!! textUppercase(theSentence('contact-send')) !!}</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    
    {{-- <div class="bg-color-10">
        <div class="mt--20">
            <div class="row justify-content-center bg-color-10 ">
                <div class="col-md-48 ml-xs-20 col-xxl-16 mt-10 mt-md-0 zindex-2 ">
                    <div class="js-set-container-offset-left" data-breakpoint-down="xxl">
                        <div class="ml-5 mt-30 wrapper-left-md-2x wrapper-right-md-3x pr-xxl-0 pt-50">
                            <div data-aos="fade-right" class="">
                                <h3 class="mb-10 text-center font-size-26 font-size-sm-18 font-size-md-28 font-size-lg-38 font-weight-600" >{!! theSentence('contact-us-content-title-dark', false) !!} 
                                    <span class="mb-30 font-weight-400 font-size-26 font-size-md-32 font-size-lg-40 line-height-1-5 text-color-black" >
                                        {!! theSentence('contact-us-content-title-light', false) !!}
                                    </span>
                                </h3>
                                <div class="font-size-16 font-size-xs-14 font-size-sm-14 font-size-md-15 font-size-lg-18 font-weight-400 text-color-gray">
                                    <span>
                                        {!! theSentence('contact-us-content', false) !!}
                                    </span>
                                </div>
                                <div class="content-minus ml-150 ml-lg-0" ></div>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="ccol-48 col-sm-46 col-md-35 col-lg-42  col-xxl-18 mt-10 mt-md-0  zindex-2" data-aos="fade-left">
                    <div class="">
                        <div class="js-set-container-offset-right" data-breakpoint-down="xxl">
                            <div class="wrapper-left-md-x wrapper-right-md-x pr-xxl-0">
                                <div class=" pl-lg-120 px-2 py-6 px-xxl-11 py-xxl-8  zindex-2 ">
                                    <div class="font-size-sm-19 line-height-1-4 text-blue-900 font-weight-700 mb-8">
                                    </div>
                                    <form action="{{ route('web.'.app()->getLocale().'.ajax.contact') }}" class="contact-form js-form-validation-handle font-size-13 ml-md--10 mr-md-140 font-size-16 font-size-xs-14 font-size-sm-14 font-size-md-15 font-size-lg-18 font-weight-400 text-color-gray" method="post">
                                        @honeypot
                                        @csrf
                                        <div class="alert alert-success d-none"></div>
                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control rounded-lg bg-color-5 pt-lg-30 pb-lg-30  " id="name" placeholder="{!! theSentence('contact-name-surname', false) !!}" data-rule-required="true"> 
                                        </div>
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control rounded-lg bg-color-5 pt-lg-30 pb-lg-30 " id="email" placeholder="{!! theSentence('contact-email', false) !!}" data-rule-required="true" data-rule-email="true">
                                        </div>
                                        <div class="form-group">
                                            <input name="phone" type="phone" class="form-control rounded-lg bg-color-5 pt-lg-30 pb-lg-30 " id="phone" placeholder="{!! theSentence('contact-telephone', false) !!}" data-rule-required="true" data-rule-phone="true">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control rounded bg-color-5" id="message" rows="5"  placeholder="{!! theSentence('contact-message', false) !!}" data-rule-required="true" data-gramm_editor="false"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input name="information_text" type="checkbox" class="custom-control-input" id="information_text" data-rule-required="true">
                                                <label class=" pt-md-0 pt-lg-0 custom-control-label font-size-xs-13 text-color-gray font-size-15 mb-5 mb-lg-0 font-weight-400 js-popup-ajax" for="information_text">
                                                    {!! theSentence('contact-information-text', false, [
                                                        'link' => getPageByTemplate('InformationText')['viewLink']
                                                    ]) !!}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input name="information_text" type="checkbox" class="custom-control-input" id="information_text" data-rule-required="true">
                                                <label class=" pt-md-0 pt-lg-0 custom-control-label font-size-xs-13 text-color-gray font-size-15 mt-lg-0 mb-20 font-weight-400 js-popup-ajax" for="information_text">
                                                    {!! theSentence('contact-information-text-agree', false, [
                                                        'link' => getPageByTemplate('InformationText')['viewLink']
                                                    ]) !!}
                                                </label>
                                            </div>
                                        </div>
                                                                           
                                        <button type="submit" class="button_cont ml-35 mt-10 ml-lg-75 button-position example_b button button-light--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-290 min-height-sm-51 py-4 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10">{!! textUppercase(theSentence('contact-send')) !!}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="position-relative bg-color-10 h-px-200 mt--90"></div>
        </div>
    </div> --}}
</div>
@endsection

