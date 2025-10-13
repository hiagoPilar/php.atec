@extends('master.main')

@section('title', 'Home')

@section('content')
    <h1>Bem-vindo, {{ Auth::user()->name }}!</h1>
    <p>Esta página está usando o layout da master.</p>
@endsection

