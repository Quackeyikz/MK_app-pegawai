<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SalariesController;
use App\Http\Controllers\AttendanceController;

Route::resource('employees', EmployeeController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('positions', PositionController::class);
Route::resource('salaries', SalariesController::class);
Route::resource('attendance', AttendanceController::class);

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function() {
    return "
        <h1>Clever, very clever.</h1>
        <p>You really thought its an actual route? heh.</p>
    ";
});

Route::get('/sandwich', function(){
    return view('sandwich', ['note' => 'With extra lettuce']);
});