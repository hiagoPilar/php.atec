@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h2>Detalhes do País</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>ID:</strong> {{ $country->id }}
                </div>
                <div class="mb-3">
                    <strong>Nome:</strong> {{ $country->name }}
                </div>
                <div class="mb-3">
                    <strong>Criado em:</strong> {{ $country->created_at->format('d/m/Y H:i') }}
                </div>
                <div class="mb-3">
                    <strong>Atualizado em:</strong> {{ $country->updated_at->format('d/m/Y H:i') }}
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('countries.edit', $country) }}" class="btn btn-warning">Editar</a>
                    <a href="{{ route('countries.index') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
