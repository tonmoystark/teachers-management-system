<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;


Route::controller(TeacherController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/add', 'add');
    Route::post('/add', 'create');
    Route::get('/edit/{id}', 'edit');
    Route::post('edit/{id}', 'update');
    Route::get('/delete/{id}', 'delete');
    Route::get('/suspended', 'showSuspended');
    Route::get('/suspended/{id}', 'permanent_delete');
    Route::get('/retrieve/{id}', 'retrieve');
});
