<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
  
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
    return view('welcome');
});
  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});



Route::get('/', [HmsController::class, 'welcome']);
Route::get('/about', [HmsController::class, 'about']);
Route::get('/blood_donate', [HmsController::class, 'blood_donate']);
Route::get('/child_care', [HmsController::class, 'child_care']);
Route::get('/contact_form', [HmsController::class, 'contact_form']);
Route::get('/daignostic', [HmsController::class, 'daignostic']);
Route::get('/doc_info', [HmsController::class, 'doc_info']);
Route::get('/doc_team', [HmsController::class, 'doc_team']);
Route::get('/donate_form', [HmsController::class, 'donate_form']);
Route::get('/emergency', [HmsController::class, 'emergency']);
Route::get('/stethoscope', [HmsController::class, 'stethoscope']);
Route::get('/gynecology', [HmsController::class, 'gynecology']);
Route::get('/nurse_info', [HmsController::class, 'nurse_info']);
Route::get('/nurse_team', [HmsController::class, 'nurse_team']);
Route::get('/parhology', [HmsController::class, 'parhology']);
Route::get('/pregnant', [HmsController::class, 'pregnant']);
Route::get('/radiology', [HmsController::class, 'radiology']);
Route::get('/skin_care', [HmsController::class, 'skin_care']);
Route::get('/surgery', [HmsController::class, 'surgery']);