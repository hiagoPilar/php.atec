@extends('master.main')

@section('content')

@component('components.persons.person-list', ['persons' => $persons])
@endcomponent

@endsection
