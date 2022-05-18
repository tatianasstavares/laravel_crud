@extends('master.main')

@section('content')

<h1>Player {{$player->id}}</h1>
    <fieldset disabled>
    <div class="form-group col-xl-4 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <h1 class="text-justify">Add Player</h1>
        <label for="name">Name</label>
        <input
        type="text"
        id="name"
        name="name"
        autocomplete="name"
        value={{$player->name}}
        class="form-control
        value="{{ old('name') }}"
        required
        aria-describedby="nameHelp">
        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
        <label for="address">Address</label>
        <input
        type="text"
        id="address"
        name="address"
        autocomplete="address"
        value={{$player->address}}
        class="form-control
        required
        aria-describedby="addressHelp">
        <label for="validationTextarea">Textarea</label>
        <textarea
        type="text"
        id="description"
        name="description"
        autocomplete="description"
        class="form-control
        required
        aria-describedby="descriptionHelp">{{$player->description}}</textarea>
        <h6>Retired</h6>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox1" name="retired" value="1">
            <label class="form-check-label" for="inlineCheckbox1">YES</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox2" name="retired" value="0">
            <label class="form-check-label" for="inlineCheckbox2">NO</label>
        </div>
    </div>
    </fieldset>
    <div class="button col-xl-4 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <a href="{{ url('/players') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back</a>
    </div>
    @endsection
