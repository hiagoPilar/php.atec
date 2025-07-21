@extends('master.main')

@section('content')
<div class="container mt-4">
    <h1>Users List</h1>
    

    @if($users->isNotEmpty())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Country</th>
                <th>Bicycles (Brand)</th>
                <th>Bicycle Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->country->name }}</td>

                <td>
                    @foreach($user->bicycles->take(2) as $bicycle)
                        {{ $bicycle->brand }} @if(!$loop->last), @endif
                    @endforeach
                </td>

                <td>
                    <ul class="list-unstyled">
                        @foreach($user->bicycles as $bicycle)
                        <li>
                            <strong>Brand:</strong> {{ $bicycle->brand }}<br>
                            <strong>Color:</strong> {{ $bicycle->color }}<br>
                            <strong>Price:</strong> ${{ number_format($bicycle->price, 2) }}
                        </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-warning">Nenhum usuário encontrado</div>
    @endif
</div>
@endsection