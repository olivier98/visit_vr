<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>virtual showroom</title>
    
        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
    
        <link href="{{asset('resources/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    
        <link href="{{asset('resources/assets/css/bootstrap-icons.css')}}" rel="stylesheet">
    
        <link href="{{asset('resources/assets/css/templatemo-festava-live.css')}}" rel="stylesheet">
    
        <!--
    
        TemplateMo 583 Festava Live
    
        https://templatemo.com/tm-583-festava-live
    
        -->
    
    </head>
</head>
<body>

    <main>
        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">Welcome to virtual showroom</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/ ">
                    VisIT
                </a>
        
                <a href="ticket.html" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>
        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/">Home</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Maps</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Pricing</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>
                    </ul>
                    <a href="{{ route('login') }}" class="btn custom-btn d-lg-block d-none">{{ __('Connexion') }}</a>
                </div>
            </div>
        </nav>
    </main>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div id="intro" class="bg-dark bg-gradient vh-100 shadow-1-strong">
    <div class="container d-flex align-items-center justify-content-center text-center h-100">
      <div class="text-white">
        <h1 class="mb-3">We can get started !</h1>
        <h5 class="mb-4 text-white">You are?</h5>
        <a class="btn btn-outline-light btn-lg m-2" href="/visitor-sign-in" role="button" rel="nofollow" target="_blank" >Start Visit</a>
        
      </div>
    </div>
  </div>
</div>

    <script src="{{asset('resources/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('resources/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('resources/assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('resources/assets/js/click-scroll.js')}}"></script>
    <script src="{{asset('resources/assets/js/custom.js')}}"></script>
</body>
</html>



