@extends("layouts.master")

@section("konten") 
<div class='container'>
    <div class='row'>

        <div class='col-md-8'>
            <!-- Jumbotron -->
            <div class="jumbotron">
                <h1>Daftar Artikel</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
                <p><a class="btn btn-lg btn-primary" href={!! url(route('articles.create')) !!}  
                    role="button">Buat Artikel !</a></p>
            </div>
        </div>
    
        <div class='col-md-4'>
            {{-- search artikel --}}
            <div class="card my-4">
                <h5 class="card-header">Cari Artikel</h5>
                <div class="card-body">
                    <div class="input-group">  
                           
                    {{-- <input type="text" class="form-control" 
                    placeholder="..."> 
                                                                           
                    <span class="input-group-btn">            
                        <a class="btn btn-secondary" 
                        href={!! url(route("articles.find")) !!} 
                        role="button">
                        Go!</a>
                    </span>     --}}                    

                    {!! Form::open(array(
                        // 'method' => 'post',
                        'route' => 'articles.search', 
                        'class'=>'form navbar-form navbar-right searchform')) !!}
                    {!! Form::text('search', null,
                           array('required',
                                'class'=>'form-control',
                                'placeholder'=>'kata kunci...')) !!}
                    {!! Form::submit('Search',
                                array('class'=>'btn btn-default')) !!}
                    {!! Form::close() !!}

                    
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="row"> 

        {{-- daftar artikel --}}
        @include('articles.list')

    </div>
     
</div>
 
@endsection