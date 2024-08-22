<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController as PagesController;
use App\Http\Controllers\OptionalsController as OptionalsController;

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
//     return view('homepage');
// })->name('homepage');

// Route::get('/about-me', function(){
//     $name = 'Fabrizio Mastrobattista';
//     $videogames = [
//         'The Witcher 3',
//         'Bloodborne',
//         'Elden Ring',
//         'Red Dead Redemption 2',
//         'Paperino Operazione Papero'
//     ];

    

//     return view('about_me', compact('name', 'videogames'));
//     // return view('about_me', ['gianfranco' => $name]);
// })->name('about-me');

// Route::get('/about-me/{partner}', function(String $partner){
//     $name = 'Fabrizio Mastrobattista';
//     $videogames = [
//     ];

    

//     return view('about_me', compact('name', 'videogames', 'partner'));
//     // return view('about_me', ['gianfranco' => $name]);
// })->name('about-me-partner');;

// Route::get('/ciccio', function(){
//     return 'Questa è una pagina cicciosa';
// });

Route::get('/', [PagesController::class, 'index'])->name('homepage');
Route::get('/about-me', [PagesController::class, 'about'])->name('about-me');

Route::resource('optionals', OptionalsController::class);