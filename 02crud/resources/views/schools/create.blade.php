@extends('master.main')

@section('title', 'Nova Escola')

@section('content')
<h2>Criar Nova Escola</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('schools.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Cidade</label>
        <input type="text" name="city" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Salvar</button>
</form>
@endsection
