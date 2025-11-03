@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Detalhes do Produto</h2>
    </div>
    <div class="card-body">
        <h3>{{ $product->name }}</h3>
        <p><strong>Categoria:</strong> {{ $product->category->name }}</p>
        <p><strong>Projeto:</strong> {{ $product->project->name }}</p>
        <p><strong>Descrição:</strong> {{ $product->details }}</p>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</div>
@endsection
