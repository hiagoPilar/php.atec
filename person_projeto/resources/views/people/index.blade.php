
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <h2>People List</h2>
        <a href="{{ route('people.create') }}" class="btn btn-primary mb-3">Create New Person</a>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Birth Date</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($people as $person)
                <tr>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->email }}</td>
                    <td>{{ $person->data_de_nascimento->format('d/m/Y') }}</td>
                    <td>{{ $person->address ? $person->address->address : 'No Address' }}</td>
                    <td>
                        <a href="{{ route('people.show', $person->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('people.edit', $person->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('people.destroy', $person->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        {{ $people->links() }}
    </div>
</div>
@endsection