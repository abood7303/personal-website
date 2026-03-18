<?php

namespace App\Services;

class StaticDataProvider
{
    public static function getData()
    {
        $file = base_path('data.json');
        if (!file_exists($file)) return self::defaults();
        
        $data = json_decode(file_get_contents($file), true);
        return $data ?: self::defaults();
    }

    private static function defaults()
    {
        return ['services' => [], 'works' => [], 'testimonials' => [], 'posts' => []];
    }

    public static function getServices()
    {
        return collect(self::getData()['services'])->map(fn($item) => (object)$item);
    }

    public static function getWorks()
    {
        return collect(self::getData()['works'])->map(fn($item) => (object)$item);
    }

    public static function getTestimonials()
    {
        return collect(self::getData()['testimonials'])->map(fn($item) => (object)$item);
    }

    public static function getPosts()
    {
        return collect(self::getData()['posts'])->map(function($item) {
            $item = (object)$item;
            if (isset($item->published_at)) {
                $item->published_at = \Carbon\Carbon::parse($item->published_at);
            }
            return $item;
        });
    }
}
