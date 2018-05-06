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
        <div class="col-12">
          <div class="c-table-responsive@wide">
            <table class="c-table">
              <thead class="c-table__head">
                <tr class="c-table__row">
                  <th class="c-table__cell c-table__cell--head">Customer</th>
                  <th class="c-table__cell c-table__cell--head">Company</th>
                  <th class="c-table__cell c-table__cell--head">Lead Score</th>
                  <th class="c-table__cell c-table__cell--head">Date</th>
                  <th class="c-table__cell c-table__cell--head">Tags</th>
                  <th class="c-table__cell c-table__cell--head">Actions</th>
                </tr>
              </thead>

              <tbody>
                <tr class="c-table__row">
                  <td class="c-table__cell">
                    <div class="o-media">
                      <div class="o-media__img u-mr-xsmall">
                        <div class="c-avatar c-avatar--small">
                          <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Jessica Alba">
                        </div>
                      </div>
                      <div class="o-media__body">
                        <h6>Adam Sandler</h6>
                        <p>Graphic Designer</p>
                      </div>
                    </div>
                  </td>
                  <td class="c-table__cell">Pinterest</td>
                  <th class="c-table__cell">223</th>
                  <td class="c-table__cell">19-11-2018</td>
                  <td class="c-table__cell">
                    <a class="c-badge c-badge--small c-badge--info" href="#">sketch</a>
                    <a class="c-badge c-badge--small c-badge--info" href="#">ui</a>
                    <a class="c-badge c-badge--small c-badge--fancy" href="#">ux</a>
                  </td>
                  <td class="c-table__cell">
                    <div class="c-dropdown dropdown">
                      <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More <i class="feather icon-chevron-down"></i>
                      </a>

                      <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable1">
                        <a class="c-dropdown__item dropdown-item" href="#">Link One</a>
                        <a class="c-dropdown__item dropdown-item" href="#">Link Two</a>
                        <a class="c-dropdown__item dropdown-item" href="#">Link Three</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr class="c-table__row">
                  <td class="c-table__cell">
                    <div class="o-media">
                      <div class="o-media__img u-mr-xsmall">
                        <div class="c-avatar c-avatar--small">
                          <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Jessica Alba">
                        </div>
                      </div>
                      <div class="o-media__body">
                        <h6>Adam Sandler</h6>
                        <p>Copy Writer</p>
                      </div>
                    </div>
                  </td>
                  <td class="c-table__cell">Facebook</td>
                  <th class="c-table__cell">134</th>
                  <td class="c-table__cell">28-2-2018</td>
                  <td class="c-table__cell">
                    <a class="c-badge c-badge--small c-badge--warning" href="#">research</a>
                    <a class="c-badge c-badge--small c-badge--success" href="#">docs</a>
                  </td>
                  <td class="c-table__cell">
                    <div class="c-dropdown dropdown">
                      <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More <i class="feather icon-chevron-down"></i>
                      </a>

                      <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable2">
                        <a class="c-dropdown__item dropdown-item" href="#">Link One</a>
                        <a class="c-dropdown__item dropdown-item" href="#">Link Two</a>
                        <a class="c-dropdown__item dropdown-item" href="#">Link Three</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr class="c-table__row">
                  <td class="c-table__cell">
                    <div class="o-media">
                      <div class="o-media__img u-mr-xsmall">
                        <div class="c-avatar c-avatar--small">
                          <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Jessica Alba">
                        </div>
                      </div>
                      <div class="o-media__body">
                        <h6>Adam Sandler</h6>
                        <p>Marketing Dir.</p>
                      </div>
                    </div>
                  </td>
                  <td class="c-table__cell">Spotify</td>
                  <th class="c-table__cell">165</th>
                  <td class="c-table__cell">17-8-2018</td>
                  <td class="c-table__cell">
                    <a class="c-badge c-badge--small c-badge--fancy" href="#">marketing</a>
                    <a class="c-badge c-badge--small c-badge--info" href="#">seo</a>
                  </td>
                  <td class="c-table__cell">
                    <div class="c-dropdown dropdown">
                      <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More <i class="feather icon-chevron-down"></i>
                      </a>

                      <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable3">
                        <a class="c-dropdown__item dropdown-item" href="#">Link One</a>
                        <a class="c-dropdown__item dropdown-item" href="#">Link Two</a>
                        <a class="c-dropdown__item dropdown-item" href="#">Link Three</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr class="c-table__row">
                  <td class="c-table__cell">
                    <div class="o-media">
                      <div class="o-media__img u-mr-xsmall">
                        <div class="c-avatar c-avatar--small">
                          <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Jessica Alba">
                        </div>
                      </div>
                      <div class="o-media__body">
                        <h6>Adam Sandler</h6>
                        <p>Front-end Developer</p>
                      </div>
                    </div>
                  </td>
                  <td class="c-table__cell">Google</td>
                  <th class="c-table__cell">235</th>
                  <td class="c-table__cell">14-3-2018</td>
                  <td class="c-table__cell">
                    <a class="c-badge c-badge--small c-badge--info" href="#">html</a>
                    <a class="c-badge c-badge--small c-badge--info" href="#">css</a>
                    <a class="c-badge c-badge--small c-badge--fancy" href="#">javascript</a>
                  </td>
                  <td class="c-table__cell">
                    <div class="c-dropdown dropdown">
                      <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More <i class="feather icon-chevron-down"></i>
                      </a>

                      <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable4">
                        <a class="c-dropdown__item dropdown-item" href="#">Link One</a>
                        <a class="c-dropdown__item dropdown-item" href="#">Link Two</a>
                        <a class="c-dropdown__item dropdown-item" href="#">Link Three</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr class="c-table__row">
                  <td class="c-table__cell">
                    <div class="o-media">
                      <div class="o-media__img u-mr-xsmall">
                        <div class="c-avatar c-avatar--small">
                          <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Jessica Alba">
                        </div>
                      </div>
                      <div class="o-media__body">
                        <h6>Adam Sandler</h6>
                        <p>Backend Developer</p>
                      </div>
                    </div>
                  </td>
                  <td class="c-table__cell">Twitter</td>
                  <th class="c-table__cell">113</th>
                  <td class="c-table__cell">14-7-2018</td>
                  <td class="c-table__cell">
                    <a class="c-badge c-badge--small c-badge--info" href="#">php</a>
                    <a class="c-badge c-badge--small c-badge--danger" href="#">nodejs</a>
                    <a class="c-badge c-badge--small c-badge--success" href="#">server</a>
                  </td>
                  <td class="c-table__cell">
                    <div class="c-dropdown dropdown">
                      <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More <i class="feather icon-chevron-down"></i>
                      </a>

                      <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable5">
                        <a class="c-dropdown__item dropdown-item" href="#">Link One</a>
                        <a class="c-dropdown__item dropdown-item" href="#">Link Two</a>
                        <a class="c-dropdown__item dropdown-item" href="#">Link Three</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr class="c-table__row">
                  <td class="c-table__cell">
                    <div class="o-media">
                      <div class="o-media__img u-mr-xsmall">
                        <div class="c-avatar c-avatar--small">
                          <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Jessica Alba">
                        </div>
                      </div>
                      <div class="o-media__body">
                        <h6>Adam Sandler</h6>
                        <p>Marketer.</p>
                      </div>
                    </div>
                  </td>
                  <td class="c-table__cell">Apple</td>
                  <th class="c-table__cell">230</th>
                  <td class="c-table__cell">22-2-2018</td>
                  <td class="c-table__cell">
                    <a class="c-badge c-badge--small c-badge--warning" href="#">docs</a>
                    <a class="c-badge c-badge--small c-badge--danger" href="#">content</a>
                    <a class="c-badge c-badge--small c-badge--success" href="#">seo</a>
                  </td>
                  <td class="c-table__cell">
                    <div class="c-dropdown dropdown">
                      <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More <i class="feather icon-chevron-down"></i>
                      </a>

                      <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable6">
                        <a class="c-dropdown__item dropdown-item" href="#">Link One</a>
                        <a class="c-dropdown__item dropdown-item" href="#">Link Two</a>
                        <a class="c-dropdown__item dropdown-item" href="#">Link Three</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

  </div>
  </main>
</div>
@endsection
