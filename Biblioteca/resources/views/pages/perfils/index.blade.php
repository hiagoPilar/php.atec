@extends('master.main')

@section('content')
<div class="container mt-4">
    <h1>Perfil List</h1>
    

    @if($perfils->isNotEmpty())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Ano Publicacao</th>
                </tr>
            </thead>
            <tbody>

                @foreach($perfils as $perfil)
                <tr>
                    <td>{{ $perfil->id }}</td>
                    <td>{{ $perfil->endereco }}</td>
                    <td>{{ $perfil->telefone }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    @endif


    
</div>
@endsection