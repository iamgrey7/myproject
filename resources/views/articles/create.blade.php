

@extends("layouts.master") 


@section("konten")
    <div class="container">
        <h3>Tulis Artikel Anda Disini !</h3> 
        {!! Form::open([
            'route' => 'articles.store', 
            'method' => 'POST', 
            'files' => 'true',
            'class' => 'form-horizontal',   
            'enctype' => 'multipart/form-data'
            ]) 
        !!} 

        @include('articles.form') 
        {!! Form::close() !!}  
    </div>
 @endsection