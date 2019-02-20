@extends("layouts.master") 



@section("konten")
<div class="container">
<h3>Edit Article</h3> 

{!! Form::model($article, [
    'route' => [
    'articles.update', $article->id], 
    'method' => 'put',     
    'role' => 'form',
    'files' => 'true',
    'class' => 'form-horizontal',   
    'enctype' => 'multipart/form-data'
    ]) 
!!}

{{-- isi form --}}
@include('articles.form')


{!! Form::close() !!} 
</div>
@endsection

