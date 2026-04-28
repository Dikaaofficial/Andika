<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('andika');
});

route::get('/informatika', function(){
    return view('informatikaviews',
    ['nama' => 'Informatika A']);
});

route::redirect('testredirect','/Informatika');
