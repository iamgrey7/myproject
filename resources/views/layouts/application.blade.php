<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <meta httpequiv="XUACompatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <title>Laravel 5</title> 


    <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/material/material.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/material/ripples.css') }}"/>
    {{-- <link rel="stylesheet" href="{{ asset('/css/custom/profil.css') }}"/> --}}

  
</head> 
<body style="padding-top:60px;"> 

    <!--bagian navigation--> 
    @include('shared.head_nav') 

    <!-- Bagian Content --> 
    <div class="container clearfix"> 
        <div class="row row-offcanvas row-offcanvas-left "> 
            
        <!--Bagian Kiri--> 
        @include("shared.left_nav") 
        
            <!--Bagian Kanan--> 
            <div id="main-content" class="col-xs-12 col-sm-9 main pull-right">
                <div class="panel-body"> 
                    @if (Session::has('error')) 
                        <div class="session-flash alert-danger"> 
                            {{Session::get('error')}} 
                        </div> 
                    @endif
                    @if (Session::has('notice')) 
                        <div class="session-flash alert-info"> 
                            {{Session::get('notice')}}
                        </div> 
                    @endif 
                    
                    @yield("konten") 
                </div> 
            </div> 
        </div>
    </div> 

<script src="{{ asset('/js/jquery/jquery.min.js') }}"></script> 
<script src="{{ asset('/js/bootstrap/bootstrap.js') }}"></script>   
<script src="{{ asset('/js/material/material.js') }}"></script>
<script src="{{ asset('/js/material/ripples.js') }}"></script>    
<script src="{{ asset('/js/custom/layout.js') }}"></script>  

</body> 
</html>