@extends("layouts.application") 

@section("konten")
<h3>Edit Article</h3> 

{!! Form::model($article, ['route' => ['articles.update', $article->id], 
'method' => 'put', 'class' => 'form-horizontal', 'role' => 'form']) !!}

@include('articles.form') 
{!! Form::close() !!} 
@endsection