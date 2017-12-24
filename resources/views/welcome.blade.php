@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container text-center" id="price-calc">
      <p class="h1">{{ __('welcome.welcome')}}</p>
      <h1 class="h2">{{ __('welcome.txt_property_management')}}</h1>

      <h3 class="h3 subheading2">Your trusted partner for <a href='/en-uk/airbnb-management-singapore/'>Airbnb Management in London</a></h3>
      <h3 class="h3 subheading2">Votre partenaire de confiance pour la <a href='/fr-fr/airbnb-management-singapore/'>Conciergerie Airbnb à Paris</a></h3>

      <div class="divider"></div>

        <div class='price-calculator inline'>
  <h2 class='h3 header'><img src="{{ url('assets/wallet_icon-6937ad45a2530a6d973ea5a696d1ab19770533e8928ad628fe5614fe45bb43d0.png')}}" alt="Wallet icon" />{{ __('welcome.txt_find_out')}}</h2>
  <form novalidate="novalidate" class="simple_form new_price_calculator" id="new_price_calculator" action="/en-sg/price_calculator/?landing=true&amp;wrapper=inline" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />

  <div class="form-group email required price_calculator_email price_calculator_email--padding">
    <select class="string required form-control price_calculator_type" name="price_calculator_email_type  " id="">
      <option value="null">Phòng trống</option>
      <option value="notnull">Phòng không trống</option>
    </select>   
  </div>  

<div class="form-group hidden price_calculator_lat"><input class="form-control hidden" geo="lat" type="hidden" name="price_calculator[lat]" id="price_calculator_lat" /></div>        <div class="form-group hidden price_calculator_lng"><input class="form-control hidden" geo="lng" type="hidden" name="price_calculator[lng]" id="price_calculator_lng" /></div>        <div class="form-group hidden price_calculator_formatted_address"><input class="form-control hidden" geo="formatted_address" type="hidden" name="price_calculator[formatted_address]" id="price_calculator_formatted_address" /></div>        <div class="form-group hidden price_calculator_route"><input class="form-control hidden" geo="route" type="hidden" name="price_calculator[route]" id="price_calculator_route" /></div>        <div class="form-group hidden price_calculator_street_number"><input class="form-control hidden" geo="street_number" type="hidden" name="price_calculator[street_number]" id="price_calculator_street_number" /></div>        <div class="form-group hidden price_calculator_postal_code"><input class="form-control hidden" geo="postal_code" type="hidden" name="price_calculator[postal_code]" id="price_calculator_postal_code" /></div>        <div class="form-group hidden price_calculator_country"><input class="form-control hidden" geo="country" type="hidden" name="price_calculator[country]" id="price_calculator_country" /></div>
      <div class="form-group string required price_calculator_bedrooms_count"><label class="control-label string required" for="price_calculator_bedrooms_count"><abbr title="required"></abbr> </label><div class="input-group">
        <div class="bethrooms-counter-visible">
          <div class="input-group-addon shortcut"><i class="fa fa-bed"></i></div>
          <input class="string required readonly form-control" readonly="readonly" placeholder="{{ __('welcome.input_bedrooms')}}" type="text" name="price_calculator[bedrooms_count]" id="price_calculator_bedrooms_count" />
           <div class="input-group-addon bedrooms-counter">
             <a class="up" href="#">+</a>
             <a class="down" href="#">-</a>
           </div>
         </div>
</div></div>
      <div class="form-group email required price_calculator_email"><label class="control-label email required" for="price_calculator_email"><abbr title="required"></abbr></label><div class="input-group">
        <div class="input-group-addon shortcut"><i class="fa fa-envelope-o"></i></div>
        <input class="string email required form-control" placeholder="{{ __('welcome.input_email')}}" type="email" name="price_calculator_email" id="price_calculator_email" /></div></div>
      
        <div class="form-group email required price_calculator_email price_calculator_email--padding">
          <select class="string required form-control price_calculator_type" name="price_calculator_email_type  " id="">
            <option value="null">Phòng trống</option>
            <option value="notnull">Phòng không trống</option>
          </select>   
        </div>

      <input type="submit" name="commit" value="{{ __('welcome.btn_calculate')}}" data-disable-with="Calculating" data-disable-with="Calculating" class="btn btn-primary" />
