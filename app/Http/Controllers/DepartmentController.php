<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::latest()->get();
        return view('departement.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_departemen' => 'required|string|max:255'
        ]);

        Department::create($request->all());
        return redirect()->route('departments.index');
    }

    /**
     * TIDAK PERLU!! (Literally cuma 1 kolom buat apa)
     */
    public function show(string $id)
    {
        $department = Department::find($id);
        return view('departement.show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $department = Department::find($id);
        return view('departement.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_departemen' => 'required|string|max:255'
        ]);

        $department = Department::findOrFail($id);

        $department->update($request->only([
            'nama_departemen'
        ]));

        return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = Department::find($id);
        $department->delete();

        return redirect()->route('departments.index');
    }
}
