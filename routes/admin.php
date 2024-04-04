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
use App\Http\Controllers\AdminProfileController;

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('role', RoleController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('category', CategoryController::class);
    // Route::resource('role', RoleController::class);
    Route::get('settings', function () {
        return view('admin.settings.settings');
    })->name('settings');

    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('settings');
        Route::get('/website', [WebsiteSettingController::class, 'index'])->name('setting.websitesetting');
        Route::get('profile-settings', function(){
            return view('admin.settings.profilesettings');
        })->name('profile-settings');
    });

    Route::get('profile',[AdminProfileController::class,'profile'])->name('admin.profile');
    Route::put('profile/update/{id}',[AdminProfileController::class,'UpdateProfile'])->name('admin.profile.update');
    Route::get('profile/reset-password/{id}',[AdminProfileController::class,'resetpasswordProfile'])->name('admin.profile.resetpassword');
    Route::put('profile/change-password/{id}',[AdminProfileController::class,'changepasswordProfile'])->name('admin.profile.changepassword');

});
