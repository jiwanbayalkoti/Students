<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

//Students 
Route::get('student', [StudentController::class, 'index']);
Route::get('add-students', [StudentController::class, 'create']);
Route::post('add-students', [StudentController::class, 'store']);
Route::get('edit-student/{id}', [StudentController::class, 'edit'] );
Route::put('update-student/{id}', [StudentController::class, 'update']);
Route::get('delete-student/{id}', [StudentController::class, 'destroy']);
Route::get('show-student/{id}', [StudentController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});
