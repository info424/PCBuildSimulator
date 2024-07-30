<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <h1>Add Component</h1>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('components.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" id="type" name="type" required>
                                <option value="CPU">CPU</option>
                                <option value="GPU">GPU</option>
                                <option value="Motherboard">Motherboard</option>
                                <option value="RAM">RAM</option>
                                <option value="Storage">Storage</option>
                                <option value="Power_Supply">Power_Supply</option>
                                <option value="Cooling_System">Cooling_System</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Component</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

