<?php

Route::get('/', function () {
    return view('student');
});

Route::get('/student/{name}', function() {
    return redirect('/');
})-> where('name', '[A-Za-z]+');