</form></div>

        <p class="jumbotron-info">
          <img src="{{ url('assets/v2/info-icon-white-e71b3ba64a067ee7d2659f69e9830846d3580cae1e7ede34a7e1697fd8cff501.png') }}" alt="Info icon white" />
          <span>{{ __('welcome.txt_enter_email') }}</span>
        </p>

        <div class="jumbotron-about">
        {{ __('welcome.txt_nhavin_is')}}
        </div>

    </div>
  </div>


  <section class="stat-section media-coverage">
    <div class="bg-stat"></div>
    <div class="container text-center">
      <p class="section-title">{{ __('welcome.txt_agency_for_managing') }}</p>
      <div class="divider"></div>
      <p class="basic">{{ __('welcome.txt_we_manage')}} <span>{{ __('welcome.txt_over_100_properties')}} </span> {{ __('welcome.txt_helping_owners')}}
</p>
      <div class="props">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <h3><strong>5<sup class="fa fa-star"></sup></strong><span>AIRBNB<br>GUEST RATINGS</span>
</h3>
          </div>
          <div class="col-md-4 col-sm-12">
            <h3><strong>85%</strong><span>OCCUPANCY<br>PER LISTING</span>
</h3>
          </div>
          <div class="col-md-4 col-sm-12">
            <h3><strong>45%</strong><span>SUPERHOSTS</span>
