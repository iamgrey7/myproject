@extends("layouts.master")

@section("konten") 
<div class='container'>
    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1>Daftar Artikel</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-primary" href={!! url(route('articles.create')) !!}  
            role="button">Buat Artikel Anda !</a></p>
    </div>
    <div class="row"> 

        {{-- daftar artikel --}}
        @include('articles.list')
        
    </div>

     
</div>
 
@endsection