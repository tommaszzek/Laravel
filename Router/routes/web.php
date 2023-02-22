<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use Illuminate\Routing\RouteGroup;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/data', function () {
    return 'data';
});

Route::get('/data/{id}', function ($id) {
    return 'Dane z get'.$id;
});

Route::get('/data_1', function () {
    return view('my_view');
});


Route::get('/index',[MyController::class,'index'])->name('data_name');

Route::group(['prefix'=>'{moje}'],function(){
    
    Route::get('/', function () {
        return 'W grupie';
    });
   
    Route::get('/inne', function () {
        return '<a href="'.route('data_name').'"> Linki indeks</a>' ;
    });

});

//php artisan  make:controller MyController; - 






Route::controller(MyController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::get('/orders', 'store');
});