<h1>Players</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col"> Name</th>
            <th scope="col">Address</th>
            <th scope="col">Description</th>
            <th scope="col">Retired</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($players as $player)
            <tr>
                <td> {{ $player->name }}</td>
                <td>{{ $player->address }}</td>
                <td>{{ $player->description }}</td>
                <td>
                    @if ($player->retired)
                        <i class="bi bi-emoji-smile"></i>
                    @else
                        <i class="bi bi-emoji-smile-upside-down-fill"></i>
                    @endif
                </td>

                <td> <a class="btn btn-success" href="{{ url('players/' . $player->id) }}" role="button">Show</a> </td>
                <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>

{{ $players->links() }}
