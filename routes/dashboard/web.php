<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;



Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){ //...

    
    Route::prefix('dashboard')->name('dashboard.')->group(function() {
    
        route::get('/index', [DashboardController::class, 'index'])->name('index');
    
    });// end of dashboard routes 

});