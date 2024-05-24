<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
    //return 'Pantalla principal';
});

Route::get('/login', function(){
    return view('auth.login');
});

Route::get('/logout', function(){
    // cerrar sesión
    if (Auth::check()) {
        Auth::logout();
        }
        return redirect('/');
 
});

Route::get('/catalog', function(){
    return view ('catalog.index');
});

Route::get('/catalog/show/{id}', function($id){
    return view ('catalog.show',['id'=>$id]);
});

Route::get('/catalog/create', function(){
    return view ('catalog.create');
});

Route::get('/catalog/edit/{id}', function ($id) {
 return view('catalog.edit', ['id' => $id]);
});





