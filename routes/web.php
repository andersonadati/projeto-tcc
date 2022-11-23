<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CadernoController;
use App\Http\Controllers\FolhaCadernoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\CategoriasController;




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

//Route::get('/', AgendaController::class);

Route::get('/', [UserController::class, 'login'])->name('login.page');
Route::post('/auth', [UserController::class, 'auth'])->name('auth.user');

Route::get('/dashboard', [AgendaController::class, 'index'])->name('dashboard');

//Route::get('/register', [UserController::class, 'login'])->name('login.page');

//todos os cruds
Route::resource('agenda', AgendaController::class);

Route::resource('user', UserController::class);

Route::resource('caderno', CadernoController::class);

Route::resource('folha', FolhaCadernoController::class);

Route::resource('materias', MateriaController::class);

Route::resource('categorias', CategoriasController::class);




