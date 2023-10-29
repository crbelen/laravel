<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\VotaproyectoController;
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

//esta ruta hace que cuando alguien accede a mi web, se ejecute el metodo index del controlador y se muestre la lista de proyectos 
//en la página principal.
Route::get('/', [ProyectoController::class, 'index'])->name('proyecto.welcome');


Route::post('/votar/{proyecto}', [VotaproyectoController::class])->name('proyecto.votar');


//defino la ruta que va a manejar la accion dee votar.
//esta ruta define una URL a la que los usuarios enviarán una solicitud POST para votar por un proyecto específico