

@extends("layouts.master") 


@section("konten")
    <div class="container">
        <h3>Tulis Artikel Anda Disini !</h3> 
        {!! 
            Form::open([
                'route' => 'articles.store', 
                'class' => 'form-horizontal', 
                'role' => 'form']) 
        !!} 
        @include('articles.form') 
        {!! Form::close() !!}  
    </div>
 @endsection