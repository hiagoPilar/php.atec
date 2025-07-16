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
</head>
<body>
 
{{--Header --}}
@component('master.header')
@endcomponent
{{-- .Header --}}
 
{{--content --}}
<main>
    @yield('content')
    <img src="{{ asset('img/comunistas.jpeg') }}" class="img-fluid banner-img" style="width: 100%; height: 800px;" alt="Comunistas">

    <div class="container mt-4">
        <div class="row text-center">
            <div class="col-md-4 figuras">
                <img src="{{ asset('img/marx.jpg') }}" alt="Karl Marx" class="img-fluid mb-2">
                <h2>Karl Marx</h2>
                <p>Karl Marx foi um filósofo, economista e sociólogo alemão, conhecido por ser um dos fundadores do socialismo científico.</p>
                <a href="" class="btn btn-primary">Saiba mais</a>
            </div>
            <div class="col-md-4 figuras">
                <img src="{{ asset('img/lenin.jpg') }}" alt="Vladimir Lenin" class="img-fluid mb-2">
                <h2>Vladimir Lenin</h2>
                <p>Vladimir Lenin foi um revolucionário e político russo, líder da Revolução de Outubro e fundador do Estado soviético.</p>
                <a href="" class="btn btn-primary">Saiba mais</a>
            </div>
            <div class="col-md-4 figuras">
                <img src="{{ asset('img/kollontai.jpg') }}" alt="Alexandra Kollontai" class="img-fluid mb-2">
                <h2>Alexandra Kollontai</h2>
                <p>Alexandra Kollontai foi uma revolucionária e política russa, conhecida por seu trabalho em prol dos direitos das mulheres e sua atuação no governo soviético.</p>
                <a href="" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>
    </div>



    <section class="russa">

         <div class="container mt-4">
            <div class="row text-center">
                <div class="col-md-6 figuras2">
                    <h2>Revolução Russa</h2>
                    <p>A Revolução Russa de 1917 foi um marco na história, resultando na queda do Império Russo e na ascensão do socialismo e da classe trabalhadora.</p>
                </div>

                <div class="col-md-6 figuras2">
                    <img src="{{ asset('img/russia.jpg') }}" alt="Revolução Russa" class="img-fluid mb-2">
                </div>
            </div>
        </div>

</section>
   


</main>
 
{{-- .content --}}
 
@component('master.footer')
@endcomponent
 
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
@yield('scripts')
{{-- .SCRIPTS SECTION --}}
</body>
</html>