@extends("layouts.master")

@section("konten") 
<div class='container'>      
       
        @if (count($articles) === 0)
            <div class="errorpage">
                <h4>Artikel tidak dapat ditemukan</h4>
                <a class="btn btn-primary" 
                href={!!url(route("articles.index")) !!} role="button">
                Kembali</a>
            </div>
    
        @elseif (count($articles) >= 1)
            <div class='row' style="height:100px;">
                <div class='col-lg-12'>
                    <h4>Hasil dari pencarian kata kunci : 
                        {!! $query !!}
                    </h4>
                    <hr>
                </div>
                
            </div>
            <div class='row'>

                @foreach($articles as $article)             
                <div class="col-lg-4 searchpage">
                    <h3>{!! $article->title !!}</h3>
                    <p>{!! str_limit($article->content, 250) !!}</p>
                    <a class="btn btn-secondary" 
                    href={!!url(route("articles.show", $article->id)) !!} role="button">
                    Selengkapnya &raquo;</a>
                </div>
                @endforeach

            </div>
            
        @endif

</div>
 
@endsection