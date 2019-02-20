@extends("layouts.master")

@section("konten") 
<div class='container'>
    <div> 
        <img src={{ asset($article->image )}} height="150">  
        <h1>{!! $article->title !!}</h1> 
        <p>{!! $article->content !!}</p> 
        <h5><strong><i>By {!! $article->author !!}</i></strong> </h5>
        <div class='row'>
            <a href={{ url("articles/$article->id/edit") }} 
                class="btn btn-warning pull-left">Edit</a>
            <a href={{ url("articles/$article->id/edit") }} 
                class="btn btn-warning pull-left">Edit</a>    
        </div>
        
    </div> 

    {{-- section komentar --}}

    
    {{-- Form isian komentar --}}

    <div class="card my-4">
        <h5 class="card-header">Beri Komentar Anda :</h5>
        <div class="card-body">
            {!! Form::open([
                'route' => 'comments.store', 
                'class' => 'form-horizontal', 
                'role' => 'form']) 
            !!} 
            
                {{-- input hidden article id --}}
                <div class="form-group" style='display:none'>
                    <div class="col-md-12">
                        {!! Form::label('article_id', 'Title',array(
                            'class' => 'col-lg-3 control-label')) 
                        !!}
                        {!! Form::text('article_id', $value = $article->id, array(
                            'class' => 'form-control', 'readonly')) 
                        !!} 
                    </div> 
                    {{-- <div class="clear"></div>                    --}}
                </div>

                {{-- input nama user --}}
                <div class="form-group">   
                    <div class='col-md-12'>
                         {!! Form::label('user', 'Nama Anda', array(
                            'class' => 'control-label'))
                        !!}          
                        {!! Form::text('user', null, array(
                            'class' => 'form-control')) 
                        !!} 
                    </div>      
                </div>
             
                {{-- input isi komentar --}}
                <div class="form-group">
                    <div class="col-md-12"> 
                    {!! Form::label('content', 'Komentar', 
                    array('class' => 'control-label')) !!} 

                    {!! Form::textarea('content', null, array(
                        'class' => 'form-control', 
                        'rows' => 5, 
                        'autofocus' => 
                        'true')) 
                    !!} 

                    {!! $errors->first('content') !!} 
                    </div>                    
                </div>  
                
                {{-- button publish --}}
                <div class="form-group"> 
                    <div class="col-lg-3">
                    </div> 
                    <div class="col-lg-9">
                        {!! Form::submit('Kirim Komentar', array(
                            'class' => 'btn btn-primary')) !!} 
                    </div>                    
                </div>

            {!! Form::close() !!}
        </div>
    </div>
  
    {{--  tampilkan komentar --}}
    @foreach($comments as $comment)         
        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <h6 class="mt-0">{!! $comment->user !!}</h6>
                <p>
                    {!! $comment->content !!}
                </p>
            </div>
        </div>
    @endforeach

  
</div>

@endsection
