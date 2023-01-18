<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\Backend\BusinessPlanController;
use App\Http\Controllers\Backend\ServiceController;

Route::get('/', [WebsiteController::class, 'index'])->name("home");
Route::get('/about', [WebsiteController::class, 'about'])->name("about");
Route::get('/service', [WebsiteController::class, 'service'])->name("service");
Route::get('/blog', [WebsiteController::class, 'blog'])->name("blog");
Route::get('/contact', [WebsiteController::class, 'contact'])->name("contact");

// Route::prefix()->group(function(){

// });
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name("dashboard");
    Route::resource('banners', BannerController::class);
    Route::resource('business', BusinessPlanController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('siteSettings', SiteSettingController::class);
});

require __DIR__ . '/auth.php';
