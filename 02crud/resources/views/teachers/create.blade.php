@extends('master.main')

@section('title', 'Novo Professor')

@section('content')
<h2>Novo Professor</h2>

<form method="POST" action="{{ route('teachers.store') }}">
    @csrf

    <div class="form-group">
        <label>Primeiro Nome</label>
        <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}" required>
    </div>

    <div class="form-group">
        <label>Último Nome</label>
        <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}" required>
    </div>

    <div class="form-group">
        <label>Data de Contratação</label>
        <input type="date" name="hire_date" class="form-control" value="{{ old('hire_date') }}" required>
    </div>

    <div class="form-group">
        <label>Escola</label>
        <select name="school_id" class="form-control" required>
            <option value="">-- Selecione uma Escola --</option>
            @foreach($schools as $school)
                <option value="{{ $school->id }}">{{ $school->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
