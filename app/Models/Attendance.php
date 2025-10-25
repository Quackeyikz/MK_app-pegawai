<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    // Harus seperti ini karena laravel mengira nama tabel adalah 'attendances'
    protected $table = 'attendance';

    protected $fillable = [
        'karyawan_id',
        'tanggal',
        'waktu_masuk',
        'waktu_keluar',
        'status_absensi'
    ];

    public function employees()
    {
        return $this->belongsTo(Employee::class, 'karyawan_id');
    }
}
