<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;



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
route::resource('users', UserController::class);

route::get('/', [SiteController::class,'index'])->name('site/index');
route::get('/produto/{slug}', [SiteController::class,'details'])->name('site/details');
route::get('/categoria/{id}', [SiteController::class,'categoria'])->name('site/categoria');

route::get('/carrinho', [CarrinhoController::class,'carrinhoLista'])->name('site/carrinho');
route::post('/carrinho', [CarrinhoController::class,'adicionaCarrinho'])->name('site/addcarrinho');
route::post('/remover', [CarrinhoController::class,'removeCarrinho'])->name('site/removecarrinho');
route::post('/atualizar', [CarrinhoController::class,'atualizaCarrinho'])->name('site/atualizacarrinho');
route::get('/limpar', [CarrinhoController::class,'limparCarrinho'])->name('site/limparcarrinho');

route::view('/login', 'login/form')->name('login/form');
route::post('/auth',   [LoginController::class, 'auth'])->name('login/auth');
route::get('/logout',   [LoginController::class, 'logout'])->name('login/logout');
route::get('/register',   [LoginController::class, 'create'])->name('login/create');

route::get('/admin/dashboard', [DashboardController::class,'index'])->name('admin/dashboard')->middleware(['auth', 'checkemail']);


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
