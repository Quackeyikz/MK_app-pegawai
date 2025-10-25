<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;    // 1. Import model Employee
use App\Models\Department;
use App\Models\Positions;
use App\Models\Salaries;

class EmployeeController extends Controller
{
    public function index()
    {
        // 2. Mengambil data dari tabel employees
        $employees = Employee::latest()->get();

        // 3. Mengirim data ke view menggunakan compact.
        // Cara lain: array, with, make, dll.
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $positions = Positions::get();
        $departments = Department::get();
        return view('employee.create', compact(['positions', 'departments']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'  => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'alamat'        => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'departemen_id' => 'required|integer',
            'jabatan_id'    => 'required|integer',
            'status'        => 'required|string|max:50'
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $salary = Salaries::where('karyawan_id', $id)->latest()->first();
        $employee = Employee::with(['department', 'position'])->find($id);
        return view('employee.show', compact(['employee', 'salary']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departments = Department::get();
        $positions = Positions::get();
        $employee = Employee::find($id);
        return view('employee.edit', compact(['employee', 'departments', 'positions']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_lengkap'  => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'alamat'        => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'departemen_id' => 'required|integer',
            'jabatan_id'    => 'required|integer',
            'status'        => 'required|string|max:50',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->only([
            'nama_lengkap',
            'email',
            'nomor_telepon',
            'tanggal_lahir',
            'alamat',
            'tanggal_masuk',
            'departemen_id',
            'jabatan_id',
            'status',
        ]));

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employees.index');
    }
}
