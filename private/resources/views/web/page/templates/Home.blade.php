@extends('web.template.layout')
@section('content')
    <div class="position-relative bg-color-4">
        <div class="js-slick main-slider slick-carousel--full-height position-relative" >
             <div class="main-slider__item main-slider__item--2 background-cover text-white d-flex align-items-center height-vh" style="height: 110vh !important;">
                <div class="container ">
                    <div class="col-48">
                        <div class="mb-65 mt-lg-100 mt-xxl-180 pt-p-lg-5 pt-xl-lg-0 pt-xxl-lg-0 mt-p-md-12 ml-p-lg-0 ml-p-xxl-5 ml-p-xxxl--5 mr-p-lg-30 mr-p-xl-20 mr-p-xxl-10 ">
                            <div data-aos="zoom-out" class="animate animate--fadeIn pb-10 font-weight-300 font-size-xs-50 font-size-35 font-size-sm-60 font-size-md-70 font-size-lg-90 font-size-xxl-90 font-size-xxxl-115 line-height-1-5 line-height-xs-1 mb-xs-10" data-animate="fadeInLeft" data-animate-delay="100">
                                {!! theSentence('slider-title-1', false) !!}
                            </div>
                            <div class="animate animate--fadeIn  mb-p-md-22 mb-p-lg-20 ml-p-15 ml-p-md-5 ml-p-lg-5" data-animate="fadeInLeft" data-animate-delay="100">      
                                <div data-aos="zoom-out" class="text-color-more-light-blue pb-20 font-weight-500 font-size-xxs-20 font-size-xs-50 font-size-35 font-size-sm-60 font-size-md-70 font-size-lg-80  font-size-xxl-90 font-size-xxxl-110 line-height-1 line-height-xs-1 mb-xs-10">
                                    {!! theSentence('slider-title-2', false) !!}
                                </div>
                                <div class="row"> 
                                    <div class="col-40 col-lg-44">
                                        <div class="pl-md-15 pl-sm-30 pl-xs-10  mt-sm-3 mt-xxxl-8">
                                            <div data-aos="fade-left" class="for-width text-color-white font-size-15 font-size-xs-15 font-size-sm-15 font-size-md-15 font-size-lg-17 font-size-xl-24 font-size-xxl-24 font-size-xxxl-24 font-weight-400 mb-5 pr-md-70 pr-sm-0">
                                              {!! theSentence('slider-content', false) !!}
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>       
                                <div class="button_cont mt-20 mt-lg-0">
                                    @if (getPageByTemplate('HowToUse'))
                                        <a href="{{ getPageByTemplate('HowToUse')['viewLink'] }}" class="button-position example_b mt-15 mt-sm-25 mt-md-25 mt-lg-00 button button-light--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-120 min-width-lg-200 min-height-sm-51 py-4 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10  mr-15" href="add-website-here" target="_blank" rel="nofollow noopener">
                                            {!! theSentence('corporate-button', false) !!}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>   
            </div>
        </div>
    </div> 
    <section id="scroll" ></section>
    <div class="position-relative h-px-md-500 h-px-xs-500 h-px-450 bg-color-4 ">
        <div class="js-slick main-slider slick-carousel--full-height position-relative" >
            <div class="background-cover text-white d-flex align-items-center mb-50 mt-10 ">
                <div class="container">
                    <div class="justfiy-home-box">
                        <div class="animate animate--fadeIn" data-animate="fadeInDown" data-animate-delay="100" >
                            <div data-aos="fade-down" class="mt-50 mb-15 all-image-center font-weight-700 font-size-25 font-size-sm-26 font-size-md-40 font-size-lg-36 font-size-xl-50 font-size-xxxl-50 line-height-1-5 text-color-black">
                                {!! theSentence('home-box-title', false) !!} 
                                <span class="mt-50 font-weight-400 font-size-24 font-size-sm-26 font-size-md-40 font-size-lg-36 font-size-xl-50 font-size-xxxl-50 line-height-1-5 text-color-black" > 
                                    {!! theSentence('home-box-title-2', false) !!}
                                </span>
                            </div>
                            <div class="all-image-center">
                                <div data-aos="fade-up" class="font-size-15 ml-5 ml-lg-0 font-size-sm-15 font-size-md-18 font-size-lg-18 font-weight-400 mb-5 text-color-gray">
                                    {!! theSentence('home-box-content', false) !!}
                                </div>
                               
                            </div>
                            <div class="content-minus pos-home-minus mb-100"  data-aos="fade-up"></div>
                           
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="container bg-color-4 "> 
        <div class="row justfiy-specs-box box-image-position animate animate--fadeLeft pl-40 pr-40 mt-150 mt-xs-20 mt-sm-10 mt-lg-0 pt-10 pt-lg-20" data-aos="fade-up" data-animate="fadeInDown" data-animate-delay="50">

            <div class="col-23 col-md-24 col-xl-16 mb-10 mb-lg-20 px-lg-12 bg-image bg-image--1 bg-image--long" >
                {{-- <img class="mb-5" src="{{ asset('assets/img/icons/1.png') }}" alt=""> --}}
                <div class="box-text box-text--1">
                    <div class="text-center text-color-black font-weight-400 font-size-xs-35 font-size-30  font-size-lg-80 font-size-xxxl-90 font-size-xxxxl-90 mb--10">
                            {!! theSentence('indicator-number-1', false) !!}  
                    </div>
                    <div class="text-center font-size-xs-11 font-size-10 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-20 font-weight-400 text-color-gray">
                            {!! theSentence('indicator-number-1-2', false) !!}  
                    </div>
                </div>
            </div>
                <div class="col-23 col-md-24 col-xl-16 mb-10 mb-lg-20 px-lg-12 bg-image bg-image--2 bg-image--long position-relative" >
                    {{-- <img class="mb-5" src="{{ asset('assets/img/icons/1.png') }}" alt=""> --}}
                    <div class="box-text box-text--2">
                        <div class="text-center text-color-black font-weight-400 font-size-xs-35 font-size-30  font-size-lg-80 font-size-xxxl-90 font-size-xxxxl-90 mb--10">
                            {!! theSentence('indicator-number-2', false) !!}   
                        </div>
                        <div class="text-center font-size-xs-11 font-size-10 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-20 font-weight-400 text-color-gray">
                            {!! theSentence('indicator-number-2-2', false) !!}  
                        </div>
                    </div>
                  
                </div>
                <div class="col-23 col-md-24 col-xl-16 mb-10 mb-lg-20 px-lg-12 bg-image bg-image--3 bg-image--long position-relative">
                    {{-- <img class="mb-5" src="{{ asset('assets/img/icons/1.png') }}" alt=""> --}}
                    <div class="box-text box-text--3">
                        <div class="text-center text-color-black font-weight-400 font-size-xs-35 font-size-30  font-size-lg-80 font-size-xxxl-90 font-size-xxxxl-90 mb--10">
                            {!! theSentence('indicator-number-3', false) !!}  
                        </div>
                        <div class="text-center font-size-xs-11 font-size-10 font-size-md-14 font-size-lg-13 font-size-xl-14 font-size-xxl-18 font-size-xxxl-20 font-weight-400 text-color-gray">
                            {!! theSentence('indicator-number-3-2', false) !!}  
                            <span class="text-color-light-blue  font-size-lg-16">
                                <br>{!! theSentence('indicator-number-3-3', false) !!}  
                            </span>
                        </div> 
                    </div> 
                </div>
                <div class="col-23 col-md-24 col-xl-16 mb-10 mb-lg-20 px-lg-12 bg-image bg-image--4 bg-image--short position-relative d-lg-none" >
                    {{-- <img class="mb-5" src="{{ asset('assets/img/icons/1.png') }}" alt=""> --}}
                    <div class="box-text box-text--4">
                        <div class="text-center text-color-black font-weight-700 font-size-xs-11 font-size-11 font-size-lg-17 font-size-xxxl-15 font-size-xxxxl-18 ">
                            {!! theSentence('indicator-number-4', false) !!}  
                        </div>
                        <div class="text-center font-size-xs-11 font-size-10 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-20 font-weight-400 text-color-gray">
                            {!! theSentence('indicator-number-4-2', false) !!}  
                        </div>
                    </div>
                </div>

            </div>
            <div class="row justfiy-specs-box box-image-position animate animate--fadeLeft pl-40 pr-40 mt-lg-0 pt-lg-30 mb-90 mb-xs-70 mb-md-5 mb-lg-0" data-aos="fade-up" data-animate="fadeInDown" data-animate-delay="50">
                <div class="col-23 col-md-24 col-xl-16 mb-10 mb-lg-20 px-lg-12 bg-image bg-image--4 bg-image--short position-relative d-none d-lg-block" >
                    {{-- <img class="mb-5" src="{{ asset('assets/img/icons/1.png') }}" alt=""> --}}
                    <div class="box-text box-text--4">
                        <div class="text-center text-color-black font-weight-700 font-size-11 font-size-lg-17 font-size-xxxl-15 font-size-xxxxl-18 ">
                            {!! theSentence('indicator-number-4', false) !!}  
                        </div>
                        <div class="text-center font-size-xs-11 font-size-10 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-20 font-weight-400 text-color-gray">
                            {!! theSentence('indicator-number-4-2', false) !!}  
                        </div>
                    </div>
                </div>
                <div class="col-23 col-md-24 col-xl-16 mb-10 mb-lg-20 px-lg-12 bg-image bg-image--5 bg-image--short position-relative">
                    {{-- <img class="mb-5" src="{{ asset('assets/img/icons/1.png') }}" alt=""> --}}
                   <div class="box-text box-text--5">
                    <div class="text-center text-color-black font-weight-400 font-weight-700 font-size-12 font-size-lg-17 font-size-xxxl-15 font-size-xxxxl-18">
                        {!! theSentence('indicator-number-6', false) !!}  
                    </div>
                    <div class="text-center font-size-xs-11 font-size-10 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-20 font-weight-400 text-color-gray mb-3">
                        {!! theSentence('indicator-number-6-2', false) !!}  
                    </div>
                   </div>
                </div>
                <div class="col-23 col-md-24 col-xl-16 mb-10 mb-lg-20 px-lg-12 bg-image bg-image--6 bg-image--short position-relative">
                    {{-- <img class="mb-5" src="{{ asset('assets/img/icons/1.png') }}" alt=""> --}}
                  <div class="box-text box-text--6">
                    <div class="text-center text-color-light-blue font-weight-600 font-size-xs-11 font-size-10 font-size-lg-17 font-size-xxxl-13 font-size-xxxxl-18 mb-1">
                        {!! theSentence('indicator-number-5', false) !!}<span class="text-color-black pl-5"> 7,5 cm</span> 
                    </div>
                    <div class="text-center text-color-light-blue text-color-light-blue font-weight-600 font-size-xs-11 font-size-10 font-size-lg-17 font-size-xxxl-15 font-size-xxxxl-18 mb-1">
                        {!! theSentence('indicator-number-5-2', false) !!}<span class="text-color-black"> 8,8 cm</span> 
                    </div>
                    <div class="text-center text-color-light-blue text-color-light-blue font-weight-600 font-size-xs-11 font-size-10 font-size-lg-17 font-size-xxxl-15 font-size-xxxxl-18 mb-1">
                        {!! theSentence('indicator-number-5-3', false) !!}<span class="text-color-black pl-5 ">2,2 cm</span> 
                    </div>
                  </div>
                </div> 
               
            </div>
    </div>
    <div class="position-relative bg-color-4 how-to-panel-grp" >
        <div class="row">
            <div class="col-md-36 offset-md-6 mt-50 h-px-400 pt-md-20 bg-issue-1 carousel-card">
                <div class="js-slick main-slider slick-carousel--full-height " >
                    <div class="row">
                        <div class="col-md-42 offset-md-3 ">            
                            <div class="animate animate--fadeIn mb-p-md-22 mb-p-lg-20 " data-animate="fadeInLeft" data-animate-delay="100">
                                <div class="mt-10 mt-md-40 mb-20 pl-25 py-10 p-sm-20 ml-md--15 font-weight-400 font-size-30 font-size-sm-34 font-size-xs-32 font-size-md-30 font-size-lg-36 font-size-xl-50 font-size-xxxl-40 line-height-1 text-color-white">
                                    {!! theSentence('corporate-title', false) !!}
                                </div>
                                <div class="pl-20 pl-md-5 mt-xxxl-8 pl-sm-20 pl-xs-30 mt-sm--20 mt-xs--30">
                                    <div class="mb-20 for-width font-size-12 font-size-14 font-size-sm-15 font-size-lg-20 font-weight-400 text-color-white w-sm-70">
                                        {!! theSentence('corporate-content', false) !!}
                                    </div>
                                    <div class="button_cont">
                                        <br>
                                       
                                    @if (getPageByTemplate('HowToUse'))
                                        <a href="{{ getPageByTemplate('HowToUse')['viewLink'] }}"  class="example_b button button-light--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-164 min-height-sm-51 py-2 px-10 mr-15" href="add-website-here" rel="nofollow noopener">
                                            {!! theSentence('corporate-button', false) !!}
                                        </a>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="position-relative bg-color-4 side-space" data-aos="fade-up">
        <div class="">
            <div class="pt-md-20 bg-color-3 zindex-1 min-height-250 acordion-position">
                <div class="pt-100 d-block position-relative">          
                    <div class="text-center mt-100 mb-10 font-weight-500 font-size-36 font-size-md-36 font-size-lg-36 font-size-xl-50 font-size-xxxl-46 line-height-1 text-color-white" >
                        {!! theSentence('faq-home-title', false) !!}
                    </div>               
                    <div class="faq-panel-grp text-center mt-lg-0 font-size-13 ml-lg-0 font-size-sm-15 font-size-md-15 font-size-lg-18 font-weight-400 mb-5 text-color-white">
                        {!! theSentence('faq-home-content', false) !!}
                    </div>
                    <div class="row mt-30 mt-md-60 mt-lg-70">                  
                        <div class="col-lg-20 col-md-42 offset-lg-4 acc-panel-grp pl-lg-80 pl-xl-120">
                            <div class="panel-group" id="accordion" role="tablist"
                            aria-multiselectable="true">
                           <div class="mb-15 panel panel-default" style="box-shadow:none">
                               <div class="panel-heading" id="headingOne" role="tab">
                                   <h4 class="panel-title">
                                       <a class="collapsed font-size-14 font-size-md-14 font-size-lg-13 font-size-xxl-16 font-size-xxxl-17 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        {!! theSentence('faq-question-5', false) !!}
                                           <i class="pull-right  glyphicon glyphicon-plus"></i>
                                        </a>
                                   </h4>
                               </div>
                               <div class="panel-collapse collapse" id="collapseOne" role="tabpanel"
                                    aria-labelledby="headingOne"> 
                                   <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                    {!! theSentence('faq-answer-5', false) !!}
                                   </div>
                               </div>
                           </div>
                           <div class="mb-15 panel panel-default"  style="box-shadow:none">
                               <div class="panel-heading" id="headingSeventeen" role="tab">
                                <h4 class="panel-title">
                                    <a class="collapsed font-size-13 font-size-md-14 font-size-lg-14 font-size-xxl-16 font-size-xxxl-17 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                        {!! theSentence('faq-question-17', false) !!}
                                        <i class="pull-right  glyphicon glyphicon-plus"></i>
                                     </a>
                                </h4>
                               </div>
                               <div class="panel-collapse collapse" id="collapseSeventeen" role="tabpanel"
                                    aria-labelledby="headingSeventeen">
                                   <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                    {!! theSentence('faq-answer-17', false) !!}
                                   </div>
                               </div>
                           </div>
                       </div>
                        </div>                 
                        <div class="col-lg-20 col-md-42 acc-panel-grp acc-panel-grp-2 pr-lg-80 pr-xl-120 mt-5 mt-md-0 mt-lg-0 mt-xl-0 mt-xxl-0 mt-xxxl-0">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="mb-15 panel panel-default"  style="box-shadow:none">
                                    <div class="panel-heading" id="headingThree" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-13 font-size-md-14 font-size-lg-14 font-size-xxl-16 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                {!! theSentence('faq-question-3', false) !!} 
                                                <i class="pull-right  glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseThree" role="tabpanel"
                                         aria-labelledby="headingThree">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-3', false) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15 panel panel-default"  style="box-shadow:none">
                                    <div class="panel-heading" id="headingFour" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-13 font-size-md-14 font-size-lg-14 font-size-xxl-16 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                {!! theSentence('faq-question-4', false) !!}
                                                <i class="pull-right  glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseFour" role="tabpanel"
                                         aria-labelledby="headingFour">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-4', false) !!}
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>                     
                    </div>
                  
                    
                </div>
               
     <!-- panel-group -->
            </div>
            
        </div>
        @if (getPageByTemplate('FAQ'))
        <div class="text-center mb-md-50  pb-20 bg-color-3" >
            <a href="{{ getPageByTemplate('FAQ')['viewLink'] }}" class="example_b button button-light--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-164 min-height-51" href="add-website-here" target="_blank" rel="nofollow noopener">
                {!! theSentence('more-button', false) !!}
            </a>
        </div>
    @endif
    </div>


        
</div>
  
@endsection