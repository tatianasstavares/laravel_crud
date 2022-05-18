
@extends('master.main')

@section('content')


    @component('components.table_players.players', [
                       'players' =>$players,           #### Muita atenção, esse valor recebido, tem que ser identico a chave que foi passada no controller!!!
                   ])
    @endcomponent

@endsection
