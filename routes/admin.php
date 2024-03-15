<?php

use App\Http\Controllers\Admin\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Admin\Setting\WebsiteSettingController;

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('role', RoleController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('blog', BlogController::class);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    // Route::resource('role', RoleController::class);

    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('settings');
        Route::get('/website', [WebsiteSettingController::class, 'index'])->name('setting.websitesetting');
        Route::get('profile-settings', function(){
            return view('admin.settings.profilesettings');
        })->name('profile-settings');
    });
});
