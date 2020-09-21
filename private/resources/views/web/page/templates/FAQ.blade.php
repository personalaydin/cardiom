@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')


<div class="position-relative side-space bg-color-10 ">
    <div class="js-slick main-slider slick-carousel--full-height position-relative bg-color-10" >        
         <div class="main-slider__item main-slider__item--5 background-cover text-white d-flex align-items-center bg-color-10 mobile-height">
            <div class="container">
                <div class="mt-p-5">
                    <div class="">
                        <div class="animate animate--fadeIn " data-animate="fadeInLeft" data-animate-delay="100">
                            <div class="ml-p-2 ml-p-sm-2 ml-p-md-3 ml-p-lg-2 font-size-50 font-size-lg-70 text-color-white font-weight-500 font-size-sm-60 font-size-md-55 font-size-lg-60 font-size-xxl-60 font-size-xxxl-110 line-height-1-5 line-height-xs-1 mb-xs-20 text-left">
                                {!! theSentence('faq-1', false) !!}
                            </div>
                            <div class="row">
                                <div class="col-48 col-lg-48">
                                    <div class="mt-sm-3 mt-xxxl-8">
                                        <div class="ml-p-2 ml-p-sm-2 ml-p-md-4 ml-p-lg-2 font-size-15 font-size-xs-15 font-size-sm-15 font-size-md-15 font-size-lg-16 font-size-xl-16 font-size-xxl-20 font-size-xxxl-20 font-weight-400 mb-5 text-left ">
                                            {!! theSentence('faq-2', false) !!}
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
        <span id="product-3">&nbsp;</span>
    </div>
</div>
<div class="bg-color-10">
    <div class="pt-0">
        <div class="row justify-content-center mt--20" data-aos="fade-up">
            <div class="container">
                <div class="col-md-28 offset-md-10">
                    <div class="pxlr-club-faq">
                        <div class="content">
                            <div class="panel-group" id="accordion" role="tablist"
                                 aria-multiselectable="true">
                                 <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingOne" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                             {!! theSentence('faq-question-1', false) !!}
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseOne" role="tabpanel"
                                         aria-labelledby="headingOne">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                         {!! theSentence('faq-answer-1', false) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingTwo" role="tab">
                                     <h4 class="panel-title">
                                         <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                             {!! theSentence('faq-question-2', false) !!}
                                             <i class="pull-right glyphicon glyphicon-plus"></i>
                                          </a>
                                     </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseTwo" role="tabpanel"
                                         aria-labelledby="headingTwo">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                         {!! theSentence('faq-answer-2', false) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingThree" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            {!! theSentence('faq-question-3', false) !!} <i class="pull-right glyphicon glyphicon-plus"></i>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-28 offset-md-10">
                    <div class="pxlr-club-faq">
                        <div class="content">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingFour" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                {!! theSentence('faq-question-4', false) !!}
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
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
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingTwentyTwo" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                                                {!! theSentence('faq-question-22', false) !!}
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseTwentyTwo" role="tabpanel"
                                         aria-labelledby="headingTwentyTwo">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-22', false) !!}
                                        </div>
                                    </div>
                                </div>  
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingFive" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapsefive">
                                                {!! theSentence('faq-question-5', false) !!} 
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseFive" role="tabpanel"
                                         aria-labelledby="headingFive">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-5', false) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingSix" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                {!! theSentence('faq-question-6', false) !!}
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseSix" role="tabpanel"
                                         aria-labelledby="headingSix">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-6', false) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingSeven" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                {!! theSentence('faq-question-7', false) !!} 
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseSeven" role="tabpanel"
                                         aria-labelledby="headingSeven">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-7', false) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingEight" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                {!! theSentence('faq-question-8', false) !!}
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseEight" role="tabpanel"
                                         aria-labelledby="headingEight">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-8', false) !!}
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingNine" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                {!! theSentence('faq-question-9', false) !!} 
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseNine" role="tabpanel"
                                         aria-labelledby="headingNine">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-9', false) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingTen" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                {!! theSentence('faq-question-10', false) !!}
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseTen" role="tabpanel"
                                         aria-labelledby="headingTen">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-10', false) !!}
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingEleven" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                {!! theSentence('faq-question-11', false) !!} 
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseEleven" role="tabpanel"
                                         aria-labelledby="headingEleven">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-11', false) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingTwelve" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                {!! theSentence('faq-question-12', false) !!}
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseTwelve" role="tabpanel"
                                         aria-labelledby="headingTwelve">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-12', false) !!}
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingThirhten" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirhten" aria-expanded="false" aria-controls="collapseThirhten">
                                                {!! theSentence('faq-question-13', false) !!} 
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseThirhten" role="tabpanel"
                                         aria-labelledby="headingThirhten">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-13', false) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingFourteen" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                                {!! theSentence('faq-question-14', false) !!}
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseFourteen" role="tabpanel"
                                         aria-labelledby="headingFourteen">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-14', false) !!}
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingFiveteen" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFiveteen" aria-expanded="false" aria-controls="collapseFiveteen">
                                                {!! theSentence('faq-question-15', false) !!} 
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseFiveteen" role="tabpanel"
                                         aria-labelledby="headingFiveteen">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-15', false) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingSixteen" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                                {!! theSentence('faq-question-16', false) !!}
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseSixteen" role="tabpanel"
                                         aria-labelledby="headingSixteen">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-16', false) !!}
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingSeventeen" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                                {!! theSentence('faq-question-17', false) !!} 
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
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
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingEigthteen" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEigthteen" aria-expanded="false" aria-controls="collapseEigthteen">
                                                {!! theSentence('faq-question-18', false) !!}
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseEigthteen" role="tabpanel"
                                         aria-labelledby="headingEigthteen">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-18', false) !!}
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingNineteen" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                                {!! theSentence('faq-question-19', false) !!} 
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseNineteen" role="tabpanel"
                                         aria-labelledby="headingNineteen">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-19', false) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15 panel panel-default">
                                    <div class="panel-heading" id="headingTwenty" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed font-size-16 font-size-md-16 font-size-lg-18 font-size-xxl-18 font-size-xxxl-18 font-weight-600 text-color-bold " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                                {!! theSentence('faq-question-20', false) !!}
                                                <i class="pull-right glyphicon glyphicon-plus"></i>
                                             </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseTwenty" role="tabpanel"
                                         aria-labelledby="headingTwenty">
                                        <div class="panel-body pxlr-faq-body pr-15 pl-15 pt-10 font-size-xs-13 font-size-sm-15 font-size-13 font-size-md-16 font-size-lg-16 font-weight-400 mb-5 line-height-1-9 text-color-gray">
                                            {!! theSentence('faq-answer-20', false) !!}
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="position-relative bg-color-6 h-px-200 mt--90 d-none"></div>
    </div>
</div>
@endsection

