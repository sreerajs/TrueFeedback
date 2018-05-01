@extends('layouts.template')
@section('title', 'Survey Composer')
@section('body_content')
<div class="o-page">
    @include('layouts.sidebar')
    @role('Business')
    @yield('business_sidebar')
    @endrole
    <main class="o-page__content">
        @include('layouts.header')
        @role('Business')
        @yield('business_header')
        @endrole
        <div class="container">
            <div class="row  m-b-20">
                <div class="col-md-4" id="sm-template-one">
                    <div class="c-state-card c-state-card--info">
                        <h4 class="c-state-card__title">Template One</h4>
                        <p class="c-state-card__status">
                            Template One Description
                        </p>
                    </div>
                </div>

                <div class="col-md-4" id="sm-template-two" onclick="setSurveyTempalte('template-two')">
                    <div class="c-state-card c-state-card--success">
                        <h4 class="c-state-card__title">Template Two</h4>
                        <p class="c-state-card__status">
                            Template Two Description
                        </p>                        
                    </div>
                </div>

                <div class="col-md-4" id="sm-template-three" onclick="setSurveyTempalte('template-three')">
                    <div class="c-state-card c-state-card--fancy">
                        <h4 class="c-state-card__title">Template Three</h4>
                        <p class="c-state-card__status">
                            Template Three Description
                        </p>                        
                    </div>
                </div>
            </div>
            <div  class="row  m-b-20">
                <div id="survey-composer" class="col-md-12">
                    <div id="stage1" class="build-wrap composer"></div>
                    <form class="render-wrap"></form>
                    <button id="edit-form">Edit Form</button>
                    <!--                    <button id="c-btn c-btn--info c-btn--outline c-btn--fullwidth edit-form">Create Survey</button>-->
                </div>
            </div>            
        </div><!-- // .container -->
</div>
@endsection