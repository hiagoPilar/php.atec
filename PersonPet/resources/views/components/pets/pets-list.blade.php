<h1>Pet List</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Color</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    @foreach ($pets as $pet)
        <tbody>
        <tr>
            <th scope="row">{{ $pet->id }}</th>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->color }}</td>
            <td>{{ $pet->birthdate }}</td>
            <td>
                <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        </tbody>
    @endforeach
</table>
