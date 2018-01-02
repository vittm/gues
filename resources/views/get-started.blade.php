@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-8 col-md-offset-2" style="margin-top: 150px">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-md-12">
          <h2 class="text-center"><p class="h1">{{ __('welcome.welcome')}}</p></h2>
          <br/>
          <form id="new_full_property_management_application" 
            action="{{url('/')}}/{{Session::get('website_language', config('app.locale'))}}/{{'get-started/get-info'}}" />
            <div class="form-group string required full_property_management_application_name"><label class="control-label string required" for="full_property_management_application_name"><abbr title="required"></abbr> <span class="translation_missing" title="translation missing: en-uk.hosts.full_property_management_applications.new.name, current_city: London">Name</span></label><input class="form-control string required" autofocus="autofocus" type="text" name="full_property_management_application_name" id="full_property_management_application_name" /><span class="help-block hidden">{{ __('validation.check_input')}}</span></div>
            <div class="form-group email required full_property_management_application_email"><label class="control-label email required" for="full_property_management_application_email"><abbr title="required"></abbr> <span class="translation_missing" title="translation missing: en-uk.hosts.full_property_management_applications.new.email, current_city: London">Email</span></label><input class="form-control string email required" type="email" name="full_property_management_application_email" id="full_property_management_application_email" /><span class="help-block hidden">{{ __('validation.check_input')}}</span></div>
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group phone required full_property_management_application_mobile_phone"><label class="control-label phone required" for="full_property_management_application_mobile_phone">
                <abbr title="required"></abbr> 
                <span class="translation_missing" title="translation missing: en-uk.hosts.full_property_management_applications.new.mobile_phone, current_city: London">Mobile Phone</span></label>
                <input class="form-control string phone required" type="tel" name="full_property_management_application_mobile_phone" id="full_property_management_application_mobile_phone_national_format" data-hidden-input-id="full_property_management_application_mobile_phone" />
                <span class="help-block hidden">{{ __('validation.check_input')}}</span>
              </div>
            </div>
              <div class="col-md-6">
                <div class="form-group string required full_property_management_application_postcode"><label class="control-label string required" for="full_property_management_application_postcode"><abbr title="required"></abbr> <span class="translation_missing" title="translation missing: en-uk.hosts.full_property_management_applications.new.postcode, current_city: London">Postcode</span></label><input class="form-control string required" type="text" name="full_property_management_application_postcode" id="full_property_management_application_postcode" /><span class="help-block hidden">{{ __('validation.check_input')}}</span></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group select required full_property_management_application_city_name">
                    <label class="control-label select required" for="full_property_management_application_city_name">
                    <abbr title="required"></abbr> City</label><select class="form-control select required" name="full_property_management_application_city" id="full_property_management_application_city_name"><option value="">Select a city</option>
                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                    <option value="Hà Nội">Hà Nội</option>
                    <option value="Đà Nẵng">Đà Nẵng</option>
                    <option value="Hội An">Hội An</option>
                    <option value="Nha Trang">Nha Trang</option>
                    <option value="Đà Lạt">Đà Lạt</option>
                    <option value="Sapa">Sapa</option>
                  </select>
                    <span class="help-block hidden">{{ __('validation.check_input')}}</span>
                </div>
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
                <span class="help-block hidden">{{ __('validation.check_input')}}</span>
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
                <span class="help-block hidden">{{ __('validation.check_input')}}</span>
                </div>
              </div>
            </div>
            <input type="submit" value="Apply" class="btn btn-lg btn-block btn-primary started_click" />
        </form>        
        </div>
      </div>
    </div>
  </div>
</div>
@endsection