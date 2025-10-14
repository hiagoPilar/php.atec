@extends('master.main')

@section('title', 'Escolas')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Lista de Escolas</h2>
    <a href="{{ route('schools.create') }}" class="btn btn-primary">Nova Escola</a>
</div>

<form method="GET" class="form-inline mb-3">
    <input type="text" name="search_name" class="form-control mr-2" placeholder="Pesquisar por nome" value="{{ request('search_name') }}">
    <input type="text" name="search_city" class="form-control mr-2" placeholder="Pesquisar por cidade" value="{{ request('search_city') }}">
    <button type="submit" class="btn btn-secondary">Pesquisar</button>
</form>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($schools as $school)
        <tr @if($school->trashed()) class="table-danger" @endif>
            <td>{{ $school->name }}</td>
            <td>{{ $school->city }}</td>
            <td>{{ $school->trashed() ? 'Apagada' : 'Ativa' }}</td>
            <td>
                @if(!$school->trashed())
                    <a href="{{ route('schools.edit', $school->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('schools.destroy', $school->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apagar escola?')">Apagar</button>
                    </form>
                @else
                    <form action="{{ route('schools.restore', $school->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-success">Restaurar</button>
                    </form>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $schools->withQueryString()->links() }}
@endsection
