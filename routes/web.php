<?php

use App\Http\Controllers\Admin\AppealController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlockTextOneController;
use App\Http\Controllers\Admin\BlockTextTwoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FooterButtonController;
use App\Http\Controllers\Admin\HeaderButtonController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\SchoolResultController;
use App\Http\Controllers\Admin\TelephoneAddressController;
use App\Http\Controllers\Admin\TrainingProgramController;
use App\Http\Controllers\Front\QuestionController as QuestionControllerFront;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
// Questions
//Route::get('/question', [QuestionControllerFront::class, 'filter'])->name('questions.filter');
Route::resource('/questions', QuestionControllerFront::class);

Route::prefix('/admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'] )->name('dashboard');
    // Header-buttons
    Route::resource('/header-buttons', HeaderButtonController::class);
    // Footer-buttons
    Route::resource('/footer-buttons', FooterButtonController::class);
    // Training-programs
    Route::resource('/training-programs', TrainingProgramController::class);
    // Telephone-address
    Route::resource('/telephone-address', TelephoneAddressController::class);
    // Banners
    Route::resource('/banners', BannerController::class);
    // Block-text-one
    Route::resource('/block-text-one', BlockTextOneController::class);
    // Block-text-two
    Route::resource('/block-text-two', BlockTextTwoController::class);
    // School-results
    Route::resource('/school-results', SchoolResultController::class);
    // Pages
    Route::resource('/pages', PageController::class);
    // Questions
    Route::resource('/questions', QuestionController::class);
    // Appeals
    Route::resource('/appeals', AppealController::class);
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/{page}', [HomeController::class, 'page'])->name('home.page');
