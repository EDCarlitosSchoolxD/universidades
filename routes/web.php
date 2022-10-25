<?php

use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UniversityController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
**/

require __DIR__.'/auth.php';

Route::get('home', function () {
    return view('index');
})->name('inicio');

Route::get('/',function(){
    return view('videodefondo');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/estados',[StateController::class,'index'])
->middleware(['auth','verified'])
->name('admin.states');

Route::get('/dashboard/municipios',[MunicipalityController::class,'index'])
->middleware(['auth','verified'])->name('admin.municipalities');

Route::get('/dashboard/universidades',[UniversityController::class,'index'])
->middleware(['auth','verified'])->name('admin.universities');


/**DELETE METHODS */
Route::delete('/dashboard/estados/{id}',[StateController::class,'destroy'])
->middleware(['auth','verified'])->name('states.destroy');
Route::delete('/dashboard/estados/{id}',[MunicipalityController::class,'destroy'])
->middleware(['auth','verified'])->name('municipalities.destroy');
Route::delete('/dashboard/universities/{id}',[UniversityController::class,'destroy'])
->middleware(['auth','verified'])->name('universities.destroy');
