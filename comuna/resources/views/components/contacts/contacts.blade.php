
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


    <section class="contact-section">
        <div class="container">
            <h1>Entre em contato</h1>
            <p>Se você tiver alguma dúvida ou precisar de mais informações, sinta-se à vontade para entrar em contato conosco.</p>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group
    </section>
    <img src="{{ asset('img/simbolo.jpg') }}" alt="Simbolo" class="img-fluid" style="width: 100%; height: auto;">


</main>
 
{{-- .content --}}
 
@component('master.footer')
@endcomponent
 
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
@yield('scripts')
{{-- .SCRIPTS SECTION --}}
</body>
</html>
