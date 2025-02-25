<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MenuPrincipalController::class,'MenuPrincipal']);



Route::get ('/Contato', [\App\Http\Controllers\ContatoController::class,'Contato']);



Route::get('/Sobre-Nos', [App\Http\Controllers\SobreNosController::class,'sobrenos']);



//Route::get('/Clientes', [App\Http\Controllers\Cliente]
//);



Route::get('/Produtos', function (){
    echo 'Sobre-Nos';
});



Route::get('/fornecedores', function (){
    echo 'Sobre-Nos';
});