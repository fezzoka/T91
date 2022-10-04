<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscoController;

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
    return redirect()->route('dashboard');
});

// dashboard
Route::prefix('dashboard')
    ->middleware(['auth'])
    ->group( function(){
        Route::get('/', function () { 
            return view('dashboard');
        })->name('dashboard');

});
// discos
Route::prefix('disco')
->middleware(['auth'])
->controller(DiscoController::class)
->group(function () {
    Route::get('/' , 'index')->name('disco.index');
    Route::get('/novo', 'create')->name('disco.create');
    Route::get('/editar/{id}', 'edit')->name('disco.edit');
    Route::get('/mostrar/{id}', 'show')->name('disco.show');
    Route::get('/deletar/{id}', 'destroy')->name('disco.destroy');
    Route::post('/cadastrar', 'store')->name('disco.store');
    Route::post('/atualizar/{id}', 'update')->name('disco.update');

    require __DIR__.'/auth.php';
});
