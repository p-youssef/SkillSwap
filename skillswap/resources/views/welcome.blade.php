<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SkillSwap</title>
        <!-- https://coolors.co/palette/780000-c1121f-fdf0d5-003049-669bbc -->
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Roboto -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&family=Lexend+Tera:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&family=Righteous&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300;1,300&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
        <!-- Styles / Scripts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        @vite('resources/css/app.css')

    </head>
    <body class="row">
        <div class="background-image-div" style="background-image:url('{{ asset('images/cover-1.jpg') }}') ;"></div>

            <div class="row m-0 opacity-lg-99 col-12 col-lg-6 align-content-between align-content-center justify-content-start text-container">
                <div class="w-100">
                    @include('elements.navbar')
                </div>
                <div>
                    <div class="col-12">
                        <img style="height: 5em;" src="{{ asset('images/logo.png') }}" alt="">
                        <img style="height: 5em;" class="w-2" src="{{ asset('images/typography-logo.png') }}" alt="">
                    </div>
                    <h1  class="col-12">Connect, learn, and grow by exchanging your skills with others. Whether you're a designer, developer, writer, or teacher — there's someone out there waiting to swap skills with you.</h1>
                
                    <a href="/auth/login" class="btn btn-lg btn-color-1">Login</a>
                    <a href="/auth/signup" class="btn btn-lg btn-color-2">Signup</a>
                </div>
                <div>
                    <p>2025</p>
                </div>
            </div>
            
            <div  class="d-flex col-12 col-sm-6 align-items-center justify-content-center text-center" >
                
            </div>
  
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</html>
