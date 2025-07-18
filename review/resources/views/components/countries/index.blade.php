@extends('master.main')

@section('content')
<div class="container mt-4">
    <h1>Countries List</h1>
    
    <!-- Debug visual -->
    <div class="alert alert-info">
        Total de países: {{ $countries->count() }}
    </div>

    @if($countries->isNotEmpty())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($countries as $country)
            <tr>
                <td>{{ $country->id }}</td>
                <td>{{ $country->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-warning">Nenhum país encontrado</div>
    @endif
</div>
@endsection