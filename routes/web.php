<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GanttController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get', 'post'], '/gantt_data', 'App\Http\Controllers\GanttController@data');
Route::get('/php', function () {
    return view('gantt-php');
});

Route::get('/', function () {
    return view('gantt');
});
