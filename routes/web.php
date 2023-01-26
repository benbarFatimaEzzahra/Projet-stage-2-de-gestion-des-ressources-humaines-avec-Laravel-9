<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrmeController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\TypecongeController;
use App\Http\Controllers\JourController;
use App\Http\Controllers\CongController;
use App\Http\Controllers\ContenirController;
use App\Http\Controllers\DemanderController;
use App\Http\Controllers\DmanderController;
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
    return view('home');
});
//-----------------service--------------------------

Route::resource("/service", ServiceController::class);
// Route::resource('/service','App\\Http\\Controllers\\Controllers\ServiceController');
//  Route::get('/service','ServiceController@index');
// Route::post('/service/create','ServiceController@create');
// Route::post('/service/create','ServiceController@store');
 Route::delete('/service/{id}','ServiceController@destroy');

Route::controller(ServiceController::class)->group(function (){
    Route::post('services/create', 'create');
    Route::post('services/create', 'store');
    Route::get('services/search', 'search');
     Route::get('services/{service}', 'show')->name('services.show');
    Route::DELETE('services/{service}', 'destroy')->name('services.sestroy');
});

  Route::resource("/personnel", PersonnelController::class);
   Route::controller(PersonnelController::class)->group(function (){
     Route::post('personnels/create', 'create');
      Route::post('personnels/create', 'store');
      Route::get('personnels/search', 'search');
          // Route::get('personnels/{personnel}', 'show')->name('personnels.show');
     Route::DELETE('personnels/{personnel}', 'destroy');
   });
   Route::get('personnels', [PersonnelController::class, 'index']);
  Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::resource("/prme", PrmeController::class);
Route::controller(PrmeController::class)->group(function (){
  Route::post('prmes/create', 'create');
   Route::post('prmes/create', 'store');
   Route::get('prmes/search', 'search');
       // Route::get('prmes/{prme}', 'show')->name('prmes.show');
  Route::DELETE('prmes/{prme}', 'destroy');
});
Route::resource("/absence", AbsenceController::class);
Route::controller(AbsenceController::class)->group(function (){
  Route::post('absences/create', 'create');
   Route::post('absences/create', 'store');
   Route::get('absences/search', 'search');
       // Route::get('absences/{absence}', 'show')->name('absences.show');
  Route::DELETE('absences/{absence}', 'destroy');
});
Route::resource("/typeconge", TypecongeController::class);
Route::controller(TypecongeController::class)->group(function (){
  Route::post('typeconges/create', 'create');
   Route::post('typeconges/create', 'store');
   Route::get('typeconges/search', 'search');
       // Route::get('typeconges/{typeconge}', 'show')->name('typeconges.show');
  Route::DELETE('typeconges/{typeconge}', 'destroy');
});
Route::resource("/jour", JourController::class);
Route::controller(JourController::class)->group(function (){
  Route::post('jours/create', 'create');
   Route::post('jours/create', 'store');
   Route::get('jours/search', 'search');
       // Route::get('jours/{jour}', 'show')->name('jours.show');
  Route::DELETE('jours/{jour}', 'destroy');
});
Route::resource("/cong", CongController::class);
Route::controller(CongController::class)->group(function (){
  Route::post('congs/create', 'create');
   Route::post('congs/create', 'store');
   Route::get('congs/search', 'search');
       // Route::get('congs/{cong}', 'show')->name('congs.show');
  Route::DELETE('congs/{cong}', 'destroy');
});
Route::resource("/contenir", ContenirController::class);
Route::controller(ContenirController::class)->group(function (){
  Route::post('contenirs/create', 'create');
   Route::post('contenirs/create', 'store');
   Route::get('contenirs/search', 'search');
       // Route::get('contenirs/{contenir}', 'show')->name('contenirs.show');
  Route::DELETE('contenirs/{contenir}', 'destroy');
});
Route::resource("/demander", DemanderController::class);
Route::controller(DemanderController::class)->group(function (){
  Route::post('demanders/create', 'create');
   Route::post('demanders/create', 'store');
   Route::get('demanders/search', 'search');
       // Route::get('demanders/{demander}', 'show')->name('demanders.show');
  Route::DELETE('demanders/{demander}', 'destroy');
});

Route::get("join", [PersonnelController::class, "join"]);
Route::get('/pdf', [DemanderController::class, 'pdf']);


Route::resource("/dmander", DmanderController::class);
Route::controller(DmanderController::class)->group(function (){
  Route::post('dmanders/create', 'create');
   Route::post('dmanders/create', 'store');
   Route::get('dmanders/search', 'search');
       // Route::get('dmanders/{dmander}', 'show')->name('dmanders.show');
  Route::DELETE('dmanders/{dmander}', 'destroy');
});
