<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\TopMenuController;
use App\Http\Controllers\Admin\TradeShowController;
use App\Http\Controllers\Admin\TradeshowsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Models\Banner;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $banners= Banner::latest()->take(3)->get();
    return view('frontend.pages.index')->with(compact('banners'));
});
Route::get('/login', function () {
    return view('frontend.pages.login');
});
Route::get('/buyers', function () {
    return view('frontend.pages.buyers');
});
Route::get('/companies', function () {
    return view('frontend.pages.companies');
});
Route::get('/products', function () {
    return view('frontend.pages.companies');
});
Route::get('/company_overview', function () {
    return view('frontend.pages.company_overview');
});
Route::get('/manufacturers', function () {
    return view('frontend.pages.manufacturers');
});

Route::get('/contact', function () {
    return view('frontend.pages.contact');
});

Route::match(['get', 'post'], 'contact',[ContactController::class ,'contact'])->name('contact');

Route::group(['prefix' => 'b2b/' ,'as'=>'admin.'] , function () {
    Route::match(['get', 'post'], 'admin_login',[AdminController::class ,'login'])->name('login');
    Route::group(['middleware'=>'admin'], function () {
        Route::get('dashboard',[AdminController::class ,'index'])->name('dashboard');
        Route::get('logout',[AdminController::class ,'logout'])->name('logout');
        Route::match(['get', 'post'], 'reset_password',[AdminController::class ,'reset'])->name('reset');
        Route::match(['get', 'post'], 'profile',[AdminController::class ,'profile'])->name('profile');
        Route::match(['get', 'post'], 'add',[AdminController::class ,'add'])->name('add');
        Route::group(['prefix' => 'package/' ,'as'=>'package.'] , function () {
            Route::get('index',[PackageController::class ,'index'])->name('index');
            Route::post('update-package-status',[PackageController::class ,'updatePackageStatus'])->name('updatePackageStatus');
            Route::match(['get', 'post'], 'edit/{id}',[PackageController::class ,'edit'])->name('edit');
            Route::match(['get', 'post'], 'add',[PackageController::class ,'add'])->name('add');
            Route::get('delete/{id}',[PackageController::class ,'delete'])->name('delete');
        });
        Route::group(['prefix' => 'component/' ,'as'=>'component.'] , function () {
            Route::group(['prefix' => 'banner/' ,'as'=>'banner.'] , function () {
                Route::get('index',[BannerController::class ,'index'])->name('index');
                Route::post('update-banner-status',[BannerController::class ,'updateBannerStatus'])->name('updateBannerStatus');
                Route::match(['get', 'post'], 'edit/{id}',[BannerController::class ,'edit'])->name('edit');
                Route::match(['get', 'post'], 'add',[BannerController::class ,'add'])->name('add');
                Route::get('delete/{id}',[BannerController::class ,'delete'])->name('delete');
            });
        });
        Route::group(['prefix' => 'category/' ,'as'=>'category.'] , function () {
            Route::get('index',[CategoryController::class ,'index'])->name('index');
            Route::post('update-category-status',[CategoryController::class ,'updateCategoryStatus'])->name('updateCategoryStatus');
            Route::match(['get', 'post'], 'edit/{id}',[CategoryController::class ,'edit'])->name('edit');
            Route::match(['get', 'post'], 'add',[CategoryController::class ,'add'])->name('add');
            Route::get('delete/{id}',[CategoryController::class ,'delete'])->name('delete');
        });
        Route::group(['prefix' => 'about/' ,'as'=>'about.'] , function () {
            Route::get('index',[AboutController::class ,'index'])->name('index');
            Route::post('update-about-status',[AboutController::class ,'updateAboutStatus'])->name('updateAboutStatus');
            Route::match(['get', 'post'], 'edit/{id}',[AboutController::class ,'edit'])->name('edit');
            Route::match(['get', 'post'], 'add',[AboutController::class ,'add'])->name('add');
            Route::get('delete/{id}',[AboutController::class ,'delete'])->name('delete');
        });
        Route::group(['prefix' => 'top_menu/' ,'as'=>'top_menu.'] , function () {
            Route::get('index',[TopMenuController::class ,'index'])->name('index');
            Route::post('update-top_menu-status',[TopMenuController::class ,'updateTopMenuStatus'])->name('updateTopMenuStatus');
            Route::match(['get', 'post'], 'edit/{id}',[TopMenuController::class ,'edit'])->name('edit');
            Route::match(['get', 'post'], 'add',[TopMenuController::class ,'add'])->name('add');
            Route::get('delete/{id}',[TopMenuController::class ,'delete'])->name('delete');
        });
        Route::group(['prefix' => 'tradeShow/' ,'as'=>'tradeShow.'] , function () {
            Route::get('index',[TradeShowController::class ,'index'])->name('index');
            Route::match(['get', 'post'], 'edit/{id}',[TradeShowController::class ,'edit'])->name('edit');
            Route::match(['get', 'post'], 'add',[TradeShowController::class ,'add'])->name('add');
            Route::get('delete/{id}',[TradeShowController::class ,'delete'])->name('delete');
        });
        Route::group(['prefix' => 'contact/' ,'as'=>'top_menu.'] , function () {
            Route::get('view/{id}',[ContactController::class ,'view'])->name('view');
            Route::get('delete/{id}',[ContactController::class ,'delete'])->name('delete');
        });
    });
});
