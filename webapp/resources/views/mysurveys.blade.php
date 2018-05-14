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
                      <th class="c-table__cell c-table__cell--head">Contract</th>
                      <th class="c-table__cell c-table__cell--head">Catagory</th>
                      <th class="c-table__cell c-table__cell--head">Interactions</th>
                      <th class="c-table__cell c-table__cell--head">Date</th>
                      <th class="c-table__cell c-table__cell--head">Tags</th>
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
                        <a class="c-badge c-badge--small c-badge--info" href="#">sketch</a>
                        <a class="c-badge c-badge--small c-badge--info" href="#">ui</a>
                        <a class="c-badge c-badge--small c-badge--fancy" href="#">ux</a>
                      </td>
                      <td class="c-table__cell">
                        <div class="c-dropdown dropdown">
                          <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More <i class="feather icon-chevron-down"></i>
                          </a>

                          <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable1">
                            <a class="c-dropdown__item dropdown-item" href="#">Deploy</a>
                            <a class="c-dropdown__item dropdown-item" href="#">Delete</a>
                            <a class="c-dropdown__item dropdown-item" href="#">Archive</a>
                          </div>
                        </div>
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
                        <a class="c-badge c-badge--small c-badge--warning" href="#">research</a>
                        <a class="c-badge c-badge--small c-badge--success" href="#">docs</a>
                      </td>
                      <td class="c-table__cell">
                        <div class="c-dropdown dropdown">
                          <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More <i class="feather icon-chevron-down"></i>
                          </a>

                          <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable2">
                            <a class="c-dropdown__item dropdown-item" href="#">Link One</a>
                            <a class="c-dropdown__item dropdown-item" href="#">Link Two</a>
                            <a class="c-dropdown__item dropdown-item" href="#">Link Three</a>
                          </div>
                        </div>
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
                        <a class="c-badge c-badge--small c-badge--fancy" href="#">marketing</a>
                        <a class="c-badge c-badge--small c-badge--info" href="#">seo</a>
                      </td>
                      <td class="c-table__cell">
                        <div class="c-dropdown dropdown">
                          <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More <i class="feather icon-chevron-down"></i>
                          </a>

                          <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable3">
                            <a class="c-dropdown__item dropdown-item" href="#">Link One</a>
                            <a class="c-dropdown__item dropdown-item" href="#">Link Two</a>
                            <a class="c-dropdown__item dropdown-item" href="#">Link Three</a>
                          </div>
                        </div>
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