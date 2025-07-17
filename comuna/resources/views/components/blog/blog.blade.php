
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

    <section class="blog-section">
        <div class="container">
            <h1>Blog</h1>
            <p>Welcome to our blog section! Here you will find the latest news and updates.</p>
            <div class="blog-posts">
                <!-- Blog posts will be dynamically loaded here -->
               
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
