<?php

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

Route::get('/', function () { return view('welcome'); });
Route::get('/quem-somos', function () { return view('about'); });

Route::get('/servicos/para-voce', function () { return view('servicos.para-voce'); });
Route::get('/servicos/para-psicologos', function () { return view('servicos.para-psicologos'); });
Route::get('/servicos/para-empresas', function () { return view('servicos.para-empresas'); });
Route::get('/servicos/para-terceiro-setor', function () { return view('servicos.para-terceiro-setor'); });