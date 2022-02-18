<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactConroller;
use App\Http\Controllers\Frontend\ErrorController;
use App\Http\Controllers\Frontend\PrivacyPolicyController;
use App\Http\Controllers\Frontend\TermsConditionsController;
use App\Http\Controllers\Frontend\GetQuoteController;
use App\Http\Controllers\Frontend\Regis\RegisterController;
use App\Http\Controllers\Frontend\SubcribeController;
use App\Http\Controllers\ServicesFooterController;

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
    return view('index');
});

// Frontnd Page Layout //
Route::get('/aboutUs', [AboutController::class,'index']);
Route::get('/privacy', [PrivacyPolicyController::class,'index']);
Route::get('/terms', [TermsConditionsController::class,'index']);
Route::get('/error_404', [ErrorController::class,'index']);
Route::get('/registerfrom', [RegisterController::class,'index']);
Route::get('/services_footer',[ServicesFooterController::class,'FooterServices']);

// Frontnd Page Layout End //
//Modal Snd//
Route::post('add_data', [GetQuoteController::class,'store']);
// Online Form//
Route::post('add-online-data', [RegisterController::class,'store']);
//sentMail\\
Route::get('/contact', [ContactConroller::class,'index']);
Route::post('/contact',[ContactConroller::class,'Send'])->name('send.email');
//Subscribe\\
Route::get('/',[SubcribeController::class,'index']);
Route::post('/',[SubcribeController::class,'Send'])->name('send.Subscribe');
