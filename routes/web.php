<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('news', \App\Http\Controllers\NewsController::class);
    Route::resource('testimonials', \App\Http\Controllers\TestimonialController::class);
    Route::resource('cases', \App\Http\Controllers\CasesController::class);
    Route::resource('messaging', \App\Http\Controllers\MessagingController::class);
    Route::resource('research', \App\Http\Controllers\AIResearchController::class);
    Route::resource('casesruling', \App\Http\Controllers\CaseRulingController::class);
    Route::resource('requests', \App\Http\Controllers\CustomerRequestController::class);
    Route::resource('lawyer-cases', \App\Http\Controllers\LawyerCasesController::class);
    Route::resource('reports', \App\Http\Controllers\ReportController::class);
    Route::resource('directories', \App\Http\Controllers\DirectoryController::class);
    Route::resource('videos', \App\Http\Controllers\VideoController::class);

});

Route::resource('customers', \App\Http\Controllers\CustomerController::class);

require __DIR__.'/auth.php';
