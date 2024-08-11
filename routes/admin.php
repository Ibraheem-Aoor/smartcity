<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\CrfCourseController;
use App\Http\Controllers\Site\IntrestedStudentController;
use App\Http\Controllers\Site\ProgramController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashbaordController;
use App\Http\Controllers\Admin\AccountTreeController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ContactController as UserContactController;
use App\Http\Controllers\Admin\HomePageTestmonialController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\TrainingProgramCategoryController;
use App\Http\Controllers\Admin\TrainingProgramController;
use App\Http\Controllers\Admin\WorkHoursController;
use App\Http\Requests\Site\IntresetedStudentRegisterRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!b
|
*/


Auth::routes(['register' => false]);

Route::middleware('auth:admin')
    ->name('admin.')->group(function () {
        Route::redirect('/', '/admin/dashboard', 301);
        Route::get('/dashboard', [DashbaordController::class, 'dashboard'])->name('dashboard');
        // Contacts
        Route::prefix('contacts')->name('contacts.')->group(function () {
            Route::get('', [UserContactController::class, 'index'])->name('index');
            Route::delete('/delete/{id}', [UserContactController::class, 'destroy'])->name('destroy');
            Route::get('/table-data', [UserContactController::class, 'getTableData'])->name('table');
        });
        // Pages
        Route::prefix('pages')->name('page.')->group(function () {
            Route::get('edit/home', [PageController::class, 'editHomePage'])->name('edit_home');
            Route::get('edit/{slug}', [PageController::class, 'edit'])->name('edit');
            Route::post('update/{slug}', [PageController::class, 'update'])->name('update');
            Route::prefix('home')->as('home.')->group(function () {
                // Home Page Testmonial
                Route::prefix('testmonials')->as('testmonials.')->group(function () {
                    Route::get('index', [HomePageTestmonialController::class, 'index'])->name('index');
                    Route::post('store', [HomePageTestmonialController::class, 'store'])->name('store');
                    Route::post('/{service}/update', [HomePageTestmonialController::class, 'update'])->name('update');
                    Route::delete('/{service}/delete', [HomePageTestmonialController::class, 'destroy'])->name('destroy');
                    Route::get('/status-toggle', [HomePageTestmonialController::class, 'toggleStatus'])->name('toggle_status');
                    Route::get('/table-data', [HomePageTestmonialController::class, 'getTableData'])->name('table');

                });
                // Home Page Smart Training Programs
                Route::prefix('smart-training-programs')->as('smart_training_programs.')->group(function () {
                    Route::get('index', [TrainingProgramController::class, 'index'])->name('index');
                    Route::get('/status-toggle', [TrainingProgramController::class, 'toggleStatus'])->name('toggle_status');
                    Route::get('/table-data', [TrainingProgramController::class, 'getTableData'])->name('table');
                });
            });
        });
        // SMART TRAINING
        Route::prefix('trainings')->name('training.')->group(function () {
            // Program Category
            Route::prefix('progtam-category')->as('program_category.')->group(function () {
                Route::get('', [TrainingProgramCategoryController::class, 'index'])->name('index');
                Route::post('store', [TrainingProgramCategoryController::class, 'store'])->name('store');
                Route::post('/{service}/update', [TrainingProgramCategoryController::class, 'update'])->name('update');
                Route::delete('/{service}/delete', [TrainingProgramCategoryController::class, 'destroy'])->name('destroy');
                Route::get('/status-toggle', [TrainingProgramCategoryController::class, 'toggleStatus'])->name('toggle_status');
                Route::get('/table-data', [TrainingProgramCategoryController::class, 'getTableData'])->name('table');
            });
            // Program
            Route::prefix('program')->as('program.')->group(function () {
                Route::get('', [TrainingProgramController::class, 'index'])->name('index');
                Route::post('store', [TrainingProgramController::class, 'store'])->name('store');
                Route::post('/{service}/update', [TrainingProgramController::class, 'update'])->name('update');
                Route::delete('/{service}/delete', [TrainingProgramController::class, 'destroy'])->name('destroy');
                Route::get('/status-toggle', [TrainingProgramController::class, 'toggleStatus'])->name('toggle_status');
                Route::get('/table-data', [TrainingProgramController::class, 'getTableData'])->name('table');
            });
        });
        // Team
        Route::prefix('team')->name('team.')->group(function () {
            Route::get('', [TeamMemberController::class, 'index'])->name('index');
            Route::post('store', [TeamMemberController::class, 'store'])->name('store');
            Route::post('/{service}/update', [TeamMemberController::class, 'update'])->name('update');
            Route::delete('/{service}/delete', [TeamMemberController::class, 'destroy'])->name('destroy');
            Route::get('/status-toggle', [TeamMemberController::class, 'toggleStatus'])->name('toggle_status');
            Route::get('/table-data', [TeamMemberController::class, 'getTableData'])->name('table');
        });
        // Work Hours
        Route::prefix('work-hours')->name('work_hour.')->group(function () {
            Route::get('edit', [WorkHoursController::class, 'edit'])->name('edit');
            Route::post('store', [WorkHoursController::class, 'store'])->name('store');
        });
        // Bookings
        Route::prefix('bookings')->name('booking.')->group(function () {
            Route::get('', [BookingController::class, 'index'])->name('index');
            Route::get('/table-data', [BookingController::class, 'getTableData'])->name('table');
            Route::delete('/destroy/{id}', [BookingController::class, 'destroy'])->name('destroy');
        });
        // Work Hours
        Route::prefix('site-settings')->name('setting.')->group(function () {
            Route::get('edit', [SettingController::class, 'edit'])->name('edit');
            Route::post('update', [SettingController::class, 'update'])->name('update');
        });
    });
