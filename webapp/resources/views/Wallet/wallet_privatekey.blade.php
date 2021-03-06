@extends('layouts.template') @section('title', 'Login') @section('body_content')
<div class="o-page o-page--center">
  <!-- System Error Handling -->
  @if ($errors->any()) @include('layouts.alert-messages',['alertMessage'=>'Something went wrong. We are unable to process your request at the moment. Please try again later.']) @yield('alert_system_error') @endif
  <!-- System Error Handling -->
  <!-- Success Message Handling -->
  @if (session('success')) @include('layouts.alert-messages',['alertMessage'=>session('success')]) @yield('alert_success') @endif
  <!-- Success Message Handling -->
  <!-- Error Message Handling -->
  @if (session('error')) @include('layouts.alert-messages',['alertMessage'=>session('error')]) @yield('alert_error') @endif
  <!-- Error Message Handling -->
  <!-- Failed Login Message Handling -->
  @if (session('failed_login')) @include('layouts.alert-messages',['alertMessage'=>session('failed_login')]) @yield('alert_info') @endif

  <div class="o-page__card">
    <div class="c-card c-card--center">

      <h2 class="u-mb-medium">Enter Private Key</h2>
      <span style="color:grey"> Enter the private key to unlock your wallet</span>
      <br /><br />

      <br />
      <form id="formKeystorePassword" action="wallet_private_key" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="c-field">
          <input class="c-input" name="wallet_private_key" id="wallet_private_key" type="text" placeholder="Private Key" required>
          </br>
          </br>
        </div>
        <input type="submit" value="Submit" class="c-btn c-btn--fullwidth c-btn--info"></input>
      </form>

    </div>
  </div>

</div>
@endsection
