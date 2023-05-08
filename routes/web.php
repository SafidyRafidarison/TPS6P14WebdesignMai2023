<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('article/{n}/{test}', [WelcomeController::class, 'show'])->where('n', '[0-9]+');
Route::get('/back',function(){return view('login');})->name('login');
Route::get('/auth',[WelcomeController::class, 'back'])->name('back-office');

// Route::get('/', function () {
//     return view('ui-cards');
// });
Route::get('/', [WelcomeController::class, 'front']);

Route::get('/1', function() { return 'Je suis la page 1 !'; });                             

Route::get('test', function () {
    return response('un test', 206)->header('Content-Type', 'text/plain');
});


Route::get('/v1/{n}', function($n) {
    return view('v1')->with('numero', $n);;
});      

Route::get('/form', function () {
    return view('formulaire');
});

Route::post('/sub',[WelcomeController::class, 'store']);                    
Route::post('/add',[WelcomeController::class, 'addContent']);                    
Route::get('/lis',[WelcomeController::class, 'liste']);                    
Route::get('generate-pdf', [WelcomeController::class,'generatePDF']);

Route::post('/upload', function (Illuminate\Http\Request $request) {
    $picture = $request->file('picture');
    $filename = $picture->getClientOriginalName();
    $picture->move(public_path('uploads'), $filename);
    return 'Picture uploaded successfully!'.$filename;
});

Route::get('/pic',function(){return view('pic');});
Route::get('/addInfo',function(){return view('addInfo');})->name('ajout');


Route::get('info/{extra}/{id}', [WelcomeController::class,'details'])->where('extra', '.*');
Route::get('delete/{extra}/{id}', [WelcomeController::class,'delete'])->where('extra', '.*');
