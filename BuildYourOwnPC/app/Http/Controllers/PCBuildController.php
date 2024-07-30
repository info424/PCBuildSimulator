<?php
namespace App\Http\Controllers;

use App\Models\PCBuild;
use App\Models\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PCBuildController extends Controller
{

    public function create()
    {
        $componentTypes = ['cpu', 'gpu', 'motherboard', 'ram', 'storage', 'power_supply', 'cooling_system'];
        $components = [];

        foreach ($componentTypes as $type) {
            $typeLabel = str_replace('_', ' ', ucfirst($type));
            $components[$type] = Component::where('type', $typeLabel)->take(5)->get();
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


        $validated['user_id'] = Auth::id();

//        dd($validated);

        PCBuild::create($validated);

        return redirect()->route('pcbuilds.create')->with('success', 'PC build created successfully.');
    }
    public function index()
    {
        $pcBuilds = Auth::user()->pcBuilds;
        return view('pcbuilds.index', compact('pcBuilds'));
    }

    public function destroy($id)
    {
        $pcBuild = PCBuild::findOrFail($id);

        if ($pcBuild->user_id !== Auth::id()) {
            return redirect()->route('pcbuilds.index')->with('error', 'Unauthorized action.');
        }

        $pcBuild->delete();
        return redirect()->route('pcbuilds.index')->with('success', 'PC build deleted successfully.');
    }
}
