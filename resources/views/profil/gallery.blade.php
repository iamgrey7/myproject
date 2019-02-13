@extends("profil.master")


{{-- Judul --}}
@section("title")
  Galeri
@endsection


{{-- Konten --}}
@section("konten")
<div class="container">       

    <div class="gallerykonten">                         
                
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
@endsection

