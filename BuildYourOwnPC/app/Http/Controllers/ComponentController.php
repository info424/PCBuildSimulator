<?php

namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index()
    {
        $components = Component::all();
        return view('components.index', compact('components'));
    }

    public function create()
    {
        return view('components.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|numeric',
        ]);

        Component::create($request->all());
        return redirect()->route('components.index');
    }

    public function edit(Component $component)
    {
        return view('components.edit', compact('component'));
    }

    public function update(Request $request, Component $component)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|numeric',
        ]);

        $component->update($request->all());
        return redirect()->route('components.index');
    }

    public function destroy(Component $component)
    {
        $component->delete();
        return redirect()->route('components.index');
    }
}
