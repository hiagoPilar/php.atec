@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Lista de Países</h1>
    <a href="{{ route('countries.create') }}" class="btn btn-primary">Novo País</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
           
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($countries as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->name }}</td>

            <td>
                <a href="{{ route('countries.show', $country->id) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('countries.destroy', $country->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Tem certeza que deseja excluir este país?')">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-between">
    <a href="{{ route('main') }}" class="btn btn-secondary">Voltar ao Início</a>
    <span class="text-muted">Total: {{ $countries->count() }} países</span>
</div>
@endsection
