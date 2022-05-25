<h1>Players List</h1>
@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('status') }}<button
            type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                aria-hidden="true">&times;</span> </button> </div>
@endif
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
                    <a type="button" href="{{ url('players/' . $player->id . '/edit') }}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{url('players/' . $player->id)}}" method="POST">
                        @csrf    @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        <a type="button" href="{{ url('playersDelete') }}" class="btn btn-danger">Delete All</a>

    </tbody>
</table>

{{ $players->links() }}