</h3>
          </div>
        </div>
      </div>
      <div class="row clearfix"></div>
      <a class="btn btn-large btn-primary" href="/en-sg/hosts/full_property_management_applications/new/">Get Started</a>
      <!-- <a class="btn btn-large btn-primary">Get Started</a> -->
      <p class="small">with our 5* Airbnb Property Management Service</p>
      <img class="no-filters" src="{{ url('assets/v2/stars-eb92a16d1f0634049023974cbc9205e26df201bb5aa2dad52c7697d4f4024064.png')}}" alt="Stars" />
      <h4>As seen on</h4>
      <div class="row">
            <a target="_blank" rel="nofollow" href="https://www.forbes.com/sites/samameen/2017/04/03/the-key-to-success-for-hong-kong-startups-think-bigger/#3aa7e0519326"><img src="{{ url('assets/coverage/Forbes_logo.svg-cb2f1b67ce7986d6d6194a8a4aa20eb2bac48f86990a2fc1b93b5c37b03ac29f.png')}}" alt="Forbes logo.svg" /></a>
            <a target="_blank" rel="nofollow" href="https://techcrunch.com/tag/guestready/"><img src="{{ url('assets/coverage/tc-techcrunch-ae70f5ca426b4b6c74aade00e1ce6916ea32d6dbd554e050cf3758228e59bf2a.svg')}}" alt="Tc techcrunch" /></a>
            <a target="_blank" rel="nofollow" href="http://www.todayonline.com/business/start-ups-emerge-support-sharing-economy-firms"><img src="{{ url('assets/coverage/Today1-490abda4ac2fb6b90d2b4f6e6c3bb255661ae390eef1a4024a1789ea80c76204.jpg')}}" alt="Today1" /></a>
            <a target="_blank" rel="nofollow" href="https://www.techinasia.com/guestready-additional-funding"><img src="{{ url('assets/coverage/techinasia-0903e06ffb394741426a4b2d2d3e6e9cf361d0fb83025ff5780bd7455bc9fb66.png')}}" alt="Techinasia" /></a>
            <a target="_blank" rel="nofollow" href="https://e27.co/guestready-raises-us700k-help-airbnb-hosts-manage-property-20161118/"><img src="{{ url('assets/coverage/e27-2014-light_bg-96dd734984f86a41452abf9151c378c3e65355c1d0e17eda5b4903885259b7ae.png')}}" alt="E27 2014 light bg" /></a>
            <a target="_blank" rel="nofollow" href="http://www.ttgasia.com/article.php?article_id=28357"><img src="{{ url('assets/coverage/TTG_Asia-a8b9f44ab0c0bb272776219c6453b7157ac0a80c605e794267660979409c7eb3.jpg')}}" alt="Ttg asia" /></a>
      </div>
      <div class="row clearfix"></div>
    </div>
  </section>

  <section class="about-section">
    <div class="container">
      <p class="section-title text-center">Why use GuestReady?</p>
      <div class="divider"></div>
      <div class="about">
        <div class="row">
          <div class="col-md-4">
            <img alt="Increase your Airbnb income in Singapore" src="{{ url('assets/v2/about03-e28b8f81b3566169b31bba74bb7dcd15279930d214cf22fa2c1d31c7e654c984.png')}}" />
            <h3>Boost your<br> Airbnb income</h3>
            <p>Supplement your revenues by renting out your home when it is empty using our 5* property management service. Thanks to our expertise on real estate and hospitality trends in Singapore, we will optimise your listing, pricing and occupancy to make it more attractive on platforms like Airbnb.</p>            
          </div>
          <div class="col-md-4">
            <img alt="Hassle Free Airbnb Management Singapore" src="{{ url('assets/v2/about02-af8d8d36cd857c2ca560f606f9dbabaa9d18e5f44f108c0aef68428a02968e7e.png')}}" />
            <h3>We take the hassle<br>out of hosting</h3>
            <p>We manage everything for your Airbnb property: from optimising your listing and its rental price, to key exchange, cleaning, laundry, maintenance and much more;so you sit back and relax, and your guests go home smiling.</p>
          </div>
          <div class="col-md-4">
            <img alt="Flexible Airbnb Management Singapore" src="{{ url('assets/v2/about01-a9aae8a3a8f145ae996036f13e3086482489086f51b61cf0aa7baa33bc9a780d.png')}}" />
            <h3>Fully flexible<br>short lets</h3>
            <p>Whether you wish to rent out your home while you’re exploring the world, or you have an empty apartment in the city, our bespoke property management solution adapts to all kinds of schedules, so you always come back home and find it just the way you left it.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a class="btn btn-primary" href="#price-calc">Find out how much<br>you can earn on Airbnb</a>
          </div>
          <div class="col-md-4">
            <a class="btn btn-primary" href="/en-sg/services/">Discover our Airbnb<br>Management Services in detail</a>
          </div>
          <div class="col-md-4">
            <a class="btn btn-primary" href="/en-sg/hosts/full_property_management_applications/new/">Get in touch with<br>our Airbnb experts</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services-section">
    <div class="container text-center">
    <p class="section-title">GuestReady takes care of everything</p>
    <div class="divider"></div>
    <p class="basic">As a Luxury Vacation Rental Manager, our suite of services is designed to provide the best    experience to your guests, each time they stay at your place.</p>
    <div class="our-services">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="col-md-4">
            <a href="/en-sg/services/#listing-creation">
              <img alt="GuestReady will create an attractive listing on Airbnb for you" src="{{ url('assets/v2/s01-752a5cbcf7011d6d626491b23f175bad7389bb2789e788e4bfb169bec1ac7f23.png')}}" />
              <span>Listing creation</span>
</a>          </div>
          <div class="col-md-4">
            <a href="/en-sg/services/#professional-photography">
              <img alt="A professional photographer will take photos of your Singapore home" src="{{ url('assets/v2/s02-79df7662703feab0b6c5533c1a05eae045dcf91c2b76068be5686a92a702f784.png')}}" />
              <span>Professional Photography</span>
</a>          </div>
          <div class="col-md-4">
            <a href="/en-sg/services/#concierge-service">
              <img alt="Our concierges are available around the clock in Singapore" src="{{ url('assets/v2/s03-aff046514f7a1a7cef0f91083830cf0f66926f36de81524bf7f034d6c78fd4d1.png')}}" />
              <span>24/7 Concierge Service</span>
</a>          </div>
          <div class="col-md-4">
            <a href="/en-sg/services/#guest-communication">
              <img alt="Rent your Singapore Airbnb to the most respectable guests" src="{{ url('assets/v2/s04-0886c39aa9f3ff3c4bfb13757d91877cdca067a8932e9931a1331d1ac440c91d.png')}}" />
              <span>Guest communication and screening</span>
