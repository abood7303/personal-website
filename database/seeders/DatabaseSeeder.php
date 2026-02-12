<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Service;
use App\Models\Work;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Abdulrahman Ahmed',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        Service::create([
            'title_en' => 'Web Development',
            'title_ar' => 'تطوير الويب',
            'description_en' => 'Building high-performance websites using Laravel and Modern JS.',
            'description_ar' => 'بناء مواقع عالية الأداء باستخدام Laravel و JavaScript الحديث.',
        ]);
        
        Service::create([
            'title_en' => 'UI/UX Design',
            'title_ar' => 'تصميم واجهات المستخدم',
            'description_en' => 'Creating intuitive, user-centric digital experiences.',
            'description_ar' => 'إنشاء تجارب رقمية بديهية تركز على المستخدم.',
        ]);
        
        Service::create([
             'title_en' => 'Branding',
             'title_ar' => 'الهوية البصرية',
             'description_en' => 'Crafting unique brand identities that stand out.',
             'description_ar' => 'صياغة هويات بصرية فريدة تبرز في السوق.',
        ]);

        Work::create([
            'slug' => 'luxury-real-estate',
            'title_en' => 'Luxury Real Estate',
            'title_ar' => 'عقارات فاخرة',
            'category_en' => 'Web Design',
            'category_ar' => 'تصميم ويب',
            'content_en' => 'A premium website for a luxury real estate agency.',
            'content_ar' => 'موقع ويب فاخر لوكالة عقارات.',
        ]);
        
        Work::create([
            'slug' => 'fintech-app',
            'title_en' => 'Fintech App',
            'title_ar' => 'تطبيق مالي',
            'category_en' => 'Mobile App',
            'category_ar' => 'تطبيق جوال',
            'content_en' => 'A modern fintech application design.',
            'content_ar' => 'تصميم تطبيق مالي حديث.',
        ]);
    }
}
