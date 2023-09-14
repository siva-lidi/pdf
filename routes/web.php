<?php

use App\Http\Controllers\OutpatientController;
use App\Http\Controllers\PDFController;
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

Route::get('/reports',[OutpatientController::class,'index'])->name('reports');
Route::post('/reports/get',[OutpatientController::class,'get'])->name('reports.get');
Route::get('/export-pdf',[PDFController::class,'generatePdf'])->name('export-pdf');
