@extends('layouts.app')

@section('content')
<div class="container price-calculator-result" style="margin-top: 110px;">
  <div class="wrapper">
    <img class="img-responsive" src="http://localhost/gues/public/assets/price.png" alt="Price ok">
    <div class="content">
      <div class="header">
        <div style="position:relative;top:40px;">{{ __('welcome.thanks') }}</div>
      </div>
    </div>
  </div>
</div>
@endsection