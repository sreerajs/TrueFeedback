@extends('layouts.template')
@section('title', 'Account Activation')
@section('body_content')
<div class="o-page o-page--center">
  <div class="o-page__card">
    <div class="c-card c-card--center">
      <span class="c-icon c-icon--large u-mb-small">
        <img src="../../img/logo-small.png" width="16" alt="Bytacoin">
      </span>

      <h4 class="u-mb-medium">Reset your password</h4>
      <form action="/password-reset" method="post" id="formUserActivation">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="activation_token" id="activation_token" value="{{ $dataArray['email_token'] }}">
        <div class="c-field">
          <label class="c-field__label">Enter New Password</label>
          <input class="c-input u-mb-small" type="password" id="password" name="password" placeholder="Use something complex">
        </div>

        <div class="c-field">
          <label class="c-field__label">Confirm Password</label>
          <input class="c-input u-mb-small" type="password" id="password_confirmation" name="password_confirmation" placeholder="Use something complex">
        </div>

        <input type="submit" class="c-btn c-btn--fullwidth c-btn--info" value="ACTIVATE"></input>
      </form>
    </div>
  </div>
</div>
@endsection
