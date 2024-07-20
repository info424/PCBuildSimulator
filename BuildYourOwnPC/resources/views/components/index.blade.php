@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Components</h1>
        <a href="{{ route('components.create') }}" class="btn btn-primary">Add Component</a>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($components as $component)
                <tr>
                    <td>{{ $component->name }}</td>
                    <td>{{ $component->type }}</td>
                    <td>${{ $component->price }}</td>
                    <td>
                        <a href="{{ route('components.edit', $component->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('components.destroy', $component->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
