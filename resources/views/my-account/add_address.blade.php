
@extends('layouts.master')

@section('content')

@include('partials.breadcrumb', ['details'=> 'My account', 'url' => 'Orders'])
<!-- Checkout Order Page Started -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="page_section">
    <div class="container largeContainer">
    <div class="row">
        <div class="col-lg-12">
        <div class="sic_the_content clearfix">
            <div class="woocommerce woocommerce-account" id="my-accountWocommnerce">
            <nav class="woocommerce-MyAccount-navigation">
                <ul>
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard ">
                        <a href="{{url('account')}}">Dashboard</a>
                    </li>
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                        <a href="{{url('recent_orders')}}">Orders</a>
                    </li>
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address is-active">
                        <a href="{{url('addressess')}}">Addresses</a>
                    </li>
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                        <a href="{{url('account_details')}}">Account details</a>
                    </li>
                    @if(auth()->user())
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                        <a href="{{url('logout')}}">Logout</a>
                    </li>
                    @endif
                </ul>
            </nav>
            <div class="woocommerce-MyAccount-content">
            <div class="woocommerce-notices-wrapper"></div>
            <p>
                The following addresses will be used on the checkout page by default.
            </p>
            <form name="checkout" method="post" class="checkout woocommerce-checkout row" action="{{url('store_address')}}" enctype="multipart/form-data" novalidate="novalidate">
                               @csrf
                               <div class="col-lg-6 col-xl-6 col-md-12" id="customer_details">
                                  <div class="col-lg-12 noPadding">
                                     <div class="woocommerce-billing-fields">
                                        <h3>{{ucwords(Request::get('type'))}} details</h3>
                                        <div class="woocommerce-billing-fields__field-wrapper">
                                           <p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10"><label for="billing_first_name" class="screen-reader-text">First name *&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper">
                                             <input type="text" class="input-text " name="first_name" id="billing_first_name" placeholder="First name *" value="{{$address->first_name ?? ''}}" autocomplete="given-name"></span></p>
                                           <p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20"><label for="billing_last_name" class="screen-reader-text">Last name *&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper">
                                             <input type="text" class="input-text " name="last_name" id="billing_last_name" placeholder="Last name *" value="{{$address->last_name ?? ''}}" autocomplete="family-name"></span></p>
                                           <p class="form-row form-row-wide" id="billing_company_field" data-priority="30">
                                             <label for="billing_company" class="screen-reader-text">Company name&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper">
                                                <input type="text" class="input-text " name="company_name" id="billing_company" placeholder="Company name" value="{{$address->company_name ?? ''}}" autocomplete="organization"></span></p>
                                           <p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40">
                                              <label for="billing_country" class="screen-reader-text">Country / Region *&nbsp;<abbr class="required" title="required">*</abbr></label>
                                              <span class="woocommerce-input-wrapper">
                                                 <select name="country" id="billing_country" class="country_to_state select-box" autocomplete="country" data-placeholder="Country / Region *" data-label="Country / Region *" tabindex="-1" aria-hidden="true">
                                                    <option value="">Select a country / region…</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="PW">Belau</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="BN">Brunei</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo (Brazzaville)</option>
                                                    <option value="CD">Congo (Kinshasa)</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CW">Curaçao</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard Island and McDonald Islands</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="CI">Ivory Coast</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Laos</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia</option>
                                                    <option value="MD">Moldova</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="KP">North Korea</option>
                                                    <option value="MK">North Macedonia</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PS">Palestinian Territory</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Reunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="BL">Saint Barthélemy</option>
                                                    <option value="SH">Saint Helena</option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="SX">Saint Martin (Dutch part)</option>
                                                    <option value="MF">Saint Martin (French part)</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">São Tomé and Príncipe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia/Sandwich Islands</option>
                                                    <option value="KR">South Korea</option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syria</option>
                                                    <option value="TW">Taiwan</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-Leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom (UK)</option>
                                                    <option value="US">United States (US)</option>
                                                    <option value="UM">United States (US) Minor Outlying Islands</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VA">Vatican</option>
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Vietnam</option>
                                                    <option value="VG">Virgin Islands (British)</option>
                                                    <option value="VI">Virgin Islands (US)</option>
                                                    <option value="WF">Wallis and Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                 </select>
                                                 <!-- <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-label="Country / Region *" role="combobox"><span class="select2-selection__rendered" id="select2-billing_country-container" role="textbox" aria-readonly="true" title="United States (US)">United States (US)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                                <noscript><button type="submit" name="woocommerce_checkout_update_totals" value="Update country / region">Update country / region</button></noscript></span></p>
                                                <p class="form-row address-field validate-required form-row-wide" id="billing_address_1_field" data-priority="50"><label for="billing_address_1" class="screen-reader-text">Street address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="address_street_name" id="billing_address_1" placeholder="House number and street name" value="" autocomplete="address-line1" data-placeholder="House number and street name"></span></p>
                                                <p class="form-row address-field form-row-wide" id="billing_address_2_field" data-priority="60"><label for="billing_address_2" class="screen-reader-text">Apartment, suite, unit, etc.&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="address_appartment" id="billing_address_2" placeholder="Apartment, suite, unit, etc. (optional)" value="" autocomplete="address-line2" data-placeholder="Apartment, suite, unit, etc. (optional)"></span></p>
                                                <p class="form-row address-field validate-required form-row-wide" id="billing_city_field" data-priority="70" data-o_class="form-row form-row-wide address-field validate-required"><label for="billing_city" class="screen-reader-text">Town / City&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="city" id="billing_city" placeholder="Town / City *" value="" autocomplete="address-level2"></span></p>
                                                <p class="form-row address-field validate-required validate-state form-row-wide" id="billing_state_field" data-priority="80" data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                              <label for="billing_state" class="screen-reader-text">State&nbsp;<abbr class="required" title="required">*</abbr></label>
                                              <span class="woocommerce-input-wrapper">
                                                 <select name="state" id="billing_state" class="state_select select2-hidden-accessible" autocomplete="address-level1" data-placeholder="State *" data-input-classes="" data-label="State *" tabindex="-1" aria-hidden="true">
                                                    <option value="">Select an option…</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="CA">California</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="DC">District Of Columbia</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WA">Washington</option>
                                                    <option value="WV">West Virginia</option>
                                                    <option value="WI">Wisconsin</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AA">Armed Forces (AA)</option>
                                                    <option value="AE">Armed Forces (AE)</option>
                                                    <option value="AP">Armed Forces (AP)</option>
                                                 </select>
                                                 <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-label="State *" role="combobox"><span class="select2-selection__rendered" id="select2-billing_state-container" role="textbox" aria-readonly="true" title="California">California</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                              </span>
                                           </p>
                                           <p class="form-row address-field validate-required validate-postcode form-row-wide" id="billing_postcode_field" data-priority="90" data-o_class="form-row form-row-wide address-field validate-required validate-postcode"><label for="billing_postcode" class="screen-reader-text">ZIP Code&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="zip_code" id="billing_postcode" placeholder="ZIP Code *" value="{{$address->zip_code ?? ''}}" autocomplete="postal-code"></span></p>
                                           <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100"><label for="billing_phone" class="screen-reader-text">Phone *&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="mobile" id="billing_phone" placeholder="Phone *" value="" autocomplete="tel"></span></p>
                                           <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110"><label for="billing_email" class="screen-reader-text">Email address *&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="email" class="input-text " name="email" id="billing_email" placeholder="Email address *" value="{{$address->email ?? ''}}" autocomplete="email username"></span></p>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="form-row place-order">
                                    <input type="hidden" name="type" value="{{Request::get('type')}}">
                                    <div class="woocommerce-terms-and-conditions-wrapper">
                                    </div>
                                    <button type="submit" class="button alt"  id="store_address" value="Place order" data-value="store_address">Save Address</button>
                                </div>
                               </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection
      <!-- Checkout Order Page Ended -->
