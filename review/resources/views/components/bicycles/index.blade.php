@extends('master.main')

@section('content')
<div class="container mt-4">
    <h1>Bicycles List</h1>
    
    

    @if($bicycles->isNotEmpty())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Color</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bicycles as $bicycle)
            <tr>
                <td>{{ $bicycle->brand }}</td>
                <td>{{ $bicycle->color }}</td>
                <td>{{ $bicycle->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-warning">Nenhuma bicicleta encontrado</div>
    @endif
</div>
@endsection