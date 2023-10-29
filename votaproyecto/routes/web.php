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

/*Route::get('/', function () {
    return view('welcome');
});*/

//esta ruta hace que cuando alguien accede a mi web, se ejecute el metodo index del controlador y se muestre la lista de proyectos 
//en la página principal.
Route::get('/', [ProyectoController::class, 'index'])->name('proyecto.welcome');



//defino una ruta que permite a los usuarios votar por un proyecto específico cuando hacen clic en un botón de votación
//Cuando un usuario hace clic en un botón de votación asociado a un proyecto específico, se enviará una solicitud POST a la URL /votar/{proyecto},
// donde {proyecto} será reemplazado por el ID del proyecto. Se jecutará la acción votar del controlador VotaproyectoController, que se encargará 
//de registrar el voto del usuario por ese proyecto.
Route::post('/votar/{proyecto}', [VotaproyectoController::class])->name('proyecto.votar');


//creo una ruta para mostrar y manejar el formulario de creacion de proyectos.
Route::get('/proyecto', [ProyectoController::class, 'create'])->name('proyecto');
Route::post('/proyecto/crear', [ProyectoController::class, 'store'])->name('crear');
