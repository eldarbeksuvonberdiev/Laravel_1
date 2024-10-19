<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/index1');
});
Route::get('/ind2', function () {
    return view('pages/index2');
});
Route::get('/ind3', function () {
    return view('pages/index3');
});
Route::get('/widget', function () {
    return view('pages/widget');
});
Route::get('/layout1', function () {
    return view('layouts/layout1');
});
// Route::get('/', function () {
//     return view('main');
// });
// Route::get('/', function () {
//     return view('main');
// });
// Route::get('/', function () {
//     return view('main');
// });
// Route::get('/', function () {
//     return view('main');
// });
// Route::get('/', function () {
//     return view('main');
// });
// Route::get('/', function () {
//     return view('main');
// });
// Route::get('/', function () {
//     return view('main');
// });
