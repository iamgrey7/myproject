@extends("layouts.master")

@section("konten") 
<div class='container'>
    <div class='row'>

        <div class='col-md-8'>
            <!-- Jumbotron -->
            <div class="jumbotron">
                <h1>Daftar Artikel</h1>
                <p class="lead">Berikut adalah koleksi artikel yang kami buat
                    . Silakan untuk mengunduh artikel yang anda anggap berguna, atau
                    mungkin anda ingin menulis artikel buatan anda sendiri ?</p>
                <p><a class="btn btn-lg btn-primary" href={!! url(route('articles.create')) !!}  
                    role="button">
                    <i class="fa fa-pencil fw"></i> Buat Artikel</a></p>
            </div>
        </div>
    
        <div class='col-md-4'>
            {{-- search artikel --}}
            <div class="card my-4">
                <h5 class="card-header">Cari Artikel</h5>
                <div class="card-body">
                    
                    {!! Form::open(array(
                        // 'method' => 'post',
                        'route' => 'articles.search', 
                        'class'=>'form searchform')) !!}
                    {!! Form::text('search', null,
                           array('required',
                                'class'=>'form-control',
                                'placeholder'=>'kata kunci...')) !!}
                    <button type="submit" class="btn btn-primary">Cari</button>
                    {{-- {!! Form::submit('Cari',
                                array('class'=>'btn btn-primary')) !!} --}}
                    {!! Form::close() !!}
                    
                    <div class="">
                        <p>Sortir berdasarkan : </p>
                        {!! Form::open(array(                                                              
                            'route' => 'articles.sort' ))
                        !!}
                        <div class="btn-group" role="group" aria-label="sortir">                            
                            <button type="submit" class="btn btn-info"
                            name='action' value="newest">Terbaru</button>
                            <button type="submit" class="btn btn-info"
                            name='action' value="oldest">Terlama</button>                            
                        </div>
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
    <div class="row align-center" align:center>            
        {{ $articles->links() }}
    </div>
     
</div>
 
@endsection