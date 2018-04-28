@extends('layouts.template')
@section('title', 'Dashboard')
@section('body_content')
<div class="o-page">
    @include('layouts.sidebar')
    @role('User')
    @yield('user_sidebar')
    @endrole
    @role('Business')
    @yield('business_sidebar')
    @endrole
  <main class="o-page__content">
    @include('layouts.header')
    @role('User')
    @yield('user_header')
    @endrole
    @role('Business')
    @yield('business_header')
    @endrole
    <div class="container">
      @include('layouts.alerts')
      <div class="row">
        <div class="col-12">
          <nav class="c-tabs">
            <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
              <a class="c-tabs__link active" id="nav-home-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-home" aria-selected="true">
                <span class="c-tabs__link-icon">
                  <i class="feather icon-settings"></i>
                </span>Profile Settings
              </a>
            </div>
            <div class="c-tabs__content tab-content" id="nav-tabContent">
              <div class="c-tabs__pane active" id="nav-profile" role="tabpanel" aria-labelledby="nav-home-tab">


                <div class="row">
                  <div class="col-xl-8">
                    <form id="formProfileUser" method="post" action="userprofile">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="c-field u-mb-medium">
                            <label class="c-field__label" for="first_name">First Name</label>
                            <input class="c-input" type="text" id="first_name" name="first_name" placeholder="eg. Adam" value="{{ $dataArray['user']->first_name }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="c-field u-mb-medium">
                            <label class="c-field__label" for="last_name">Last Name</label>
                            <input class="c-input" type="text" id="last_name" name="last_name" placeholder="eg. Sandler" value="{{ $dataArray['user']->last_name }}">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="c-field u-mb-medium">
                            <label class="c-field__label" for="email_address">Email Address</label>
                            <input class="c-input" type="email" id="email_address" name="email_address" placeholder="eg. adam@google.com" value="{{ $dataArray['user']->email }}" readonly>
                          </div>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="submit" value="Save Profile" class="c-btn c-btn--info"></input>
                        </div>
                      </div>

                    </form>

                    <span class="c-divider u-mv-medium"></span>

                    <form id="formProfileUserPassword" method="post" action="userpassword">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="c-field u-mb-medium">
                            <label class="c-field__label" for="user_email">Email</label>
                            <input class="c-input" type="text" id="user_email" name="user_email" placeholder="eg. adam@google.com" value="{{ $dataArray['user']->email }}" readonly>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="c-field u-mb-medium">
                            <label class="c-field__label" for="user_current_password">Current Password</label>
                            <input class="c-input" type="password" id="user_current_password" name="user_current_password" placeholder="eg. Enter Current Password">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="c-field u-mb-medium">
                            <label class="c-field__label" for="user_new_password">New Password</label>
                            <input class="c-input" type="password" id="user_new_password" name="user_new_password" placeholder="eg. Enter a complex password">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="c-field u-mb-medium">
                            <label class="c-field__label" for="user_new_password_confirmation">Confirm Password</label>
                            <input class="c-input" type="password" id="user_new_password_confirmation" name="user_new_password_confirmation" placeholder="eg. Enter a complex password">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="submit" value="Update Password" class="c-btn c-btn--info"></input>
                        </div>
                      </div>

                    </form>

                  </div>

                  <div class="col-xl-4">

                    <div class="c-card u-text-center">
                      <div class="c-avatar c-avatar__profile u-inline-flex">
                        <div class="file-input-avatar">
                          <label class="" for="file_input_avatar">
                            <!-- <img src="img/camera.svg" width="18" style="pointer-events: none"/> -->
                            <span class="fa-layers fa-fw">
                              <i class="fas fa-circle" style="color:#2083FE"></i>
                              <i class="fa-inverse fas fa-camera" data-fa-transform="shrink-6"></i>
                            </span>
                          </label>
                        </div>
                        @if ($dataArray['user']->profile_image != '')
                        <img class="c-avatar__img" src="{{ $dataArray['user']->profile_image }}" alt="{{ $dataArray['user']->first_name }}">
                        @else
                        <img class="c-avatar__img" src="http://via.placeholder.com/100" alt="{{ $dataArray['user']->first_name }}">
                        @endif

                      </div>

                      <h5>{{ $dataArray['user']->first_name }} {{ $dataArray['user']->last_name }}</h5>
                      <p class="u-pb-small u-mb-small u-border-bottom">{{ $dataArray['user']->company_name }}</p>

                      <p class="u-h4">
                        {{$dataArray['user']->email}}
                      </p>
                    </div>
                    <form id="avatarUploadForm" class="hidden" action="profileImage" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input class="hidden" type="file" name="file_input_avatar" id="file_input_avatar" />
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
      @include('layouts.footer')
    </div>
  </main>
</div>
@endsection
