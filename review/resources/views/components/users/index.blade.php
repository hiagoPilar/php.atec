@extends('master.main')

@section('content')
<div class="container mt-4">
    <h1>Users List</h1>
    

    @if($users->isNotEmpty())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Country</th>
                <th>Bicycle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->country->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-warning">Nenhum usuário encontrado</div>
    @endif
</div>
@endsection