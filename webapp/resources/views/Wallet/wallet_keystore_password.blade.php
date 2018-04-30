@extends('layouts.template')
@section('title', 'Login')
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

  <div class="container">
    <div class="row u-pv-large">
      <div class="col-lg-5 u-text-center u-ml-auto u-mr-auto">
        <h1>Enter Password</h1>
        <p class="u-mb-large u-h4">Enter a password to begin linking of your wallet</p>
      </div>
    </div>
    <form id="formKeystorePassword" action="wallet_keystore_password" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="c-field">
        <input class="c-input u-mb-small" name="password" id="keystore_password" type="password" placeholder="Password" required>
      </div>     
      <input type="submit" value="Submit" class="c-btn c-btn--fullwidth c-btn--info"></input>
    </form>
      
    </div>
</div>
@endsection
