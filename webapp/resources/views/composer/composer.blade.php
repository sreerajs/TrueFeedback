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
            <div id="show-editor-warning" class="c-alert c-alert--danger alert m-b-20" style="display: none">
                <span class="c-alert__icon">
                    <i class="feather icon-slash"></i>
                </span>
                <div class="c-alert__content">
                    <h4 class="c-alert__title">Oops. Not Found</h4>                
                </div>
            </div>            
            <div  class="row  m-b-20">
                <div id="survey-composer" class="col-md-12">
                    <div id="stage1" class="build-wrap composer"></div>
                    <form class="render-wrap c-card"></form>
                    <button id="edit-form" class="c-btn c-btn--info c-btn--outline">Edit Form</button>
                    <button id="edit-form" class="c-btn c-btn--info c-btn--outline" style="margin-right:5px;float: right" data-toggle="modal" data-target="#modal1">Update</button>
                </div>
            </div>

            <div class="c-modal modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1">
                <div class="c-modal__dialog modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="c-card u-p-medium u-mh-auto" style="max-width:500px;">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_contractId" id="edit-contract-id" value="{{ $dataArray['contract_id'] }}">
                            <div class="c-field" style="margin-bottom:20px;">
                                <label class="c-field__label" for="input1">Survey Name</label>
                                <input class="c-input" id="input-survey-name" name= "" type="text" placeholder="My First Survey" value="{{$dataArray['contract_details'][0]->name}}" required="">
                            </div>
                            <button id="edit-contract-form" class="c-btn c-btn--info" name="submit" type="submit" onclick="updateContractData()">
                                Save
                            </button>
                            <button id="deploy-contract-form" class="c-btn c-btn--info" name="submit" type="submit">
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
