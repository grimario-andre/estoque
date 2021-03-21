<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', 'ProdutoController@lista');
