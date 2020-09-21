@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')
<div class="position-relative bg-color-5 side-space">
    <div class="js-slick main-slider slick-carousel--full-height position-relative bg-color-5" >        
         <div class="main-slider__item main-slider__item--6 background-cover text-white d-flex align-items-center bg-color-5 mobile-height">
            <div class="container">
                <div class="">
                    <div class="">
                        <div class="animate animate--fadeIn " data-animate="fadeInLeft" data-animate-delay="100">
                            <div class="ml-p-2 ml-p-sm-2 ml-p-md-3 ml-p-lg-7 font-size-50 font-size-lg-70 text-color-white font-weight-500 font-size-sm-60 font-size-md-55 font-size-lg-60 font-size-xxl-60 font-size-xxxl-110 line-height-1-5 line-height-xs-1 mb-xs-20 text-left">
                                {!! theSentence('specs-slider-title', false) !!}
                            </div>
                            <div class="row">
                                <div class="col-48 col-lg-48">
                                    <div class="mt-sm-3 mt-xxxl-8">
                                        <div class="ml-p-2 ml-p-sm-2 ml-p-md-4 ml-p-lg-7 font-size-15 font-size-xs-15 font-size-sm-15 font-size-md-15 font-size-lg-20 font-size-xl-20 font-size-xxl-20 font-size-xxxl-20 font-weight-400 mb-5 mb-lg-0 text-left ">
                                            {!! theSentence('specs-slider-content', false) !!}
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
    <div class="bg-color-5">
        <div class="pl-lg-100 pr-lg-100" >
        <div class="col-md-32 offset-md-8 pt-30 pb-30 pb-md-50 bg-color-3 zindex-2 pt-md-40 bg-color-5" data-aos="fade-up" >
           <div class="col-md-48">
            <div class="all-text-center all-image-center">
                <span class="media-figure">{{ svg_image('assets/img/icons/specs-1') }}</span>
            </div> 
            <div class="row pt-30">
                <div class="pt-md-30">
                        <h3 class=" all-text-center text-center font-size-22 font-size-xs-22 font-size-sm-14 font-size-md-36 font-size-lg-50 font-weight-600" >{!! theSentence('specs-content-1-title', false) !!}</h3>
                    <div class="just-left mt-20 pl-40 pr-40 mt-xs-20 mt-md-20 all-text-center text-center text-color-gray font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-18 font-size-lg-18 font-weight-400">
                        {!! theSentence('specs-content-1-content', false) !!}
                    </div>
                </div>
            </div>
           </div>
        </div>
        <div class="col-md-32 offset-md-8 pt-30 pb-30 pb-md-50 bg-color-3 zindex-2 pt-md-40 bg-color-9 " data-aos="fade-up" >
            <div class="col-md-48">
             <div class="all-text-center all-image-center">
                <span class="media-figure">{{ svg_image('assets/img/icons/specs-2') }}</span>
             </div> 
             <div class="row pt-30">
                 <div class="pt-md-30">
                         <h3 class=" all-text-center text-center font-size-22 font-size-xs-22 font-size-sm-14 font-size-md-36 font-size-lg-50 font-weight-600" >{!! theSentence('specs-content-2-title', false) !!}</h3>
                     <div class="just-left mt-20 pl-40 pr-40 mt-xs-20 mt-md-20 all-text-center text-center text-color-gray font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-18 font-size-lg-18 font-weight-400">
                        {!! theSentence('specs-content-2-content', false) !!}
                     </div>
                 </div>
             </div>
            </div>
         </div>
         <div class="col-md-32 offset-md-8 pt-30 pb-30 pb-md-50 bg-color-3 zindex-2 pt-md-40 bg-color-5 " data-aos="fade-up" >
            <div class="col-md-48">
             <div class="all-text-center all-image-center">
                <span class="media-figure">{{ svg_image('assets/img/icons/specs-3') }}</span>
             </div> 
             <div class="row pt-30">
                 <div class="pt-md-30">
                         <h3 class="all-text-center text-center font-size-22 font-size-xs-22 font-size-sm-14 font-size-md-36 font-size-lg-50 font-weight-600" >{!! theSentence('specs-content-3-title', false) !!} <br>
                            <span class="mt-20 pl-40 pr-40 mt-xs-20 mt-md-20 all-text-center text-center text-color-light-blue font-size-15 font-size-xs-16 font-size-sm-14 font-size-md-18 font-size-lg-20 font-weight-500">{!! theSentence('specs-content-3-title-2', false) !!}</span></h3>
                         
                     <div class="just-left mt-md-20 pl-40 pr-40 pl-p-md-5 pr-p-md-5 text-center text-color-gray font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-18 font-size-lg-18 font-weight-400">
                            {!! theSentence('specs-content-3-content', false) !!}
                     </div>
                 </div>
             </div>
            </div>
         </div>
         <div class="col-md-32 offset-md-8 pt-30 pb-30 pb-md-50 bg-color-3 zindex-2 pt-md-40 bg-color-9 " data-aos="fade-up" >
             <div class="col-md-48">
              <div class="all-text-center all-image-center">
                <span class="media-figure">{{ svg_image('assets/img/icons/specs-4') }}</span>
              </div> 
              <div class="row pt-30">
                  <div class="pt-md-30">
                          <h3 class="all-text-center text-center font-size-21 font-size-xs-22 font-size-sm-14 font-size-md-36 font-size-lg-50 font-weight-600" >{!! theSentence('specs-content-4-title-dark', false) !!} 
                            <span class="font-size-21 font-size-xs-22 font-size-sm-14 font-size-md-36 font-size-lg-36 font-weight-500 text-color-light-blue">{!! theSentence('specs-content-4-title-blue', false) !!}</span> </h3>
                      <div class="just-left pl-40 pr-40 mt-20 mt-xs-20 mt-md-20 all-text-center text-center text-color-gray font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-18 font-size-lg-18 font-weight-400">
                        {!! theSentence('specs-content-4-content', false) !!}
                      </div>
                  </div>
              </div>
             </div>
          </div>
          <div class="col-md-32 offset-md-8 pt-30 pb-30 pb-md-50 bg-color-3 zindex-2 pt-md-40 bg-color-5 " data-aos="fade-up" >
            <div class="col-md-48">
             <div class="all-text-center all-image-center">
                <span class="media-figure">{{ svg_image('assets/img/icons/specs-5') }}</span>
             </div> 
             <div class="row pt-30">
                 <div class="pt-md-30">
                         <h3 class="all-text-center text-center font-size-22 font-size-xs-22 font-size-sm-14 font-size-md-36 font-size-lg-50 font-weight-600" >{!! theSentence('specs-content-5-title-dark', false) !!} <span class="font-size-22 font-size-xs-22 font-size-sm-14 font-size-md-36 font-size-lg-36 font-weight-500 text-color-light-blue">{!! theSentence('specs-content-5-title-blue', false) !!}</h3>
                     <div class="just-left pl-40 pr-40 mt-20 mt-xs-20 mt-md-20 all-text-center text-center text-color-gray font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-18 font-size-lg-18 font-weight-400">
                        {!! theSentence('specs-content-5-content', false) !!}
                     </div>
                 </div>
             </div>
            </div>
         </div>
         <div class="col-md-32 offset-md-8 pt-30 pb-30 pb-md-50 bg-color-3 zindex-2 pt-md-40 bg-color-9" data-aos="fade-up" >
             <div class="">
              <div class="all-text-center all-image-center">
                <span class="media-figure">{{ svg_image('assets/img/icons/specs-6') }}</span>
              </div> 
                  <div class="pt-md-30">
                          <h3 class="pr-10 pb-20 pl-p-md-15 pr-p-lg-15 text-center font-size-22 font-size-xs-22 font-size-sm-14 font-size-md-36 font-size-lg-50 font-weight-600" >{!! theSentence('specs-content-6-title', false) !!}</h3>
                      <div class="mt-md-20 pl-p-md-5 text-center text-color-gray font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-18 font-size-lg-22 font-weight-600">
                            <span class="mr-lg-10 text-color-light-blue font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-18 font-size-lg-22 font-weight-600">{!! theSentence('specs-content-6-content-1-left', false) !!}</span>
                            <span class="mr-10 mr-lg-20 text-color-gray font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-18 font-size-lg-22 font-weight-600">{!! theSentence('specs-content-6-content-1-right', false) !!}</span>
                            <span class="mr-lg-10 text-color-light-blue font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-18 font-size-lg-22 font-weight-600">{!! theSentence('specs-content-6-content-2-left', false) !!}</span>
                            <span class="mr-10 mr-lg-20 text-color-gray font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-18 font-size-lg-22 font-weight-600">{!! theSentence('specs-content-6-content-2-right', false) !!}</span>
                            <span class="mr-lg-10 text-color-light-blue font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-18 font-size-lg-22 font-weight-600">{!! theSentence('specs-content-6-content-3-left', false) !!}</span>
                            <span class="mr-10 mr-lg-20 text-color-gray font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-18 font-size-lg-22 font-weight-600">{!! theSentence('specs-content-6-content-3-right', false) !!}</span>
                      </div>
                  </div>     
             </div>
          </div>

          <div class="row">
              <div class="col-md-48">
                  <div class="bag-image" data-aos="fade-up">
                      <img src="../assets/img/specs/bag.png" class="d-none d-block">
                      <img src="../assets/img/specs/bag-mobill.png" class="d-none" >
                    
                        <span class="text-1 text-color-dark-blue font-size-11 font-size-xs-11 font-size-sm-14 font-size-md-18 font-size-lg-16 font-weight-600" data-aos="fade-left">{!! theSentence('specs-1', false) !!}</span>
                        <span class="text-2 text-color-dark-blue font-size-11 font-size-xs-11 font-size-sm-14 font-size-md-18 font-size-lg-16 font-weight-600" data-aos="fade-left">{!! theSentence('specs-2', false) !!}</span>
                        <span class="text-3 text-color-dark-blue font-size-11 font-size-xs-11 font-size-sm-14 font-size-md-18 font-size-lg-16 font-weight-600" data-aos="fade-left">{!! theSentence('specs-3', false) !!}</span>
                        <span class="text-4 text-color-dark-blue font-size-11 font-size-xs-11 font-size-sm-14 font-size-md-18 font-size-lg-16 font-weight-600" data-aos="fade-left">{!! theSentence('specs-4', false) !!}</span>
                        <span class="text-5 text-color-dark-blue font-size-11 font-size-xs-11 font-size-sm-14 font-size-md-18 font-size-lg-16 font-weight-600" data-aos="fade-right">{!! theSentence('specs-5', false) !!}</span>
                        <span class="text-6 text-color-dark-blue font-size-11 font-size-xs-11 font-size-sm-14 font-size-md-18 font-size-lg-16 font-weight-600" data-aos="fade-right">{!! theSentence('specs-6', false) !!}</span>
                        <span class="text-7 text-color-dark-blue font-size-11 font-size-xs-11 font-size-sm-14 font-size-md-18 font-size-lg-16 font-weight-600" data-aos="fade-right">{!! theSentence('specs-7', false) !!}</span>
                        <span class="text-8 text-color-dark-blue font-size-11 font-size-xs-11 font-size-sm-14 font-size-md-18 font-size-lg-16 font-weight-600" data-aos="fade-right">{!! theSentence('specs-8', false) !!}</span>
                  </div>
              </div>
          </div>
        <span id="product-3">&nbsp;</span>
        <div class="col-md-48  bg-color-5 bg-footer-carousel zindex-2 py-16 bg-color-5 mt-40 mt-md-40" data-aos="fade-up" >
            <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                <div class="row d-flex align-items-center">
                    <div class="col-18 offset-md-2 col-md-10 all-text-center d-none d-block">
                    </div>
                    <div class="col-42 col-md-28 all-text-center">
                        <h3 class="pt-0 pl-15 text-center font-size-45 font-size-md-22 font-size-lg-26 font-size-xl-30 font-size-xxl-40 font-size-xxxl-50 font-weight-500 line-height-1-5 text-color-white" >{!! theSentence('specs-footer-carousel-title', false) !!} 
                            
                        </h3>
                        <div class="all-text-center text-center font-size-13 font-size-xs-13 font-size-sm-14 font-size-md-14 font-size-lg-14 font-weight-400">
                            <span class="font-size-14 font-size-md-14 font-size-lg-16 font-size-xl-14 font-size-xxl-18 font-size-xxxl-20 font-weight-400 text-color-gray">
                                {!! theSentence('specs-footer-carousel-content', false) !!}
                            </span>
                            <div class="button_cont mt-20 pt-20 pb-20 mb-40">
                                @if (getPageByTemplate('Contact'))  
                                <a href="http://www.livewell.com.tr/tr/Iletisim" class="button-position example_b all-image-center button button-light--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-155 min-width-md-200 min-width-lg-200 min-height-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10" href="add-website-here" target="_blank" rel="nofollow noopener">
                                    {!! theSentence('contact-us-button', false) !!}
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative bg-color-5 h-px-200 mt--170">
    </div>
</div>
@endsection
