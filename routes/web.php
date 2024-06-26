<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TechnicianController;
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
    return view('pages.app.dashboard-simpadu', ['type_menu' => '']);
})->name('home1');
Route::get('/login', function () {
    return view('pages.auth.auth-login', ['type_menu' => '']);
})->name('login');
Route::resource('mahasiswa',MahasiswaController::class);
Route::get('/contact',function(){
    return view('pages.contact.contact',['type_menu'=>'']);
})->name('kontak');
Route::get('/cuci-ac',function(){
    return view('pages.layanankami.cuci-ac',['type_menu'=>'']);
})->name('cuci');
Route::get('/pasang-ac',function(){
    return view('pages.layanankami.pasang-ac',['type_menu'=>'']);
})->name('pasang');
Route::get('/service-ac',function(){
    return view('pages.layanankami.service-ac',['type_menu'=>'']);
})->name('service');
Route::get('/tambah-freon',function(){
    return view('pages.layanankami.tambah-freon',['type_menu'=>'']);
})->name('freon');

Route::resource('order', OrderController::class);
Route::resource('auth',AuthController::class);

Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {
        return view('pages.app.dashboard-simpadu', ['type_menu' => '']);
    })->name('home');
    Route::middleware('role:user')->resource('technician', TechnicianController::class);
    Route::put('order/{id}/selesai', [OrderController::class, 'updateStatusToSelesai'])->name('order.selesai');
    Route::post('order/{order}/ambil', [OrderController::class, 'ambil'])->name('order.ambil');
    Route::middleware('role:superadmin|admin')->resource('user', UserController::class);
    Route::middleware('role:superadmin|admin')->resource('subject', SubjectController::class);
    Route::middleware('role:superadmin|admin')->resource('schedule', ScheduleController::class);


});



// Route::get('/', function () {

//       return view('pages.app.dashboard-simpadu', ['type_menu'=> '']);

//   });

// Route::get('/login', function () {

//     return view('pages.auth.auth-login');

// })->name('login');
// Route::get('/register', function () {

//       return view('pages.auth.auth-register');

// })->name('register');
// Route::get('/forgot', function () {

//     return view('pages.auth.auth-forgot-password');

// })->name('forgot');
// Route::get('/reset', function () {

//     return view('pages.auth.auth-reset-password');

// })->name('reset');
