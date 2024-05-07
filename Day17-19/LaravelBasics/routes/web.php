<?php

use App\Models\Student;
use App\Http\Controllers\Validation;
use Illuminate\Support\Facades\Route;

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

Route::get('/student',function(){
    return Student::all();
});

Route::get('/student-create',function(){
    return Student::create([
        'name'=>"kesavan",
        'class'=>"it",
        'address'=>"ooty",
        'isAdult'=>true
    ]);
});

Route::prefix('home')->group(function () {
    Route::put('{id}', [Validation::class, 'update'])->name('home.update');
    Route::delete('{id}', [Validation::class, 'destroy'])->name('home.destroy');
    Route::resource('', Validation::class);
});
