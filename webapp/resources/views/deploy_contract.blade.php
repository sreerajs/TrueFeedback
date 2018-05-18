@extends('layouts.template') @section('title', 'Dashboard') @section('body_content')
<div class="o-page">
  @include('layouts.sidebar') @role('User') @yield('user_sidebar') @endrole @role('Business') @yield('business_sidebar') @endrole
  <main class="o-page__content">
    @include('layouts.header') @role('User') @yield('user_header') @endrole @role('Business') @yield('business_header') @endrole
    <div class="container">

      <div class="o-page__card">
        <div class="c-card c-card--center">
          <h4 class="u-mb-medium">Deploy Form</h4>
          <form action="deploycomplete" method="post" id="formRegister">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="contract_id" value="{{$dataArray['survey_id']}}">
            <div class="c-field">
              <label class="c-field__label">Name</label>
              <input class="c-input u-mb-small" type="text" id="survey_name" name="survey_name" placeholder="e.g. Adam">
            </div>

            <div class="c-field u-mb-small">
              <label class="c-field__label">Category</label>
              <div class="c-select">
                <select class="c-select__input" type="category" id="survey_type" name="survey_type" placeholder="User">
                    <option>Technology</option>
                    <option>Business</option>
                    <option>Social</option>
                  </select>
              </div>
            </div>


            <div class="c-field">
              <label class="c-field__label">Maximum Responses</label>
              <input class="c-input u-mb-small" type="text" id="max_response" name="max_response" placeholder="e.g. 20">
            </div>

            <div class="c-field">
              <label class="c-field__label">Reward for each response (in Feedback Tokens)</label>
              <input class="c-input u-mb-small" type="text" id="response_reward" name="response_reward" placeholder="e.g. 5">
            </div>

            <div class="c-field">
              <label class="c-field__label">Expiry Date</label>
              <input class="c-input u-mb-small" type="date" id="expiry_date" name="expiry_date" placeholder="e.g. 0">
              <!--<p style="font-size:0.7em; color:red; display:none" id="date-warning">The survey will be destroyed if the minimum number of responses are not received.</p>-->
            </div>

            <div class="c-field">
              <label class="c-field__label">Minimum Responses</label>
              <input class="c-input u-mb-small" type="text" id="min_response" name="min_response" placeholder="e.g. 0" value="0">
              <p style="font-size:0.7em;">The survey will be destroyed if the minimum number of responses are not received.</p>
            </div>

            <br />
            <input type="submit" class="c-btn c-btn--fullwidth c-btn--info" value="DEPLOY"></input>
          </form>
        </div>
      </div>
    </div>
    <!-- // .container -->
</div>
<!--
    <script type="text/javascript">

    $(document).ready(function()
    {
        function showTargetFields()
        {
            $("#date-warning").toggle();

        }

        $(document).on("change, keyup", "#expiry_date", showTargetFields);
    });

  </script> -->
@endsection
