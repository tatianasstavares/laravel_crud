@extends('master.main')

@section('content')


    @component('components.players.player-form-edit', [
                       'player' =>$player,           #### Muita atenção, esse valor recebido, tem que ser identico a chave que foi passada no controller!!!
                   ])
    @endcomponent

@endsection
