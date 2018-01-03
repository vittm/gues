@extends('layouts.app')

@section('content')
<div class="section section-aboutus">
    <div class="container">
      <h1 class="site-title">{{ __('about.title')}}</h1>
      <div class="divider"></div>
      <div class="row">
        <div class="col-md-6">
          <div class="images-block">
            <img src="{{ url('assets/v2/aboutus_01-40e58c2a1a39f6654cc91dcf271a5364bc38aacc4a8bed689cbd452ab9a9ce6b.jpg')}}" alt="Aboutus 01" />
            <img src="{{ url('assets/v2/aboutus_02-55421d99cce02a74fe3894b9f4a05f7d874c923fc87a3f1b2e05fb08a73e5507.jpg')}}" alt="Aboutus 02" />
          </div>
        </div>
        <div class="col-md-6">
          <p>{{ __('about.as_frequent')}}</p>
          <p>{{ __('about.founed')}}</p>
        </div>
      </div>
      <h3 class="medium-title text-center">{{ __('about.so_far')}}</h3>
      <div class="props bigger">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <h3><span>{{ __('about.help')}}</span><strong>108</strong><span>{{ __('about.hosts_reach')}}<br>{{ __('about.supest_host')}}</span>
  </h3>
          </div>
          <div class="col-md-4 col-sm-12">
            <h3><span>{{ __('about.hosted')}}</span><strong>593</strong><span>{{ __('about.guest_apartments')}}<br>{{ __('about.arount_vietnam')}}</span>
  </h3>
          </div>
          <div class="col-md-4 col-sm-12">
            <h3><span>{{ __('about.a_of_team')}}</span><strong>20</strong><span>{{ __('about.professional')}}<br> {{ __('about.airbnb_enthusiasts')}}</span>
  </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  
 
  
  <div class="careers" id="careers">
    <div class="container">
      <div class="col-lg-12">
        <h1 class="site-title">{{ __('about.careers')}}</h1>
        <div class="divider"></div>
        <h4>{{ __('about.join')}}</h4>
      </div>
    </div>
  </div>
  @endsection
  
  