<?php

namespace App\Http\Controllers;

use App\Models\PCBuild;
use App\Models\Component;
use Illuminate\Http\Request;

class PCBuildController extends Controller
{
    public function create()
    {
        $componentTypes = ['cpu', 'gpu', 'motherboard', 'ram', 'storage', 'power_supply', 'cooling_system'];
        $components = [];

        foreach ($componentTypes as $type) {
            $components[$type] = Component::where('type', ucfirst($type))->take(5)->get();
        }

        return view('pcbuilds.create', compact('components', 'componentTypes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cpu_id' => 'required|exists:components,id',
            'gpu_id' => 'required|exists:components,id',
            'motherboard_id' => 'required|exists:components,id',
            'ram_id' => 'required|exists:components,id',
            'storage_id' => 'required|exists:components,id',
            'power_supply_id' => 'required|exists:components,id',
            'cooling_system_id' => 'required|exists:components,id',
        ]);

        PCBuild::create($validated);
        return redirect()->route('pcbuilds.create')->with('success', 'PC build created successfully.');
    }
}
