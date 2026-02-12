<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Work;

class AdditionalWorksSeeder extends Seeder
{
    public function run()
    {
        Work::create([
            'slug' => 'crypto-dashboard',
            'title_en' => 'Crypto Dashboard',
            'title_ar' => 'لوحة تشفير',
            'category_en' => 'Web App',
            'category_ar' => 'تطبيق ويب',
            'content_en' => 'A comprehensive crypto dashboard with real-time analytics.',
            'content_ar' => 'لوحة تحكم شاملة للعملات المشفرة مع تحليلات فورية.',
        ]);

        Work::create([
            'slug' => 'e-commerce-platform',
            'title_en' => 'E-commerce Platform',
            'title_ar' => 'منصة تجارة إلكترونية',
            'category_en' => 'E-commerce',
            'category_ar' => 'تجارة إلكترونية',
            'content_en' => 'A modern e-commerce platform for fashion brands.',
            'content_ar' => 'منصة تجارة إلكترونية حديثة لماركات الموضة.',
        ]);
    }
}
