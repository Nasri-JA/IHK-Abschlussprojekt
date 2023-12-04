<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::namespace('\App\Http\Livewire')->group(function () {

        Route::prefix('/personalabteilung')->name('hr.')->namespace('HumanResource')->group(function () {
            Route::get('/', Index::class)->name('index');
            Route::get('/personal-erstellen', CreateStaff::class)->name('create-staff');
            Route::get('/personal-bearbeiten', EditStaff::class)->name('edit-staff');
            Route::get('/arbeitsvertraege', Contracts::class)->name('contracts');
            Route::get('/kuendigungen', Cancellation::class)->name('cancellation');
            Route::get('/assistent', CreateWithAssistant::class)->name('assistant');
        });

        Route::prefix('/mitarbeiterabrechnung')->name('ea.')->namespace('EmployeeAccounting')->group(function () {
            Route::get('/', Index::class)->name('index');
        });

        Route::prefix('/nachunternehmer')->name('sub.')->namespace('Subcontractor')->group(function () {
            Route::get('/', Index::class)->name('index');
        });

        Route::prefix('/kunden')->name('customer.')->namespace('Customer')->group(function () {
            Route::get('/', Index::class)->name('index');
        });

        Route::prefix('/fakturierung')->name('invoicing.')->namespace('Invoicing')->group(function () {
            Route::get('/', Index::class)->name('index');
        });

        Route::prefix('/dateimanagement')->name('file-management.')->namespace('FileManagement')->group(function () {
            Route::get('/', Index::class)->name('index');
        });

        Route::prefix('/dienstplan')->name('schedule.')->namespace('ServiceSchedule')->group(function () {
            Route::get('/', Index::class)->name('index');
        });

        Route::prefix('/sales-marketing')->name('sm.')->namespace('SalesMarketing')->group(function () {
            Route::get('/', Index::class)->name('index');
        });

        Route::prefix('/qm')->name('qm.')->namespace('QualityManagement')->group(function () {
            Route::get('/', Index::class)->name('index');
        });
    });
});
