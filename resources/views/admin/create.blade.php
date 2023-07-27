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
            <form class="col-12" action="{{ route('admin.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="shoreName">Company Name</label>
                    <input type="text" class="form-control" id="shoreName" placeholder="Enter the name of your company" name="name">
                </div>
                <div class="form-group">
                    <label for="shoreLocation">Location</label>
                    <input type="text" class="form-control" id="shoreLocation" name="location">
                </div>
                <div class="form-group">
                    <label for="shoreUmbrella">Number of Beach Umbrellas</label>
                    <input type="number" class="form-control" id="shoreUmbrella" name="beach_umbrella">
                </div>
                <div class="form-group">
                    <label for="shoreBeds">Number of Beach Beds</label>
                    <input type="number" class="form-control" id="shoreBeds" name="beach_bed">
                </div>
                <div class="form-group">
                    <label for="shorePrice">Daily Price</label>
                    <input type="text" class="form-control" id="shorePrice" name="daily_price">
                </div>
                <div class="form-group">
                    <label for="shoreOpening">Opening Date</label>
                    <input type="text" class="form-control" id="shoreOpening" name="opening_date">
                </div>
                <div class="form-group">
                    <label for="shoreClosing">Closing Date</label>
                    <input type="text" class="form-control" id="shoreClosing" name="closing_date">
                </div>
                <div class="form-group">
                    <label for="shoreVolley">Do you have a volleyball field?</label>
                    <input type="checkbox" id="shoreVolley" name="has_volley_field">
                </div>
                <div class="form-group">
                    <label for="shoreSoccer">Do you have a soccer field?</label>
                    <input type="checkbox" id="shoreSoccer" name="has_soccer_field">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection