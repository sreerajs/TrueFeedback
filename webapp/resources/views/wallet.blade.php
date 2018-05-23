@extends('layouts.template') @section('title', 'Rewards') @section('body_content')
<div class="o-page">
  @include('layouts.sidebar') @role('User') @yield('user_sidebar') @endrole @role('Business') @yield('business_sidebar') @endrole
  <main class="o-page__content">
    @include('layouts.header') @role('User') @yield('user_header') @endrole @role('Business') @yield('business_header') @endrole

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

                  @if ($dataArray['user']->account_type == 'Business')
                  <td class="c-table__cell">
                    <h3> ETH Balance : <span style="color: green">{{$dataArray['user']->eth_token_balance}}</span> </h3>
                  </td>
                  @else @endif

                </tr>


                <tr class="c-table__row">

                  <td class="c-table__cell">
                    <div class="c-dropdown dropdown">
                      @if ($dataArray['user']->account_type == 'Business')
                      <a href="/business/buytokens" class="c-btn c-btn--info">
                          Buy Feedback Tokens
                        </a> @else
                      <a href="#" class="c-btn c-btn--info">
                          Redeem Feedback Tokens
                        </a> @endif
                  </td>

                  <td class="c-table__cell">
                    <div class="c-dropdown dropdown">
                      <input type="button" class="c-btn c-btn--info" id="btn" value="View Wallet Information">
                    </div>
                  </td>
                </tr>


              </tbody>
            </table>
            </div>
          </div>

        </div>

        <br />

        <div class="row" id="Create" style="display:none">
          <div class="col-xl-12">
            <div class="c-card">
              <h2 style="color: blue"> Wallet Information </h2>
              <br />
              <h4> Wallet Address : <span style="font-weight: bold">{{$dataArray['user']->wallet_address}}</span> </h4>
              <br />
              <a href="/wallet_menu" class="c-btn c-btn--info">
                Modify Wallet Info
              </a>
            </div>
          </div>
        </div>


        <br />

        <div class="row">
          <div class="col-xl-12">
            <div class="c-table-responsive@wide">
              <table class="c-table">
                <thead class="c-table__head">
                  <tr class="c-table__row">
                    <th class="c-table__cell c-table__cell--head">TxHash</th>
                    <th class="c-table__cell c-table__cell--head">Block</th>
                    <th class="c-table__cell c-table__cell--head">Age</th>
                    <th class="c-table__cell c-table__cell--head">From</th>
                    <th class="c-table__cell c-table__cell--head">Type</th>
                    <th class="c-table__cell c-table__cell--head">Value</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="c-table__row">
                    <td class="c-table__cell">
                      0xe3309e8ca0ff0..
                    </td>
                    <td class="c-table__cell">5590620</td>
                    <th class="c-table__cell">31 secs ago</th>
                    <td class="c-table__cell">0x91c880a72..</td>
                    <td class="c-table__cell">Ether</td>
                    <td class="c-table__cell">0.015</td>
                  </tr>

                  <tr class="c-table__row">
                    <td class="c-table__cell">
                      0xe3309e8ca0ff0..
                    </td>
                    <td class="c-table__cell">5590620</td>
                    <th class="c-table__cell">52 secs ago</th>
                    <td class="c-table__cell">0x91c880a72..</td>
                    <td class="c-table__cell">Feedback Token</td>
                    <td class="c-table__cell">2</td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- // .container -->

    <script type="text/javascript">
      $(document).ready(function() {
        $("#btn").click(function() {
          $("#Create").toggle();
        });
      });
    </script>

    @endsection
