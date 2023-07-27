@extends('layout.app')

@section('title', 'Home')

@section('main-section')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">{{ $shore->name }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">{{ $shore->location }}</h5>
                        <p class="card-text">NUmbers of Umbrellas: {{ $shore->beach_umbrella }}</p>
                        <a href="{{ route('admin.index') }}" class="btn btn-primary">Return Shores List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection