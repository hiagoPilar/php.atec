@extends('master.main')

@section('content')
<div class="container mt-4">
    <h1>Brands List</h1>
    

    @if($brands->isNotEmpty())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-warning">Nenhuma marca encontrada</div>
    @endif
</div>
@endsection