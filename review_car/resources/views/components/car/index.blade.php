@extends('master.main')

@section('content')
<div class="container mt-4">
    <h1>Cars List</h1>
    

    @if($cars->isNotEmpty())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Registration</th>
                <th>Year of Manufacture</th>
                <th>Color</th>
                <th>Brand</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->registration }}</td>
                <td>{{ $car->year_of_manufacture }}</td>
                <td>{{ $car->color }}</td>
                <td>{{ $car->$brand->$name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-warning">Nenhum carro encontrado</div>
    @endif
</div>
@endsection