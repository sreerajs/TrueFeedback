@extends('layouts.template') @section('title', 'Dashboard') @section('body_content')
<div class="o-page">
  @include('layouts.sidebar') @role('User') @yield('user_sidebar') @endrole @role('Business') @yield('business_sidebar') @endrole
  <main class="o-page__content">
    @include('layouts.header') @role('User') @yield('user_header') @endrole @role('Business') @yield('business_header') @endrole
    <div class="container">

      <div class="row">
        <div class="col-md-8">
          <form id="formLogin" action="search_surveys_result" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="c-field u-mb-small">
            <label class="c-field__label">Search for surveys</label>
            <input class="c-input" placeholder="Try Job Satisfaction" id="search_key" name="search-key" type="text" required>
          </div>
        </div>

        <!-- The filter feature is disabled for now- until we setup the targeting part

           <div class = "col-md-3">
           <div class="c-field u-mb-small">
              <label class="c-field__label">Filter By</label>
              <div class="c-select">
                <select class="c-select__input" type="country" id="country" name="country" placeholder="Location ">
                  <option>Location</option>
                  <option>Category</option>
                </select>
              </div>
            </div>
          </div>
          end of filter feature -->

        <!-- Disable the sort-by feature - until the targetting is setup
          <div class = "col-md-3">
              <div class="c-field u-mb-small">
                 <label class="c-field__label">Sort By</label>
                 <div class="c-select">
                   <select class="c-select__input" type="country" id="country" name="country" placeholder="Australia">
                     <option>Reward Amount</option>
                     <option>Survey Expiry</option>
                     </select>
                 </div>
               </div>
             </div>
           End of sort-by feature-->

        <div class="col-md-2">
          <br />
          <input type="submit" value="Search" class="c-btn c-btn--fullwidth c-btn--info"></input>
        </div>
      </form>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="c-table-responsive@wide">
          <table class="c-table">

            <thead class="c-table__head">
              <tr class="c-table_row">
                <th class="c-table__cell c-table__cell--head">Recommended for you</th>
              </tr>
              <tr class="c-table__row">
                <th class="c-table__cell c-table__cell--head">Survey Name</th>
                <th class="c-table__cell c-table__cell--head">Category</th>
                <th class="c-table__cell c-table__cell--head">Reward</th>
                <th class="c-table__cell c-table__cell--head">Exp.Date</th>
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
                <td class="c-table__cell">Technology</td>
                <th class="c-table__cell">3FT</th>
                <td class="c-table__cell">{{$survey->created_at}}</td>
                <td class="c-table__cell">
                  <a href="surveys/{{ $survey->id }}" class="c-btn c-btn--fullwidth c-btn--info">Take Survey</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
<!-- // .container -->
</main>
</div>
@endsection
