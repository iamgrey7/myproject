<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <!-- logo navbar -->
    <a class="navbar-brand logonav" href={{url('/home')}}><img src="../img/logo.jpg"></a>
    <a class="navbar-brand" href={{url('/home')}}>GREY.CO</a>
      
    <!-- navbutton responsive -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#navbarResponsive" aria-controls="navbarResponsive" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li 
          @if(Request::is('home')) class="nav-item active"
          @else class="nav-item"
          @endif>
          <a class="nav-link" href={{url('/home')}}>Home</a>
        </li>
        <li 
          @if(Request::is('profile')) class="nav-item active"
          @else class="nav-item"
          @endif>
          <a class="nav-link" href={{url('/profile')}}>Profile</a>
        </li>

        @if(Auth::user()->hasRole('manager'))
          <li 
            @if(Request::is('employee')) class="nav-item active"
            @else class="nav-item"
            @endif>
            <a class="nav-link" href={{url('/employees')}}>Data Pegawai</a>
          </li>
        @endif
        
        @if(Auth::user()->hasRole('manager'))
          <li 
            @if(Request::is('articles')) class="nav-item active"
            @else class="nav-item"
            @endif>
            <a class="nav-link" href={{url('/articles')}}>Artikel</a>
          </li>
        @endif

        @if(Auth::user()->hasRole('manager'))
        <li 
          @if(Request::is('gallery')) class="nav-item active"
          @else class="nav-item"
          @endif>
          <a class="nav-link" href={{url('/gallery')}}>Gallery</a>
        </li>
        @endif

        <li 
          @if(Request::is('contact')) class="nav-item active"
          @else class="nav-item"
          @endif>
          <a class="nav-link" href={{url('/contact')}}>Contact</a>
        </li>
    
        <li >         
          <a class="nav-link" href={{url('/logout')}}>Logout</a>
        </li>     
     
      </ul>
    </div>
  </div>
</nav>