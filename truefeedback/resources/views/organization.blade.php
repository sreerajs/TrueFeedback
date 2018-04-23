@extends('layouts.template')
@section('title', 'Dashboard')
@section('body_content')
<div class="o-page">
  @include('layouts.sidebar')
  <main class="o-page__content">
    @include('layouts.header')
    <div class="container">
      @include('layouts.alerts')
      <div class="row">
        <div class="col-xl-12">
          <div class="c-card card-min__height">
            <form id="formProfileOrganization" method="post" action="organizationprofile">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                <div class="col-md-6">
                  <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="company_name">Company Name</label>
                    <input class="c-input" type="text" id="company_name" name="company_name" placeholder="eg. Google" value="{{ $dataArray['user']->company_name }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="company_email">Company Email</label>
                    <input class="c-input" type="text" id="company_email" name="company_email" placeholder="eg. mail@google.com" value="{{ $dataArray['user']->company_email }}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="company_website">Company Website</label>
                    <input class="c-input" type="text" id="company_website" name="company_website" placeholder="eg. https://google.com" value="{{ $dataArray['user']->company_website }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="company_location">Company Location (Country)</label>
                    <div class="c-select">
                      <select class="c-select__input" id="company_location" name="company_location">
                        @include('common.country')
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="company_interested_in">Company Website</label>
                    <div class="c-select">
                      <select class="c-select__input" id="company_interested_in" name="company_interested_in">
                        @if ($dataArray['user']->interested_in != NULL)
                        <option value="{{ $dataArray['user']->interested_in }}">{{ $dataArray['user']->interested_in }}</option>
                        @endif
                        <option value="KYC & AML">KYC & AML</option>
                        <option value="Criminal & DBS">Criminal & DBS</option>
                        <option value="Right to Work">Right to Work</option>
                        <option value="Identity Verification">Identity Verification</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="company_applications_per_month">Application per Month</label>
                    <div class="c-select">
                      <select class="c-select__input" id="company_applications_per_month" name="company_applications_per_month">
                        @if ($dataArray['user']->applications_per_month != NULL)
                        <option value="{{ $dataArray['user']->applications_per_month }}">{{ $dataArray['user']->applications_per_month }}</option>
                        @endif
                        <option value="Less than 20">Less than 20</option>
                        <option value="20 to 100">20 to 100</option>
                        <option value="101 to 1000">101 to 1000</option>
                        <option value="1000+">1000+</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <input type="submit" value="Save Company Profile" class="c-btn c-btn--info"></input>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      @include('layouts.footer')
    </div>
  </main>
</div>
@endsection
