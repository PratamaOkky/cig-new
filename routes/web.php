<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GajiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\KarirController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\PelamarController;
use App\Http\Controllers\Homepage\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\EditPasswordController;
use App\Http\Controllers\Admin\UpdatePasswordController;
use App\Http\Controllers\Auth\{LoginController, RegisterController};
use App\Http\Controllers\User\DashboardController as UserDashboardController;

// Auth
Route::middleware(['guest', 'PreventBackHistory'])->group( function ()
{
    // Login
    Route::get('login', [LoginController::class,'index'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    // Home
    Route::get('/', [HomeController::class, 'index'])->name('/');

    // About
    Route::get('tentang', [HomeController::class, 'about'])->name('tentang');

    // blog
    Route::get('blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('detail/{artikel}', [HomeController::class, 'detail'])->name('detail');

    // Layanan
    Route::get('layanan', [HomeController::class, 'layanan'])->name('layanan');

    // Karir
    Route::get('career', [HomeController::class, 'career'])->name('career');
    Route::post('career', [HomeController::class, 'store'])->name('career.store');

    // Pesan
    Route::get('kontak', [HomeController::class, 'indexKontak'])->name('kontak');
    Route::post('post', [HomeController::class, 'postKontak'])->name('post');
});


Route::group(['middleware' => 'auth', 'PreventBackHistory'], function()
{
    Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.'], function()
    {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('password/edit', [UpdatePasswordController::class, 'edit'])->name('password.edit');
        Route::put('password/edit', [UpdatePasswordController::class, 'update']);

        Route::name('gaji.')->group( function ()
        {
            Route::get('gaji', [GajiController::class, 'index'])->name('index');
            Route::get('gaji/data', [GajiController::class, 'dataGaji'])->name('data');
            Route::get('gaji/all', [GajiController::class, 'getAllGaji'])->name('all');
            Route::post('gaji/delete', [GajiController::class, 'deleteGaji'])->name('delete');
            Route::post('gaji/select', [GajiController::class, 'deleteSelected'])->name('select');
            Route::post('gaji/import', [GajiController::class, 'importgaji'])->name('import');
            Route::get('gaji/download', [GajiController::class, 'download'])->name('download');
        });

        // Karir
        Route::resource('karir', KarirController::class);

        // Artikel
        Route::resource('artikel', ArtikelController::class);

        // Kontak
        Route::resource('contact', KontakController::class);

        // Pelamar
        Route::resource('pelamar', PelamarController::class);

        // user
        Route::resource('user', UserController::class);

        // Register
        Route::get('register', [RegisterController::class, 'index'])->name('register');
        Route::post('register', [RegisterController::class, 'register']);

        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    });

    Route::group(['prefix' => 'user', 'as' => 'user.'], function()
    {
        Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

        Route::get('download', [UserDashboardController::class, 'downloadGaji'])->name('download');

        Route::get('password/edit', [EditPasswordController::class, 'edit'])->name('password.edit');
        Route::put('password/edit', [EditPasswordController::class, 'update']);

        Route::post('logout', [UserDashboardController::class, 'logout'])->name('logout');
    });
});
