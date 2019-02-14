

@foreach($articles as $article) 

<article class="row"> 
    <h1>{!! $article->title !!}</h1> 
    <p> {!! str_limit($article->content, 250) !!} 
        {!! link_to(route('articles.show', $article->id), 'Selengkapnya') !!} 
        {{-- <a href={!!url("articles.show", $article->id) !!}>Selengkapnya</a> --}}
    </p> 
</article>

@endforeach