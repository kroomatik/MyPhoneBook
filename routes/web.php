<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\CollaborateurController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);
Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/entreprise',[EntrepriseController::class, 'index']);
Route::get('/entreprise/create',[EntrepriseController::class,'create'])->name('createCompany');
//Route::get('/entreprise/store',[EntrepriseController::class,'store'])->name('store');
Route::post('/entreprise/store',[EntrepriseController::class,'store'])->name('storeCompany');
Route::get('/entreprise/show',[EntrepriseController::class,'show'])->name('showCompany');
Route::get('/entreprise/edit/{id}',[EntrepriseController::class,'edit'])->name('edit');
Route::post('/entreprise/update',[EntrepriseController::class,'update'])->name('updateCompany');
Route::get('/entreprise/delete/{id}',[EntrepriseController::class,'delete']);

Route::get('/collaborateur',[CollaborateurController::class, 'index']);
Route::get('/collaborateur/create',[CollaborateurController::class,'create'])->name('createCollaborateur');
//Route::get('/collaborateur/store',[CollaborateurController::class,'store'])->name('store');
Route::post('/collaborateur/store',[CollaborateurController::class,'store'])->name('store');
Route::get('/collaborateur/show',[CollaborateurController::class,'show'])->name('showCollaborateur');
Route::get('/collaborateur/edit/{id}',[CollaborateurController::class,'edit'])->name('editcollab');
Route::post('/collaborateur/update',[CollaborateurController::class,'update'])->name('updateCollaborateur');
Route::get('/collaborateur/delete/{id}',[CollaborateurController::class,'delete']);

Route::get('/searchcompany',[EntrepriseController::class,'searchCompany']);
Route::get('/searchcollaborateur',[CollaborateurController::class,'searchCollaborateur']);

Route::get('/entreprise', function () {
    $entreprise = entreprise::paginate(3);

    $entreprise->withPath('/admin/entreprise');

    //
});