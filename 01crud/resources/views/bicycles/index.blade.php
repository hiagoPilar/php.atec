@extends('master.main')

@section('title', 'Bicycles Management')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Bicycles List</h1>
    <a href="{{ route('bicycles.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> New Bicycle
    </a>
</div>

@if($bicycles->count() > 0)
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Color</th>
                <th>Price</th>
                <th>Owner</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bicycles as $bicycle)
            <tr>
                <td>{{ $bicycle->id }}</td>
                <td>{{ $bicycle->brand }}</td>
                <td>{{ $bicycle->model }}</td>
                <td>{{ $bicycle->color }}</td>
                <td>€{{ number_format($bicycle->price, 2) }}</td>
                <td>{{ $bicycle->user->name }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ route('bicycles.show', $bicycle->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-eye">Ver</i>
                        </a>
                        <a href="{{ route('bicycles.edit', $bicycle->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit">Edit</i>
                        </a>
                        <form action="{{ route('bicycles.destroy', $bicycle->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this bicycle?')">
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
        No bicycles found. <a href="{{ route('bicycles.create') }}">Create first bicycle</a>.
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mt-4">
    <a href="{{ url('/') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to Home
    </a>
    <span class="text-muted">Total: {{ $bicycles->count() }} bicycles</span>
</div>
@endsection
