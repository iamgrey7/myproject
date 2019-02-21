@extends("layouts.master")

@section("konten") 
<div class='container'>
    <div class='row'>

        <div class='col-lg-12'>
            {{-- search artikel --}}
            <div class="card my-4">
                <h5 class="card-header">Cari Artikel</h5>
                <div class="card-body">
                    <div class="">
                        <input type="text" id="keywords" autocomplete="off">
                        <button id="btn_search" class="btn btn-primary">
                            Cari
                        </button>
                    </div>

                    <p>Sort articles by : 
                        <button id="id">ID &nbsp;<i id="ic-direction">
                        </i></button>
                    </p>
                    <br />
                    <input id="direction" type="hidden" value="asc" />

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
        <div id="data-content"> 

            {{-- daftar artikel --}}
            @include('articles.list')     
    
        </div>
    </div>
    
</div>
 
@endsection


@section("script")
<script> 

//function keyup delay
function debounce(fn, duration) {
  var timer;
  return function(){
    clearTimeout(timer);
    timer = setTimeout(fn, duration);
  }
}

$('#keywords').on('keyup', debounce(function(){ 
    $.ajax({ 
        url : '/articles', 
        type : 'GET', 
        dataType : 'json', 
        data : { 
            'keywords' : $('#keywords').val(), 
            // 'direction' : $('#direction').val() 
        }, success : function(data) { 
            $('#data-content').html(data['view']); 
            $('#keywords').val(data['keywords']); 
            // $('#direction').val(data['direction']); 
        }, error : function(xhr, status) { 
            console.log(xhr.error + " ERROR STATUS : " + status); 
        }, complete : function() { 
            alreadyloading = false; 
        } 
    }); 
}, 500)); 
</script>

<script> 
$(document).ready(function() { 
    $(document).on('click', '.pagination a', function(e) { 
        get_page($(this).attr('href').split('page=')[1]); 
        e.preventDefault(); 
    }); 
});

function get_page(page) { 
    $.ajax({
        url : '/articles?page=' + page, 
        type : 'GET', 
        dataType : 'json', 
        data : { 
            'keywords' : $('#keywords').val(), 
            'direction' : $('#direction').val() 
        } success : function(data) { 
            $('#data-content').html(data['view']); 
            $('#keywords').val(data['keywords']); 
            $('#direction').val(data['direction']); 
        }, error : function(xhr, status, error) { 
            console.log(xhr.error + "\n ERROR STATUS : " + status + "\n" + error); 
        }, complete : function() { 
            alreadyloading = false; 
        } 
    }); 
} 
</script>

<script>
// <!-- this js for handle ajax sorting --> 
$(document).ready(function() { 
    $(document).on('click', '#id', function(e) { 
        sort_articles(); e.preventDefault(); 
        }); 
    }); 

function sort_articles() { 
    $('#id').on('click', function() { 
        $.ajax({
            url : '/articles', 
            type : 'GET', 
            dataType : 'json', 
            data : { 
                'keywords' : $('#keywords').val(), 
                'direction' : $('#direction').val() 
            }, success : function(data) { 
                $('#data-content').html(data['view']); 
                $('#keywords').val(data['keywords']); 
                $('#direction').val(data['direction']); 
                if(data['direction'] == 'asc') { 
                    $('i#ic-direction').attr({
                        class: "fa fa-arrow-up"
                    }); 
                } else { 
                    $('i#ic-direction').attr({
                        class: "fa fa-arrow-down"
                    }); 
                } 
            }, error : function(xhr, status, error) { 
                console.log(xhr.error + "\n ERROR STATUS : " + status + "\n" + error);
            }, complete : function() { 
                alreadyloading = false; 
            } 
        }); 
    }); 
} 
</script>



@endsection