<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'description',
        'start_date',
        'finish_date',
        'status'
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class)->withPivot('role');
    }
}