</a>          </div>
          <div class="col-md-4">
            <a href="/en-sg/services/#personal-welcome">
              <img alt="Personal welcome and key exchange for your guests" src="{{ url('assets/v2/s05-99948da773ed614ef6ce7066f81ab0c76dbcef23dc1018fa41d2962fc6c5332e.png')}}" />
              <span>Personal welcome &amp; key exchange</span>
</a>          </div>
          <div class="col-md-4">
            <a href="/en-sg/services/#price-optimisation">
              <img alt="Price optimisation for better yield management" src="{{ url('assets/v2/s06-311864ca6015e6ad17891d1cbe4949d0cec3e788008b07ac68ff7fb0ee7628e5.png')}}" />
              <span>Price optimisation</span>
</a>          </div>
          <div class="col-md-4">
            <a href="/en-sg/services/#premium-amenities">
              <img alt="Toiletries and essentials for your Singapore guests" src="{{ url('assets/v2/s07-5a067c1f80ec082a6724949f98de26bc7b6473d02d0e7e37771d9aa358c014b2.png')}}" />
              <span>Premium amenities</span>
</a>          </div>
          <div class="col-md-4">
            <a href="/en-sg/services/#cleaning-services">
              <img alt="Cleaning and fresh linen for your Singapore Airbnb" src="{{ url('assets/v2/s08-8568a6c919fc15e89e6dd203007eec7d0ecb958b98bbdc67f25566b8c8bf5e53.png')}}" />
              <span>Cleaning, linen, and laundry services</span>
</a>          </div>
          <div class="col-md-4">
            <a href="/en-sg/services/#property-maintenance">
              <img alt="Small repairs and on ground management of your Airbnb in Singapore" src="{{ url('assets/v2/s09-bdd91133ab2e31565620c0977ce348059eaa342c478e6f5d77e410d12a6e6837.png')}}" />
              <span>Property maintenance</span>
</a>          </div>
        </div>
      </div>
    </div>
    <a class="btn btn-primary" href="/en-sg/services/">Discover our Airbnb Property <br> Management Services in detail
