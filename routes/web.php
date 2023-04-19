<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Nishcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [Nishcontroller::class, 'home']);
Route::get('/Add_employee_detls', [Nishcontroller::class, 'Add_employee_detls']);
Route::post('/save_employee', [Nishcontroller::class, 'save_employee']);
Route::get('/view_employee_detls', [Nishcontroller::class, 'view_employee_detls']);
Route::post('/employee_edit', [Nishcontroller::class, 'employee_edit']);
Route::post('/employee_update', [Nishcontroller::class, 'employee_update']);
Route::post('/employee_delete', [Nishcontroller::class, 'employee_delete']);

Route::get('/add_task', [Nishcontroller::class, 'add_task']);
Route::post('/save_task', [Nishcontroller::class, 'save_task']);
Route::get('/view_task', [Nishcontroller::class, 'view_task']);
Route::post('/task_edit', [Nishcontroller::class, 'task_edit']);
Route::post('/update_task', [Nishcontroller::class, 'update_task']);
Route::get('/assign_task', [Nishcontroller::class, 'assign_task']);
Route::post('/assign_update', [Nishcontroller::class, 'assign_update']);



