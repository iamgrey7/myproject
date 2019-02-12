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
          <li class="nav-item">
            <a class="nav-link" href={{url('/gallery')}}>Gallery</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href={{url('/contact')}}>Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


    <!-- Konten -->
    <div class="container">  
        <h1 class="judulkiri">Contact Us</h1>  
        <p>Silahkan isi form dibawah ini untuk menghubungi administrator. </p>
        <p>Kami akan langsung merespon pesan yang anda kirimkan.</p> 

        <div class="containerform">
            <form id="form_kontak">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap Anda ..">
                <label for="nama">E-Mail</label>

                <!-- <input type="email" id="email" name="email" placeholder="Alamat E-Mail .."> -->
                <input type="text" id="email" name="email" onblur="validasiEmail(this)"
                placeholder="Alamat E-Mail ..">                         

                <label for="pesan">Pesan</label>
                <textarea id="pesan" name="pesan" placeholder="Silahkan tulis pesan anda .." 
                style="height:200px"></textarea>

                <!-- <input type="submit" value="Kirim Pesan"> -->
                <button class="kirim" id="btn_kirim" name="btn_kirim" onClick="validasi()"> Kirim Pesan</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
  <footer class="py-2 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2019 By Egry Yudanegara </p>
    </div>
  </footer>


<script type="text/javascript">

    function validasiEmail(email){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(email.value) == false) 
        {
            alert('Email yang anda input salah');
            email.value = "";
            // email.focus();
            return false;
        } else {
            return true;
        }
            
    }

   
    function validasi(){
        var name = document.getElementById("nama").value;
        var email = document.getElementById("email").value;
        var pesan = document.getElementById("pesan").value;
        
        if (name == ""){
            alert ("Cantumkan nama anda");
            // nama.focus();
        } else if (email ==""){
            alert ("Silakan isi email anda");           
            // email.focus();
        } else if (pesan == ""){
            alert("Tuliskan pesan anda kepada kami");
            // pesan.focus();
        } else {          
            alert(
                "Pesan anda telah dikirim \n"+
                "Nama : "+name+"\n"+              
                "E-Mail : "+email+"\n"+
                "Pesan : "+pesan
                );     
        }  
    };

</script>


</body>
</html>
