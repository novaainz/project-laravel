<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

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
Route::get('/dashboard', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    $products = [];
    return view('home', compact('products'));
});

Route::get('/', function () {
    return view('welcome');
});

// ================= PROTECTED (HARUS LOGIN) =================
Route::middleware('auth')->group(function () {
    
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
});