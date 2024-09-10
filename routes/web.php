<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LegalDocsController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthSocialController;
use App\Http\Controllers\DashboardController;

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
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('page.login');

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/legal-docs/{title}', 'App\Http\Controllers\LegalDocsController@page');

Route::group(['prefix' => '/cover-letter'], function () {
    Route::get('/templates', [TemplateController::class, 'showAllCovTemplates']);
    Route::get('/templates/edit/{id}', [TemplateController::class, 'CovTemplateEdit'])->name('cov.edit');
});
Route::group(['prefix' => '/resume'], function () {
    Route::get('/templates', [TemplateController::class, 'showAllResTemplates'])->name('templates.resume');
    Route::get('/templates/edit/{id}', [TemplateController::class, 'ResTemplateEdit']);
});

Route::get('/auth/google', [AuthSocialController::class, 'redirect'])->name('auth.google');
Route::get('/auth/google/callback', [AuthSocialController::class, 'callbackGoogle']);

Route::group(['prefix' => 'user'], function () {
    Route::post('/register', [AuthController::class, 'register'])->name('user.register');
    Route::post('/login', [AuthController::class, 'login'])->name('user.login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    // user
    Route::group(['prefix' => 'user'], function () {
        Route::get('/documents', [DashboardController::class, 'userDocuments'])->name('dashboard.user.documents');

        Route::get('/favorites', [DashboardController::class, 'userFavorites'])->name('dashboard.user.favorites');

        Route::get('/profile', [DashboardController::class, 'userProfile'])->name('dashboard.user.profile');
        Route::post('{id}/profile/update', [UserController::class, 'update'])->name('user.update.profile');
        Route::get('{id}/avatar/delete', [UserController::class, 'deleteAvatar'])->name('user.delete.avatar');

        Route::get('/setting', [DashboardController::class, 'userSetting'])->name('dashboard.user.setting');
        Route::post('/setting/dark', [DashboardController::class, 'btnDarkMode'])->name('user.setting.dark');

        Route::get('/cover-letter/update/{id}', [DashboardController::class, 'updateDocCov'])->name('update.coverletter');
    });

    //admin
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [DashboardController::class, 'admin'])->name('dashboard.admin');
        Route::get('/profile', [DashboardController::class, 'userProfile'])->name('dashboard.admin.profile');
        Route::get('/setting', [DashboardController::class, 'userSetting'])->name('dashboard.admin.setting');
        
        Route::group(['prefix' => '/manage/users'], function () {
            Route::get('/', [DashboardController::class, 'manageUsers'])->name('dashboard.admin.users');
            Route::get('/edit/{id}', [DashboardController::class, 'editUser'])->name('user.edit');
        });
        Route::group(['prefix' => '/manage/templates'], function () {
            Route::get('/', [DashboardController::class, 'manageTemplates'])->name('dashboard.admin.templates');
            Route::get('/create', [TemplateController::class, 'create'])->name('template.create');
            Route::post('/add', [TemplateController::class, 'store'])->name('template.store');
            Route::get('/edit/{id}', [TemplateController::class, 'edit'])->name('template.edit');
            Route::post('/update/{id}', [TemplateController::class, 'update'])->name('template.update');
            Route::post('/delete', [TemplateController::class, 'delete'])->name('template.delete');
        });
    });
});
Route::get('/dashboard/help', [DashboardController::class, 'help'])->name('dashboard.help');


Route::group(['prefix' => 'document'], function () {
    Route::post('/cov/save', [TemplateController::class, 'saveCov'])->name('cov.save');
    Route::post('/cov/update/{id}', [TemplateController::class, 'updateCov'])->name('cov.update');
    Route::post('/res/save', [TemplateController::class, 'saveRes'])->name('res.save');
});

