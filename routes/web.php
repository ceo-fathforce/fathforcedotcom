<?php

use App\Http\Controllers\Auth\OAuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Config\MailTemplateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SignedMediaController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// website route
Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/service', [HomeController::class, 'service'])->name('/service');
Route::get('/company', [HomeController::class, 'company'])->name('/company');
Route::get('/portfolio', [HomeController::class, 'portfolios'])->name('/portfolio');
Route::get('/portfolios/detail/{uuid}', [HomeController::class, 'portfoliodetail'])->name('/portfoliodetail');
Route::get('/product', [HomeController::class, 'products'])->name('/product');
Route::get('/products/detail/{uuid}', [HomeController::class, 'productdetail'])->name('productdetail');
Route::get('/partnercompany', [HomeController::class, 'partnercompany'])->name('/partnercompany');
Route::get('/partnermember', [HomeController::class, 'partnermember'])->name('/partnermember');
Route::get('/partnerschool', [HomeController::class, 'partnerschool'])->name('/partnerschool');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('/gallery');
Route::get('/posts', [HomeController::class, 'posts'])->name('/posts');
Route::get('/posts/detail/{uuid}', [HomeController::class, 'postdetail'])->name('postdetail');
Route::get('/posts/search', [HomeController::class, 'searchPosts'])->name('posts.search');
Route::get('/term', [HomeController::class, 'term'])->name('/term`');
Route::get('/contact', [HomeController::class, 'contact'])->name('/contact');
Route::get('/signin', [HomeController::class, 'signin'])->name('/signin');
Route::get('/forgot-password', [HomeController::class, 'forgotpassword'])->name('/forgotpassword');

if (file_exists(app_path('Http/Controllers/LocalizationController.php')))
{
    Route::get('lang/{locale}', [App\Http\Controllers\LocalizationController::class , 'lang']);
}

Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.us.store');

// routes/web.php

// Route::get('/posts/detail/{uuid}', [CommentController::class, 'index'])->name('posts.detail');
// Route::post('/posts/detail/{uuid}', [CommentController::class, 'store'])->name('comments.store');


Route::get('/app/config/mail-template/{mail_template}', [MailTemplateController::class, 'detail'])
    ->name('config.mail-template.detail')
    ->middleware('permission:config:store');

Route::get('/media/{media}/{conversion?}', SignedMediaController::class)->name('media');

Route::get('/auth/{provider}/redirect', [OAuthController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [OAuthController::class, 'callback']);

Route::redirect('/log', 'log-viewer', 301);

// app route
Route::get('/app/{vue?}', function () {
    return view('app');
})->where('vue', '[\/\w\.-]*')->name('app');

// Fallback route
Route::fallback(function () {
    abort(404);
});
