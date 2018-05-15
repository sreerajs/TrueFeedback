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
    
        <div class="container">
            <div class="row">
              <div class="col-xl-7">
                <div class="c-card">
                  <h4>User Activity</h4>
                  <p class="u-mb-medium">Activity from 4 Jan 2017 to 10 Jan 2017</p>
  
                  <!--<canvas id="js-chart-revenue"></canvas>-->
  
                  <div class="two-lines-chart"></div>
                </div>
              </div>
  
              <div class="col-xl-5">
                <div class="c-card">
                  <h4>Latests Transactions</h4>
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
  
            <div class="row">
              <div class="col-xl-4">
                <div class="c-card" data-mh="overview-cards">
                  <h4>Customers</h4>
                  <p class="u-mb-medium">Lorem ipsum dolor sit amet, consectetur.</p>
  
                  <div class="c-chart">
                    <div class="c-chart__body">
  
                      <!-- Chartist.js uses this class to generate the chart -->
                      <div class="pie-chart"></div>
                      
                    </div>
                    
                    <div class="c-chart__legends">
                      <div class="row">
                        <div class="col-6">
                          <span class="c-chart__legend">
                            <i class="c-chart__legend-icon u-bg-info"></i>Users
                          </span>
                        </div>
                        
                        <div class="col-6">
                          <span class="c-chart__legend">
                            <i class="c-chart__legend-icon u-bg-pink"></i>Businesses 
                          </span>
                        </div>
                      </div>
                    
                      
                    </div>
                    
                  </div>
                </div>
                
              </div>
  
              <div class="col-xl-4">
                <div class="c-card" data-mh="overview-cards">
                  <h4>Sales</h4>
                  <p class="u-mb-medium">Lorem ipsum dolor sit amet, consectetur.</p>
  
                  <div class="c-chart">
                    <div class="c-chart__body">
  
                      <!-- Chartist.js uses this class to generate the chart -->
                      <div class="overlapp-bars-chart"></div>
                    </div>
                    
                    <div class="c-chart__legends">
                      <div class="row">
                        <div class="col-6">
                          <span class="c-text--subtitle u-block">Best Month</span>
                          <span class="u-h2">2500 <i class="feather icon-trending-down u-color-danger"></i></span>
                        </div>
                        
                        <div class="col-6">
                          <span class="c-text--subtitle u-block">Best Day</span>
                          <span class="u-h2">420 <i class="feather icon-trending-up u-color-success"></i></span>
                        </div>
                      </div>
                    
                    </div>
                    
                  </div>
                </div>
                
              </div>
  
              <div class="col-xl-4">
                <div class="c-card" data-mh="overview-cards">
                  <h4>Recent Surveys</h4>
                  <p class="u-mb-medium">Lorem ipsum dolor sit amet, elit.</p>
  
                  <div class="o-line u-pb-small u-mb-small u-border-bottom">
                    <div class="o-media">
                      <div class="o-media__img u-mr-small">
                        <div class="c-avatar c-avatar--xsmall">
                          <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Name">
                        </div>
                      </div>
  
                      <div class="o-media__body">
                        <h6>Justine Henderson</h6>
                        <p>Blink Inc.</p>
                      </div>
                    </div>
  
                    <h6>$5415
                      <span class="u-color-success u-block">
                        <i class="feather icon-trending-up"></i>
                      </span>
                    </h6>
                  </div>
  
                  <div class="o-line u-pb-small u-mb-small u-border-bottom">
                    <div class="o-media">
                      <div class="o-media__img u-mr-small">
                        <div class="c-avatar c-avatar--xsmall">
                          <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Name">
                        </div>
                      </div>
  
                      <div class="o-media__body">
                        <h6>Waylon Dalton</h6>
                        <p>Pulse ltd</p>
                      </div>
                    </div>
  
                    <h6>$1520 
                      <span class="u-color-danger u-block">
                        <i class="feather icon-trending-down"></i>
                      </span>
                    </h6>
                  </div>
  
                  <div class="o-line">
                    <div class="o-media">
                      <div class="o-media__img u-mr-small">
                        <div class="c-avatar c-avatar--xsmall">
                          <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Name">
                        </div>
                      </div>
  
                      <div class="o-media__body">
                        <h6>Angela Walker</h6>
                        <p>Contractor Inc.</p>
                      </div>
                    </div>
  
                    <h6>$4240 
                      <span class="u-color-success u-block">
                        <i class="feather icon-trending-up"></i>
                      </span>
                    </h6>
                  </div>
              
                </div>
              </div>
            </div>
  
    

          </div><!-- // .container -->
  

    </div>
  </main>
</div>
<script src="../js/neat.min.js?v=1.0"></script>
@endsection
