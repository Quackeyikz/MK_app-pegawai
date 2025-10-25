<?php

namespace App\Http\Controllers;

use App\Models\Positions;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Positions::latest()->get();
        return view('position.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('position.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jabatan'  => 'required|string|max:100',
            'gaji_pokok'    => 'required|numeric|min:0|max:99999999.99'
            // decimal:0,99999999.99 juga work!
        ]);

        Positions::create($request->all());
        return redirect()->route('positions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // tidak perlu
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $position = Positions::findOrFail($id);
        return view('position.edit', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_jabatan'  => 'required|string|max:100',
            'gaji_pokok'    => 'required|numeric|min:0|max:99999999.99'
        ]);

        $position = Positions::findOrFail($id);

        $position->update($request->only([
            'nama_jabatan',
            'gaji_pokok'
        ]));

        return redirect()->route('positions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $position = Positions::findOrFail($id);
        $position->delete();

        return redirect()->route('positions.index');
    }
}
