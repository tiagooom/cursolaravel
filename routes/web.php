<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;


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

route::resource('produtos', ProdutoController::class);

route::get('/', [SiteController::class,'index'])->name('site/index');
route::get('/produto/{slug}', [SiteController::class,'details'])->name('site/details');
route::get('/categoria/{id}', [SiteController::class,'categoria'])->name('site/categoria');




/*
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
],  function () {

    Route::get('dashboard', function () {
        return "dashboard";
    })->name('dashboard');

    Route::get('admin/users', function () {
        return 'users';
    });
    
    Route::get('admin/clientes', function () {
        return 'clientes';
    });
});*/
