@extends('master.main')

@section('content')

<div class="container">
    <h1 class="mb-4">Players List</h1>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($players as $player)
                <tr>
                    <td>{{ $player->id }}</td>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->email }}</td>
                    <td>{{ $player->address }}</td>
                    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
</div>


@endsection