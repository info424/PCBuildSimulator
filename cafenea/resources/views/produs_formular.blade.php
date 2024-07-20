<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Produse
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ url('creare-produs') }}" method="post">
                        Nume: <input type="text" name="nume"> <br>
                        Categorie: <select name="categorie_id">
                            <!-- facem un foreach pentru a lista categoriile in select -->
                            <!-- atentie la option value (se trimite id-ul categoriei) -->
                            @foreach($categorii as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->nume }}</option>
                            @endforeach
                        </select> <br>
                        Pret: <input type="text" name="pret"> <br>
                        <x-primary-button>Salveaza</x-primary-button>
                    </form>

                    @include('erori')

                    <br>

                    <x-errors :message="'Show errors here!'" errors="red" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
