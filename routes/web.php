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

use App\Services\StaticDataProvider;

Route::group(['middleware' => 'web'], function() {
    Route::get('/', function () { 
        return view('home', [
            'services' => StaticDataProvider::getServices()->take(4),
            'works' => StaticDataProvider::getWorks()->take(4),
            'testimonials' => StaticDataProvider::getTestimonials()->take(3),
            'posts' => StaticDataProvider::getPosts()
                        ->filter(fn($p) => $p->published_at && $p->published_at <= now())
                        ->sortByDesc('published_at')
                        ->take(3),
        ]); 
    })->name('home');
    
    Route::get('/services', function () { 
        return view('services', ['services' => StaticDataProvider::getServices()]); 
    })->name('services');
    
    Route::get('/work', function () { 
        return view('work.index', ['works' => StaticDataProvider::getWorks()]); 
    })->name('work.index');

    Route::get('/work/{slug}', function ($slug) { 
        $work = StaticDataProvider::getWorks()->firstWhere('slug', $slug);
        if (!$work) abort(404);
        return view('work.show', compact('work')); 
    })->name('work.show');

    Route::get('/blog', function () { 
        $posts = StaticDataProvider::getPosts()
                    ->filter(fn($p) => $p->published_at && $p->published_at <= now())
                    ->sortByDesc('published_at');
        return view('blog.index', compact('posts')); 
    })->name('blog.index');

    Route::get('/blog/{slug}', function ($slug) { 
        $post = StaticDataProvider::getPosts()->firstWhere('slug', $slug);
        if (!$post) abort(404);
        return view('blog.show', compact('post')); 
    })->name('blog.show');
    
    Route::get('/about', function () { return view('about'); })->name('about');
});
