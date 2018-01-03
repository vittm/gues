@extends('layouts.app')

@section('content')
<!-- steps -->
<div class="section-steps">
<div class="container">
  <h1 class="site-title">{{ __('how.we_get') }}<br>{{ __('how.steps') }}</h1>
  <div class="divider"> </div>
  <p class="medium-title text-center">{{ __('how.we_get_small') }}</p>
  <div class="row circle-icon">
    <div class="col-md-3 col-md-offset-1 col-sm-5 bg-circle">
      <img src="{{ url('assets/v2/how-it-works-icon_001-debf3f1a1af90b9362d465e9b6d5247f1a9a012e0e6b904892b437486a667f38.png')}}" alt="How it works icon 001" />
    </div>
    <div class="col-md-6 col-md-offset-1 col-sm-7">
      <div class="heading">
        <p>01</p>
        <h3>{{ __('how.meet_our_real') }}</h3>
      </div>
      <p>{{ __('how.during') }}</p>
    </div>
  </div>
  <div class="row circle-icon">
    <div class="col-md-3 col-md-offset-1 col-sm-5 bg-circle">
      <img src="{{ url('assets/v2/how-it-works-icon_002-52ab546b20568be506542a7a821eafa0dd5242685c96a3499bdd3751bb76a51d.png')}}" alt="How it works icon 002" />
    </div>
    <div class="col-md-6 col-md-offset-1 col-sm-7">
      <div class="heading">
        <p>02</p>
        <h3>{{ __('how.onboarding') }}</h3>
      </div>
      <p>{{ __('how.our_photo') }}</p>
    </div>
  </div>
  <div class="row circle-icon">
    <div class="col-md-3 col-md-offset-1 col-sm-5 bg-circle">
      <img src="{{ url('assets/v2/how-it-works-icon_003-294d997017b9752188878cd2d6d1030f70502365807db7967a207dd7c176cce8.png')}}" alt="How it works icon 003" />
    </div>
    <div class="col-md-6 col-md-offset-1 col-sm-7">
      <div class="heading">
        <p>03</p>
        <h3>{{ __('how.welcoming') }}</h3>
      </div>
      <p>{{ __('how.once_we') }}</p>
    </div>
  </div>
</div>
</div>
<!-- getstarted -->
<div class="section-getstarted" style="background: url({{ url('assets/v2/bg-how-it-works-26717371d2c1876891f9233cb7ecb8b5d4d1f1df4ef994762cb7f9b4269d087a.jpg')}}) center cover no-repeat;">
    <div class="container text-center">
    <a class="btn btn-large btn-primary" href="/en-sg/hosts/full_property_management_applications/new/">{{ __('welcome.start') }}</a>
    <p class="small">{{ __('welcome.stars') }}</p>
    <img src="{{ url('assets/v2/stars-eb92a16d1f0634049023974cbc9205e26df201bb5aa2dad52c7697d4f4024064.png')}}" alt="Stars" />
    </div>
</div>
<!-- features -->
<div class="section-features">
<div class="container text-center">
  <h2 class="site-title">{{ __('how.thanks') }}</h2>
  <div class="divider"></div>
  <div class="row">
    <div class="col-md-4 col-sm-4 text-center">
      <div class="white-how-block">
        <a href="/en-sg/services/#listing-creation">
          <img src="{{ url('assets/v2/how-icon_001-23024528475670de5f0cdd5174dc7d47785ae20ed70048f906870f6c02e9d61f.png')}}" alt="How icon 001" />
          <span>{{ __('welcome.listing') }}</span>
</a>          <p>{{ __('how.creation') }}</p>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 text-center">
      <div class="white-how-block">
        <a href="/en-sg/services/#proffesional-photography">
          <img src="{{ url('assets/v2/how-icon_002-5300f5c5ca7f60dbe1be2383055d55c21d6b1b0a1b9b7bd658d5a9e37d858326.png')}}" alt="How icon 002" />
          <span>{{ __('welcome.photography') }}</span>
