<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           edit com
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('components.update', ['component' => $componenta->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $componenta->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" id="type" name="type" required>
                                <option value="CPU" {{ $componenta->type == 'CPU' ? 'selected' : '' }}>CPU</option>
                                <option value="GPU" {{ $componenta->type == 'GPU' ? 'selected' : '' }}>GPU</option>
                                <option value="Motherboard" {{ $componenta->type == 'Motherboard' ? 'selected' : '' }}>Motherboard</option>
                                <option value="RAM" {{ $componenta->type == 'RAM' ? 'selected' : '' }}>RAM</option>
                                <option value="Storage" {{ $componenta->type == 'Storage' ? 'selected' : '' }}>Storage</option>
                                <option value="Power_Supply" {{ $componenta->type == 'Power_Supply' ? 'selected' : '' }}>Power_Supply</option>
                                <option value="Cooling_System" {{ $componenta->type == 'Cooling_System' ? 'selected' : '' }}>Cooling_System</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ $componenta->price }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Component</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
