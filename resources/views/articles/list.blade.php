

@foreach($articles as $article) 

<div class="col-lg-4">
    <h3>{!! $article->title !!}</h3>
    <p>{!! str_limit($article->content, 250) !!}</p>
    <a class="btn btn-secondary" 
    href={!!url(route("articles.show", $article->id)) !!} role="button">
    Selengkapnya &raquo;</a></p>
</div>

@endforeach