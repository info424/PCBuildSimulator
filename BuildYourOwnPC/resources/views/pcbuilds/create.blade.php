<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            pcbuilds
        </h2>
    </x-slot>
    <form action="{{ route('pcbuilds.store') }}" method="POST">
        @csrf
        <table class="table">
            <thead>
            <tr>
                <th>Component</th>
                <th>Options</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($componentTypes as $type)
                <tr>
                    <td>{{ str_replace('_', ' ', ucfirst($type)) }}</td>
                    <td>
                        <select name="{{ $type }}_id" class="form-control">
                            @foreach($components[$type] as $component)
                                <option value="{{ $component->id }}" data-price="{{ $component->price }}">{{ $component->name }} - ${{ $component->price }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="price">$0.00</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="2">Total</td>
                <td id="total-price">$0.00</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td><button type="submit" class="btn btn-primary">Build PC</button></td>
            </tr>
            </tbody>
        </table>
    </form>
    </div>

    <script>
        document.querySelectorAll('select').forEach(select => {
            select.addEventListener('change', function() {
                const price = parseFloat(this.selectedOptions[0].dataset.price);
                this.closest('tr').querySelector('.price').textContent = `$${price.toFixed(2)}`;
                updateTotal();
            });
        });

        function updateTotal() {
            let total = 0;
            document.querySelectorAll('.price').forEach(priceCell => {
                total += parseFloat(priceCell.textContent.replace('$', ''));
            });
            total *= 1.10; // Add 10% markup
            document.getElementById('total-price').textContent = `$${total.toFixed(2)}`;
        }

        updateTotal(); // Initialize total
    </script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

