<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}" media="all">
<link rel="shortcut icon" href="#" type="image/x-icon">
<link rel="icon" href="#" type="image/x-icon">
<link rel="canonical" href="{{ asset('assets/css/dorang.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/gb_styles.css') }}">

 <!-- General CSS Files -->
 <link rel="stylesheet" href="{{asset ('assets/modules/bootstrap.min.css') }}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css">

 <!-- CSS Libraries -->
 {{-- DataTables --}}
 <link rel="stylesheet" href="{{ asset('assets/datatable/dataTables.bootstrap4.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/datatable/responsive.bootstrap4.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/datatable/buttons.bootstrap4.min.css') }}">

 <!-- Template CSS -->
 <link rel="stylesheet" href="assets/css/style.css">
 <link rel="stylesheet" href="assets/css/components.css">

 <!-- Template iziToast -->
 <link rel="stylesheet" href="{{ asset('assets/izitoast/iziToast.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/izitoast/iziToast.min.js') }}">

 {{-- SweetAlert --}}
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      @include('template.navbar')
      
      <div class="main-content">
        @yield('content')

      </div>
      @include('template.footer')
    </div>
  </div>

  <!-- bawaan web -->
<script src="{{ asset('assets/js/AJS.js') }}"></script>
<script src="{{ asset('assets/js/gb_scripts.js') }}"></script>
<script src="{{ asset('assets/js/jquery.divascookies.min.js') }}"></script>
<script src="{{ asset('assets/js/gb_scripts.js') }}"></script>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('assets/modules/popper.js')}}"></script>
  <script src="{{asset('assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('assets/modules/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/modules/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  {{-- DataTables --}}
  <script src="{{ asset('assets/datatable/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/datatable/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/datatable/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/datatable/responsive.bootstrap4.min.js') }}"></script>

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>

<script>
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '//s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
if (window != top) top.location.href = location.href;
jQuery(document).ready(function($){ $('img').removeAttr('width height'); });
var gaProperty = 'UA-120201777-1';
var disableStr = 'ga-disable-' + gaProperty;if (document.cookie.indexOf(disableStr + '=true') > -1) {window[disableStr] = true;}
function gaOptout() {document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2045 23:59:59 UTC; path=/';window[disableStr] = true;alert('Google Tracking has been deactivated');}
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-120201777-1', 'auto');ga('set', 'anonymizeIp', true);ga('send', 'pageview');
</script>

@stack('script')
</body>
</html>