<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;


Route::get('/voter', [VoterController::class, 'viewVoter']);
Route::get('/substudent', [SubjectController::class, 'student1']);
Route::get('/subteacher', [SubjectController::class, 'teacher1']);
Route::get('/subadmin', [SubjectController::class, 'admin1']);
Route::get('/userstudent', [UserController::class, 'student2']);
Route::get('/userteacher', [UserController::class, 'teacher2']);
Route::get('/useradmin', [UserController::class, 'admin2']);
Route::get('/task', [TaskController::class, 'index']);
Route::get('/task/create', [TaskController::class, 'create']);
Route::post('/task/store', [TaskController::class, 'store']);
Route::get('/task/{task}', [TaskController::class, 'show']);
Route::put('/task/{task}', [TaskController::class, 'update']);
Route::get('/task/{task}/edit', [TaskController::class, 'edit']);
Route::delete('/task/{task}', [TaskController::class, 'delete']);
