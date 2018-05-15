@extends('layouts.template')
@section('title', 'Dashboard')
@section('body_content')
<div class="o-page">
    @include('layouts.sidebar')
    @yield('admin_sidebar')
    <main class="o-page__content">
    @include('layouts.header')
    @yield('admin_header')
    <div class="container">

        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                    <div class="c-card">
                            <div class="u-text-center">
                              <div class="c-avatar c-avatar--large u-mb-small u-inline-flex">
                                <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Avatar">
                              </div>
            
                              <h5>Adam Sandler</h5>                             
                            </div>
            
                            <span class="c-divider u-mv-small"></span>
            
                            <span class="c-text--subtitle">Email Address</span>
                            <p class="u-mb-small u-text-large">adam@sandler.com</p>
            
                            <span class="c-text--subtitle">Account Type</span>
                            <p class="u-mb-small u-text-large">+966 535-277-535</p>
            
                            <span class="c-text--subtitle">Country</span>
                            <p class="u-mb-small u-text-large">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
                                        
                            
                           
                          </div>

            </div>
            <div class="col-md-offset-3 col-md-6">
                    <div class="c-card">
                            
                            <span class="c-text--subtitle">Date of Birth</span>
                            <p class="u-mb-small u-text-large">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
            
                            <span class="c-text--subtitle">Wallet Status</span>
                            <p class="u-mb-small u-text-large">adam@sandler.com</p>
            
                            <span class="c-text--subtitle">ETH balance</span>
                            <p class="u-mb-small u-text-large">+966 535-277-535</p>
            
                            <span class="c-text--subtitle">Feedback Token Balance</span>
                            <p class="u-mb-small u-text-large">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
            
                            <span class="c-text--subtitle">Created at</span>
                            <p class="u-mb-small u-text-large">71 Pilgrim Avenue Chevy Chase, MD 20815</p>

                            <span class="c-text--subtitle">Email Verified</span>
                            <p class="u-mb-small u-text-large">71 Pilgrim Avenue Chevy Chase, MD 20815</p>

                          </div>

            </div>
        </div>

    </div>
  </main>
</div>
@endsection
