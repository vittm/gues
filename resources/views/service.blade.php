@extends('layouts.app')

@section('content')
<div class="section section-services">
<div class="container">
  <h1 class="site-title">{{ __('services.title') }}</h1>
  <div class="divider"></div>
  <p class="basic">{{ __('services.we_take_care') }}</p>
  <div class="row" id="listing-creation">
    <div class="col-md-6">
      <div class="box-tr">
        <div class="divider small"></div>
        <h3 class="sub-title-block">
        {{ __('services.listing_creation') }}
        </h3>
        <p>{{ __('services.our_team_season') }}</p>
      </div>
    </div>
    <div class="col-md-6">
      <img src="{{ url('assets/v2/services-img_001-f0145a0d50808639a90ed04db6d9ed3c5f5c40503e18c2e76a036240f6a872a8.jpg')}}" alt="Services img 001" />
    </div>
  </div>
  <div class="row" id="professional-photography">
    <div class="col-md-6">
      <img src="{{ url('assets/v2/services-img_002-6472043931832048ae2599953ec065e7e36259431a13de5460f387a8a31ada96.jpg')}}" alt="Services img 002" />
    </div>
    <div class="col-md-6">
      <div class="box-tr">
        <div class="divider small"></div>
        <h3 class="sub-title-block">
        {{ __('welcome.photography') }}
        </h3>
        <p>{{ __('services.a_picture') }}</p>
      </div>
    </div>
  </div>
  <div class="row" id="price-optimisation">
    <div class="col-md-6">
      <div class="box-tr">
        <div class="divider small"></div>
        <h3 class="sub-title-block">
        {{ __('services.optimisation') }}
        </h3>
        <p>{{ __('services.our_team') }}</p>
      </div>
    </div>
    <div class="col-md-6">
      <img src="{{ url('assets/v2/services-img_003-4676343ae42bb55dee796a92d4ab3b98cd9e321e6786a9ae2ec3e71238a4a02c.jpg')}}" alt="Services img 003" />
    </div>
  </div>
  <div class="row" id="guest-communication">
    <div class="col-md-6">
      <img src="{{ url('assets/v2/services-img_004-cbc7f5a0d491e30e2b8ca67d969919da552b60bb1e371b7a82f2a67484a93c8f.jpg')}}" alt="Services img 004" />
    </div>
    <div class="col-md-6">
      <div class="box-tr">
        <div class="divider small"></div>
        <h3 class="sub-title-block">
        {{ __('welcome.guest') }}
        </h3>
        <p>{{ __('services.from_the_very') }}</p>
      </div>
    </div>
  </div>
  <div class="row" id="personal-welcome">
    <div class="col-md-6">
      <div class="box-tr">
        <div class="divider small"></div>
        <h3 class="sub-title-block">
        {{ __('how.guest_screening') }}
        </h3>
        <p>{{ __('services.width_use_part') }}</p>
      </div>
    </div>
    <div class="col-md-6">
      <img src="{{ url('assets/v2/services-img_005-ea0e80b04332ec43ad2bee2e131ed3e9eaec71bd2ddb1ca13ae102cc8aaafb5b.jpg')}}" alt="Services img 005" />
    </div>
  </div>
  <div class="row" id="concierge-service">
    <div class="col-md-6">
      <img src="{{ url('assets/v2/services-img_006-702a8f418cf0e46c1261067b2f001b299ab4ed940ddb4c441bc5195332c61690.jpg')}}" alt="Services img 006" />
    </div>
    <div class="col-md-6">
      <div class="box-tr">
        <div class="divider small"></div>
        <h3 class="sub-title-block">
        {{ __('how.check_in') }}
        </h3>
        <p>{{ __('services.check_in_key') }}</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="box-tr">
        <div class="divider small"></div>
        <h3 class="sub-title-block">
        {{ __('services.guided_farewell') }}
        </h3>
        <p>{{ __('services.we_will_aid') }}</p>
      </div>
    </div>
    <div class="col-md-6">
      <img src="{{ url('assets/v2/services-img_007-7afa00239dde2f17fc17ebb220719216bc946f8fa4d27cee261df1164b4861c8.jpg')}}" alt="Services img 007" />
    </div>
  </div>
  <div class="row" id="cleaning-services">
    <div class="col-md-6">
      <img src="{{ url('assets/v2/services-img_008-e5889b47bfe4e3ae69072c004795b1db61b77b66aaa60700d6ade150055a688a.jpg')}}" alt="Services img 008" />
    </div>
    <div class="col-md-6">
      <div class="box-tr">
        <div class="divider small"></div>
        <h3 class="sub-title-block">
        {{ __('services.cleaning') }}
        </h3>
        <p>{{ __('services.profession') }}</p>
      </div>
    </div>
  </div>
  <div class="row" id="premium-amenities">
    <div class="col-md-6">
      <div class="box-tr">
        <div class="divider small"></div>
        <h3 class="sub-title-block">
        {{ __('price.premium_toilet') }}
        </h3>
        <p>{{ __('services.a_little_pampering') }}.</p>
      </div>
    </div>
    <div class="col-md-6">
      <img src="{{ url('assets/v2/services-img_009-2067833b4582a453729db0271bcabd115a944fcb48a512a1cba6d2700a7e3f0c.jpg')}}" alt="Services img 009" />
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <img src="{{ url('assets/v2/services-img_010-8f93da7282df7c45c081305c08703f2616e65ad0a976d8a249fd2919896c1140.jpg')}}" alt="Services img 010" />
    </div>
    <div class="col-md-6">
      <div class="box-tr">
        <div class="divider small"></div>
        <h3 class="sub-title-block">
        {{ __('services.linen') }}
        </h3>
        <p>{{ __('services.clean') }}</p>
      </div>
    </div>
  </div>
  <div class="row" id="professional-maintenance">
    <div class="col-md-6">
      <div class="box-tr">
        <div class="divider small"></div>
        <h3 class="sub-title-block">
        {{ __('welcome.property') }}
        </h3>
        <p>{{ __('services.from_changing') }}</p>
      </div>
    </div>
    <div class="col-md-6">
      <img src="{{ url('assets/v2/services-img_011-643bf0cae7625127c57a19621bc194ddd922cb78a066c12f519af93435af9e7d.jpg')}}" alt="Services img 011" />
    </div>
  </div>
</div>
<div class="container text-center">
  <div class="row">
    <a class="btn btn-large btn-primary" href="/en-sg/hosts/full_property_management_applications/new/">{{ __('welcome.start') }}</a>
    <p class="small">{{ __('welcome.stars') }}</p>
    <img src="{{ url('assets/v2/stars-eb92a16d1f0634049023974cbc9205e26df201bb5aa2dad52c7697d4f4024064.png')}}" alt="Stars" />
  </div>
  <div class="row">
    <div class="col-md-5 text-left">
      <div class="box-how">
        <h2 class="site-title">{{ __('services.fully') }}</h2>
        <div class="divider small"></div>
        <p>{{ __('services.we_are_managing') }}</p>
        <a href="/en-sg/hosts/full_property_management_applications/new/">{{ __('services.get_touch') }}</a>
      </div>
    </div>
    <div class="col-md-7 text-right">
      <div class="box-how">
        <img src="{{ url('assets/v2/services-screen-0ea11cf64829b753a3e54701ef377504bd9ea8b23b0b4fd53cf0ee06c5c62731.jpg')}}" alt="Services screen" />
      </div>
    </div>
  </div>
</div>
</div>

@endsection