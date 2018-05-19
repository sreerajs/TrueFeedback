@extends('layouts.template')
@section('title', 'Rewards')
@section('body_content')
<div class="o-page">
  @include('layouts.sidebar')
  @role('User')
  @yield('user_sidebar')
  @endrole
  @role('Business')
  @yield('business_sidebar')
  @endrole
  <main class="o-page__content">
    @include('layouts.header')
    @role('User')
    @yield('user_header')
    @endrole
    @role('Business')
    @yield('business_header')
    @endrole
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div id="SurveyRender" class="c-card">
            hhh
          </div>
        </div>

      </div>

      @endsection
