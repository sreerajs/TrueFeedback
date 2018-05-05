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

                <h3 class="c-text--subtitle">Weekly Sales</h3>
                <h1>$1200</h1>
              </div>
            </div>

            <div class="col-md-6 col-xl-3">
              <div class="c-card">
                <span class="c-icon c-icon--danger u-mb-small">
                  <i class="feather icon-shopping-cart"></i>
                </span>

                <h3 class="c-text--subtitle">Total Orders</h3>
                <h1>623</h1>
              </div>
            </div>

            <div class="col-md-6 col-xl-3">
              <div class="c-card">
                <span class="c-icon c-icon--success u-mb-small">
                  <i class="feather icon-users"></i>
                </span>

                <h3 class="c-text--subtitle">Customers</h3>
                <h1>250</h1>
              </div>
            </div>

            <div class="col-md-6 col-xl-3">
              <div class="c-card">
                <span class="c-icon c-icon--warning u-mb-small">
                  <i class="feather icon-zap"></i>
                </span>

                <h3 class="c-text--subtitle">Revenue</h3>
                <h1>$8794</h1>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="c-card u-ph-zero u-pb-zero">

                <div class="u-ph-medium">
                  <h4>Sales</h4>
                  <p>Activity from 1 Jan 2018 to 30 July 2018</p>

                  <span class="u-h1">$45,000</span>
                </div>

                <div class="u-p-medium">
                  <div class="c-chart">
                    <div class="sales-chart"></div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-md-6">
              <div class="c-card u-ph-zero u-pb-zero">

                <div class="u-ph-medium">
                  <h4>Payouts</h4>
                  <p>Activity from 1 Jan 2018 to 30 July 2018</p>

                  <span class="u-h1">$23,420</span>
                </div>

                <div class="u-p-medium">
                  <div class="c-chart">
                    <div class="payouts-chart"></div>
                  </div>
                </div>

              </div>
            </div>
          </div>

@endsection
