@extends('layouts.template')
@section('title', 'Register')
@section('body_content')
<div class="o-page o-page--center">
  <!-- System Error Handling -->
  @if ($errors->any())
  @php
  $alertMessage = '';
  @endphp
  @foreach ($errors->all() as $error)
    @php
    $alertMessage .= $error.",";
    @endphp
  @endforeach
  @php
   $alertMessage = rtrim($alertMessage,",");
  @endphp
  @include('layouts.alert-messages',['alertMessage'=>$alertMessage])
  @yield('alert_system_error')
  @endif
  <!-- System Error Handling -->
  <!-- Success Message Handling -->
  @if (session('success'))
  @include('layouts.alert-messages',['alertMessage'=>session('success')])
  @yield('alert_success')
  @endif
  <!-- Success Message Handling -->
  <div class="o-page__card">
    <div class="c-card c-card--center">
      <span class="c-icon c-icon--large u-mb-small">
        <img src="img/logo-small.png" width="16" alt="Bytacoin">
      </span>

      <h4 class="u-mb-medium">Register to Get Started</h4>
      <form action="register" method="post" id="formRegister">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="c-field">
      <label class="c-field__label">First Name</label>
      <input class="c-input u-mb-small" type="text" id="first_name" name="first_name" placeholder="e.g. Adam">
      </div>

    <div class="c-field">
      <label class="c-field__label">Last Name</label>
      <input class="c-input u-mb-small" type="text" id="last_name" name="last_name" placeholder="e.g. Sandler">
    </div>

        <div class="c-field">
          <label class="c-field__label">Email Address</label>
         <input class="c-input u-mb-small" type="email" id="email_address" name="email_address" placeholder="e.g. adam@google.com">
        </div>

        <div class="c-field u-mb-small">
          <label class="c-field__label">Country</label>
          <div class="c-select">
            <select class="c-select__input" type="country" id="country" name="country" placeholder="Australia">
              <option>Australia</option>
              <option>United Kigndom</option>
              <option>Netherlands</option>
              <option>United States</option>
              <option>France</option>
            </select>
          </div>
        </div>

        <div class="c-field u-mb-small">
          <label class="c-field__label">Account Type</label>
          <div class="c-select">
              <select class="c-select__input" type="account" id="account_type" name="account_type" placeholder="User">
              <option>Business</option>
              <option>User</option>
            </select>
          </div>
        </div>

        <div class="c-field">
            <label class="c-field__label">Password</label>
            <input class="c-input u-mb-small" type="password" name="password" id="password" placeholder="Use something complex">
          </div>
  
          <div class="c-field">
            <label class="c-field__label">Confirm Password</label>
            <input class="c-input u-mb-small" type="password" name="password_confirmation" id="password_confirmation" placeholder="Use something complex">
          </div>

        <input type="submit" class="c-btn c-btn--fullwidth c-btn--info" value="REGISTER"></input>
      </form>
    </div>
  </div>
</div>
@endsection
