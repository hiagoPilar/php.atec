<h1>Players List</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Retired</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  @foreach ($players as $player)
  <tbody>
    <tr>
      <th scope="row">{{ $player->id }}</th>
      <td>{{ $player->name }}</td>
      <td>{{ $player->address }}</td>
      <td>{{ $player->retired }}</td>
      <td>
        <button type="button" class="btn btn-success">Show</button>
        <button type="button" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
  </tbody>
    @endforeach
</table>