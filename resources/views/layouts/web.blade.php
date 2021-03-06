<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }} - {{ config('app.name', 'Laravel') }}</title>
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('plugins/font-awsome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="{{ asset('plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="{{ asset('plugins/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/slick/slick-theme.css') }}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{ asset('storage') }}/@setting('app.favicon')" rel="shortcut icon">

  <style>
    body {
      font-family: Satoshi,sans-serif !important;
    }
  </style>
  @if(!empty($styles))
  {{ $styles }}
  @endif

</head>

<body class="body-wrapper">
		<!-- loader -->
	        <div class="loader">
                <div id="loading-bar-spinner" class="spinner">
                        <div class="spinner-icon"></div>
                </div>
	        </div>
        <!-- loader -->
@include('pages.components.navbar')

{{ $slot }}

<!--============================
=            Footer            =
=============================-->

<footer class="footer-main">
    <div class="container">
      <div class="row d-flex align-items-center">
          <div class="col-md-6">
              <h3 class="text-white">@event(alias)</h3>
              <p class="text-white">@event(name)</p>
          </div>
          <div class="col-md-6">
              <p class="text-white" style="text-align: right">@event(start_date->format('d M')) - @event(end_date->format('d M')) @event(start_date->format('Y')) | @event(location)</p>
          </div>
      </div>
      <hr class="footer-hr"/>
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="block text-center">
            <ul class="social-links-footer list-inline">
            @foreach(\App\Models\Event::find(1)->event_social_medias as $event_social_media)
              <li class="list-inline-item">
                <a href="{{ $event_social_media->social_link }}"><i class="fa fa-{{ $event_social_media->social_type }}"></i></a>
              </li>
            @endforeach
            </ul>
          </div>
          
        </div>
      </div>
    </div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="copyright-text">
          <p><a href="#">@event(alias)</a> &#169; @event(start_date->format('Y')) All Right Reserved</p>
        </div>
      </div>
      <div class="col-md-6">
          <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
      </div>
    </div>
  </div>
</footer>

  <!-- JAVASCRIPTS -->
  <!-- jQuey -->
  <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
  <!-- Popper js -->
  <script src="{{ asset('plugins/popper/popper.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- Smooth Scroll -->
  <script src="{{ asset('plugins/smoothscroll/SmoothScroll.min.js') }}"></script>  
  <!-- Isotope -->
  <script src="{{ asset('plugins/isotope/mixitup.min.js') }}"></script>  
  <!-- Magnific Popup -->
  <script src="{{ asset('plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
  <!-- Slick Carousel -->
  <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>  
  <!-- SyoTimer -->
  <script src="{{ asset('plugins/syotimer/jquery.syotimer.min.js') }}"></script>
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAguZAbGQJ7Ljbz9os63jTWwhq0R0s858E"></script>
  <script src="{{ asset('plugins/map/gmap.js') }}"></script> 
  <!-- Custom Script -->
  <script src="{{ asset('js/custom.js') }}"></script>

  @if(!empty($scripts))
  {{ $scripts }}
  @endif
</body>
</html>
