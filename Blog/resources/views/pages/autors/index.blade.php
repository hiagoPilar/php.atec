@extends('master.main')

@section('content')
<div class="container mt-4">
    <h1>Autors List</h1>
    

    @if($autors->isNotEmpty())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($autors as $autor)
            <tr>
                <td>{{ $autor->id }}</td>
                <td>{{ $autor->name }}</td>
                <td>{{ $autor->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-warning">Nenhum email encontrado</div>
    @endif
</div>
@endsection