</a>          <p>{{ __('how.showcase') }}</p>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 text-center">
      <div class="white-how-block">
        <a href="/en-sg/services/#price-optimisation">
          <img src="{{ url('assets/v2/how-icon_003-975dffa6627a174a60f22250a7e3849ca28f72a24db91cc0bf12b82510c4ddc3.png')}}" alt="How icon 003" />
          <span>{{ __('welcome.price') }}</span>
</a>          <p>{{ __('how.we_know') }}</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 col-sm-4 text-center">
      <div class="white-how-block">
        <a href="/en-sg/services/#guest-communication">
          <img src="{{ url('assets/v2/how-icon_004-ae3d776d5230b2c28cfc8eff1709d763142926ed5a78ecf4df17b24077df5c43.png')}}" alt="How icon 004" />
          <span>{{ __('welcome.guest') }}</span>
</a>          <p>{{ __('how.our_friendly') }}</p>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 text-center">
      <div class="white-how-block">
        <a href="/en-sg/services/#personal-welcome">
          <img src="{{ url('assets/v2/how-icon_005-a0d3f3d47d20afa560efc38fd8d37bc8c46b629597cbc3c37641048199dd27ff.png')}}" alt="How icon 005" />
          <span>{{ __('how.guest_screening') }}</span>
</a>          <p>{{ __('how.we_care') }}</p>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 text-center">
      <div class="white-how-block">
        <a href="/en-sg/services/#concierge-service">
          <img src="{{ url('assets/v2/how-icon_006-ffa3c2b8260640f40ffe8f4f22e16b5149dd66011f23b7ea55da4866c495ef4c.png')}}" alt="How icon 006" />
          <span>{{ __('how.check_in') }}</span>
</a>          <p>{{ __('how.we_personally') }}</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 col-sm-4 text-center">
      <div class="white-how-block">
        <a href="/en-sg/services/#cleaning-services">
          <img src="{{ url('assets/v2/how-icon_007-f9424f693582b7d7c5f24b4dcef235ac2f34dd2b3957939a75c5737ec10520f8.png')}}" alt="How icon 007" />
          <span>{{ __('how.linen_toiletries') }}</span>
</a>          <p>{{ __('how.hotel-quanlity') }}</p>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 text-center">
      <div class="white-how-block">
        <a href="/en-sg/services/#premium-amenities">
          <img src="{{ url('assets/v2/how-icon_008-260179bd8a69051cdd01127797d8180fe176e43a25368c0e51d304d857b4fe6b.png')}}" alt="How icon 008" />
          <span>{{ __('how.clearning') }}</span>
</a>          <p>{{ __('how.we_thoughly') }}</p>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 text-center">
      <div class="white-how-block">
        <a href="/en-sg/services/#professional-maintenance">
          <img src="{{ url('assets/v2/how-icon_009-c746967e99806bc1ded61129bf8e5485ed5f07a47976cf429d065148ed6408d7.png')}}" alt="How icon 009" />
          <span>{{ __('how.maintenance') }}</span>
</a>          <p>{{ __('how.resolve') }}</p>
      </div>
    </div>
  </div>
</div>
<div class="container text-center">
  <a class="btn btn-primary btn-large" href="/en-sg/hosts/full_property_management_applications/new/">{{ __('welcome.start') }}</a>
  </div>
</div>
<section class="refer-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="refer">
            <h4>{{ __('welcome.calling') }}<br></h4>
            <a class="btn btn-orange" href="#">{{ __('welcome.refer_a_host') }}</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="subscribe-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="mc_embed_signup">
            <form action="//GuestReady.us13.list-manage.com/subscribe/post?u=e5cb2dca535631d35814c76ea&amp;id=798f8399da" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <h4>{{ __('welcome.newsletter') }}<span>{{ __('welcome.newsletters') }}</span></h4>
              <input type="email" name="EMAIL" placeholder="{{ __('welcome.enter_email') }}" id="mce-EMAIL">
              <input type="submit" id="mc-embedded-subscribe" value="{{ __('welcome.sign_up') }}">

              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2d9367408e0f70bb0fef9928b_457cfa8179" tabindex="-1" value=""></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>    
@endsection