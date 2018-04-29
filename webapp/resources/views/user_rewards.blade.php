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
        <header class="c-navbar u-mb-medium">
          <button class="c-sidebar-toggle js-sidebar-toggle">
            <i class="feather icon-align-left"></i>
          </button>

          <h2 class="c-navbar__title">My Dashboard</h2>

          <div class="c-dropdown dropdown u-mr-small">
            <div class="c-notification dropdown-toggle" id="dropdownMenuToggle1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
              <i class="c-notification__icon feather icon-message-circle"></i>
            </div>

            <div class="c-dropdown__menu c-dropdown__menu--large has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuToggle1">

              <span class="c-dropdown__menu-header">
                Mentions
              </span>
              <a class="c-dropdown__item dropdown-item" href="#">
                <div class="o-media">
                  <div class="o-media__img u-mr-xsmall">
                    <span class="c-avatar c-avatar--xsmall">
                      <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Adam Sandler">
                    </span>
                  </div>

                  <div class="o-media__body">
                    <p>Hey, Julia how are you doing. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eius iste.</p>
                  </div>
                </div>
              </a>

              <a class="c-dropdown__item dropdown-item" href="#">
                <div class="o-media">
                  <div class="o-media__img u-mr-xsmall">
                    <span class="c-avatar c-avatar--xsmall">
                      <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Adam Sandler">
                    </span>
                  </div>

                  <div class="o-media__body">
                    <p>Hey, Julia how are you doing. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eius iste.</p>
                  </div>
                </div>
              </a>

              <a class="c-dropdown__item dropdown-item" href="#">
                <div class="o-media">
                  <div class="o-media__img u-mr-xsmall">
                    <span class="c-avatar c-avatar--xsmall">
                      <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Adam Sandler">
                    </span>
                  </div>

                  <div class="o-media__body">
                    <p>Hey, Julia how are you doing. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eius iste.</p>
                  </div>
                </div>
              </a>

              <a class="c-dropdown__menu-footer">
                All Mentions
              </a>
            </div>
          </div>

          <div class="c-dropdown dropdown u-mr-medium">
            <div class="c-notification has-indicator dropdown-toggle" id="dropdownMenuToggle2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
              <i class="c-notification__icon feather icon-bell"></i>
            </div>

            <div class="c-dropdown__menu c-dropdown__menu--large has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuToggle2">

              <span class="c-dropdown__menu-header">
                Notifications
              </span>
              <a class="c-dropdown__item dropdown-item" href="#">
                <div class="o-media">
                  <div class="o-media__img u-mr-xsmall">
                    <span class="c-icon c-icon--info c-icon--xsmall"><i class="feather icon-globe"></i></span>
                  </div>

                  <div class="o-media__body">
                    <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
                  </div>
                </div>
              </a>

              <a class="c-dropdown__item dropdown-item" href="#">
                <div class="o-media">
                  <div class="o-media__img u-mr-xsmall">
                    <span class="c-icon c-icon--danger c-icon--xsmall"><i class="feather icon-x"></i></span>
                  </div>

                  <div class="o-media__body">
                    <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
                  </div>
                </div>
              </a>

              <a class="c-dropdown__item dropdown-item" href="#">
                <div class="o-media">
                  <div class="o-media__img u-mr-xsmall">
                    <span class="c-icon c-icon--success c-icon--xsmall"><i class="feather icon-anchor"></i></span>
                  </div>

                  <div class="o-media__body">
                    <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
                  </div>
                </div>
              </a>

              <a class="c-dropdown__menu-footer">
                All Notifications
              </a>
            </div>
          </div>

          <div class="c-dropdown dropdown">
            <div class="c-avatar c-avatar--xsmall dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
              <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Adam Sandler">
            </div>

            <div class="c-dropdown__menu has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAvatar">
              <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
              <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
              <a class="c-dropdown__item dropdown-item" href="#">Log out</a>
            </div>
          </div>
        </header>

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
