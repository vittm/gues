@extends('layouts.app')

@section('content')
<div class="section section-homes">
<div class="container">
<h1 class="site-title">{{ __('home.see_how')}}</h1>
<div class="divider"></div>
<div class="home-block" id="home1">
    <h3 class="basic business-traveler">{{ __('home.retired')}}</h3>
    <p class="small">{{ __('home.talk_has_been')}}</p>
    <div class="row">
    <div class="col-md-12">
        <figure>
        <img src="{{ url('assets/v2/singapore_flat_1-7ab325252da9860be9df836574aa35a369f0779f9b28f44c8ec3a6362383d388.jpg')}}" alt="Singapore flat 1" />
        </figure>
    </div>
    <div class="block-homes">
        <div class="row">
        <div class="col-md-5">
            <div class="stories-box">
            <div class="pics">
                <img src="{{ url('assets/v2/singapore_owner_1-fd709fd018953c37a1bc039012e62c75fdfbe7ea0cd1018dff4905d8de3d2195.jpg')}}" alt="Singapore owner 1" />
            </div>
            <div class="text-box">
                <p>{{ __('home.name_lam')}}</p>
                <h4>{{ __('home.boss_lam')}}</h4>
                <p class="story">{{ __('home.content_lam')}}</p>
            </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="stories-text">
            <div class="divider small"></div>
            <h3>{{ __('home.host_lam')}}</h3>
            <p>{{ __('home.anwser_lam')}}
</p>
            <div class="foot">
                <div class="text-left">
                <p>{{ __('home.guest')}}h</p>
                <h5>Patrick</h5>
                </div>
                <div class="text-right">
                <p>{{ __('home.rated')}}</p>
                <img src="{{ url('assets/v2/stars-eb92a16d1f0634049023974cbc9205e26df201bb5aa2dad52c7697d4f4024064.png')}}" alt="Stars" />
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="home-block" id="home2">
    <h3 class="basic">{{ __('home.holiday')}}</h3>
    <p class="small">{{ __('home.back_to_vietnam')}}</p>
    <div class="row">
    <div class="col-md-12">
        <figure>
        <img src="{{ url('assets/v2/singapore_flat_2-5c90170f7aa5103be651bdb1238b90322c973f19612134ce3bf91f128650059f.jpg')}}" alt="Singapore flat 2" />
        </figure>
    </div>
    <div class="block-homes">
        <div class="row">
        <div class="col-md-5">
            <div class="stories-box">
            <div class="pics">
                <img src="{{ url('assets/v2/singapore_owner_2-990272791b5b0c0e70d6c90c2987cd6b00f08ee0a88d5021a2a84dc8ee568c43.jpg')}}" alt="Singapore owner 2" />
            </div>
            <div class="text-box">
                <p>{{ __('home.host_2')}}</p>
                <h4>{{ __('home.date_2')}}</h4>
                <p class="story">{{ __('home.feel_host_2')}}"
</p>
            </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="stories-text">
            <div class="divider small"></div>
            <h3>{{ __('home.title_content_host2')}}</h3>
            <p>{{ __('home.our_stay_wass')}}
</p>
            <div class="foot">
                <div class="text-left">
                <p>{{ __('home.guest')}}</p>
                <h5>Mario and Eunice</h5>
                </div>
                <div class="text-right">
                <p>{{ __('home.rated')}}</p>
                <img src="{{ url('assets/v2/stars-eb92a16d1f0634049023974cbc9205e26df201bb5aa2dad52c7697d4f4024064.png')}}" alt="Stars" />
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
</div>

<div class="page-testimonials-section">
<div class="container text-center">
<p class="small">{{ __('home.see')}}</p>
<div class="divider"></div>
</div>
</div>

<div class="block-properties-big">
<div class="property">
<div class="shadow-p"></div>
<div class="text-prop">
    <h3 class="pr-title">Spacious 2BR in Singapore’s CBD</h3>
</div>
<img src="{{ url('assets/v2/singapore_gallery_home_01-816cb004526324b5e72f531834002bd8c108a0df318dbdeeb64a063d0307691b.jpg')}}" alt="Singapore gallery home 01" />
</div>
<div class="property">
<div class="shadow-p"></div>
<div class="text-prop">
    <h3 class="pr-title">Modern 2-Bedroom apartment near public transport</h3>
</div>
<img src="{{ url('assets/v2/singapore_gallery_home_02-03cadc2f642a99494bd065943c3c3d646fb4aae4736944fece3c8d4c86ee3c36.jpg')}}" alt="Singapore gallery home 02" />
</div>
<div class="property">
<div class="shadow-p"></div>
<div class="text-prop">
    <h3 class="pr-title">Amazing classic shophouse, 3 bedrooms</h3>
</div>
<img src="{{ url('assets/v2/singapore_gallery_home_03-ba42746ba8b54295e2ce49148dcb19e23dacf5997f00ae9108c96895e2da201e.jpg')}}" alt="Singapore gallery home 03" />
</div>
<div class="property">
<div class="shadow-p"></div>
<div class="text-prop">
    <h3 class="pr-title">3 BR Luxury apartment in central Singapore</h3>
</div>
<img src="{{ url('assets/v2/singapore_gallery_home_04-26c6003891f4f1869b5349f16dd80680a0b004d6ce565a6fae88fdec8d0f5906.jpg')}}" alt="Singapore gallery home 04" />
</div>
<div class="property">
<div class="shadow-p"></div>
<div class="text-prop">
    <h3 class="pr-title">Modern 3BR in quiet riverwalk area</h3>
</div>
<img src="{{ url('assets/v2/singapore_gallery_home_05-5ce339caea79ddfd80897cfe7f472edd399e64216ae7807b8a1af4c008a1f7ff.jpg')}}" alt="Singapore gallery home 05" />
</div>
<div class="property">
<div class="shadow-p"></div>
<div class="text-prop">
    <h3 class="pr-title">Contemporary luxury apartment in downtown area</h3>
</div>
<img src="{{ url('assets/v2/singapore_gallery_home_06-20da6a167e9456f21757254b3f4837480d25007a895b01be332362e59ae9d231.jpg')}}" alt="Singapore gallery home 06" />
</div>
<div class="property">
<div class="shadow-p"></div>
<div class="text-prop">
    <h3 class="pr-title">Hip apartment in modern condominium</h3>
</div>
<img src="{{ url('assets/v2/singapore_gallery_home_07-456a7eb218f407d1aff4d2f7ada9c60536661a6cc4b0c609bfda6be4a637b127.jpg')}}" alt="Singapore gallery home 07" />
</div>
<div class="property">
<div class="shadow-p"></div>
<div class="text-prop">
    <h3 class="pr-title">Modern apartment in Katong area</h3>
</div>
<img src="{{ url('assets/v2/singapore_gallery_home_08-44855a4a240fe4c6615f88f0f5e253f57896d4b8442a7976fc9bf09a40754501.jpg')}}" alt="Singapore gallery home 08" />
</div>
</div>

<p class="small mini">{{ __('home.know_somebody')}}</p>
<a class="btn btn-orange" href="/en-sg/referral-programme/">{{ __('welcome.refer_a_host')}}</a>
<h6 class="mini">{{ __('home.thanks')}}</h6>
</div>
</div>

      
@endsection       