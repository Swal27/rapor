<?php

use App\Http\Controllers\LmapeladmController;
use App\Http\Controllers\LnilaiadmController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\RaporviewController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserprofilController;
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
    return (redirect()->intended('login'));
});

Route::get('/login', '\App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', '\App\Http\Controllers\AuthController@proses_login');
Route::get('logout', '\App\Http\Controllers\AuthController@logout');


Route::group(['middleware' => ['auth', 'ceklevel:1']], function(){
    Route::get('admin/dashboard', '\App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('adduser', '\App\Http\Controllers\SiswaController@index');
    Route::get('mapel', '\App\Http\Controllers\MapelController@index');
    Route::get('rapor', '\App\Http\Controllers\RaporController@index');
    Route::resource('siswa', SiswaController::class);
    Route::resource('mapel', MapelController::class);
    Route::resource('rapor', RaporController::class);
    Route::resource('Lnilaiadm', LnilaiadmController::class);

    Route::get('Lnilaiadm/{kdmapelr}/{nis_rapor}', [
        'as' => 'Lnilaiadm.destroy',
        'uses' => 'App\Http\Controllers\LnilaiadmController@destroy',
    ]);
    Route::put('Lnilaiadm/{matpelId}/{siswaId}', [
        'as' => 'Lnilaiadm.update',
        'uses' => 'App\Http\Controllers\LnilaiadmController@update',
    ]);
});

Route::group(['middleware' => ['auth', 'ceklevel:0']], function(){
    Route::get('user/dashboard', '\App\Http\Controllers\DashboarduserController@index')->name('dashboarduser');
    Route::get('user/profil', '\App\Http\Controllers\UserprofilController@index');
    Route::get('user/raporview/{id}', '\App\Http\Controllers\RaporviewController@index');
    // Route::resource('rv', UserprofilController::class);
    Route::put('up/{id}', [
        'as' => 'up.update',
        'uses' => 'App\Http\Controllers\UserprofilCOntroller@update',
    ]);
});
