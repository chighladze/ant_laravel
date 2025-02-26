<?php
// project file path: ant_laravel/routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Response;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact/send', [PageController::class, 'sendContact'])->name('contact.send');
Route::get('/installation', [PageController::class, 'installation'])->name('installation');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/brands', [PageController::class, 'brands'])->name('brands');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog-2', [PageController::class, 'blog2'])->name('blog2');
Route::get('/blog-single', [PageController::class, 'blogSingle'])->name('blog.single');
Route::get('/homepage-2', [PageController::class, 'homepage2'])->name('homepage2');
Route::get('/homepage-3', [PageController::class, 'homepage3'])->name('homepage3');
Route::get('/homepage-4', [PageController::class, 'homepage4'])->name('homepage4');

Route::get('/change-language/{locale}', [PageController::class, 'changeLanguage'])->name('lang.switch');
Route::get('/test-language', [PageController::class, 'testLanguage']);
Route::get('/test-session', [PageController::class, 'testSession']);

Route::get('/sitemap.xml', function () {
  $sitemap = view('sitemap')->render();
  return Response::make($sitemap, 200)->header('Content-Type', 'application/xml');
});