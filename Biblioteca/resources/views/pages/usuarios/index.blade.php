@extends('master.main')

@section('content')

<div class="container">
    <h1 class="mb-4">Lista de Usuários</h1>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>
                        @if($usuario->perfil)
                            {{ $usuario->perfil->telefone ?? 'Não informado' }}
                        @else
                            <span class="text-muted">Sem perfil</span>
                        @endif
                    </td>
                    <td>
                        @if($usuario->perfil)
                            {{ Str::limit($usuario->perfil->endereco ?? 'Não informado', 30) }}
                        @else
                            <span class="text-muted">Sem perfil</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('usuarios.index', $usuario->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-eye"></i> Ver
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
</div>


@endsection