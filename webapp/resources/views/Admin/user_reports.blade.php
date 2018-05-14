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
            <div class="c-state-card c-state-card--info">
              <h4 class="c-state-card__title">User Accounts</h4>
              <span class="c-state-card__number">45</span>
            </div>
          </div>

          <div class="col-md-6">
            <div class="c-state-card c-state-card--success">
              <h4 class="c-state-card__title">Business Accounts</h4>
              <span class="c-state-card__number">540</span>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-12">
            <div class="c-table-responsive@wide">
              <table class="c-table">
                <thead class="c-table__head">
                  <tr class="c-table__row">
                    <th class="c-table__cell c-table__cell--head">User</th>
                    <th class="c-table__cell c-table__cell--head">Email</th>
                    <th class="c-table__cell c-table__cell--head">Account Type</th>
                    <th class="c-table__cell c-table__cell--head">Action</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="c-table__row">
                    <td class="c-table__cell">
                      <div class="o-media">                        
                        <div class="o-media__body">
                          <h6>Adam Sandler</h6>
                        </div>
                      </div>
                    </td>
                    <td class="c-table__cell">Pinterest</td>
                    <td class="c-table__cell">223</td>
                    <td class="c-table__cell">
                      <button class="c-btn c-btn--fullwidth c-btn--info">View Profile</button>
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
