<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=service-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="{{ csrf_token }}">
    <title>Project</title>

    {{--style section--}}
    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    @yield('styles')
    {{--style section--}}
</head>
<body>

{{-- header --}}
@component('master.header')
@endcomponent
{{-- header --}}

{{-- content --}}
<main>
    @yield('content')
</main>
{{-- content --}}

@component('master.footer')
@endcomponent


<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
@yield('scripts')
{{-- scrypt section --}}
</body>
</html>
