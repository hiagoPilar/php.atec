@extends('master.main')

@section('content')
<div class="container py-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Detalhes do Produto</h2>
        </div>
        
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h3>{{ $product->name }}</h3>
                    <p class="text-muted">ID: {{ $product->id }}</p>
                    
                    <div class="mt-4">
                        <h5>Descrição:</h5>
                        <p class="lead">{{ $product->details }}</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informações Relacionadas</h5>
                            
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <strong>Categoria:</strong>
                                    <span class="badge bg-info float-end">
                                        {{ $product->categorie->name }}
                                    </span>
                                </li>
                                <li class="list-group-item">
                                    <strong>Projeto:</strong>
                                    <span class="float-end">
                                        {{ $product->project->name }}
                                    </span>
                                </li>
                                <li class="list-group-item">
                                    <strong>Criado em:</strong>
                                    <span class="float-end">
                                        {{ $product->created_at->format('d/m/Y H:i') }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card-footer">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
            
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary ms-2">
                <i class="fas fa-edit"></i> Editar
            </a>
        </div>
    </div>
</div>
@endsection