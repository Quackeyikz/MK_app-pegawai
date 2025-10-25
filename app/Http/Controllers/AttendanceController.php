<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use Dom\Attr;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $employees = Employee::get();
        $attendance = Attendance::with('employees')->orderByDesc('waktu_masuk')->get();
        return view('attendance.index', compact('attendance'));
    }
    
    /**
     * Show the form for creating a new resource.
    */
    public function create()
    {
        $employees = Employee::get();
        return view('attendance.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id'   => 'required|integer',
            'tanggal'       => 'required|date',
            'waktu_masuk'   => 'required|date_format:H:i',
            'waktu_keluar'  => 'required|date_format:H:i',
            'status_absensi'=> 'required|string'
        ]);

        Attendance::create($request->all());
        return redirect()->route('attendance.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employees = Employee::get();
        $attendee = Attendance::findOrFail($id);
        return view('attendance.edit', compact(['attendee', 'employees']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'karyawan_id'   => 'required|integer',
            'tanggal'       => 'required|date',
            'waktu_masuk'   => 'required|date_format:H:i',
            'waktu_keluar'  => 'required|date_format:H:i',
            'status_absensi'=> 'required|string'
        ]);

        $attendance = Attendance::findOrFail($id);

        $attendance->update($request->all());

        return redirect()->route('attendance.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();

        return redirect()->route('attendance.index');
    }
}
