<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;

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
    return view('Wellcome');
});
Route::get('/', [HomeController::class,'index']);

Route::middleware ('auth')->group(function(){
Route::get('/redirects', [HomeController::class,'redirects']);
#Route::get('about','LinkController')->name('about');
Route::get('/about', [HomeController::class,'about']);
Route::get('/contact', [HomeController::class,'contact']);
Route::get('/userpropertylist', [HomeController::class,'userpropertylist']);

Route::get('/users', [AdminController::class,'user']);
Route::get('/token', [AdminController::class,'token']);
Route::get('/deletemenu/{id}', [AdminController::class,'deletemenu']);
Route::get('/deleteorder/{id}', [AdminController::class,'deleteorder']);
Route::get('/deleteuser/{id}', [AdminController::class,'deleteuser']);
Route::get('/property', [AdminController::class,'property']);
Route::post('/token', [AdminController::class,'tokenn']);
Route::get('/showorder', [AdminController::class,'showorder']);
Route::get('/deletetoken/{id}', [AdminController::class,'deletetoken']);
Route::post('/uploadproperty', [AdminController::class,'upload']);
Route::post('/addcart/{id}', [HomeController::class,'addcart']);
Route::get('/showcart/{id}', [HomeController::class,'showcart']);
Route::get('/remove/{id}', [HomeController::class,'remove']);
Route::get('/payment', [HomeController::class,'pay']);
Route::post('/orderconfirm', [HomeController::class,'orderconfirm']);
Route::get('/stripe', [HomeController::class,'stripe']);
#Route::post('stripe/{totalprice}',[HomeController::class, 'stripePost'])->name('stripe.post');
Route::get('/search', [HomeController::class,'search']);
Route::get('/searchprice', [HomeController::class,'searchprice']);
#Route::post('/comments', [CommentController::class,'store']);
Route::post('/add_comment', [HomeController::class,'add_comment']);
Route::post('/add_reply', [HomeController::class,'add_reply']);
Route::post('/add_property', [HomeController::class,'add_property']);
Route::get('/addproperty', [HomeController::class,'addproperty']);
Route::post('/uploaduser', [HomeController::class,'uploaduser']);

});

Route::get('/dashboard', function ()
{
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

