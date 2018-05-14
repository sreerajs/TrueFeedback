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
          <div class="col-12">
            <div class="c-table-responsive@wide">
              <table class="c-table">
                <thead class="c-table__head">
                  <tr class="c-table__row">
                    <th class="c-table__cell c-table__cell--head">Customer</th>
                    <th class="c-table__cell c-table__cell--head">Company</th>
                    <th class="c-table__cell c-table__cell--head">Responses</th>
                    <th class="c-table__cell c-table__cell--head">Exp. Date</th>
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
                      <div class="c-dropdown dropdown">
                        <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          More <i class="feather icon-chevron-down"></i>
                        </a>

                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable1">
                          <a class="c-dropdown__item dropdown-item" href="#">Delete</a>
                          <a class="c-dropdown__item dropdown-item" href="#">Archive</a>
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
                      <div class="c-dropdown dropdown">
                        <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          More <i class="feather icon-chevron-down"></i>
                        </a>

                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable2">
                            <a class="c-dropdown__item dropdown-item" href="#">Delete</a>
                            <a class="c-dropdown__item dropdown-item" href="#">Archive</a>
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
                      <div class="c-dropdown dropdown">
                        <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          More <i class="feather icon-chevron-down"></i>
                        </a>

                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable3">
                            <a class="c-dropdown__item dropdown-item" href="#">Delete</a>
                            <a class="c-dropdown__item dropdown-item" href="#">Archive</a>
                        </div>
                      </div>
                    </td>
                  </tr>

                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div><!-- // .container -->
    </div>
@endsection