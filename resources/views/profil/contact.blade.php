@extends("profil.master")


{{-- Judul --}}
@section("title")
  Kontak Kami
@endsection


{{-- Section Konten --}}
@section("konten")
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


{{-- Section Script --}}
@section("script")
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
@endsection
