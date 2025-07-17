
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Comuna </title>
 
    {{-- STYLE SECTION --}}
    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    @yield('styles')
    {{-- .STYLE SECTION --}}

    <style>
        main {
            background-color: antiquewhite;
        }
    </style>
</head>
<body>
 
{{--Header --}}
@component('master.header')
@endcomponent
{{-- .Header --}}
 
{{--content --}}
<main>
    @yield('content')

    
    <section>
        <div class="container mt-4">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1>Galeria de Heróis Revolucionários</h1>
                    <p>Explore as vidas e legados de figuras icônicas que moldaram a história.</p>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <div class="container mt-4">
        <div class="row text-center">
            
            <div class="col-md-4 figuras">
                <img src="{{ asset('img/imgs/che.jpg') }}" alt="Che Guevara" class="img-fluid mb-2">
            </div>
            <div class="col-md-4 figuras">
                <img src="{{ asset('img/imgs/rosa.jpg') }}" alt="Rosa Luxenburgo" class="img-fluid mb-2">
                
            </div>
            <div class="col-md-4 figuras">
                <img src="{{ asset('img/imgs/engels.jpg') }}" alt="Friedrich Engels" class="img-fluid mb-2">

            </div>
        </div>
    </div>

     <div class="container mt-4">
        <div class="row text-center">
            
            <div class="col-md-4 figuras">
                <img src="{{ asset('img/imgs/mao.jpg') }}" alt="Mao Zedong" class="img-fluid mb-2">
            </div>
            <div class="col-md-4 figuras">
                <img src="{{ asset('img/imgs/angela.jpg') }}" alt="Angela Davis" class="img-fluid mb-2">

            </div>
            <div class="col-md-4 figuras">
                <img src="{{ asset('img/imgs/fidel.jpg') }}" alt="Fidel Castro" class="img-fluid mb-2">

            </div>
        </div>
    </div>
   


</main>
 
{{-- .content --}}
 
@component('master.footer')
@endcomponent
 
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
@yield('scripts')
{{-- .SCRIPTS SECTION --}}
</body>
</html>
