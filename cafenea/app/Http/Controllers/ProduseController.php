<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class ProduseController extends Controller
{
    public function creareProdusFormular()
    {
        if (! Gate::allows('vezi-produse', Auth::user())) {
            abort(403);
        }
//        if(Auth::check()) {
//
//        }
//        else {
//            return redirect('/login');
//        }
        //obiect user autentificat
//        $user = Auth::user();
        // aducem toate categoriile din baza de date
        $categorii = Categorie::all();
        //trimitem categoriile catre view pentru a le afisa in select
        return view('produs_formular', ['categorii' => $categorii]);
    }

    public function creareProdus(Request $request)
    {
        $data = $request->all();
        $produs = Produs::create([
            'name' => $data['nume'],
            'categorie_id' => $data['categorie_id'],
            'pret' => $data['pret'],
        ]);
//        $request->session()->put('message', 'Produsul a fost adaugat!');
        session(['message' => 'Produsul a fost adaugat!']);

        return redirect('/lista-produse');
    }

    public function listaProduse(Request $request)
    {
        dd(Cache::get('produse'));
        // folosim operatorul ternar ( conditie ? true : false )
        $nume = $request->get('nume') ? $request->get('nume') : ''; //default nimic pentru a le aduce pe toate dupa nume
        $order = $request->get('orderBy') ? $request->get('orderBy') : 'name'; // default coloana nume
        $direction = $request->get('direction') ? $request->get('direction') : 'asc'; // default asc
        $produse = Cache::get('produse', function() use ($nume, $order, $direction){
            return Produs::where('name', 'like', '%'.$nume.'%')
                ->orderBy($order, $direction)
//            ->toRawSql();
                ->get();
        });
        $pret = $request->get('pret') ? $request->get('pret') : 0;
        $produse = $produse->reject(function ($produs) use ($pret) {
            return $produs->pret < $pret;
        });
//        dd($produse);
        $message = $request->session()->has('message') ? $request->session()->get('message') : null;
        $request->session()->forget(['message']);
        // liniile de mai sus sau doar linia de mai jos :)
//        $message = $request->session()->has('message') ? $request->session()->pull('message') : null;
        Cache::put('produse', $produse);
        return view('produse_lista', ['produse' => $produse, 'message' => $message]);
    }
}
