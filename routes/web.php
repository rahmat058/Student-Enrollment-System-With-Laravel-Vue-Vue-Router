<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student/{name}', function() {
    return redirect('/');
})-> where('name', '[A-Za-z]+');

Route::resource('student', 'StudentaddController');

