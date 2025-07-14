@extends('master.main')

@section('content')

@component('components.pets.list', ['pets' => $pets])
@endcomponent

@endsection