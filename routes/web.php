<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstateController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buscar', function () {
    return view('search');
});

Route::get('/buscar-propiedades', function () {
    return view('search-home');
});

Route::get('/contacto', function () {
    return view('contact');
});

Route::get('/nosotros', function () {
    return view('about');
});

Route::get('/buscar-propiedades', [EstateController::class,'index'])->name('index');

Route::get('/listado', [EstateController::class, 'list'])->name('list');

Route::get('/detalle/{Estate:id}', [EstateController::class, 'detail'])->name('detail');

Route::get('/consultar/{Estate:refer}', [EstateController::class, 'code'])->name('code');

Route::post('createEstate', [EstateController::class, 'insertar']);

Route::post('editEstate', [EstateController::class, 'update']);

Route::post('destroy/{Estate:id}', [EstateController::class, 'destroy'])->name('destroy');

Route::get('edit/{Estate:id}', [EstateController::class, 'edit'])->name('edit');

Route::post('edit/{Estate:id}', [EstateController::class, 'update'])->name('update');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


