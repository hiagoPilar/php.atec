@extends('master.main')

@section('content')
<div class="container mt-4">
    <h1>Users List</h1>
    
    <!-- Debug visual -->
    <div class="alert alert-info">
        Total de países: {{ $users->count() }}
    </div>

    @if($users->isNotEmpty())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-warning">Nenhum usuário encontrado</div>
    @endif
</div>
@endsection