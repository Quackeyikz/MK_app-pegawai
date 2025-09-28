<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::resource('employees', EmployeeController::class);

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