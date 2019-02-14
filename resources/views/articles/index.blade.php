@extends("layouts.application")

@section("konten") 
<div class="row"> 
    <h2 class="pull-left" style="margin-left:20px">List Articles</h2>      

    {{-- <a href={!! url('articles.create') !!} 
    class="pull-right btn btn-raised btn-primary">
    Buat Artikel</a> --}}

    {!! link_to(route("articles.create"), "Create", 
    ["class"=>"pull-right btn btn-raised btn-primary"]) !!}
    
</div> 
@include('articles.list') 

@endsection