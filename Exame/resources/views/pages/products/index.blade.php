@extends('master.main')

@section('content')
<div class="container">
    <h1 class="mb-4">Products List</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Categorie</th>
                    <th>Project</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        <span class="badge badge-info">
                            {{ $product->categorie->name ?? 'Sem categoria' }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" 
                        class="btn btn-sm btn-primary">
                        <i class="fas fa-eye"></i> Ver Detalhes
                        </a>
                    </td>
                    <td>
                        {{ $product->project->name ?? 'Sem projeto' }}
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-toggle="modal" 
                                data-target="#detailsModal{{ $product->id }}">
                            Show Details
                        </button>
                    </td>
                </tr>
                
                
                <div class="modal fade" id="detailsModal{{ $product->id }}" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{ $product->name }}</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Categorie:</strong> {{ $product->categorie->name }}</p>
                                <p><strong>Project:</strong> {{ $product->project->name }}</p>
                                <hr>
                                <p>{{ $product->details }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Nenhum produto encontrado</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    
</div>
@endsection