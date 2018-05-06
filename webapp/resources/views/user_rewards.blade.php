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
            <div class="col-md-6 col-xl-3">
              <div class="c-card">
                <span class="c-icon c-icon--info u-mb-small">
                  <i class="feather icon-activity"></i>
                </span>

                <h3 class="c-text--subtitle">Today's Reward</h3>
                <h1>$1200</h1>
              </div>
            </div>

            <div class="col-md-6 col-xl-3">
              <div class="c-card">
                <span class="c-icon c-icon--danger u-mb-small">
                  <i class="feather icon-shopping-cart"></i>
                </span>

                <h3 class="c-text--subtitle">Total Surveys Attended</h3>
                <h1>623</h1>
              </div>
            </div>

            <div class="col-md-6 col-xl-3">
              <div class="c-card">
                <span class="c-icon c-icon--success u-mb-small">
                  <i class="feather icon-users"></i>
                </span>

                <h3 class="c-text--subtitle">Companies Reviewed</h3>
                <h1>250</h1>
              </div>
            </div>

            <div class="col-md-6 col-xl-3">
              <div class="c-card">
                <span class="c-icon c-icon--warning u-mb-small">
                  <i class="feather icon-zap"></i>
                </span>

                <h3 class="c-text--subtitle">Total Rewards</h3>
                <h1>$8794</h1>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-12">
                <div class="c-card">
              <h4>Transactions</h4>
              <p class="u-mb-medium">Activity List</p>
              
              <div class="c-feed">
                <div class="c-feed__item">
                  <p>New order received from Canada by #49832</p>
                  <p class="u-text-xsmall">just now</p>
                </div>
                
                <div class="c-feed__item c-feed__item--success">
                  <p>New order received from Canada by #49832</p>
                  <p class="u-text-xsmall">5 mins ago</p>
                </div>
                
                
                
              </div><!-- // .c-feed -->
              
            </div>
          </div>
          
        </div>

@endsection
