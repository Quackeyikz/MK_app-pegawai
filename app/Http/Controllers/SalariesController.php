<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salaries;
use Illuminate\Http\Request;

class SalariesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salaries = Salaries::with('employees')->latest()->get();
        return view('salaries.index', compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::get();
        return view('salaries.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'karyawan_id'   => 'required|integer',
            'bulan'         => 'required|string|max:255',
            'gaji_pokok'    => 'required|numeric',
            'tunjangan'     => 'nullable|numeric',
            'potongan'      => 'nullable|numeric'
        ]);

        $gaji_pokok = $data['gaji_pokok'];
        $tunjangan = $data['tunjangan'];
        $potongan = $data['potongan'];

        $total_gaji = ($gaji_pokok + $tunjangan) - $potongan;

        Salaries::create([
            'karyawan_id'   => $data['karyawan_id'],
            'bulan'         => $data['bulan'],
            'gaji_pokok'    => $gaji_pokok,
            'tunjangan'     => $tunjangan,
            'potongan'      => $potongan,
            'total_gaji'    => $total_gaji
        ]);

        return redirect()->route('salaries.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Salaries $salaries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employees = Employee::get();
        $salary = Salaries::findOrFail($id);
        return view('salaries.edit', compact(['salary', 'employees']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'karyawan_id'   => 'required|integer',
            'bulan'         => 'required|string|max:255',
            'gaji_pokok'    => 'required|numeric',
            'tunjangan'     => 'nullable|numeric',
            'potongan'      => 'nullable|numeric'
        ]);

        $gaji_pokok = $data['gaji_pokok'];
        $tunjangan = $data['tunjangan'] ?? 0;
        $potongan = $data['potongan'] ?? 0;

        $total_gaji = ($gaji_pokok + $tunjangan) - $potongan;

        $salary = Salaries::findOrFail($id);

        $salary->update([
            'karyawan_id'   => $data['karyawan_id'],
            'bulan'         => $data['bulan'],
            'gaji_pokok'    => $gaji_pokok,
            'tunjangan'     => $tunjangan,
            'potongan'      => $potongan,
            'total_gaji'    => $total_gaji
        ]);

        return redirect()->route('salaries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salary = Salaries::findOrFail($id);
        $salary->delete();

        return redirect()->route('salaries.index');
    }
}
