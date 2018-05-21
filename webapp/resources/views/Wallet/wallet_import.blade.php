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

      <h2 class="u-mb-medium">Import your wallet</h2>
      <span style="color:grey">Choose your preffered method to link your wallets</span>
      <br /><br />
      <div class="c-field">
        <a class="c-btn c-btn--info c-btn--outline c-btn--fullwidth" href="/wallet_keystore_password">KEYSTORE JSON</a>
      </div>
      <br />
      <div class="c-field">
        <a class="c-btn c-btn--info c-btn--outline c-btn--fullwidth" href="/wallet_privatekey">PRIVATE KEY</a>
      </div>

    </div>
  </div>

</div>

@endsection
