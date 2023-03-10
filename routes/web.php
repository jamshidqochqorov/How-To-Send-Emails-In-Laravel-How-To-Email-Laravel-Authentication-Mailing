<?php

use App\Http\Controllers\EmailsController;
use App\Http\Controllers\TestEntrollmentController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'private'])->name('private');

//Route for mailing
//Route::get('/email',function (){
//    Mail::to('jamshidqochqorov84@gmail.com')->send(new WelcomeMail());
//   return new WelcomeMail();
//});
 Route::get('/email',[EmailsController::class,'email']);
 Route::get('/send-testenrollment',[TestEntrollmentController::class,'sendTestNotification']);
 Route::get('/sms',[\App\Http\Controllers\SmsController::class,'index']);
