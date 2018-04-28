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

        <div class="row">
          <div class="col-md-4">
            <div class="c-card" data-mh="dashboard3-cards">
              <h4>Top Customer</h4>
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

              <div class="o-line u-pb-small u-mb-small u-border-bottom">
                <div class="o-media">
                  <div class="o-media__img u-mr-small">
                    <div class="c-avatar c-avatar--xsmall">
                      <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Name">
                    </div>
                  </div>

                  <div class="o-media__body">
                    <h6>Warren Hampton</h6>
                    <p>Restful ltd</p>
                  </div>
                </div>

                <h6>$520
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

          <div class="col-md-4">
            <div class="c-card" data-mh="dashboard3-cards">
              <h4>Global Revenue</h4>
              <p class="u-mb-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

              <p class="u-mb-xsmall">United States</p>
              <div class="c-progress c-progress--info c-progress--medium u-mb-small">
                <div class="c-progress__bar" style="width:75%;"></div>
              </div>

              <p class="u-mb-xsmall">Germany</p>
              <div class="c-progress c-progress--warning c-progress--medium u-mb-small">
                <div class="c-progress__bar" style="width:25%;"></div>
              </div>

              <p class="u-mb-xsmall">United Kingdom</p>
              <div class="c-progress c-progress--success c-progress--medium u-mb-small">
                <div class="c-progress__bar" style="width:45%;"></div>
              </div>

              <p class="u-mb-xsmall">Russia</p>
              <div class="c-progress c-progress--info c-progress--medium">
                <div class="c-progress__bar" style="width:45%;"></div>
              </div>

              <p class="u-mb-xsmall">Australia</p>
              <div class="c-progress c-progress--danger c-progress--medium">
                <div class="c-progress__bar" style="width:80%;"></div>
              </div>

            </div>
          </div>

          <div class="col-md-4">
            <div class="c-card" data-mh="dashboard3-cards">
              <h4>Recent Activity</h4>
              <p class="u-mb-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <div class="c-feed">
                  <div class="c-feed__item">
                    <p>New order received from Canada by #49832</p>
                  </div>

                  <div class="c-feed__item c-feed__item--success">
                    <p>New order received from Canada by #49832</p>
                  </div>

                  <div class="c-feed__item">
                    <p>New order received from Canada by #49832</p>
                  </div>

                  <div class="c-feed__item c-feed__item--danger">
                    <p>New order received from Canada by #49832</p>
                  </div>
                </div><!-- // .c-feed -->
            </div>
          </div>
        </div>
    </div>
  </main>
</div>
@endsection
