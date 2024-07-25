<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            My PC Builds
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('pcbuilds.create') }}" class="btn btn-primary">Create New PC Build</a>
                    <table class="table mt-3">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>CPU</th>
                            <th>GPU</th>
                            <th>Motherboard</th>
                            <th>RAM</th>
                            <th>Storage</th>
                            <th>Power Supply</th>
                            <th>Cooling System</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pcBuilds as $build)
                            <tr>
                                <td>{{ $build->id }}</td>
                                <td>{{ $build->cpu->name }}</td>
                                <td>{{ $build->gpu->name }}</td>
                                <td>{{ $build->motherboard->name }}</td>
                                <td>{{ $build->ram->name }}</td>
                                <td>{{ $build->storage->name }}</td>
                                <td>{{ $build->powerSupply->name }}</td>
                                <td>{{ $build->coolingSystem->name }}</td>
                                <td>
                                    <form action="{{ route('pcbuilds.destroy', $build->id) }}" method="POST">
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
            </div>
        </div>
    </div>
</x-app-layout>

