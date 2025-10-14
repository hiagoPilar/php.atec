@extends('master.main')

@section('title', 'Courses')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Lista de Cursos</h2>
    <a href="{{ route('courses.create') }}" class="btn btn-success">+ Novo Curso</a>
</div>

<form method="GET" action="{{ route('courses.index') }}" class="form-inline mb-3">
    <input type="text" name="category" class="form-control mr-2" placeholder="Filtrar por categoria" value="{{ request('category') }}">

    <select name="teacher_id" class="form-control mr-2">
        <option value="">-- Filtrar por professor --</option>
        @foreach($teachers as $teacher)
            <option value="{{ $teacher->id }}" {{ request('teacher_id') == $teacher->id ? 'selected' : '' }}>
                {{ $teacher->first_name }} {{ $teacher->last_name }} ({{ $teacher->school->name ?? '-' }})
            </option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary">Filtrar</button>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Título</th>
            <th>Categoria</th>
            <th>Preço (€)</th>
            <th>Professor</th>
            <th>Escola</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse($courses as $course)
            <tr>
                <td>{{ $course->title }}</td>
                <td>{{ $course->category }}</td>
                <td>{{ number_format($course->price, 2, ',', '.') }}</td>
                <td>{{ $course->teacher->first_name }} {{ $course->teacher->last_name }}</td>
                <td>{{ $course->teacher->school->name ?? '-' }}</td>
                <td>
                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Apagar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6">Nenhum curso encontrado.</td></tr>
        @endforelse
    </tbody>
</table>

{{ $courses->links() }}
@endsection
