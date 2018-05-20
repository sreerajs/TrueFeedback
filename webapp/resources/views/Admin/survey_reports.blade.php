@extends('layouts.template') @section('title', 'Dashboard') @section('body_content')
<div class="o-page">
  @include('layouts.sidebar') @role('User') @yield('user_sidebar') @endrole @role('Business') @yield('business_sidebar') @endrole @role('admin') @yield('admin_sidebar') @endrole
  <main class="o-page__content">
    @include('layouts.header') @role('User') @yield('user_header') @endrole @role('Business') @yield('business_header') @endrole @role('admin') @yield('admin_header') @endrole
    <div class="container">
      <div class="row">

        <div class="col-12">
          <div class="c-table-responsive@wide">
            <table class="c-table">
              <thead class="c-table__head">
                <tr class="c-table__row">
                  <th class="c-table__cell c-table__cell--head">Survey Name</th>
                  <th class="c-table__cell c-table__cell--head">Deployed</th>
                  <th class="c-table__cell c-table__cell--head">Created at</th>
                  <th class="c-table__cell c-table__cell--head">Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($dataArray['data'] as $survey)
                <tr class="c-table__row">
                  <td class="c-table__cell">
                    <div class="o-media">
                      <div class="o-media__body">
                        <h6>{{$survey->name}}</h6>
                      </div>
                    </div>
                  </td>
                  <td class="c-table__cell">
                    @if ($survey->is_deployed != 0)
                    <p style="color:green">Deployed</p>
                    @else
                    <p style="color:red">Not Deployed</p>
                    @endif
                  </td>
                  <td class="c-table__cell">{{$survey->created_at}}</td>
                  <td class="c-table__cell">
                    <div class="c-dropdown dropdown">
                      <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      View Stats
                      </a>

                    </div>
          </div>
          </td>
          </tr>
          @endforeach
          </tbody>
          </table>
          <br> {{ $dataArray['data']->links() }}
        </div>
      </div>


    </div>
    <!--row-->
</div>
<!-- container -->

</main>
</div>
@endsection
