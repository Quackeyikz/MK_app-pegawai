<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{
    protected $fillable = [
        'karyawan_id',
        'bulan',
        'gaji_pokok',
        'tunjangan',
        'potongan',
        'total_gaji'
    ];

    public function employees()
    {
        return $this->belongsTo(Employee::class, 'karyawan_id');
    }
}
