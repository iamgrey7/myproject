<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield("title")</title>

  <!-- CSS -->  
  <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap.css') }}"/>
  <link rel="stylesheet" href="{{ asset('/fa/css/font-awesome.min.css') }}"/> 
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}"/>
  <link rel="stylesheet" href="{{ asset('icheck/square/yellow.css') }}"/>
  <link rel="stylesheet" href="{{ asset('/toastr/toastr.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('/css/custom/profil.css') }}"/>

  @yield("head")

</head>

<body>

  <!-- Navbar -->
  @include("shared.navbar")

  <!-- Konten -->
  @yield("konten")
  <!-- /konten end -->


  <!-- Footer -->
  @include("shared.footer")

 

<script src="{{ asset('/js/jquery/jquery.min.js') }}"></script> 
{{-- bslama --}}
{{-- <script src="{{ asset('/js/bootstrap/bootstrap.min.js') }}"></script> --}}
<script src="{{ asset('/js/bs-3.4.1/bootstrap.min.js') }}"></script>
<script src="{{ asset('/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('/icheck/icheck.min.js') }}"></script> 

 {{-- Script --}}
 @yield("script")

</body>
</html>
