<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

// ================= LOGIN =================
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    if (Auth::attempt($request->only('email', 'password'))) {
        return redirect('/admin/dashboard');
    }

    return back()->with('error', 'Login gagal');
});

// ================= HOME =================
Route::get('/', function () {
    return view('welcome');
});

// ================= PROTECTED (HARUS LOGIN) =================
Route::middleware('auth')->group(function () {
    
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);

});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
});