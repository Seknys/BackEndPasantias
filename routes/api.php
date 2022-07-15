<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------

| Aqui es donde se registran las rutas de las APIs.
|
*/


Route::get('/user',[ApiController::class, 'index']); //Permite mostrar todos los usuarios y una respuesta personalizada con el status y code
Route::get('/user/{id}',[ApiController::class, 'show']);//Muestra un usuario en especifico dependiendo del id ingresado, si no lo encuentra muestra error 400
Route::get('/users/{id}',[ApiController::class, 'position']);//Muestra todos los usuarios dependiendo de la posicion ingresada, si no la encuentra muestra un array vacio y error 400
