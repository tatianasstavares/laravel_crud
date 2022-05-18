
@extends('master.main')

@section('content')


    @component('components.players.player-form-create'), [
                       'players' =>$players,
                   ])
    @endcomponent

@endsection
