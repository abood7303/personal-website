<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ar'])) {
        abort(400);
    }
    Session::put('locale', $locale);
    return redirect()->back();
})->name('lang.switch');

Route::group(['middleware' => 'web'], function() {
    Route::get('/', function () { 
        return view('home', [
            'services' => \App\Models\Service::take(3)->get(),
            'works' => \App\Models\Work::take(4)->get(),
            'testimonials' => \App\Models\Testimonial::take(3)->get(),
        ]); 
    })->name('home');
    
    Route::get('/services', function () { 
        return view('services', ['services' => \App\Models\Service::all()]); 
    })->name('services');
    
    Route::get('/work', function () { 
        return view('work.index', ['works' => \App\Models\Work::all()]); 
    })->name('work.index');
    

    
    Route::get('/about', function () { return view('about'); })->name('about');
});
