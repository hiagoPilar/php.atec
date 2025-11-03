@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Projetos</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary">Novo Projeto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Produtos</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
        <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->name }}</td>
            <td>
                @foreach($project->products as $product)
                <span class="badge badge-secondary">{{ $product->name }}</span>
                @endforeach
            </td>
            <td>
                <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
