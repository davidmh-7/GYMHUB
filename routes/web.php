<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PesoControler;

use Illuminate\Support\Facades\Route;
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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('modificar', function () {
    return view('modificar');
});

Route::get('/dashboard',[PesoControler::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //dashboard-> nombre vista que he puesto en el controller || PesoControler nombre del controlador || idex -> nombre de la funcion
    
    //Elimina la tabla
    Route::delete('/mensajes/{PesoData}', [PesoControler::class, 'destroy'])->name('mensajes.eliminar');
    
    //Modificar
    Route::get('/mensajes/{PesoData}/editar', [PesoControler::class, 'edit'])->name('mensajes.editar');
    Route::put('/mensajes/{PesoData}', [PesoControler::class, 'update'])->name('mensajes.actualizar');
});

Route::get('insertarPeso', function () {
    return view('InsertarPeso');
});


// CREAR USUARIOS Ruta para procesar el formulario y almacenar el usuario
Route::post('/dashboard', [PesoControler::class, 'store'])->name('PesoControler.store');


require __DIR__.'/auth.php';


Route::get('/modificar', function () {
    return view('modificar');
})->name('modificar');
Route::get('/dashboard{PesoData}/modificar', [PesoControler::class, 'edit'])->name('dashboard.editar');
Route::put('/dashboard{PesoData}', [PesoControler::class, 'update'])->name('dashboard.actualizar');
