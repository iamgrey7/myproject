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
        </ul>
      </div>
    </div>
  </nav>

  <!-- Headerimg -->
  <header class="bg-none mb-5">
    <img src="img/2.jpg">
  </header>

  <!-- Konten -->
  <div class="container">

    <div class="row">

      <!-- Konten 1 -->
      <div class="col-md-8 mb-5">
        <h2>What We Do</h2>
        <hr>
        <p>GREY.CO merupakan perusahaan terdepan di bidang jasa desain, programming, penulisan, 
        dan online marketing, dengan tenaga professional yang memiliki pengalaman lebih dari 10 tahun.</p>
        <h2>Our History</h2>
        <hr>
        <p>GREY.CO berdiri bulan Juli 2014 dengan tujuan memberi kesempatan pada freelancer 
        untuk berkarya, dan menjembatani individu atau institusi menemukan mitra kerja yang tepat.</p>
        
        <h2>Our Motto</h2>
        <hr>
        <p>Future of work merupakan motto GREY.CO Kami berkarya untuk masa depan. 
        Temukan ide-ide kreatif bersama para professional kami, dan kepuasan Anda menjadi 
        capaian terbesar kami.</p>
        <hr>      
        <a class="btn btn-primary btn-lg" href="profile.php">Selengkapnya &raquo;</a>
      </div>

      <!-- Konten 2 -->
      <div class="col-md-4 mb-5">
        <h2>Contact Us</h2>
            <ul>
              <li>Jl. Pajajaran No.23 - Bandung</li>
              <li>022-999876</li>
            </ul>
        <hr>        
      </div>

    <!-- /konten end -->
    </div>
  
    

  </div>


  <!-- Footer -->
  <footer class="py-2 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2019 By Egry Yudanegara </p>
    </div>
  </footer>

  
  <script src="{{ asset('/js/jquery/jquery.min.js') }}"></script> 
  <script src="{{ asset('/js/bootstrap/bootstrap.min.js') }}"></script>    

</body>

</html>
