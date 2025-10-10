@extends('master.main')

@section('title', 'Users Management')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Users List</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> New User
    </a>
</div>

@if($users->count() > 0)
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Country</th>
                <th>Bicycles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->country->name }}</td>
                <td>{{ $user->bicycles_count }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-eye">Show</i>
                        </a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit">Edit</i>
                        </a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete {{ $user->name }}?')">
                                <i class="fas fa-trash">Delete</i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <div class="alert alert-info text-center">
        No users found. <a href="{{ route('users.create') }}">Create first user</a>.
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mt-4">
    <a href="{{ url('/') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to Home
    </a>
    <span class="text-muted">Total: {{ $users->count() }} users</span>
</div>
@endsection
