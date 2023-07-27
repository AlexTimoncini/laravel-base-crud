@extends('layout.app')

@section('title', 'Home')

@section('main-section')
    <div class="container">
        <div class="row">
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form class="col-8 m-auto ivy_form" action="{{ route('admin.update', $shore->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group m-2">
                    <label for="shoreName">Company Name</label>
                    <input type="text" class="form-control" id="shoreName" placeholder="Enter the name of your company" name="name" value="{{ $shore->name }}">
                </div>
                <div class="form-group m-2">
                    <label for="shoreLocation">Location</label>
                    <input type="text" class="form-control" id="shoreLocation" name="location" value="{{ $shore->location }}">
                </div>
                <div class="form-group m-2">
                    <label for="shoreUmbrella">Number of Beach Umbrellas</label>
                    <input type="number" class="form-control" id="shoreUmbrella" name="beach_umbrella" value="{{ $shore->beach_umbrella }}">
                </div>
                <div class="form-group m-2">
                    <label for="shoreBeds">Number of Beach Beds</label>
                    <input type="number" class="form-control" id="shoreBeds" name="beach_bed" value="{{ $shore->beach_bed }}">
                </div>
                <div class="form-group m-2">
                    <label for="shorePrice">Daily Price</label>
                    <input type="text" class="form-control" id="shorePrice" name="daily_price" value="{{ $shore->daily_price }}">
                </div>
                <div class="form-group m-2">
                    <label for="shoreOpening">Opening Date</label>
                    <input type="text" class="form-control" id="shoreOpening" name="opening_date" value="{{ $shore->opening_date }}">
                </div>
                <div class="form-group m-2">
                    <label for="shoreClosing">Closing Date</label>
                    <input type="text" class="form-control" id="shoreClosing" name="closing_date" value="{{ $shore->closing_date }}">
                </div>
                <div class="form-group m-2">
                    <label class="me-2" for="shoreVolley">Do you have a volleyball field?</label>
                    <input type="checkbox" id="shoreVolley" name="has_volley_field" {{ $shore->has_volley_field == 1 ? 'checked' : '' }}>
                </div>
                <div class="form-group m-2">
                    <label class="me-2" for="shoreSoccer">Do you have a soccer field?</label>
                    <input type="checkbox" id="shoreSoccer" name="has_soccer_field" {{ $shore->has_soccer_field == 1 ? 'checked' : '' }}>
                </div>
                <button type="submit" class="btn btn-primary ms-2">Add</button>
                <button type="reset" class="btn btn-warning ms-2">Reset</button>
            </form>
        </div>
    </div>
@endsection