@extends('layouts.template')
@section('title', 'Register')
@section('body_content')
<div class="o-page o-page--center">
  <!-- System Error Handling -->
  @if ($errors->any())
  @php
  $alertMessage = '';
  @endphp
  @foreach ($errors->all() as $error)
    @php
    $alertMessage .= $error.",";
    @endphp
  @endforeach
  @php
   $alertMessage = rtrim($alertMessage,",");
  @endphp
  @include('layouts.alert-messages',['alertMessage'=>$alertMessage])
  @yield('alert_system_error')
  @endif
  <!-- System Error Handling -->
  <!-- Success Message Handling -->
  @if (session('success'))
  @include('layouts.alert-messages',['alertMessage'=>session('success')])
  @yield('alert_success')
  @endif
  <!-- Success Message Handling -->
  <div class="o-page__card">
    <div class="c-card c-card--center">
      <span class="c-icon c-icon--large u-mb-small">
        <img src="img/logo-small.png" width="16" alt="Bytacoin">
      </span>

      <h4 class="u-mb-medium">Register to Get Started</h4>
      <form action="register" method="post" id="formRegister">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="c-field">
      <label class="c-field__label">First Name</label>
      <input class="c-input u-mb-small" type="text" id="first_name" name="first_name" placeholder="e.g. Adam">
      </div>

    <div class="c-field">
      <label class="c-field__label">Last Name</label>
      <input class="c-input u-mb-small" type="text" id="last_name" name="last_name" placeholder="e.g. Sandler">
    </div>

        <div class="c-field">
          <label class="c-field__label">Email Address</label>
         <input class="c-input u-mb-small" type="email" id="email_address" name="email_address" placeholder="e.g. adam@google.com">
        </div>

        <div class="c-field u-mb-small">
          <label class="c-field__label">Country</label>
          <div class="c-select">
            <select class="c-select__input" type="country" id="country" name="country" placeholder="Australia">
              <option>Afghanistan </option>   
              <option>land Islands </option>   
              <option>Albania </option>   
              <option>Algeria </option>   
              <option>American Samoa </option>   
              <option>AndorrA </option>   
              <option>Angola </option>   
              <option>Anguilla </option>   
              <option>Antarctica </option>   
              <option>Antigua and Barbuda </option>   
              <option>Argentina </option>   
              <option>Armenia </option>   
              <option>Aruba </option>   
              <option>Australia </option>   
              <option>Austria </option>   
              <option>Azerbaijan </option>   
              <option>Bahamas </option>   
              <option>Bahrain </option>   
              <option>Bangladesh </option>   
              <option>Barbados </option>   
              <option>Belarus </option>   
              <option>Belgium </option>   
              <option>Belize </option>   
              <option>Benin </option>   
              <option>Bermuda </option>   
              <option>Bhutan </option>   
              <option>Bolivia </option>   
              <option>Bosnia and Herzegovina </option>   
              <option>Botswana </option>   
              <option>Bouvet Island </option>   
              <option>Brazil </option>   
              <option>British Indian Ocean Territory </option>   
              <option>Brunei Darussalam </option>   
              <option>Bulgaria </option>   
              <option>Burkina Faso </option>   
              <option>Burundi </option>   
              <option>Cambodia </option>   
              <option>Cameroon </option>   
              <option>Canada </option>   
              <option>Cape Verde </option>   
              <option>Cayman Islands </option>   
              <option>Central African Republic </option>   
              <option>Chad </option>   
              <option>Chile </option>   
              <option>China </option>   
              <option>Christmas Island </option>   
              <option>Cocos (Keeling) Islands </option>   
              <option>Colombia </option>   
              <option>Comoros </option>   
              <option>Congo </option>   
              <option>Congo, The Democratic Republic of the </option>   
              <option>Cook Islands </option>   
              <option>Costa Rica </option>   
              <option>Cote D\"Ivoire </option>   
              <option>Croatia </option>   
              <option>Cuba </option>   
              <option>Cyprus </option>   
              <option>Czech Republic </option>   
              <option>Denmark </option>   
              <option>Djibouti </option>   
              <option>Dominica </option>   
              <option>Dominican Republic </option>   
              <option>Ecuador </option>   
              <option>Egypt </option>   
              <option>El Salvador </option>   
              <option>Equatorial Guinea </option>   
              <option>Eritrea </option>   
              <option>Estonia </option>   
              <option>Ethiopia </option>   
              <option>Falkland Islands (Malvinas) </option>   
              <option>Faroe Islands </option>   
              <option>Fiji </option>   
              <option>Finland </option>   
              <option>France </option>   
              <option>French Guiana </option>   
              <option>French Polynesia </option>   
              <option>French Southern Territories </option>   
              <option>Gabon </option>   
              <option>Gambia </option>   
              <option>Georgia </option>   
              <option>Germany </option>   
              <option>Ghana </option>   
              <option>Gibraltar </option>   
              <option>Greece </option>   
              <option>Greenland </option>   
              <option>Grenada </option>   
              <option>Guadeloupe </option>   
              <option>Guam </option>   
              <option>Guatemala </option>   
              <option>Guernsey </option>   
              <option>Guinea </option>   
              <option>Guinea-Bissau </option>   
              <option>Guyana </option>   
              <option>Haiti </option>   
              <option>Heard Island and Mcdonald Islands </option>   
              <option>Holy See (Vatican City State) </option>   
              <option>Honduras </option>   
              <option>Hong Kong </option>   
              <option>Hungary </option>   
              <option>Iceland </option>   
              <option>India </option>   
              <option>Indonesia </option>   
              <option>Iran, Islamic Republic Of </option>   
              <option>Iraq </option>   
              <option>Ireland </option>   
              <option>Isle of Man </option>   
              <option>Israel </option>   
              <option>Italy </option>   
              <option>Jamaica </option>   
              <option>Japan </option>   
              <option>Jersey </option>   
              <option>Jordan </option>   
              <option>Kazakhstan </option>   
              <option>Kenya </option>   
              <option>Kiribati </option>   
              <option>Korea, Democratic People\"S Republic of </option>   
              <option>Korea, Republic of </option>   
              <option>Kuwait </option>   
              <option>Kyrgyzstan </option>   
              <option>Lao People\"S Democratic Republic </option>   
              <option>Latvia </option>   
              <option>Lebanon </option>   
              <option>Lesotho </option>   
              <option>Liberia </option>   
              <option>Libyan Arab Jamahiriya </option>   
              <option>Liechtenstein </option>   
              <option>Lithuania </option>   
              <option>Luxembourg </option>   
              <option>Macao </option>   
              <option>Macedonia, The Former Yugoslav Republic of </option>   
              <option>Madagascar </option>   
              <option>Malawi </option>   
              <option>Malaysia </option>   
              <option>Maldives </option>   
              <option>Mali </option>   
              <option>Malta </option>   
              <option>Marshall Islands </option>   
              <option>Martinique </option>   
              <option>Mauritania </option>   
              <option>Mauritius </option>   
              <option>Mayotte </option>   
              <option>Mexico </option>   
              <option>Micronesia, Federated States of </option>   
              <option>Moldova, Republic of </option>   
              <option>Monaco </option>   
              <option>Mongolia </option>   
              <option>Montenegro </option>  
              <option>Montserrat </option>  
              <option>Morocco </option>   
              <option>Mozambique </option>   
              <option>Myanmar </option>   
              <option>Namibia </option>   
              <option>Nauru </option>   
              <option>Nepal </option>   
              <option>Netherlands </option>   
              <option>Netherlands Antilles </option>   
              <option>New Caledonia </option>   
              <option>New Zealand </option>   
              <option>Nicaragua </option>   
              <option>Niger </option>   
              <option>Nigeria </option>   
              <option>Niue </option>   
              <option>Norfolk Island </option>   
              <option>Northern Mariana Islands </option>   
              <option>Norway </option>   
              <option>Oman </option>   
              <option>Pakistan </option>   
              <option>Palau </option>   
              <option>Palestinian Territory, Occupied </option>   
              <option>Panama </option>   
              <option>Papua New Guinea </option>   
              <option>Paraguay </option>   
              <option>Peru </option>   
              <option>Philippines </option>   
              <option>Pitcairn </option>   
              <option>Poland </option>   
              <option>Portugal </option>   
              <option>Puerto Rico </option>   
              <option>Qatar </option>   
              <option>Reunion </option>   
              <option>Romania </option>   
              <option>Russian Federation </option>   
              <option>RWANDA </option>   
              <option>Saint Helena </option>   
              <option>Saint Kitts and Nevis </option>   
              <option>Saint Lucia </option>   
              <option>Saint Pierre and Miquelon </option>   
              <option>Saint Vincent and the Grenadines </option>   
              <option>Samoa </option>   
              <option>San Marino </option>   
              <option>Sao Tome and Principe </option>   
              <option>Saudi Arabia </option>   
              <option>Senegal </option>   
              <option>Serbia </option>   
              <option>Seychelles </option>   
              <option>Sierra Leone </option>   
              <option>Singapore </option>   
              <option>Slovakia </option>   
              <option>Slovenia </option>   
              <option>Solomon Islands </option>   
              <option>Somalia </option>   
              <option>South Africa </option>   
              <option>South Georgia and the South Sandwich Islands </option>   
              <option>Spain </option>   
              <option>Sri Lanka </option>   
              <option>Sudan </option>   
              <option>Suriname </option>   
              <option>Svalbard and Jan Mayen </option>   
              <option>Swaziland </option>   
              <option>Sweden </option>   
              <option>Switzerland </option>   
              <option>Syrian Arab Republic </option>   
              <option>Taiwan, Province of China </option>   
              <option>Tajikistan </option>   
              <option>Tanzania, United Republic of </option>   
              <option>Thailand </option>   
              <option>Timor-Leste </option>   
              <option>Togo </option>   
              <option>Tokelau </option>   
              <option>Tonga </option>   
              <option>Trinidad and Tobago </option>   
              <option>Tunisia </option>   
              <option>Turkey </option>   
              <option>Turkmenistan </option>   
              <option>Turks and Caicos Islands </option>   
              <option>Tuvalu </option>   
              <option>Uganda </option>   
              <option>Ukraine </option>   
              <option>United Arab Emirates </option>   
              <option>United Kingdom </option>   
              <option>United States </option>   
              <option>United States Minor Outlying Islands </option>   
              <option>Uruguay </option>   
              <option>Uzbekistan </option>   
              <option>Vanuatu </option>   
              <option>Venezuela </option>   
              <option>Viet Nam </option>   
              <option>Virgin Islands, British </option>   
              <option>Virgin Islands, U.S. </option>   
              <option>Wallis and Futuna </option>   
              <option>Western Sahara </option>   
              <option>Yemen </option>   
              <option>Zambia </option>   
              <option>Zimbabwe </option>

            </select>
          </div>
        </div>

        <div class="c-field">
          <label class="c-field__label">Date of Birth</label>
          <input class="c-input u-mb-small" type="date" name="datepicker" id="datepicker" placeholder="DD/MM/YYYY">
        </div>

        <div class="c-field u-mb-small">
          <label class="c-field__label">Account Type</label>
          <div class="c-select">
              <select class="c-select__input" type="account" id="account_type" name="account_type" placeholder="User">
              <option>Business</option>
              <option>User</option>
            </select>
          </div>
        </div>

        <div class="c-field">
            <label class="c-field__label">Password</label>
            <input class="c-input u-mb-small" type="password" name="password" id="password" placeholder="Use something complex">
          </div>
  
          <div class="c-field">
            <label class="c-field__label">Confirm Password</label>
            <input class="c-input u-mb-small" type="password" name="password_confirmation" id="password_confirmation" placeholder="Use something complex">
          </div>

     

        <input type="submit" class="c-btn c-btn--fullwidth c-btn--info" value="REGISTER"></input>
      </form>
    </div>
  </div>
</div>

@endsection
