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
              <h4 class="c-state-card__title">Contracts</h4>
              <span class="c-state-card__number">45</span>
              <p class="c-state-card__status">
                <i class="feather icon-trending-up"></i> 23% Increase
              </p>

              <div class="c-state-card__actions dropdown">
                <span class="dropdown-toggle" id="dropdownMenuState1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                  <i class="feather icon-more-vertical"></i>
                </span>

                <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState1">
                  <a class="c-dropdown__item dropdown-item" href="#">Link 1</a>
                  <a class="c-dropdown__item dropdown-item" href="#">Link 2</a>
                  <a class="c-dropdown__item dropdown-item" href="#">Link 3</a>
                </div>
              </div>

            </div>
          </div>

          <div class="col-md-4">
            <div class="c-state-card c-state-card--success">
              <h4 class="c-state-card__title">Responses</h4>
              <span class="c-state-card__number">540</span>
              <p class="c-state-card__status">
                <i class="feather icon-trending-down"></i> 12% Decrease
              </p>
              <div class="c-state-card__actions dropdown">
                <span class="dropdown-toggle" id="dropdownMenuState2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                  <i class="feather icon-more-vertical"></i>
                </span>

                <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState2">
                  <a class="c-dropdown__item dropdown-item" href="#">Link 1</a>
                  <a class="c-dropdown__item dropdown-item" href="#">Link 2</a>
                  <a class="c-dropdown__item dropdown-item" href="#">Link 3</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="c-state-card c-state-card--fancy">
              <h4 class="c-state-card__title">Tokens Spent</h4>
              <span class="c-state-card__number">45,000</span>
              <p class="c-state-card__status">
                <i class="feather icon-trending-up"></i> 65% Increase
              </p>
              <div class="c-state-card__actions dropdown">
                <span class="dropdown-toggle" id="dropdownMenuState3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                  <i class="feather icon-more-vertical"></i>
                </span>

                <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState3">
                  <a class="c-dropdown__item dropdown-item" href="#">Link 1</a>
                  <a class="c-dropdown__item dropdown-item" href="#">Link 2</a>
                  <a class="c-dropdown__item dropdown-item" href="#">Link 3</a>
                </div>
              </div>
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
