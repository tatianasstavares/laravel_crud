<form method="POST" action="{{ url('players') }}">
    @csrf
    <div class="form-group col-xl-4 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" autocomplete="name" placeholder="Type yourname"
            class="form-control
        @error('name') is-invalid @enderror" value="{{ old('name') }}" required
            aria-describedby="nameHelp">
            <label for="name">Address</label>
        <input type="text" id="address" name="address" autocomplete="address" placeholder="Address"
            class="form-control
        @error('address') is-invalid @enderror" value="{{ old('address') }}" required
            aria-describedby="addressHelp">
        <small id="nameHelp" class="form-text text-muted">We'll never share your data
            with anyone else.</small>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4" >
        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </div>
</form>
