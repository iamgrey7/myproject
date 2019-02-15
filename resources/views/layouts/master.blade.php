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
  <link rel="stylesheet" href="{{ asset('/css/custom/profil.css') }}"/>
  <link rel="stylesheet" href="{{ asset('/fa/css/font-awesome.css') }}"/>

</head>

<body>

  <!-- Navbar -->
  @include("shared.navbar")

  <!-- Konten -->
  @yield("konten")
  <!-- /konten end -->


  <!-- Footer -->
  @include("shared.footer")

  {{-- Script --}}
  @yield("script")

<script src="{{ asset('/js/jquery/jquery.min.js') }}"></script> 
<script src="{{ asset('/js/bootstrap/bootstrap.min.js') }}"></script>    

</body>
</html>
