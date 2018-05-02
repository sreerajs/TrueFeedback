@extends('layouts.template')
@section('title', 'Login')
@section('body_content')
<div class="o-page o-page--center">
    <div class="o-page__card">
      <div class="c-card c-card--center">
        <span >
            <img src="../img/logo.png" width="300" height="100" alt="TrueFeedback">
        </span>

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