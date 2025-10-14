
@extends('master.main')

@section('title', 'Editar Professor')

@section('content')
<h2>Editar Professor</h2>

<form method="POST" action="{{ route('teachers.update', $teacher->id) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Primeiro Nome</label>
        <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $teacher->first_name) }}" required>
    </div>

    <div class="form-group">
        <label>Último Nome</label>
        <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $teacher->last_name) }}" required>
    </div>

    <div class="form-group">
        <label>Data de Contratação</label>
        <input type="date" name="hire_date" class="form-control" value="{{ old('hire_date', $teacher->hire_date) }}" required>
    </div>

    <div class="form-group">
        <label>Escola</label>
        <select name="school_id" class="form-control" required>
            @foreach($schools as $school)
                <option value="{{ $school->id }}" {{ $teacher->school_id == $school->id ? 'selected' : '' }}>
                    {{ $school->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
