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
            <span class="c-state-card__number">{{$dataArray['user_count']}}</span>
            </div>
          </div>

          <div class="col-md-6">
            <div class="c-state-card c-state-card--success">
              <h4 class="c-state-card__title">Business Accounts</h4>
              <span class="c-state-card__number">{{$dataArray['business_count']}}</span>
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
                 @foreach ($dataArray['data'] as $user)
                 <tr class="c-table__row">
                      <td class="c-table__cell">
                        <div class="o-media">                        
                          <div class="o-media__body">
                            <h6>{{$user->first_name}} {{$user->last_name}}</h6>
                          </div>
                        </div>
                      </td>
                      <td class="c-table__cell">{{$user->email}}</td>
                      <td class="c-table__cell">{{$user->account_type}}</td>
                      <td class="c-table__cell">
                      <a class="c-btn c-btn--info c-btn--outline c-btn--fullwidth" href="/admin/profile/{{$user->email}}">Profile</a>
                        </form>
                    </td>
                 </tr>
                @endforeach
                </tbody>
              </table>
              <br>
              {{ $dataArray['data']->links() }}
            </div>
          </div>
        </div>

    </div>
  </main>
</div>
@endsection
