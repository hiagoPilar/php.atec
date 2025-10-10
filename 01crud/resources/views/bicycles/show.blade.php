@extends('master.main')

@section('title', 'Bicycle Details')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h2 class="mb-0"><i class="fas fa-bicycle"></i> Bicycle Details</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>ID:</strong> {{ $bicycle->id }}</p>
                        <p><strong>Brand:</strong> {{ $bicycle->brand }}</p>
                        <p><strong>Model:</strong> {{ $bicycle->model }}</p>
                        <p><strong>Color:</strong> {{ $bicycle->color }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Price:</strong> €{{ number_format($bicycle->price, 2) }}</p>
                        <p><strong>Owner:</strong> {{ $bicycle->user->name }}</p>
                        <p><strong>Country:</strong> {{ $bicycle->user->country->name }}</p>
                        <p><strong>Created:</strong> {{ $bicycle->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <a href="{{ route('bicycles.edit', $bicycle->id) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="{{ route('bicycles.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
