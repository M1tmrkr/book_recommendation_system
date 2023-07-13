<?php

use App\Http\Controllers\Site\SiteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
/**
 * / Password Reset Routes...
 */
Route::get('password/resetform', [Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.resetform');
Route::post('password/email', [Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/request/{token}', [Auth\ResetPasswordController::class, 'showResetForm'])->name('password.request.token');
Route::post('password/update', [Auth\ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/', function () {
    return redirect()->route("login");
});
Auth::routes();


Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('index');

    /**
     * Users Routes
     */
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/',                             [App\Http\Controllers\Admin\UserController::class, 'index'])->name('index');
        Route::get('create',                        [App\Http\Controllers\Admin\UserController::class, 'create'])->name('create');
        Route::post('',                             [App\Http\Controllers\Admin\UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                    [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                 [App\Http\Controllers\Admin\UserController::class, 'update'])->name('update');
        Route::get('/delete/{id}',                  [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('delete');
    });

    /**
     * Roles Routes
     */
    Route::group(['prefix' => 'roles', 'as' => 'roles.'], function () {
        Route::get('/',                             [App\Http\Controllers\Admin\RoleController::class, 'index'])->name('index');
        Route::get('create',                        [App\Http\Controllers\Admin\RoleController::class, 'create'])->name('create');
        Route::post('',                             [App\Http\Controllers\Admin\RoleController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                    [App\Http\Controllers\Admin\RoleController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                 [App\Http\Controllers\Admin\RoleController::class, 'update'])->name('update');
        Route::get('/delete/{id}',                  [App\Http\Controllers\Admin\RoleController::class, 'delete'])->name('delete');
    });



    /**
     * Settings Routes
     */
    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::get('/',                             [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('index');
        Route::post('/update/{id}',                 [App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('update');

        Route::group(['prefix' => 'social', 'as' => 'social.'], function () {
            Route::get('',                       [App\Http\Controllers\Admin\SettingsController::class, 'getSocialProfiles'])->name('index');
            Route::post('{social}',              [App\Http\Controllers\Admin\SettingsController::class, 'updateSocialProfiles'])->name('store');
        });
    });

    /**
     * User Profile Routes
     */
    Route::group(['prefix' => 'user_profile', 'as' => 'user_profile.'], function () {
        Route::get('/',                          [App\Http\Controllers\Admin\UsersProfileController::class, 'index'])->name('index');
        Route::get('/create',                    [App\Http\Controllers\Admin\UsersProfileController::class, 'create'])->name('create');
        Route::post('',                          [App\Http\Controllers\Admin\UsersProfileController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                 [App\Http\Controllers\Admin\UsersProfileController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',              [App\Http\Controllers\Admin\UsersProfileController::class, 'update'])->name('update');
        Route::delete('/{id}',                   [App\Http\Controllers\Admin\ApplicationController::class, 'destroy'])->name('destroy');
        Route::get('/show}',                     [App\Http\Controllers\Admin\UsersProfileController::class, 'show'])->name('show');
        Route::post('/}',                        [App\Http\Controllers\Admin\UsersProfileController::class, 'passwordChange'])->name('passwordChange');
    });





    /**
     * Banner Routes ////
     */
    Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
        Route::get('/',                                    [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('index');
        Route::get('/create',                              [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('create');
        Route::post('',                                    [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                           [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                        [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('update');
        Route::get('/{id}',                                [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('delete');
    });

    /**
     * Banner Routes ////
     */
    Route::group(['prefix' => 'book', 'as' => 'book.'], function () {
        Route::get('/',                                    [App\Http\Controllers\Admin\BookController::class, 'index'])->name('index');
        Route::get('/create',                              [App\Http\Controllers\Admin\BookController::class, 'create'])->name('create');
        Route::post('',                                    [App\Http\Controllers\Admin\BookController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                           [App\Http\Controllers\Admin\BookController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                        [App\Http\Controllers\Admin\BookController::class, 'update'])->name('update');
        Route::get('/{id}',                                [App\Http\Controllers\Admin\BookController::class, 'destroy'])->name('delete');
    });
});

/**
 * site route
 */

// Route::group(['as' => 'site.', 'namespace' => 'Site'], function () {
//     /**
//      * Route for home page
//      */
//     Route::get('/',                                           [App\Http\Controllers\Site\SiteController::class, 'index'])->name('index');

//     /**
//      * Route To show Post
//      */
//     Route::get('/post/{id}',                                 [App\Http\Controllers\Site\SiteController::class, 'showPost'])->name('post.show');
//     Route::get('/blog/{id}',                                 [App\Http\Controllers\Site\SiteController::class, 'showBlog'])->name('blog.show');



//     Route::get('/contact-us',                                 [App\Http\Controllers\Site\SiteController::class, 'contact'])->name('contact');
//     Route::get('/internship-apply',                           [App\Http\Controllers\Site\SiteController::class, 'internship'])->name('internship');
//     Route::get('/career',                                     [App\Http\Controllers\Site\SiteController::class, 'career'])->name('career');
//     Route::get('/album',                                      [App\Http\Controllers\Site\SiteController::class, 'album'])->name('album');
//     Route::get('/product-list',                               [App\Http\Controllers\Site\SiteController::class, 'product'])->name('product');
//     Route::get('/blog',                                       [App\Http\Controllers\Site\SiteController::class, 'blog'])->name('blog');
//     Route::get('/services',                                   [App\Http\Controllers\Site\SiteController::class, 'services'])->name('services');
//     Route::get('/company',                                    [App\Http\Controllers\Site\SiteController::class, 'company'])->name('company');
//     Route::get('/client-list',                                [App\Http\Controllers\Site\SiteController::class, 'client'])->name('client');
//     Route::get('/event',                                      [App\Http\Controllers\Site\SiteController::class, 'event'])->name('event');
//     Route::get('/search',                                      [App\Http\Controllers\Site\SiteController::class, 'search'])->name('search');
// });
