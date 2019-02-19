@extends("layouts.master")

@section("konten") 
<div class='container' style="margin-bottom:40px">      
       
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
                    
                    @if(isset($query))
                        <h4>Hasil dari pencarian katakunci : {!! $query !!}</h4>
                    @else
                        <h4>Hasil dari penyortiran artikel : {!! $action !!}</h4>    
                    @endif
                    </h4>
                    <hr>
                </div>
                
            </div>
            <div class='row'>

                @foreach($articles as $article)             
                <div class="col-lg-12">                    
                    <h3>{!! $article->title !!}</h3>
                    <i>Ditulis pada : {!! $article->created_at !!}</i>
                    <p></p>                   
                    <p>{!! str_limit($article->content, 250) !!}</p>
                    <a class="btn btn-secondary" 
                    href={!!url(route("articles.show", $article->id)) !!} role="button">
                    Selengkapnya &raquo;</a>
                    <hr>
                </div>                
                @endforeach               

            </div>            
        @endif

        {{-- {{ $articles->links() }}      --}}
</div>
 
@endsection