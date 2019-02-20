
{{-- input field judul --}}
<div class="form-group"> 
    {!!  Form::label('title', 'Judul', 
    array('class' => 'col-lg-3 control-label')) !!} 
    <div class="col-lg-9"> 
        {!! Form::text('title', null, 
        array('class' => 'form-control', 'autofocus' => 'true')) !!} 
        <div class="text-danger">
            {!! $errors->first('title') !!}
        </div>
    </div> 
    <div class="clear"></div> 
</div>

{{-- input field penulis --}}
<div class="form-group"> 
        {!!  Form::label('author', 'Penulis', 
        array('class' => 'col-lg-3 control-label')) !!} 
        <div class="col-lg-9"> 
            {!! Form::text('author', null, 
            array('class' => 'form-control', 'autofocus' => 'true')) !!} 
            <div class="text-danger">
                {!! $errors->first('author') !!}
            </div>
        </div> 
        <div class="clear"></div> 
    </div>

{{-- textarea isi artikel --}}
<div class="form-group"> 
    {!! Form::label('content', 'Konten Artikel', array('class' => 'col-lg-3 control-label')) !!} 
    <div class="col-lg-9"> 
        {!! Form::textarea('content', null, array('class' => 'form-control', 'rows' => 10)) !!} 
        <div class="text-danger">
        {!! $errors->first('content') !!}
        </div>
    </div> 
    <div class="clear"></div> 
</div> 

{{-- input file gambar --}}
<div class="form-group">
    <label class="col-lg-3" for="userfile">File Gambar Artikel</label>
    <div class="col-lg-9">
        {!! Form::file("userfile",null,[
            'class' => 'form-control'
        ]) !!}
    </div>    
    <div class="clear"></div> 
</div>


{{-- button submit --}}
<div class="form-group">
    <div class="col-lg-3"></div> 
    
    <div class="col-lg-9"> 
        {!! Form::submit('Kirim', array(
            'class' => 'btn btn-lg btn-primary')) !!} 
        {!! link_to(route('articles.index'), 
        "Batal", ['class' => 'btn btn-lg btn-secondary']) !!} 
    </div> 
    <div class="clear"></div> 
</div>
