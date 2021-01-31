<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TesteController;

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



Route::get("/test", function () {
    return "<h1>I'm just testing some things</h1>";
})->name('rota.test');
/*
*********************************************************
        Diferentes formas de criar rotas
*********************************************************

\\\\\ Forma 1 \\\\\\\:
Route::get('/work', function () {
    return redirect()->route('rota.test');
})->middleware([]);

\\\\\ Forma 2 \\\\\\\:
Route::middleware([])->group(function () {
    Route::prefix("admin")->group(function () {
        Route::namespace("Admin")->group(function () {
            Route::name("admin.")->group(function () {
                Route::get("/dashboard/{user}", [TesteController::class,'teste'])->name('dashboard');
                Route::get("/financeiro", [TesteController::class, 'teste'])->name("financeiro");
                Route::get("/shop", [TesteController::class, 'teste'])->name("shop");
                Route::get("/", function () {
                    return redirect()->route('admin.dashboard');
                })->name('home');
            });
        });
    });
});

////// Forma 2 \\\\\\\:
Route::group([
    'middleware' => [],
    'prefix' => "admin",
    'name' => "admin."
], function() {
    Route::get("/dashboard/{user}", [TesteController::class,'teste'])->name('dashboard');
    Route::get("/financeiro", [TesteController::class, 'teste'])->name("financeiro");
    Route::get("/shop", [TesteController::class, 'teste'])->name("shop");
    Route::get("/", function () {
        return redirect()->route('admin.dashboard');
    })->name('home');
});

*/

