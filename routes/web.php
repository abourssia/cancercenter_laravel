<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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



Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {


    Route::get('/rendezvous/mydata', [App\Http\Controllers\AdminController::class, 'getRDV']);

    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/services', [App\Http\Controllers\AdminController::class, 'Services']);
    Route::get('/adservice', [App\Http\Controllers\AdminController::class, 'addService']);
    Route::get('/pharmaciens', [App\Http\Controllers\AdminController::class, 'Pharmaciens']);
    Route::get('/medecins', [App\Http\Controllers\AdminController::class, 'Medecins']);
    Route::get('/infirmiers', [App\Http\Controllers\AdminController::class, 'Infirmeirs']);
    Route::get('/addinfirmeirs', [App\Http\Controllers\AdminController::class, 'addInfirmeirs']);
    Route::get('/addmedecin', [App\Http\Controllers\AdminController::class, 'addMedecins']);
    Route::get('/addpharmacien', [App\Http\Controllers\AdminController::class, 'addPharmaciens']);
    Route::get('/addlabo', [App\Http\Controllers\AdminController::class, 'addLabo']);
    Route::get('/laborantines', [App\Http\Controllers\AdminController::class, 'Laborantines']);
    Route::get('/rendezvous', [App\Http\Controllers\AdminController::class, 'Rendezvous']);
    Route::get('/addrdv', [App\Http\Controllers\AdminController::class, 'addRDV']);
    Route::get('/patients', [App\Http\Controllers\AdminController::class, 'Malades']);
    Route::get('/addmalades', [App\Http\Controllers\AdminController::class, 'addMalades']);
    Route::get('/staffadmin', [App\Http\Controllers\AdminController::class, 'StaffAdmin']);
    Route::get('/addstaffadmin', [App\Http\Controllers\AdminController::class, 'addStaffAdmin']);
    Route::get('/stafftech', [App\Http\Controllers\AdminController::class, 'StaffTech']);
    Route::get('/addstafftech', [App\Http\Controllers\AdminController::class, 'addStaffTech']);
    Route::get('/staffcontract', [App\Http\Controllers\AdminController::class, 'StaffContract']);
    Route::get('/addstaffcontract', [App\Http\Controllers\AdminController::class, 'addStaffContract']);
    Route::get('/staffcontract/delete/{id}', [App\Http\Controllers\AdminController::class, 'deletestaffcontract'])->name('deletestaffcontract');
    Route::get('/medecins/delete/{id}', [App\Http\Controllers\AdminController::class, 'deletemedecins'])->name('deletemedecins');
    Route::get('/pharmaciens/delete/{id}', [App\Http\Controllers\AdminController::class, 'deletepharmaciens'])->name('deletepharmaciens');
    Route::get('/infirmiers/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteinfirmiers'])->name('deleteinfirmiers');
    Route::get('/patients/delete/{id}', [App\Http\Controllers\AdminController::class, 'deletepatients'])->name('deletepatients');
    Route::get('/stafftech/delete/{id}', [App\Http\Controllers\AdminController::class, 'deletestafftech'])->name('deletestafftech');
    Route::get('/staffadmin/delete/{id}', [App\Http\Controllers\AdminController::class, 'deletestaffadmin'])->name('deletestaffadmin');
    Route::get('/laborantines/delete/{id}', [App\Http\Controllers\AdminController::class, 'deletelaborantines'])->name('deletelaborantines');
    Route::get('/services/delete/{name}', [App\Http\Controllers\AdminController::class, 'deleteservice'])->name('deleteservice');

    
    });
    