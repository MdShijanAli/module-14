<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    $responseData = [
        'success' => true,
        'message' => 'Form submitted successfully.',
    ];

    return response()->json($responseData);
});
