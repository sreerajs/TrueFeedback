@extends('layouts.template')
@section('title', 'Forgot Password')
@section('body_content')
<div class="o-page o-page--center">
  <div class="o-page__card">
    <div class="c-card c-card--center">
      <span class="c-icon c-icon--large u-mb-small">
        <img src="../../img/logo-small.png" width="16" alt="Bytacoin">
      </span>

      <h4 class="u-mb-medium">Forgot Your Password</h4>
      <form id="formPasswordReset" method="post" action="forgot-password">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="c-field">
          <label class="c-field__label">Email Address</label>
          <input class="c-input u-mb-small" name="email" id="email" type="email" placeholder="e.g. adam@sandler.com">
        </div>

        <div class="c-note u-mb-small">
          <span class="c-note__icon">
            <i class="feather icon-info"></i>
          </span>

          <p>After submitting you email address you will receive password reset instructions.</p>
        </div>

        <button class="c-btn c-btn--fullwidth c-btn--info">Submit</button>
      </form>
    </div>
    <div class="container u-text-center">
      <a class="c-404__link" href="forgot-password">Go to Login Page? <i class="feather icon-arrow-right"></i></a>
    </div>
  </div>
</div>
@endsection
