@extends('master.main')

@section('title', 'Teachers')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Lista de Professores</h2>
    <a href="{{ route('teachers.create') }}" class="btn btn-success">+ Novo Professor</a>
</div>

<form method="GET" action="{{ route('teachers.index') }}" class="form-inline mb-3">
    <select name="school_id" class="form-control mr-2">
        <option value="">-- Filtrar por escola --</option>
        @foreach($schools as $school)
            <option value="{{ $school->id }}" {{ request('school_id') == $school->id ? 'selected' : '' }}>
                {{ $school->name }}
            </option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Filtrar</button>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Escola</th>
            <th>Data de Contratação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse($teachers as $teacher)
            <tr>
                <td>{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                <td>{{ $teacher->school->name ?? '-' }}</td>
                <td>{{ $teacher->hire_date }}</td>
                <td>
                    <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Apagar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4">Nenhum professor encontrado.</td></tr>
        @endforelse
    </tbody>
</table>

{{ $teachers->links() }}
@endsection
