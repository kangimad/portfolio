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

// ROUTE ADMIN
Route::get('/portfolio/home', function () {
    return view('portfolio.pages.home');
});
Route::get('/portfolio/about', function () {
    return view('portfolio.pages.about');
});
Route::get('/portfolio/resume', function () {
    return view('portfolio.pages.resume');
});
Route::get('/portfolio/services', function () {
    return view('portfolio.pages.services');
});
Route::get('/portfolio/skills', function () {
    return view('portfolio.pages.skills');
});
Route::get('/portfolio/projects', function () {
    return view('portfolio.pages.projects');
});
Route::get('/portfolio/blog', function () {
    return view('portfolio.pages.blog');
});
Route::get('/portfolio/contact', function () {
    return view('portfolio.pages.contact');
});

// ROUTE LANDING PAGE
Route::get('/olshop/home', function () {
    return view('olshop.pages.home');
});
Route::get('/olshop/about', function () {
    return view('olshop.pages.about');
});
Route::get('/olshop/staff', function () {
    return view('olshop.pages.staff');
});
Route::get('/olshop/galeri', function () {
    return view('olshop.pages.galeri');
});
Route::get('/olshop/kontak', function () {
    return view('olshop.pages.kontak');
});