</a>
  </div>
  </section>

  <section class="partners-section">
    <div class="container swiper-container">
      <h4>Vacation Rentals managed by us perform extremely well on platforms like Airbnb, Booking.com, VRBO and more…</h4>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img alt="AirBnB management Singapore" src="{{ url('assets/v2/partners/airbnb-dd7dc57c14237ddeedd0a86cfad42d6afccedd90e817e5a65753925e00976b8d.png')}}" />
        </div>
        <div class="swiper-slide">
          <img alt="Booking.com management Singapore" src="{{ url('assets/v2/partners/booking-770554582bf5b4e605ecb10521faf8858bbd2228fedb0da08292b68f66279910.png')}}" />
        </div>
        <div class="swiper-slide">
          <img alt="HomeAway management London" src="{{ url('assets/v2/partners/homeaway-b44ae8be0c9f92a42ee47e2857a166f1bc472b55f111923f7a3381ff4e8379aa.png')}}" />
        </div>
        <div class="swiper-slide">
          <img alt="Tripadvisor management Singapore" src="{{ url('assets/v2/partners/tripadvisor-b0a5baf7e0264c26b67a63a710604ce488c47317a77743718b59a7261d083d31.png')}}" />
        </div>
        <div class="swiper-slide">
          <img alt="Holidaylettings management Singapore" src="{{ url('assets/v2/partners/holidaylettings-3470e49aa18151f8acbb6536bd3c10f575bc23cf65bda55a0f713da4bbafaafb.png')}}" />
        </div>
        <div class="swiper-slide">
          <img alt="Agoda management London" src="{{ url('assets/v2/partners/agoda-ad67f7acc3a4ba274618c7f47d5e69d582934ce7b39bb16bc72a0dd6c5cf4370.png')}}" />
        </div>
        <div class="swiper-slide">
          <img alt="Ctrip management London" src="{{ url('assets/v2/partners/ctrip-27d13fb394586b0ec26bc47d2ff372c45bb78276756e114a7d00a9902bafb3de.png')}}" />
        </div>
        <div class="swiper-slide">
          <img alt="Expedia management London" src="{{ url('assets/v2/partners/expedia-444026f116fa819dcf0cc989f8822751c3d4db25fee633d6868ff197292476e7.png')}}" />
        </div>
        <div class="swiper-slide">
          <img alt="flat4day management London" src="{{ url('assets/v2/partners/flat4day-ff80643462e420a36ed94a2dc359898b562eb766fc692512f63ba0fe2a2f0da0.png')}}" />
        </div>
        <div class="swiper-slide">
          <img alt="FLIPKEY management London" src="{{ url('assets/v2/partners/flipkey-05ad2f9d9278fc21ee7bd609d9b956b311d8ac1eec80e283b32aecf0be381898.png')}}" />
        </div>
        <div class="swiper-slide">
          <img alt="VRBO management London" src="{{ url('assets/v2/partners/vrbo-61382175ffa4c04e1490fb9d8c18ea2dbe565a798ce6bc135d71caab32d9781a.png')}}" />
        </div>
      </div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </section>

  <section class="testimonials-section">
      <div class="container">
        <p class="section-title text-center">What our customers are saying…</p>
        <div class="divider"></div>
        <div class="slider">
          <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
              <div class="card-wrapper">
                <div data-card-id="0" class="card card-0">
                  <figure>
                    <img alt="Airbnb Management in Tiong Bahru Singapore" src="{{ url('assets/v2/singapore_flat_1_small-aac2cd2c43e2ed071f12cf9a0886f35dbebce40964c7416f9fb201b9cc7bf62b.jpg')}}" />
                  </figure>
                  <div class="meta">
                    <img alt="David is a happy GuestReady Singapore host" src="{{ url('assets/v2/singapore_owner_1-fd709fd018953c37a1bc039012e62c75fdfbe7ea0cd1018dff4905d8de3d2195.jpg')}}" />
                    <p>David Chong</p>
                    <a href="/en-sg/homes/#home1">Tiong Bahru</a>
                  </div>
                </div>
                <div data-card-id="1" class="card card-1">
                  <figure>
                    <img alt="Airbnb Management in River Valley Singapore" src="{{ url('assets/v2/singapore_flat_2_small-71be424ff17797ec3daca8549cf7adbc0fa3172c2a28815300dde2f001e8a0a8.jpg')}}" />
                  </figure>
                  <div class="meta">
                    <img alt="Lucas &amp; Christine are happy GuestReady Singapore hosts" src="{{ url('assets/v2/singapore_owner_2-990272791b5b0c0e70d6c90c2987cd6b00f08ee0a88d5021a2a84dc8ee568c43.jpg')}}" />
                    <p>Lucas and Christine</p>
                    <a href="/en-sg/homes/#home2">River Valley</a>
                  </div>
                </div>
                <div data-card-id="2" class="card card-2">
                  <figure>
                    <img alt="Airbnb Management in CBD Singapore" src="{{ url('assets/v2/singapore_flat_3_small-b1aa681fabc14b7ae3d8347983df1356bf8c01a8b788fa27714c3390dd0bccf1.jpg')}}" />
                  </figure>
                  <div class="meta">
                    <img alt="Jenny is a happy GuestReady Singapore host" src="{{ url('assets/v2/singapore_owner_3-2803697ab8339919bcb3f73dc6e47b2662fc80d33e1a65cb2d951710c80377af.jpg')}}" />
                    <p>Jenny Zhang</p>
                    <a href="/en-sg/homes/#home3">River Valley</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
              <div class="dots">
                <span data-card-id="0" class="select-card active"></span>
                <span data-card-id="1" class="select-card"></span>
                <span data-card-id="2" class="select-card"></span>
              </div>
              <div data-card-id="0" class="card-desc">
                <p>“Thanks to GuestReady I can profit off the apartments I own, without having to worry about checking in guests and arranging a helper to clean the apartment every time. GuestReady takes care of everything, so I have time for things that I enjoy doing.”
</p>
                <h5>David Chong</h5>
                <a href="/en-sg/homes/#home1">Tiong Bahru</a>
              </div>
              <div data-card-id="1" class="card-desc hidden">
                <p>“We tried renting out our place on Airbnb before with the help of our maid, but it turned out to be too much of a hassle. GuestReady’s Singapore team has been helpful throughout every step, and the income we generated covers a big part of our monthly rent.”
