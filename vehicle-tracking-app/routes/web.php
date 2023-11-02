<?php

use Illuminate\Support\Facades\Route;
use App\Providers\GetDataFromDB;
use App\Http\Controllers\HandleForm;

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

Route::get('/', function ($page = 'index') {
    $carclassobj = new GetDataFromDB(DB::table('date_masini')->select('*')->get());
    return view('index', compact('carclassobj'))->withTitle('Evidenta Autovehicule - Pagina Principala');
});

Route::get('/adauga-vehicul', function () {
    return view('/adauga-vehicul')->withTitle("Adaugare vehicul nou");
});

Route::post('/store', [HandleForm::class, 'store']);