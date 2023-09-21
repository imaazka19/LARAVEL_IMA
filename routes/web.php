<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sekolahcontroller;

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
    return view('welcome');
});

// })->middleware(['auth', 'verified'])->name('dashboard');


Route ::get('/sekolah', [Sekolahcontroller::class, 'index'])->name ('sekolah.index');

Route ::get('/sekolah/tambah', [Sekolahcontroller::class, 'tambah'])->name ('sekolah.tambah');

Route ::post('/sekolah', [Sekolahcontroller::class, 'simpan'])->name ('sekolah.simpan');

Route ::get('/sekolah/{id}/edit', [Sekolahcontroller::class, 'edit'])->name ('sekolah.edit');

Route ::put('/sekolah/{id}/', [Sekolahcontroller::class, 'update'])->name ('sekolah.update');

Route::delete('/sekolah/{id}', [Sekolahcontroller::class, 'destroy'])->name('sekolah.destroy');



// Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
