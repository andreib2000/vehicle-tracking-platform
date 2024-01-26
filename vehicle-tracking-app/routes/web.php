<?php

use Illuminate\Support\Facades\Route;
use App\Providers\NewCode\GetDataFromDB;
use App\Http\Controllers\HandleForm;
use App\Http\Controllers\NewCode\ActionsInApp;
use App\Http\Controllers\NewCode\SearchHandler;
use Symfony\Component\Console\Input\Input;

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
    $carclassobj = new GetDataFromDB(DB::table('date_masini')->select('*')->get());
    return view('index', compact('carclassobj'))->withTitle('Evidenta Autovehicule - Pagina Principala');
})->name("index");

Route::get('/index', function () {
    $carclassobj = new GetDataFromDB(DB::table('date_masini')->select('*')->get());
    return view('index', compact('carclassobj'))->withTitle('Evidenta Autovehicule - Pagina Principala');
});

Route::get('/adauga-vehicul', function () {
    return view('/adauga-vehicul', ['ok'=>-1])->withTitle("Adaugare vehicul nou");
});

Route::post('/store', [HandleForm::class, 'store']);
Route::post('/modify/{var}', [HandleForm::class, 'modify']);

Route::get('/sterge/{var}', [ActionsInApp::class, 'deleteEntry']);
Route::get('/editeaza/{var}', [ActionsInApp::class, 'editEntry']);

Route::get('/search', [SearchHandler::class, 'config']);

Route::get('/searched-content', function (Request $request) {
    echo $request[0]->model;
})->name('searched-content');