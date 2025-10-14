@extends('master.main')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4">Login</h2>

        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label>E-mail</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Lembrar-me</label>
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                Entrar
            </button>

            <p class="mt-2 text-center">
                Não tem conta? <a href="{{ route('register') }}">Registrar</a>
            </p>
        </form>
    </div>
</div>
@endsection
