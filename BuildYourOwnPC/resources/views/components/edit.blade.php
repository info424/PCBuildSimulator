@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Component</h1>
        <form action="{{ route('components.update', $component->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $component->name }}" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="CPU" {{ $component->type == 'CPU' ? 'selected' : '' }}>CPU</option>
                    <option value="GPU" {{ $component->type == 'GPU' ? 'selected' : '' }}>GPU</option>
                    <option value="Motherboard" {{ $component->type == 'Motherboard' ? 'selected' : '' }}>Motherboard</option>
                    <option value="RAM" {{ $component->type == 'RAM' ? 'selected' : '' }}>RAM</option>
                    <option value="Storage" {{ $component->type == 'Storage' ? 'selected' : '' }}>Storage</option>
                    <option value="Power Supply" {{ $component->type == 'Power Supply' ? 'selected' : '' }}>Power Supply</option>
                    <option value="Cooling System" {{ $component->type == 'Cooling System' ? 'selected' : '' }}>Cooling System</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $component->price }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Component</button>
        </form>
    </div>
@endsection
