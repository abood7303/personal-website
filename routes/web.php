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
            'services' => \App\Models\Service::take(4)->get(),
            'works' => \App\Models\Work::take(4)->get(),
            'testimonials' => \App\Models\Testimonial::take(3)->get(),
            'posts' => \App\Models\Post::whereNotNull('published_at')->where('published_at', '<=', now())->latest('published_at')->take(3)->get(),
        ]); 
    })->name('home');
    
    Route::get('/services', function () { 
        return view('services', ['services' => \App\Models\Service::all()]); 
    })->name('services');
    
    Route::get('/work', function () { 
        return view('work.index', ['works' => \App\Models\Work::all()]); 
    })->name('work.index');

    Route::get('/blog', function () { 
        $posts = \App\Models\Post::whereNotNull('published_at')
                    ->where('published_at', '<=', now())
                    ->latest('published_at')
                    ->get();
        return view('blog.index', compact('posts')); 
    })->name('blog.index');

    Route::get('/blog/{slug}', function ($slug) { 
        $post = \App\Models\Post::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('post')); 
    })->name('blog.show');
    
    Route::get('/about', function () { return view('about'); })->name('about');
    Route::get('/login', function () { return redirect('/admin/login'); })->name('login');
});
