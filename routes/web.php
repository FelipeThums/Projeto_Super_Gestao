<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', \App\Http\Controllers\MenuPrincipalController::class[MenuPrincipal]);



Route::get ('/Contato', function (){
    echo 'Contato';
});
Route::get('/Sobre-Nos', function (){
    echo 'Sobre-Nos';
});

Route::get('/Clientes', function (){
    echo 'Sobre-Nos';
});

Route::get('/Produtos', function (){
    echo 'Sobre-Nos';
});

Route::get('/fornecedores', function (){
    echo 'Sobre-Nos';
});