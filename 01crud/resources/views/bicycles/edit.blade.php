@extends('master.main')

@section('title', 'Edit Bicycle')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-warning">
                <h2 class="mb-0"><i class="fas fa-bicycle"></i> Edit Bicycle: {{ $bicycle->brand }} {{ $bicycle->model }}</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('bicycles.update', $bicycle) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand:</label>
                        <input type="text" class="form-control @error('brand') is-invalid @enderror"
                               id="brand" name="brand" value="{{ old('brand', $bicycle->brand) }}" required>
                        @error('brand')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="model" class="form-label">Model:</label>
                        <input type="text" class="form-control @error('model') is-invalid @enderror"
                               id="model" name="model" value="{{ old('model', $bicycle->model) }}" required>
                        @error('model')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">Color:</label>
                        <input type="text" class="form-control @error('color') is-invalid @enderror"
                               id="color" name="color" value="{{ old('color', $bicycle->color) }}" required>
                        @error('color')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price (€):</label>
                        <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                               id="price" name="price" value="{{ old('price', $bicycle->price) }}" required>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="user_id" class="form-label">Owner:</label>
                        <select class="form-control @error('user_id') is-invalid @enderror"
                                id="user_id" name="user_id" required>
                            <option value="">Select a user</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $bicycle->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }} ({{ $user->country->name }})
                                </option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-sync-alt"></i> Update Bicycle
                        </button>
                        <a href="{{ route('bicycles.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
