@extends("layouts.application") 
@section("konten") 
<h3>Create a Article</h3> 
    {!! 
        Form::open([
            'route' => 'articles.store', 
            'class' => 'form-horizontal', 
            'role' => 'form']) 
    !!} 
@include('articles.form') 
    {!! Form::close() !!}   
@endsection