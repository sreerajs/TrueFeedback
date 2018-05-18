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
          <div class="col-md-4">
            <div class="c-state-card c-state-card--info">
            <h4 class="c-state-card__title">{{ $dataArray['dashboard_banner']['heading_one']}}</h4>
              <span class="c-state-card__number">{{ $dataArray['dashboard_banner']['heading_one_value']}}</span>
              </div>
          </div>

          <div class="col-md-4">
            <div class="c-state-card c-state-card--success">
              <h4 class="c-state-card__title">{{ $dataArray['dashboard_banner']['heading_two']}}</h4>
              <span class="c-state-card__number">{{ $dataArray['dashboard_banner']['heading_two_value']}}</span>
            </div>
          </div>

          <div class="col-md-4">
            <div class="c-state-card c-state-card--fancy">
              <h4 class="c-state-card__title">{{ $dataArray['dashboard_banner']['heading_three']}}</h4>
              <span class="c-state-card__number">{{ $dataArray['dashboard_banner']['heading_three_value']}}</span>
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

    </div>
  </main>
</div>
@endsection
