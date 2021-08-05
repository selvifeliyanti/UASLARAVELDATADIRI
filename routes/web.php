<?php
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\HubungiController;
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

Route::get('/', function () {
    return view('pembuka');
});
Route::resources([
    'tentang'=>TentangController::class,
    'profil'=>ProfilController::class,
    'history'=>HistoryController::class,
    'pengalaman'=>PengalamanController::class,
    'hubungi'=>HubungiController::class,
   

    ]);