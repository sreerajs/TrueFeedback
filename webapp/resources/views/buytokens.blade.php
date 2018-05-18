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
                  <th class="c-table__cell c-table__cell--head">Purchase Feedback Token</th>

                </tr>
              </thead>

              <tbody>

                <tr class="c-table__row">
                  <td class="c-table__cell">
                    <h4>Value : <span style="color:grey">1 ETH = 1000 Feedback Tokens</span></h4>
                  </td>
                </tr>

                <tr class="c-table__row">

                  <td class="c-table__cell">
                    <div class="c-field u-mb-small">
                      <label class="c-field__label">ETH</label>
                      <input class="c-input" placeholder="0.00" id="eth-value" name="eth-value" type="text" size="30">
                    </div>
                  </td>



                  <td class="c-table__cell">
                    <div class="c-field u-mb-small">
                      <label class="c-field__label">Feedback Token</label>
                      <input class="c-input" placeholder="0.00" id="ft-value" name="ft-value" type="text" size="50">
                    </div>
                  </td>



                  <td class="c-table__cell">
                    <div class="c-dropdown dropdown">
                      <!--Link the purchase token feature here-->
                      <a href="#" class="c-btn c-btn--info">
                          Buy Feedback Tokens
                        </a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>


            <table class="c-table">
              <thead class="c-table__head">
                <tr class="c-table__row">
                  <th class="c-table__cell c-table__cell--head">OR transfer ETH to get Feedback Tokens</th>

                </tr>
              </thead>
              <tbody>
                <tr class="c-table_row">
                  <td class="c-table__cell">
                    <div class="c-field u-mb-small">
                      <label class="c-field__label">Enter ETH to send</label>
                      <input class="c-input" placeholder="0.00" required>
                      <span> The ETH will be deposited to your wallet in 24 hours. Contact support if your wallet has not been
                          credited with the correct amount of Feedback Tokens</span>
                    </div>
                  </td>

                  <td class="c-table__cell">
                    <div class="c-dropdown dropdown">
                      <!--Link the send feature here-->
                      <a href="#" class="c-btn c-btn--warning">
                        Send ETH
                      </a>
                    </div>
                  </td>
                </tr>

              </tbody>

            </table>




          </div>

          <br />
          <br />
          <!--
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
          -->
        </div>
      </div>
    </div>
    <!-- // .container -->

        <script type="text/javascript">
        $(document).ready(function()
        {
            function updateToken()
            {
                var price = parseFloat($("#eth-value").val());
                var total = price*1000 || 0.00;
                var total = total.toFixed(2) || 0.00;
                $("#ft-value").val(total);
            }

            function updateETH()
            {
                var price = parseFloat($("#ft-value").val());
                var total = price/1000 || 0.00;
                var total = total.toFixed(3);
                $("#eth-value").val(total);
            }
            $(document).on("change, keyup", "#eth-value", updateToken);
            $(document).on("change, keyup", "#ft-value", updateETH);
        });

            </script>
    @endsection
