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
            
                              <h5>{{$dataArray['user_data']['first_name']}} {{$dataArray['user_data']['last_name']}}</h5>                             
                            </div>
            
                            <span class="c-divider u-mv-small"></span>
            
                            <span class="c-text--subtitle" style="color:blue;">Email Address</span>
                            <p class="u-mb-small u-text-large">{{$dataArray['user_data']['email']}}</p>
            
                            <span class="c-text--subtitle" style="color:blue;">Account Type</span>
                            <p class="u-mb-small u-text-large">{{$dataArray['user_data']['account_type']}}</p>
            
                            <span class="c-text--subtitle" style="color:blue;">Country</span>
                            <p class="u-mb-small u-text-large">{{$dataArray['user_data']['country']}}</p>
                                        
                            
                           
                          </div>

            </div>
            <div class="col-md-offset-3 col-md-6">
                    <div class="c-card">
                            
                            <span class="c-text--subtitle" style="color:blue;">Date of Birth</span>
                            <p class="u-mb-small u-text-large">{{$dataArray['user_data']['dob']}}</p>
            
                            <span class="c-text--subtitle" style="color:blue;">Wallet Status</span>
                            @if ($dataArray['user_data']['is_wallet_linked'] != 0)
                            <p class="u-mb-small u-text-large" style="color:green;">LINKED</p>
                            @else
                            <p class="u-mb-small u-text-large" style="color:red;">NOT LINKED</p>
                            @endif

                            <span class="c-text--subtitle" style="color:blue;">ETH balance</span>
                            @if ($dataArray['user_data']['eth_token_balance'] != NULL)
                            <p class="u-mb-small u-text-large">{{$dataArray['user_data']['eth_token_balance']}}</p>
                            @else
                            <p class="u-mb-small u-text-large">N.A</p>
                            @endif
            
                            <span class="c-text--subtitle" style="color:blue;">Feedback Token Balance</span>
                            @if ($dataArray['user_data']['feedback_token_balance'] != NULL)
                            <p class="u-mb-small u-text-large">{{$dataArray['user_data']['feedback_token_balance']}}</p>
                            @else
                            <p class="u-mb-small u-text-large">N.A</p>
                            @endif
                           
            
                            <span class="c-text--subtitle" style="color:blue;">Created at</span>                            
                            @if ($dataArray['user_data']['created_at'] != NULL)
                            <p class="u-mb-small u-text-large">{{$dataArray['user_data']['created_at']}}</p>
                            @else
                            <p class="u-mb-small u-text-large">N.A</p>
                            @endif

                            <span class="c-text--subtitle" style="color:blue;">Email Verified</span>
                            
                            @if ($dataArray['user_data']['verified'] != 0)
                            <p class="u-mb-small u-text-large" style="color:green;">VERIFIED</p>
                            @else
                            <p class="u-mb-small u-text-large" style="color:red;">NOT VERIFIED</p>
                            @endif
                          </div>

            </div>
        </div>

    </div>
  </main>
</div>
@endsection
