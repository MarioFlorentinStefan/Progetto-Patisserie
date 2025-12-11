<nav id="mainNav" class="navbar navbar-expand-lg  navbar-dark fixed-top NavCustom">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('welcome')}}"><img src="/images/logo.png" alt="" class="CustomLogo img-fluid rounded  d-block mx-auto"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mx-auto mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link customLink " aria-current="page" href="{{route('welcome')}}"><span>HomePage</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link customLink" href="{{route('article.index')}}"><span>Articoli</span></a>
        </li>
        @auth 
        <li class="nav-item">
          <a class="nav-link customLink" href="{{route('article.create')}}"><span>Crea Articolo</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link customLink" href="{{route('product.create')}}"><span>Crea Prodotto</span></a>
        </li>
        @endauth
        <li class="nav-item">
          <a class="nav-link customLink" href="{{route('product.index')}}"><span>Prodotti</span></a>
        </li>
        
      </ul>
      
      <!-- Default dropstart button -->
      <div class="btn-group dropstart ">
        <button type="button" class="btn BtnUser dropdown-toggle NavCustom" data-bs-toggle="dropdown" aria-expanded="false">
          @auth 
            Ciao, {{Auth::user()->name}}
          @else
          <i class="fa-solid fa-user icon"></i>
          @endauth
        </button>
        
        <ul class="dropdown-menu NavCustom">
          <!-- Dropdown menu links -->
          @guest
            <li><a class="dropdown-item customBgDrowdown tx" href="{{route('login')}}">Log-In</a></li>
            <li><a class="dropdown-item customBgDrowdown tx" href="{{route('register')}}">Register</a></li>
            @else
            <li><a class="dropdown-item customBgDrowdown tx" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Log-out</a></li>
            <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">
              @csrf
            </form>
          @endguest  
        </ul>
      </div>



      {{-- <ul class="navbar-nav px-3 dropwdown-center">
        <li class="nav-item dropdown  ">
          <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @auth 
            Ciao, {{Auth::user()->name}}
            @else 
            
            <i class="fa-solid fa-user"></i>
            
            @endauth
          </a>
          <ul class="dropdown-menu  NavCustom">
            @guest
            <li><a class="dropdown-item customBgDrowdown" href="{{route('login')}}">Log-In</a></li>
            <li><a class="dropdown-item customBgDrowdown" href="{{route('register')}}">Register</a></li>
            @else
            <li><a class="dropdown-item customBgDrowdown" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Log-out</a></li>
            <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">
              @csrf
            </form>
            @endguest  
          </ul>
        </li>
      </ul> --}}
    </div>
  </div>
</nav>