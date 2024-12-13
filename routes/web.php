<?php

use App\Http\Controllers\blogDetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\RefundPolicyController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceCardController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/emore', function () {
    return view('index');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/order', function () {
    // return view('pages');
    return view('orders');
});

// Route::get('/emore_team', function () {
//     // return view('pages');
//     return view('ourteam');
// });

// orders
Route::get('/orders', [OrderController::class, 'createForm'])->name('order.create');
Route::post('/order/store', [OrderController::class, 'store'])->name('orders.store');


// // blogs
// Route::get('/blogs', [BlogPostController::class, 'index']);
// Route::get('/blogdetails', [blogDetailController::class, 'index'])->name('blogdetails.index');


// Route::resource('blogs', BlogPostController::class);





// about us section
Route::get('/about',[AboutUsController::class, 'index'])->name('aboutus.index');


// projects section
Route::get('/projects',[ProjectsController::class, 'index'])->name('projects.index');


// faq section
Route::get('/faq',[FaqController::class, 'index'])->name('faq.index');


// refund policy
Route::get('/refund-policy',[RefundPolicyController::class, 'index'])->name('refund-policy.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// In routes/web.php



Route::middleware('auth')->group(function () {
    Route::get('/ordering', [OrderController::class, 'index'])->name('orders.index');
    Route::post('/ordering/{id}/mark-as-done', [OrderController::class, 'markAsDone'])->name('orders.markAsDone');
    Route::delete('/ordering/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');
    Route::get('/orders/search', [OrderController::class, 'search'])->name('orders.search');


    // dashboard
    
    Route::get('/dashboard', [OrderController::class, 'dashboard'])->name('admin.dashboard');    
});


// new resource routes => improving the code

Route::resource('contacts', ContactController::class);

Route::get('/contact', [ContactController::class, 'contactFront'])->name('admin.contactFront');  


// services resource
Route::resource('services', ServiceCardController::class);

//blog-post resource
Route::resource('posts', PostController::class);
