@extends('layouts.template')
@section('title', 'Dashboard')
@section('body_content')
<div class="o-page">
    @include('layouts.sidebar')
    @role('User')
    @yield('user_sidebar')
    @endrole
    @role('Business')
    @yield('business_sidebar')
    @endrole
    @role('admin')
    @yield('admin_sidebar')
    @endrole
  <main class="o-page__content">
    @include('layouts.header')
    @role('User')
    @yield('user_header')
    @endrole
    @role('Business')
    @yield('business_header')
    @endrole
    @role('admin')
    @yield('admin_header')
    @endrole
    <div class="container">
 

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

        <div class="row">
          <div class="col-xl-4">
            <div class="c-card" data-mh="overview-cards">
              <h4>Customers</h4>
              <p class="u-mb-medium">Lorem ipsum dolor sit amet, consectetur.</p>

              <div class="c-chart">
                <div class="c-chart__body">

                  <!-- Chartist.js uses this class to generate the chart -->
                  <div class="pie-chart"></div>
                </div>

                <div class="c-chart__legends">
                  <div class="row">
                    <div class="col-6">
                      <span class="c-chart__legend">
                        <i class="c-chart__legend-icon u-bg-info"></i>New Customer
                      </span>
                    </div>

                    <div class="col-6">
                      <span class="c-chart__legend">
                        <i class="c-chart__legend-icon u-bg-pink"></i>Old Customers
                      </span>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                      <span class="c-chart__legend">
                        <i class="c-chart__legend-icon u-bg-fancy"></i>Avg. Customers
                      </span>
                    </div>

                    <div class="col-6">
                      <span class="c-chart__legend">
                        <i class="c-chart__legend-icon u-bg-success"></i>Hi Customers
                      </span>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>

          <div class="col-xl-4">
            <div class="c-card" data-mh="overview-cards">
              <h4>Sales</h4>
              <p class="u-mb-medium">Lorem ipsum dolor sit amet, consectetur.</p>

              <div class="c-chart">
                <div class="c-chart__body">

                  <!-- Chartist.js uses this class to generate the chart -->
                  <div class="overlapp-bars-chart"></div>
                </div>

                <div class="c-chart__legends">
                  <div class="row">
                    <div class="col-6">
                      <span class="c-text--subtitle u-block">Best Month</span>
                      <span class="u-h2">2500 <i class="feather icon-trending-down u-color-danger"></i></span>
                    </div>

                    <div class="col-6">
                      <span class="c-text--subtitle u-block">Best Day</span>
                      <span class="u-h2">420 <i class="feather icon-trending-up u-color-success"></i></span>
                    </div>
                  </div>

                </div>

              </div>
            </div>

          </div>

          <div class="col-xl-4">
            <div class="c-card" data-mh="overview-cards">
              <h4>Recent Sellers</h4>
              <p class="u-mb-medium">Lorem ipsum dolor sit amet, elit.</p>

              <div class="o-line u-pb-small u-mb-small u-border-bottom">
                <div class="o-media">
                  <div class="o-media__img u-mr-small">
                    <div class="c-avatar c-avatar--xsmall">
                      <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Name">
                    </div>
                  </div>

                  <div class="o-media__body">
                    <h6>Justine Henderson</h6>
                    <p>Blink Inc.</p>
                  </div>
                </div>

                <h6>$5415
                  <span class="u-color-success u-block">
                    <i class="feather icon-trending-up"></i>
                  </span>
                </h6>
              </div>

              <div class="o-line u-pb-small u-mb-small u-border-bottom">
                <div class="o-media">
                  <div class="o-media__img u-mr-small">
                    <div class="c-avatar c-avatar--xsmall">
                      <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Name">
                    </div>
                  </div>

                  <div class="o-media__body">
                    <h6>Waylon Dalton</h6>
                    <p>Pulse ltd</p>
                  </div>
                </div>

                <h6>$1520
                  <span class="u-color-danger u-block">
                    <i class="feather icon-trending-down"></i>
                  </span>
                </h6>
              </div>

              <div class="o-line">
                <div class="o-media">
                  <div class="o-media__img u-mr-small">
                    <div class="c-avatar c-avatar--xsmall">
                      <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Name">
                    </div>
                  </div>

                  <div class="o-media__body">
                    <h6>Angela Walker</h6>
                    <p>Contractor Inc.</p>
                  </div>
                </div>

                <h6>$4240
                  <span class="u-color-success u-block">
                    <i class="feather icon-trending-up"></i>
                  </span>
                </h6>
              </div>

            </div>
          </div>
        </div>

    </div>
  </main>
</div>
@endsection
