<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
use App\Models\Announcement;
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

Route::get('/', [FrontController::class, 'welcome']);
Route::get('/annuncio/nuovo', [AnnouncementController::class, 'create'])->name('announcement.create')->middleware('auth');
Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');
Route::get('/annuncio/show/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');
Route::get('/annunci', [AnnouncementController::class, 'indexAnnouncement'])->name('announcementIndex');
Route::get('/revisor', [RevisorController::class, 'index'])->name('revisor.index')->middleware('isRevisor');
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept_announcement')->middleware('isRevisor');
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject_announcement')->middleware('isRevisor');
Route::patch('/reset/annuncio/{announcement}', [RevisorController::class, 'resetAnnouncement'])->name('revisor.reset_announcement')->middleware('isRevisor');
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
Route::get('/ricerca/annuncio', [FrontController::class, 'searchAnnouncements'])->name('announcements.search');
Route::post('/lingua/{lang}', [FrontController::class, 'setLanguage'])->name('set_language_locale');
