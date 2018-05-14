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
            <div class="col-md-4">

              <div class="c-field u-mb-small">
                <label class="c-field__label">Search for surveys</label>
                <input class="c-input"  placeholder="Try Pepsi" required>
              </div>
            </div>

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

          <div class = "col-md-2">
          </br><button class="c-btn c-btn--fullwidth c-btn--info">Search</button>
           </div>


        </div>

          

          </div>

          <div class="row">
            <div class="col-12">
              <div class="c-table-responsive@wide">
                <table class="c-table">
                  
                  <thead class="c-table__head">
                    <tr class="c-table_row">
                        <th class="c-table__cell c-table__cell--head">Recommended for you</th>
                    </tr> 
                    <tr class="c-table__row">
                      <th class="c-table__cell c-table__cell--head">Survey Name</th>
                      <th class="c-table__cell c-table__cell--head">Category</th>
                      <th class="c-table__cell c-table__cell--head">Interactions</th>
                      <th class="c-table__cell c-table__cell--head">Exp.Date</th>
                      <th class="c-table__cell c-table__cell--head">Actions</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr class="c-table__row">
                      <td class="c-table__cell">
                        <div class="o-media">
                          <div class="o-media__img u-mr-xsmall">
                            <div class="c-avatar c-avatar--small">
                              <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Jessica Alba">
                            </div>
                          </div>
                          <div class="o-media__body">
                            <h6>Adam Sandler</h6>
                            <p>Graphic Designer</p>
                          </div>
                        </div>
                      </td>
                      <td class="c-table__cell">Pinterest</td>
                      <th class="c-table__cell">223</th>
                      <td class="c-table__cell">19-11-2018</td>
                       <td class="c-table__cell">
                          <button class="c-btn c-btn--fullwidth c-btn--info">Take Survey</button>
                      </td>
                    </tr>

                    <tr class="c-table__row">
                      <td class="c-table__cell">
                        <div class="o-media">
                          <div class="o-media__img u-mr-xsmall">
                            <div class="c-avatar c-avatar--small">
                              <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Jessica Alba">
                            </div>
                          </div>
                          <div class="o-media__body">
                            <h6>Adam Sandler</h6>
                            <p>Copy Writer</p>
                          </div>
                        </div>
                      </td>
                      <td class="c-table__cell">Facebook</td>
                      <th class="c-table__cell">134</th>
                      <td class="c-table__cell">28-2-2018</td>
                      
                      <td class="c-table__cell">
                          <button class="c-btn c-btn--fullwidth c-btn--info">Take Survey</button>
                      </td>
                    </tr>

                    <tr class="c-table__row">
                      <td class="c-table__cell">
                        <div class="o-media">
                          <div class="o-media__img u-mr-xsmall">
                            <div class="c-avatar c-avatar--small">
                              <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Jessica Alba">
                            </div>
                          </div>
                          <div class="o-media__body">
                            <h6>Adam Sandler</h6>
                            <p>Marketing Dir.</p>
                          </div>
                        </div>
                      </td>
                      <td class="c-table__cell">Spotify</td>
                      <th class="c-table__cell">165</th>
                      <td class="c-table__cell">17-8-2018</td>
                      
                      <td class="c-table__cell">
                          <button class="c-btn c-btn--fullwidth c-btn--info">Take Survey</button>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div><!-- // .container -->
  </main>
</div>
@endsection