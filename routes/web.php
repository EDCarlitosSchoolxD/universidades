<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UniversityController;
use App\Models\University;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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





Route::middleware(['auth','verified'])->group(function(){

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /**Estados */
    Route::get('/dashboard/estados',[StateController::class,'index'])
    ->name('admin.states');
    Route::get('/dashboard/estados/create',[StateController::class,'create'])
    ->name('states.create');
    Route::delete('/dashboard/estados/{id}',[StateController::class,'destroy'])
    ->name('states.destroy');
    Route::post('/dashboard/estados',[StateController::class,'store'])
    ->name('states.store');
    Route::get('/dashboard/estados/{id}/edit',[StateController::class,'edit'])
    ->name('states.edit');

    Route::put('/dashboard/estados/{id}',[StateController::class,'update'])
    ->name('states.update');



    /**Municipios */
    Route::get('/dashboard/municipios',[MunicipalityController::class,'index'])
    ->name('admin.municipalities');
    Route::delete('/dashboard/municipios/{id}',[MunicipalityController::class,'destroy'])
    ->name('municipalities.destroy');
    Route::get('/dashboard/municipios/create',[MunicipalityController::class,'create'])
    ->name('municipalities.create');
    Route::post('/dashboard/municipios/',[MunicipalityController::class,'store'])
    ->name('municipalities.store');
    Route::get('/dashboard/municipios/{id}/edit',[MunicipalityController::class,'edit'])
    ->name('municipalities.edit');
    Route::put('/dashboard/municipios/{id}',[MunicipalityController::class,'update'])
    ->name('municipalities.update');



    /**Universidades */
    Route::get('/dashboard/universidades',[UniversityController::class,'index'])
    ->name('admin.universities');
    Route::delete('/dashboard/universities/{id}',[UniversityController::class,'destroy'])
    ->name('universities.destroy');
    Route::get('/dashboard/universidades/create',[UniversityController::class,'create'])
    ->name('universities.create');
    Route::post('/dashboard/universidades/',[UniversityController::class,'store'])
    ->name('universities.store');
    Route::get('/dashboard/universidades/{id}/edit',[UniversityController::class,'edit'])
    ->name('universities.edit');
    Route::put('/dashboard/universidades/{id}',[UniversityController::class,'update'])
    ->name('universities.update');


    Route::delete('/dashboard/universidad/{slug}/carera/{id}',[CareerController::class,'destroy'])
    ->name('career.destroy');
    Route::get('/dashboard/career/{id}/create',[CareerController::class,'create'])
    ->name('career.create');
    Route::post('/dashboard/career/',[CareerController::class,'store'])
    ->name('career.store');
    Route::get('/dashboard/carera/{id}/edit',[CareerController::class,'edit'])
    ->name('career.edit');
    Route::put('/dashboard/career/{id}',[CareerController::class,'update'])
    ->name('career.update');


});


Route::get('/universidades',[UniversityController::class,'indexui'])
->name('universities.indexui');
Route::get('/universidades/{slug}',[UniversityController::class,'show'])
->name('universities.show');
Route::get('/universidades/{slug}/carera/{slugC}',[CareerController::class,'show'])
->name('career.show');


Route::get('{slug}/municipios',[StateController::class,'show'])
->name('states.show');

