
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <h2>{{ isset($person) ? 'Edit' : 'Create' }} Person</h2>
        
        <form action="{{ isset($person) ? route('people.update', $person->id) : route('people.store') }}" method="POST">
            @csrf
            @if(isset($person))
                @method('PUT')
            @endif
            
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $person->name ?? '') }}" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $person->email ?? '') }}" required>
            </div>
            
            <div class="form-group">
                <label for="data_de_nascimento">Birth Date:</label>
                <input type="date" name="data_de_nascimento" class="form-control" value="{{ old('data_de_nascimento', isset($person) ? $person->data_de_nascimento->format('Y-m-d') : '') }}" required>
            </div>
            
            <div class="form-group">
                <label for="address_id">Address:</label>
                <select name="address_id" class="form-control">
                    <option value="">Select Address</option>
                    @foreach($addresses as $address)
                        <option value="{{ $address->id }}" 
                            {{ (old('address_id', $person->address_id ?? '') == $address->id) ? 'selected' : '' }}>
                            {{ $address->address }}, {{ $address->city }}, {{ $address->country }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('people.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection