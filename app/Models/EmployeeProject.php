<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeProject extends Model
{
    protected $table = 'employee_project';

    protected $fillable = [
        'employee_id',
        'project_id',
        'role'
    ];

    public function employees(){
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function projects(){
        return $this->belongsTo(Project::class, 'project_id');
    }
}
