<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [TestController::class, 'hello']);
Route::post('/pays',[TestController::class, 'store'])->name('savePays');
//Route::get('/pays', [TestController::class, 'pays']);
Route::get('/pays', [TestController::class, 'getCountries'])->name('listePays');

Route::get('/pays/create', [TestController::class, 'create'])->name('createPays');

Route::resource('articles', ArticleController::class);
Route::resource('categories', CategorieController::class);

Route::get('/pays/{id}', [TestController::class, 'showgetCountries'])->name('detailPays');

Route::resource('articles', ArticleController::class);


Route::get('/salut/{nom}', function($nom){
    return "salut $nom";
});

Route::get('/somme/{a}/{b}', function($a, $b){
    return "la somme de $a et $b est :".($b+$b);
});

/*Route::get('/articles', function(){
    return response()->json([
        ['id'=>1, 'title'=>'formation laravel'],
        ['id'=>2, 'title'=>'Formation java']
    ]);
});*/