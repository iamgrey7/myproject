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
          <li class="nav-item active">
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
    
  <!-- Konten -->
  <div class="container">

    <!-- Header profil -->
    <header class="jumbotron my-4">
        <img class="profileimg" src="img/it.jpg" >
      <h1 class="display-4">Profil Perusahaan</h1>
      <p class="lead">  Future of work merupakan motto GREY.CO Kami berkarya untuk masa depan. 
        Temukan ide-ide kreatif bersama para professional kami, dan kepuasan Anda menjadi 
        capaian terbesar kami.</p>
        <a href="contact.php" class="btn btn-primary btn-lg">Gabung !</a>
    </header>

    <!-- Deskripsi -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-2 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2019 By Egry Yudanegara </p>
    </div>

  </footer>


  <script src="plugin/jquery/jquery.min.js"></script>
  <script src="plugin/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
