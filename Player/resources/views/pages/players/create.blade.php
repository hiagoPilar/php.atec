@extends ('master.main')

@section ('content')
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Player</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Criar Novo Player</h1>
        
        <form method="POST" action="{{ url('players') }}">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    autocomplete="name"
                    placeholder="Type your name"
                    class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}"
                    required
                    aria-describedby="nameHelp">
                
                <small id="nameHelp" class="form-text text-muted">
                    We'll never share your data with anyone else.
                </small>
                
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@component('components.players.player-form-create')

@endcomponent
@endsection