</p>
                <h5>Lucas and Christine</h5>
                <a href="/en-sg/homes/#home2">River Valley</a>
              </div>
              <div data-card-id="2" class="card-desc hidden">
                <p>“GuestReady took care of absolutely everything. From the moment I first reached out, they have been very helpful and effective with everything from taking pictures to communicating with guests. I would highly recommend them!”
</p>
                <h5>Jenny Zhang</h5>
                <a href="/en-sg/homes/#home3">River Valley</a>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="container text-center">
          <a class="btn btn-primary" href="/en-sg/homes/">Learn more about the Singapore homes we manage on Airbnb</a>
        </div>


    </section>

  <section class="management-section">
    <div class="container">
      <p class="section-title text-center">Airbnb Management in Singapore</p>
      <div class="divider"></div>
      <div class="row faq">
        <div class="col-md-6 block">
          <p>As the financial and medical hub for Southeast Asia and a popular stopover for travellers exploring the region, Airbnb listings in Singapore see a steady flow of guests checking in.
</p>
          <a class="faq" href="#" data-faq="faq1">
            <img src="{{ url('assets/v2/qs-dbe8653072f6d8640bf90286718a9c0b4170755e560e8fc466b945bf6a61c12e.png')}}" alt="Qs" />
            <span>How much does Airbnb Management cost?</span>
          </a>
          <div class="answ answ-opened" data-faq="faq1"><p>GuestReady offers homeowners two ways to earn income from their homes:</p> <ol>
  <li><strong>Percentage Service Fee</strong> - Homeowners will pay a fee from 18% of their rental income for the Airbnb management services. There will be additional charges for cleaning and laundry services.</li>
  <li><strong>Fixed Income Guarantee</strong> - Homeowners will be given a pre-determined monthly income from their short term rentals. Every month, GuestReady will pay homeowners a defined amount based on your property and unique pricing method. GuestReady understands the value of your property on Airbnb and we are confident to give you a fixed monthly rent.</li>
</ol>
</div>
          <a class="faq" href="#" data-faq="faq2">
            <img src="{{ url('assets/v2/qs-dbe8653072f6d8640bf90286718a9c0b4170755e560e8fc466b945bf6a61c12e.png')}}" alt="Qs" />
            <span>My property is not on Airbnb, can I use GuestReady?</span>
          </a>
          <div class="answ answ-opened" data-faq="faq2"><p>Most definitely! As long as you are keen on exploring short term rentals for your home, we will help you do the necessary. Get your home on Airbnb through GuestReady in 3 simple steps (link back to Airbnb management page)</p>
</div>
        </div>
        <div class="col-md-6 block">
          <p>Attracted by lower nightly rates and the desire for a &quot;local experience&quot;, travellers are increasingly favouring Airbnb over hotels in the Little Red Dot. Its not just apartments around Marina Bay that are in high demand, but heartland areas such as Joo Chiat and Tiong Bahru are also sought after.
</p>
          <a class="faq" href="#" data-faq="faq3">
            <img src="{{ url('assets/v2/qs-dbe8653072f6d8640bf90286718a9c0b4170755e560e8fc466b945bf6a61c12e.png')}}" alt="Qs" />
            <span>How can I earn more from my rental property through GuestReady?</span>
          </a>
          <div class="answ answ-opened" data-faq="faq3"><p>We have developed a unique pricing strategy that takes into consideration factors such as location, number of bedrooms, historical pricing data and many more factors to maximize your revenue per booking.</p>
</div>
          <a class="external-link" href="/en-sg/faq/">
            <img src="{{ url('assets/v2/qs-dbe8653072f6d8640bf90286718a9c0b4170755e560e8fc466b945bf6a61c12e.png')}}" alt="Qs" />
            <span>You have other questions? Go to FAQ</span>
</a>        </div>
      </div>
    </div>
  </section>

  <section class="refer-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="refer">
            <h4>Make up to $600 by introducing us to a new Airbnb host.<br>They’ll thank you, we promise!</h4>
            <a class="btn btn-orange" href="/en-sg/referral-programme/">Refer a host</a>
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
              <h4>Sign up for our <span>newsletter</span></h4>
              <input type="email" name="EMAIL" placeholder="Enter Email Address" id="mce-EMAIL">
              <input type="submit" id="mc-embedded-subscribe" value="Sign Up">

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