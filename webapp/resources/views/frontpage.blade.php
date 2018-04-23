@extends('layouts.template')
@section('title', 'Login')
@section('body_content')
<div class="o-page o-page--center">
    <div class="o-page__card">
      <div class="c-card c-card--center">
        <span class="c-icon c-icon--large u-mb-small">
          <img src="img/logo.png" alt="True Feedback">
        </span>

        <h4 class="u-mb-medium">True Feedback</h4>

          <a class="c-btn c-btn--info c-btn--outline c-btn--fullwidth" href="/register">SignUp</a>
          <br /> <br />
        <div>
            <div class = "c-field_label">
            <label class="c-field__label"><a href = "/login">Login for existing users</a>
            </div>

          </label>
        </div>
      </div>
    </div>
  </div>
@endsection