@extends('layout.app')

@section('title', 'Home')

@section('main-section')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Umbrellas - Bed</th>
                            <th scope="col">Volley Field</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shores as $shore)
                        <tr>
                            <th scope="row">{{ $shore->id }}</th>
                            <td>{{ $shore->name }}</td>
                            <td>{{ $shore->location }}</td>
                            <td>{{ $shore->beach_umbrella }} - {{ $shore->beach_bed }}</td>
                            <td>{{ ($shore->has_volley_field == 1) ? 'Yes' : 'No' }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.show', $shore->id) }}">View</a>
                                <a href="{{ route('admin.edit', $shore->id) }}" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection