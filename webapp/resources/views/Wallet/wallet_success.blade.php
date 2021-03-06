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
        <h1>Successfully Linked</h1>
        <p class="u-mb-large u-h4">Your wallet has been linked to the TrueFeedback Platform</p>
      </div>
    </div>


      <div class="col-lg-5 u-text-center u-ml-auto u-mr-auto">
        @if ($dataArray['user_data']['account_type'] == 'User')
        <a class="c-btn c-btn--info c-btn--outline c-btn--fullwidth" href="/home">I Understand, Continue</a>
        @else
          <a class="c-btn c-btn--info c-btn--outline c-btn--fullwidth" href="/business/home">I Understand, Continue</a>
        @endif
        <br /><br />
     </div>
    </div>
</div>
@endsection
