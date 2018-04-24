@extends('layouts.template')
@section('title', 'Dashboard')
@section('body_content')
<div class="o-page">
  @include('layouts.sidebar')
  <main class="o-page__content">
    @include('layouts.header')
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="c-card">
            <div class="row">
              <div class="col-md-8">
                <form>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="c-field has-icon-right">
                        <input class="c-input" type="text" placeholder="Search by applicant's name, email or tags">
                        <span class="c-field__icon">
                          <i class="feather icon-search"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-4">
                <label class="c-switch u-mr-small float-right sandbox-requests-label">
                  <input class="c-switch__input" id="sandbox-requests" type="checkbox" checked="">
                  <span class="c-switch__label">View Test Data (Sandbox)</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <table class="c-table">
            <thead class="c-table__head">
              <tr class="c-table__row">
                <th class="c-table__cell c-table__cell--head">Applicant Name</th>
                <th class="c-table__cell c-table__cell--head">E-Mail</th>
                <th class="c-table__cell c-table__cell--head">Check Status</th>
                <th class="c-table__cell c-table__cell--head">Check Progress</th>
              </tr>
            </thead>
            <tbody>
              <tr class="c-table__row">
                <td class="c-table__cell">Tittu Varghese</td>
                <td class="c-table__cell">tittuhpd@gmail.com</td>
                <td class="c-table__cell"><a class="c-badge c-badge--small c-badge--info" href="#">Pending</a></td>
                <td class="c-table__cell"><a class="c-badge c-badge--small c-badge--info" href="#">ID Check</a></td>
              </tr>
              <tr class="c-table__row">
                <td class="c-table__cell">Ajith ER</td>
                <td class="c-table__cell">ajither@gmail.com</td>
                <td class="c-table__cell"><a class="c-badge c-badge--small c-badge--danger" href="#">Rejected</a></td>
                <td class="c-table__cell"><a class="c-badge c-badge--small c-badge--success" href="#">Completed</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      @include('layouts.footer')
    </div>
  </main>
</div>
@endsection
