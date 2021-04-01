<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceItemController;

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

Route::get('contact-us', [ContactController::class, 'getContact']);
Route::post('contact-us', [ContactController::class, 'saveContact']);

Route::get('services', [ServiceController::class, 'listServices']);
Route::get('new-service', [ServiceController::class, 'newService']);
Route::post('save-service', [ServiceController::class, 'saveService']);

Route::get('service-items', [ServiceItemController::class, 'listServiceItems']);
Route::get('new-service-Item', [ServiceItemController::class, 'newServiceItem']);
Route::post('save-service-Item', [ServiceItemController::class, 'saveServiceItem']);