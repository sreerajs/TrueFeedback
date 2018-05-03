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

                <div class="col-md-4" id="sm-template-two">
                    <div class="c-state-card c-state-card--success">
                        <h4 class="c-state-card__title">Template Two</h4>
                        <p class="c-state-card__status">
                            Template Two Description
                        </p>
                    </div>
                </div>

                <div class="col-md-4" id="sm-template-three">
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
                    <form class="render-wrap c-card"></form>
                    <button id="edit-form" class="c-btn c-btn--info c-btn--outline">Edit Form</button>
                    <button id="edit-form" class="c-btn c-btn--info c-btn--outline" style="margin-right:5px;float: right" data-toggle="modal" data-target="#modal1">Create Survey</button>
                </div>
            </div>

            <div class="c-modal modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1">
            <div class="c-modal__dialog modal-dialog" role="document">
                    <div class="modal-content">
                          <div class="c-card u-p-medium u-mh-auto" style="max-width:500px;">
                              <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                              <div class="c-field" style="margin-bottom:20px;">
                              <label class="c-field__label" for="input1">Survey Name</label>
                              <input class="c-input" id="input-survey-name" name= "" type="text" placeholder="My First Survey" required="">
                              </div>
                              <button id="create-new-form" class="c-btn c-btn--info" name="submit" type="submit">
                                  Save
                              </button>
                              <button id="create-new-form" class="c-btn c-btn--info" name="submit" type="submit">
                                  Deploy
                              </button>
                              <button class="c-btn c-btn--info" data-dismiss="modal">
                                  Close
                              </button>
                          </div>
                    </div>
                </div>
            </div>

        </div><!-- // .container -->
</div>
@endsection
