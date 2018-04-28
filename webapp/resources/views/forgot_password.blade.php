@extends('layouts.template')
@section('title', 'Forgot Password')
@section('body_content')
<div class="o-page o-page--center">
  <!-- System Error Handling -->
  @if ($errors->any())
  @include('layouts.alert-messages',['alertMessage'=>'Something went wrong. We are unable to process your request at the moment. Please try again later.'])
  @yield('alert_system_error')
  @endif
  <!-- System Error Handling -->
  <!-- Success Message Handling -->
  @if (session('success'))
  @include('layouts.alert-messages',['alertMessage'=>session('success')])
  @yield('alert_success')
  @endif
  <!-- Success Message Handling -->
  <!-- Error Message Handling -->
  @if (session('error'))
  @include('layouts.alert-messages',['alertMessage'=>session('error')])
  @yield('alert_error')
  @endif
  <!-- Error Message Handling -->
  <!-- Failed Login Message Handling -->
  @if (session('failed_login'))
  @include('layouts.alert-messages',['alertMessage'=>session('failed_login')])
  @yield('alert_info')
  @endif
  <!-- Failed Login Message Handling -->
  <div class="o-page__card">
    <div class="c-card c-card--center">
      <span class="c-icon c-icon--large u-mb-small">
        <img src="img/logo-small.png" width="16" alt="Bytacoin">
      </span>

      <h4 class="u-mb-medium">Forgot Password</h4>
      <form id="formForgotPassword" action="forgot_password_email" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="c-field">
          <label class="c-field__label">Email Address</label>
          <input class="c-input u-mb-small" name="email_address" id="email_address" type="email" placeholder="e.g. adam@google.com">
        </div>

       <input type="submit" value="Reset Password" class="c-btn c-btn--fullwidth c-btn--info"></input>
      </form>
      <br /><br />

    </div>
  </div>
</div>
@endsection
