@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-8 col-md-offset-2" style="margin-top: 150px">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-md-12">
          <h2 class="text-center">Apply for full property management</h2>
          <br/>
          <form novalidate="novalidate" class="simple_form new_full_property_management_application" id="new_full_property_management_application" 
            action="{{ url('/get-started/get-info') }}" />
            <div class="form-group string required full_property_management_application_name"><label class="control-label string required" for="full_property_management_application_name"><abbr title="required"></abbr> <span class="translation_missing" title="translation missing: en-uk.hosts.full_property_management_applications.new.name, current_city: London">Name</span></label><input class="form-control string required" autofocus="autofocus" type="text" name="full_property_management_application_name" id="full_property_management_application_name" /></div>
            <div class="form-group email required full_property_management_application_email"><label class="control-label email required" for="full_property_management_application_email"><abbr title="required"></abbr> <span class="translation_missing" title="translation missing: en-uk.hosts.full_property_management_applications.new.email, current_city: London">Email</span></label><input class="form-control string email required" type="email" name="full_property_management_application_email" id="full_property_management_application_email" /></div>
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group phone required full_property_management_application_mobile_phone"><label class="control-label phone required" for="full_property_management_application_mobile_phone">
                <abbr title="required"></abbr> 
                <span class="translation_missing" title="translation missing: en-uk.hosts.full_property_management_applications.new.mobile_phone, current_city: London">Mobile Phone</span></label>
                <input class="form-control string phone required" type="tel" name="full_property_management_application_mobile_phone" id="full_property_management_application_mobile_phone_national_format" data-hidden-input-id="full_property_management_application_mobile_phone" />
              </div>
              <div class="col-md-6">
                <div class="form-group string required full_property_management_application_postcode"><label class="control-label string required" for="full_property_management_application_postcode"><abbr title="required"></abbr> <span class="translation_missing" title="translation missing: en-uk.hosts.full_property_management_applications.new.postcode, current_city: London">Postcode</span></label><input class="form-control string required" type="text" name="full_property_management_application_postcode" id="full_property_management_application_postcode" /></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group select required full_property_management_application_city_name">
                    <label class="control-label select required" for="full_property_management_application_city_name">
                    <abbr title="required"></abbr> City</label><select class="form-control select required" name="full_property_management_application_city" id="full_property_management_application_city_name"><option value="">Select a city</option>
                    <option value="London">London</option>
                    <option value="Paris">Paris</option>
                    <option value="Amsterdam">Amsterdam</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Dubai">Dubai</option>
                    <option value="Madrid">Madrid</option>
                    <option value="Lisbon">Lisbon</option>
                    <option value="Rome">Rome</option>
                    <option value="Brighton">Brighton</option>
                    <option value="Edinburgh">Edinburgh</option>
                    <option value="Manchester">Manchester</option>
                    <option value="Liverpool">Liverpool</option>
                    <option value="Bristol">Bristol</option>
                    <option value="Oxford">Oxford</option>
                    <option value="Cambridge">Cambridge</option>
                    <option value="Nice">Nice</option>
                    <option value="Cannes">Cannes</option>
                    <option value="Lyon">Lyon</option></select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group country required full_property_management_application_country_code">
                <label class="control-label country required" for="full_property_management_application_country_code">
                <abbr title="required"></abbr> Country</label>
                <select class="form-control country required" name="full_property_management_application_country_code" id="full_property_management_application_country_code"><option value="">Select a country</option>
                <option value="GB">United Kingdom</option>
                <option disabled="disabled" value="---------------">---------------</option>
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
                <option value="BE">Belgium</option>
                <option value="BZ">Belize</option>
                <option value="BJ">Benin</option>
                <option value="BM">Bermuda</option>
                <option value="BT">Bhutan</option>
                <option value="BO">Bolivia, Plurinational State of</option>
                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                <option value="BA">Bosnia and Herzegovina</option>
                <option value="BW">Botswana</option>
                <option value="BV">Bouvet Island</option>
                <option value="BR">Brazil</option>
                <option value="IO">British Indian Ocean Territory</option>
                <option value="BN">Brunei Darussalam</option>
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
                <option value="CG">Congo</option>
                <option value="CD">Congo, The Democratic Republic of the</option>
                <option value="CK">Cook Islands</option>
                <option value="CR">Costa Rica</option>
                <option value="CI">Côte d&#39;Ivoire</option>
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
                <option value="FK">Falkland Islands (Malvinas)</option>
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
                <option value="VA">Holy See (Vatican City State)</option>
                <option value="HN">Honduras</option>
                <option value="HK">Hong Kong</option>
                <option value="HU">Hungary</option>
                <option value="IS">Iceland</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IR">Iran, Islamic Republic of</option>
                <option value="IQ">Iraq</option>
                <option value="IE">Ireland</option>
                <option value="IM">Isle of Man</option>
                <option value="IL">Israel</option>
                <option value="IT">Italy</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Japan</option>
                <option value="JE">Jersey</option>
                <option value="JO">Jordan</option>
                <option value="KZ">Kazakhstan</option>
                <option value="KE">Kenya</option>
                <option value="KI">Kiribati</option>
                <option value="KP">Korea, Democratic People&#39;s Republic of</option>
                <option value="KR">Korea, Republic of</option>
                <option value="KW">Kuwait</option>
                <option value="KG">Kyrgyzstan</option>
                <option value="LA">Lao People&#39;s Democratic Republic</option>
                <option value="LV">Latvia</option>
                <option value="LB">Lebanon</option>
                <option value="LS">Lesotho</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libya</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lithuania</option>
                <option value="LU">Luxembourg</option>
                <option value="MO">Macao</option>
                <option value="MK">Macedonia, Republic of</option>
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
                <option value="FM">Micronesia, Federated States of</option>
                <option value="MD">Moldova, Republic of</option>
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
                <option value="MP">Northern Mariana Islands</option>
                <option value="NO">Norway</option>
                <option value="OM">Oman</option>
                <option value="PK">Pakistan</option>
                <option value="PW">Palau</option>
                <option value="PS">Palestine, State of</option>
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
                <option value="RE">Réunion</option>
                <option value="RO">Romania</option>
                <option value="RU">Russian Federation</option>
                <option value="RW">Rwanda</option>
                <option value="BL">Saint Barthélemy</option>
                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="KN">Saint Kitts and Nevis</option>
                <option value="LC">Saint Lucia</option>
                <option value="MF">Saint Martin (French part)</option>
                <option value="PM">Saint Pierre and Miquelon</option>
                <option value="VC">Saint Vincent and the Grenadines</option>
                <option value="WS">Samoa</option>
                <option value="SM">San Marino</option>
                <option value="ST">Sao Tome and Principe</option>
                <option value="SA">Saudi Arabia</option>
                <option value="SN">Senegal</option>
                <option value="RS">Serbia</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leone</option>
                <option value="SG">Singapore</option>
                <option value="SX">Sint Maarten (Dutch part)</option>
                <option value="SK">Slovakia</option>
                <option value="SI">Slovenia</option>
                <option value="SB">Solomon Islands</option>
                <option value="SO">Somalia</option>
                <option value="ZA">South Africa</option>
                <option value="GS">South Georgia and the South Sandwich Islands</option>
                <option value="SS">South Sudan</option>
                <option value="ES">Spain</option>
                <option value="LK">Sri Lanka</option>
                <option value="SD">Sudan</option>
                <option value="SR">Suriname</option>
                <option value="SJ">Svalbard and Jan Mayen</option>
                <option value="SZ">Swaziland</option>
                <option value="SE">Sweden</option>
                <option value="CH">Switzerland</option>
                <option value="SY">Syrian Arab Republic</option>
                <option value="TW">Taiwan</option>
                <option value="TJ">Tajikistan</option>
                <option value="TZ">Tanzania, United Republic of</option>
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
                <option value="GB">United Kingdom</option>
                <option value="UM">United States Minor Outlying Islands</option>
                <option value="US">United States</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekistan</option>
                <option value="VU">Vanuatu</option>
                <option value="VE">Venezuela, Bolivarian Republic of</option>
                <option value="VN">Viet Nam</option>
                <option value="VG">Virgin Islands, British</option>
                <option value="VI">Virgin Islands, U.S.</option>
                <option value="WF">Wallis and Futuna</option>
                <option value="EH">Western Sahara</option>
                <option value="YE">Yemen</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabwe</option></select></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group select required full_property_management_application_bedrooms_count">
                <label class="control-label select required" for="full_property_management_application_bedrooms_count">
                <abbr title="required"></abbr> Number of bedrooms</label>
                <select class="form-control select required" name="full_property_management_application_bedrooms_count" id="full_property_management_application_bedrooms_count"><option selected="selected" value="0">Studio</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                </div>
            </div>
              <div class="col-md-6">
                <div class="form-group select required full_property_management_application_bathrooms_count">
                <label class="control-label select required" for="full_property_management_application_bathrooms_count">
                <abbr title="required"></abbr> Number of bathrooms</label><select class="form-control select required" name="full_property_management_application_bathrooms_count" id="full_property_management_application_bathrooms_count"><option value="0">0</option>
                    <option selected="selected" value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                </div>
              </div>
            </div>
            <div class="actions">
              <input type="submit" name="commit" value="Apply" class="btn btn-lg btn-block btn-primary" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;Buttons&#39;, &#39;clicked&#39;, &#39;Full Management Request london&#39;);" data-disable-with="Apply" />
            </div>
        </form>        
        </div>
      </div>
    </div>
  </div>
</div>
@endsection