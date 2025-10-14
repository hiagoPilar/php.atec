@extends('master.main')

@section('title', 'Editar Escola')

@section('content')
<h2>Editar Escola</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('schools.update', $school->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control" value="{{ $school->name }}" required>
    </div>
    <div class="form-group">
        <label>Cidade</label>
        <input type="text" name="city" class="form-control" value="{{ $school->city }}" required>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Atualizar</button>
</form>
@endsection
