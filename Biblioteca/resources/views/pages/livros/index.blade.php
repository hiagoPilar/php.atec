@extends('master.main')

@section('content')
<div class="container mt-4">
    <h1>Livros List</h1>
    

    @if($livros->isNotEmpty())
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

                @foreach($livros as $livro)
                <tr>
                    <td>{{ $livro->id }}</td>
                    <td>{{ $livro->titulo }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->ano_publicacao }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    @endif


    
</div>
@endsection