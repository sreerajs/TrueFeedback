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
  <!-- Failed Login Message Handling -->
  <br />
  <div class="o-page__card">
    <div class="c-card c-card--center">

      <h2 class="u-mb-medium">Wallet Setup</h2>
      <span style="color:grey">Please link you wallet to use the TrueFeedback Platform. You can choose to create a new wallet or import any of your existing wallet.</span>
        <br /><br />
        <div class="c-field">
          <a class="c-btn c-btn--info c-btn--outline c-btn--fullwidth" href="/wallet_import">Import Wallet</a>
        </div>
        <br /><br />
        <div class="c-field">
          <a class="c-btn c-btn--info c-btn--outline c-btn--fullwidth" href="/wallet_create">Create Wallet</a>
        </div>



    </div>
  </div>
</div>
@endsection
