<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Homepage</title>

  <!-- CSS -->  
  <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap.css') }}"/>
  <link rel="stylesheet" href="{{ asset('/css/custom/profil.css') }}"/>

</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <!-- logo -->
      <a class="navbar-brand" href="home.php"><img src="img/logo.jpg"></a>
      <a class="navbar-brand" href="home.php">GREY.CO</a>
        
      <!-- button responsive -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#navbarResponsive" aria-controls="navbarResponsive" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">

            <li class="nav-item {{Request::path() == '/home' ? 'active' : '';}}">
                <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item {{Request::path() == '/profile' ? 'active' : '';}}">
                <a class="nav-link" href="{{url('/profile')}}">Profile</a>
            </li>
            <li class="nav-item {{Request::path() == '/gallery' ? 'active' : '';}}">
                <a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
            </li>
            <li class="nav-item {{Request::path() == '/contact' ? 'active' : '';}}">
                <a class="nav-link" href="{{url('/contact')}}">Contact</a>
            </li>            
        </ul>
      </div>
    </div>
  </nav>



<!-- old style
  <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href={{url('/home')}}>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{url('/profile')}}>Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{url('/gallery')}}>Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{url('/contact')}}>Contact</a>
          </li>
        </ul> -->