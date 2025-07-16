<h1>Person List</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    @foreach ($persons as $person)
        <tbody>
        <tr>
            <th scope="row">{{ $person->id }}</th>
            <td>{{ $person->name }}</td>
            <td>{{ $person->birthdate }}</td>
            <td>{{ $person->email }}</td>
            <td>
                <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        </tbody>
    @endforeach
</table>
