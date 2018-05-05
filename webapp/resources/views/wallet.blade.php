@extends('layouts.template')
@section('title', 'Rewards')
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
        
        <div class="col-xl-12">
          <div class="c-table-responsive@wide">
            <table class="c-table">
              <thead class="c-table__head">
                <tr class="c-table__row">
                  <th class="c-table__cell c-table__cell--head">Actions</th>
                  
                </tr>
              </thead>
              
              <tbody>
                
                <tr class="c-table__row">
                  <td class="c-table__cell">
                    <h3> Feedback Token Balance : <span style="color: green">{{$dataArray['user']->feedback_token_balance}}</span> </h3>                       
                  </td>   
                  
                  <td class="c-table__cell">
                      <h3> ETH Balance : <span style="color: green">{{$dataArray['user']->eth_token_balance}}</span> </h3>                   
                    </td>  
                    
                  </tr>
                  
                  
                  <tr class="c-table__row">
                    
                    <td class="c-table__cell">
                      <div class="c-dropdown dropdown">
                        <a href="#" class="c-btn c-btn--info" >
                          Check Transaction Status
                        </a>
                        
                      </td>
                      
                      <td class="c-table__cell">
                        <div class="c-dropdown dropdown">
                          <a href="#" class="c-btn c-btn--info" >
                            Send/Receive Tokens
                          </a>
                        </div>
                      </td>
                      
                      <td class="c-table__cell">
                        <div class="c-dropdown dropdown">
                            <input type="button" class="c-btn c-btn--info" id="btn" value ="View Wallet Information">
                        </div>
                      </td>
                    </tr>                 
                    .                   
                    
                  </tbody>
                </table>
              </div>
            </div>
            
          </div>

          <br /> 

          <div class = "row" id="Create" style="display:none">
              <div class="col-xl-12">
                  <div class="c-card">
            <h2 style="color: blue"> Wallet Information </h2>
            <br />
            <h4> Wallet Address : <span style="font-weight: bold">{{$dataArray['user']->wallet_address}}</span> </h4>
            <br />
            <a href="/wallet_menu" class="c-btn c-btn--info" >
                Modify Wallet Info
              </a>
            </div>
            </div>
          </div>
          
          
          <br /> 
          
          <div class="row">
              <div class="col-xl-12">
                  <div class="c-card">
                <h4>Accounts Overview</h4>
                <p class="u-mb-medium">Activity from 4 Jan 2017 to 10 Jan 2017</p>
                
                <div class="c-feed">
                  <div class="c-feed__item">
                    <p>New order received from Canada by #49832</p>
                    <p class="u-text-xsmall">just now</p>
                  </div>
                  
                  <div class="c-feed__item c-feed__item--success">
                    <p>New order received from Canada by #49832</p>
                    <p class="u-text-xsmall">5 mins ago</p>
                  </div>
                  
                  <div class="c-feed__item">
                    <p>New order received from Canada by #49832</p>
                    <p class="u-text-xsmall">30 mins ago</p>
                  </div>
                  
                  <div class="c-feed__item c-feed__item--fancy">
                    <p>New order received from Canada by #49832</p>
                    <p class="u-text-xsmall">3 hours ago</p>
                  </div>
                  
                  <div class="c-feed__item c-feed__item--danger">
                    <p>Payment failed from USA by #49832</p>
                    <p class="u-text-xsmall">5 hours ago</p>
                  </div>
                  
                  <div class="c-feed__item c-feed__item--warning">
                    <p>New order received from Canada by #49832</p>
                    <p class="u-text-xsmall">6 hours ago</p>
                  </div>
                  
                  <div class="c-feed__item">
                    <p>New order received from Canada by #49832</p>
                    <p class="u-text-xsmall">6 hours ago</p>
                  </div>
                </div><!-- // .c-feed -->
                
              </div>
            </div>
            
          </div>
        </div>
      </div><!-- // .container -->

      <script type="text/javascript">
        $(document).ready(function () {
            $("#btn").click(function () {
                $("#Create").toggle();
            });
        });
        </script>
      
      @endsection
      
    

       