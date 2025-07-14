@extends('master.main')

@section('content')

@component('components.persons.list', ['persons' => $persons])
@endcomponent

@endsection