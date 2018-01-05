@extends('layouts.app')

@section('content')
<div class="section-price-tables">
            <div class="container">
              <h1 class="site-title">{{ __('price.pricing_title') }}</h1>
              <div class="divider"> </div>
              <p class="medium-title text-center">
              {{ __('price.flexing_price') }}<br/>
              {{ __('price.smiple') }}
          
              </p>
              <div class="price-table">
                <div class="row">
                  <div class="col-md-4 text-center">
                    <div class="table-block">
                      <div class="price-column">
                        <div class="table-columns">
                          <h2>{{ __('price.basic') }}</h2>
                          <div class="price-title">
                            <p>{{ __('price.from') }}</p><strong>18%</strong><p>{{ __('price.revenues') }}</p>
                          </div>
                        </div>
                        <h4>{{ __('price.include') }}</h4>
          <ul>
            <li>{{ __('price.price_optimize') }}</li>
            <li>{{ __('price.communication') }}</li>
            <li>{{ __('price.calender_price') }}</li>
            <li>{{ __('price.restocking') }}</li>
            <li>{{ __('price.5star') }}</li>
            <li>{{ __('price.premium_toilet') }}</li>
            <li>{{ __('price.guest_self') }}</li>
          </ul>
          
                      </div>
                      <a class="btn btn-primary" href="/en-sg/hosts/full_property_management_applications/new/">{{ __('welcome.start') }}</a>
                    </div>
                  </div>
                  <div class="col-md-4 text-center ">
                    <div class="table-block active">
                      <div class="price-column">
                        <div class="table-columns">
                          <h2>{{ __('price.premium') }}</h2>
                          <div class="price-title">
                            <p>{{ __('price.from') }}</p><strong>20%</strong><p>{{ __('price.revenues') }}</p>
                          </div>
                        </div>
                        <h4>{{ __('price.include') }}</h4>
          <ul>
            <li>{{ __('price.dynamic') }}</li>
            <li>{{ __('price.muitichannel') }}</li>
            <li>{{ __('price.personal_checkin') }}</li>
            <li>{{ __('price.id_check') }}</li>
            <li>{{ __('price.profressional_photography') }}</li>
            <li>{{ __('price.maintenance') }}</li>
            <li>{{ __('price.support24') }}</li>
          </ul>
          <h4>{{ __('price.and') }}</h4>
          <h6 class="basic-package">{{ __('price.all_services') }}<br> {{ __('price.include_in') }}<br> {{ __('price.base_plant') }}</h6>
          <!-- <ul>
            <li>Listing creation and optimisation </li>
            <li>Guest management and communication</li>
            <li></li>
            <li>Restocking of home essentials</li>
            <li>5-star quality housekeeping</li>
            <li>Luxury hotel quality linen</li>
            <li>Premium toiletries  </li>
          </ul> -->
          
                        <h5>{{ __('price.most_populor') }}</h5>
                      </div>
                      <a class="btn btn-primary" href="/en-sg/hosts/full_property_management_applications/new/">{{ __('welcome.start') }}</a>
                    </div>
                  </div>
                  <div class="col-md-4 text-center ">
                    <div class="table-block">
                      <div class="price-column">
                        <div class="table-columns">
                          <h2>{{ __('price.fixed_income') }}</h2>
                          <div class="price-title">
                            <h6>{{ __('price.adefine') }}<br/>{{ __('price.amount') }}</h6><p>{{ __('price.your_property') }}</p>
                          </div>
                        </div>
                        <h4>{{ __('price.include') }}</h4>
          <ul>
            <li>{{ __('price.price_optimize') }}n</li>
            <li>{{ __('price.communication') }}</li>
            <li>{{ __('price.calender_price') }}</li>
            <li>{{ __('price.restocking') }}</li>
            <li>{{ __('price.5star') }}</li>
            <li>{{ __('price.luxury_lien') }}</li>
            <li>{{ __('price.premium_toilet') }}</li>
          </ul>
          
                        <div class="desc">
                        {{ __('price.our_unique') }}
                        </div>
                      </div>
                      <a class="btn btn-primary" href="/en-sg/hosts/full_property_management_applications/new/">{{ __('welcome.start') }}</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container text-center">
              <h4 class="small">{{ __('price.not_sure') }}</h4>
              <p class="medium-title">
                <a href="/en-sg/hosts/full_property_management_applications/new/">{{ __('price.get_touch') }}</a>
                <span>{{ __('price.discuss') }}</span>
              </p>
            </div>
          </div>
          
@endsection