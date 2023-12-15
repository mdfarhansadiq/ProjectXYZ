<?php

use App\Http\Controllers\adminBlog\AdminBlogController;
use App\Http\Controllers\adminDashboard\AdminDashboardController;
use App\Http\Controllers\adminCategory\AdminCategoryController;
use App\Http\Controllers\health\HealthController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\sport\SportController;
use App\Http\Controllers\customAuth\CustomAuthController;
use App\Http\Controllers\contact\ContactController;
use App\Http\Controllers\GoogleAuthController;
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

Route::get('/home', [HomeController::class, 'homePageView']);
Route::get('/category', [CategoryController::class, 'categoryPageView']);
Route::get('/sport', [SportController::class, 'sportPageView']);
Route::get('/health', [HealthController::class, 'healthPageView']);

Route::get('/admin', [AdminDashboardController::class, 'adminDashboardPageView']);
Route::get('/admin/category-form', [AdminCategoryController::class, 'adminCategoryPageView']);
Route::post('/admin/category-create', [AdminCategoryController::class, 'adminCategoryCreate'])->name('Category-Create');
Route::get('/admin/blog-form', [AdminBlogController::class, 'adminBlogPageView']);
Route::post('/admin/blog-create', [AdminBlogController::class, 'adminBlogCreate'])->name('Blog-Create');
Route::get('/admin/blog-edit/{id}', [AdminBlogController::class, 'adminBlogEditShow'])->name('Blog-Edit');
Route::post('/admin/blog-update/{id}', [AdminBlogController::class, 'adminBlogEditUpdate'])->name('Blog-Update');

Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact/email', [ContactController::class, 'email'])->name('Contact');


Route::get('/register', [CustomAuthController::class, 'customRegistrationView']);
Route::post('custom-regist/create', [CustomAuthController::class, 'customRegistrationCreate']);
Route::get('/login', [CustomAuthController::class, 'customLoginView']); // main page
Route::post('custom-login/create', [CustomAuthController::class, 'customLoginCreate']);
Route::post('/custom-logout', [CustomAuthController::class, 'customLogout'])->name('Logout');

Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google-auth');
Route::any('/auth/google/call-back', [GoogleAuthController::class, 'handleGoogleCallback']);
