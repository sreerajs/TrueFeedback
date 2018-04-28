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

        <h2 class="c-navbar__title">My Wallet</h2>

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

          <div class="col-xl-4">
            <div class="c-table-responsive@wide">
              <table class="c-table">
                <thead class="c-table__head">
                  <tr class="c-table__row">
                    <th class="c-table__cell c-table__cell--head">Actions</th>

                  </tr>
                </thead>

                <tbody>
                  <tr class="c-table__row">

                    <td class="c-table__cell">
                      <div class="c-dropdown dropdown">
                        <a href="#" class="c-btn c-btn--info" >
                          Check Transaction Status
                        </a>
                      </div>
                    </td>
                  </tr>

                  <tr class="c-table__row">

                    <td class="c-table__cell">
                      <div class="c-dropdown dropdown">
                        <a href="#" class="c-btn c-btn--info" >
                          Send/Receive Tokens
                        </a>
                      </div>
                    </td>
                  </tr>

.                    <tr class="c-table__row">

                    <td class="c-table__cell">
                      <div class="c-dropdown dropdown">
                        <a href="walletinfo.html" class="c-btn c-btn--info" >
                          View Wallet Information
                        </a>
                      </div>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>


          <div class="col-xl-8">
            <div class="c-card">
              <h4>Accounts Overview</h4>
              <p class="u-mb-medium">Activity from 4 Jan 2017 to 10 Jan 2017</p>

              <div class="c-feed">
                <div class="c-feed__item">
                  <p>New order received from Canada by #49832</p>
                  <p class="u-text-xsmall">just now</p>
                </div>

                <div class="c-feed__item c-feed__item--success">
                  <p>New order received from Canada by #49832</p>
                  <p class="u-text-xsmall">5 mins ago</p>
                </div>

                <div class="c-feed__item">
                  <p>New order received from Canada by #49832</p>
                  <p class="u-text-xsmall">30 mins ago</p>
                </div>

                <div class="c-feed__item c-feed__item--fancy">
                  <p>New order received from Canada by #49832</p>
                  <p class="u-text-xsmall">3 hours ago</p>
                </div>

                <div class="c-feed__item c-feed__item--danger">
                  <p>Payment failed from USA by #49832</p>
                  <p class="u-text-xsmall">5 hours ago</p>
                </div>

                <div class="c-feed__item c-feed__item--warning">
                  <p>New order received from Canada by #49832</p>
                  <p class="u-text-xsmall">6 hours ago</p>
                </div>

                <div class="c-feed__item">
                  <p>New order received from Canada by #49832</p>
                  <p class="u-text-xsmall">6 hours ago</p>
                </div>
              </div><!-- // .c-feed -->

            </div>
          </div>


        </div>
      </div><!-- // .container -->

@endsection
