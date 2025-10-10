@extends('master.main')

@section('title', 'User Details')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h2 class="mb-0"><i class="fas fa-user"></i> User Details</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>ID:</strong> {{ $user->id }}</p>
                        <p><strong>Name:</strong> {{ $user->name }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Country:</strong> {{ $user->country->name }}</p>
                        <p><strong>Bicycles:</strong> {{ $user->bicycles->count() }}</p>
                        <p><strong>Created:</strong> {{ $user->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>

                @if($user->bicycles->count() > 0)
                <div class="mt-4">
                    <h5>Bicycles:</h5>
                    <ul class="list-group">
                        @foreach($user->bicycles as $bicycle)
                        <li class="list-group-item">
                            {{ $bicycle->brand }} {{ $bicycle->model }} - {{ $bicycle->color }} (€{{ $bicycle->price }})
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="d-flex gap-2 mt-4">
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
