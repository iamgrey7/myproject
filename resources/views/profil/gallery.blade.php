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
          <li class="nav-item">
            <a class="nav-link" href={{url('/home')}}>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{url('/profile')}}>Profile</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href={{url('/gallery')}}>Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{url('/contact')}}>Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Baris Sidebar dan Konten -->
    <div class="row">       
     
        <!-- Content -->
        <div >                         
                    
            <h1 style="text-align:center">Our Gallery</h1>        
            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/gal1.jpg">
                    <img src="img/gal1.jpg"></a>
                    <div class="desc">Project 1</div>
                </div>
            </div>


            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/gal2.jpg">
                    <img src="img/gal2.jpg"></a>
                    <div class="desc">Project 2</div>
                </div>                    
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/gal2.jpg">
                    <img src="img/gal2.jpg"></a>
                    <div class="desc">Project 3</div>
                </div>                    
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/gal3.jpg">
                    <img src="img/gal3.jpg"></a>
                    <div class="desc">Project 4</div>
                </div>                    
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/gal4.jpg">
                    <img src="img/gal4.jpg"></a>
                    <div class="desc">Project 5</div>
                </div>                    
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/gal5.jpg">
                    <img src="img/gal5.jpg"></a>
                    <div class="desc">Project 5</div>
                </div>                    
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/gal6.jpg">
                    <img src="img/gal6.jpg"></a>
                    <div class="desc">Project 6</div>
                </div>                    
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/gal7.jpg">
                    <img src="img/gal7.jpg"></a>
                    <div class="desc">Project 7</div>
                </div>                    
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/gal8.jpg">
                    <img src="img/gal8.jpg"></a>
                    <div class="desc">Project 8</div>
                </div>                    
            </div>

        </div>
        
        <div class="clearfix"></div>

    </div>

   

  <!-- Footer -->
  <footer class="py-2 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2019 By Egry Yudanegara </p>
    </div>
  </footer>




</body>
</html>
