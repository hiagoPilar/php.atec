@extends('master.main')

@section('content')
<div class="container">
    <h1 class="mb-4">Projects List</h1>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Products</th>
                    <th>Total Products</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>
                        @if($project->products->count() > 0)
                            <ul class="list-unstyled">
                                @foreach($project->products as $product)
                                <li>
                                    {{ $product->name }}
                                    <span class="badge badge-info">
                                        {{ $product->category->name ?? 'Sem categoria' }}
                                    </span>
                                </li>
                                @endforeach
                            </ul>
                        @else
                            <span class="text-muted">Nenhum produto associado</span>
                        @endif
                    </td>
                    <td>{{ $project->products->count() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection