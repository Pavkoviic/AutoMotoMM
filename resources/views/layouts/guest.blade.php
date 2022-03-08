{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
 --}}

 <!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AutoMoto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('assets/style.css') }}">
    @livewireStyles
</head>

    
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
            <div class="container">
              <img src="{{asset('assets/Slike/slikazanavbar.png')}}" width="100" height="50" class="d-inline-block align-top" alt="AutoMoto">
              <a class="navbar-brand" href="/">AutoMoto</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link" href="/aboutus">O nama</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contactus">Kontaktirajte nas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/shop">Shop</a>
                  </li>

                </ul>

                  @if(Route::has('login'))
                        @auth
                            @if(Auth::user()->utype === 'ADM')
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('admin.dashboard')}}" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                                  My Account ({{Auth::user()->name}})
                                </a>

                                <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="{{ route('admin.dashboard')}}">Dashboard</a>
                                  <a class="dropdown-item" href="{{ route('admin.products')}}">Svi Proizvodi</a>
                                  <a class="dropdown-item" href="{{ route('admin.contact')}}">Kontaktirajte nas poruke</a>
                                  <a class="dropdown-item" href="{{ route('logout')}}"onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                                  <form id="logout-form" method="POST" action="{{ route('logout')}}">
                                    @csrf
                                  </form>
                                </div>
                              </div>  
                                
                            @else
            
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('admin.dashboard')}}" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                                  My Account ({{Auth::user()->name}})
                                </a>

                                <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="{{ route('user.dashboard')}}">Dashboard</a>
                                  <a class="dropdown-item" href="{{ route('logout')}}"onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                                  <form id="logout-form" method="POST" action="{{ route('logout')}}">
                                    @csrf
                                  </form>
                                </div>
                              </div>  
                                  
                            @endif
                            

                        @else
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}"> Prijavi se</a>
                           </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}"> Registriraj se</a>
                            </li>
                        </ul>

                        @endif
                    @endif
              </div>
            </div>
        </nav>
    </header>
    
    {{$slot}}


    <footer>
            <nav class="navbar navbar-dark fixed-bottom bg-dark text-light">
                <div class="container ">
                    <p1 class="center">AutoMoto</p1>
                </div>
            </nav>
    </footer>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/index.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    @livewireScripts
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</body>
</html>