@extends('master.main')

@section('title', 'Editar Curso')

@section('content')
<h2>Editar Curso</h2>

<form method="POST" action="{{ route('courses.update', $course->id) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Título</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $course->title) }}" required>
    </div>

    <div class="form-group">
        <label>Categoria</label>
        <input type="text" name="category" class="form-control" value="{{ old('category', $course->category) }}">
    </div>

    <div class="form-group">
        <label>Preço (€)</label>
        <input type="number" name="price" step="0.01" min="0" class="form-control" value="{{ old('price', $course->price) }}" required>
    </div>

    <div class="form-group">
        <label>Professor</label>
        <select name="teacher_id" class="form-control" required>
            @foreach($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ $course->teacher_id == $teacher->id ? 'selected' : '' }}>
                    {{ $teacher->first_name }} {{ $teacher->last_name }} ({{ $teacher->school->name ?? '-' }})
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
