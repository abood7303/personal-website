<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Testimonial::create([
            'name_ar' => 'سارة المنصور',
            'name_en' => 'Sarah Mansour',
            'position_ar' => 'مديرة إبداعية',
            'position_en' => 'Creative Director',
            'quote_ar' => 'لقد نجح عبدالرحمن في تحويل رؤيتنا الرقمية إلى واقع ملموس بكل احترافية وإبداع.',
            'quote_en' => 'Abdulrahman transformed our digital vision into reality with utmost professionalism and creativity.',
        ]);

        \App\Models\Testimonial::create([
            'name_ar' => 'أحمد خالد',
            'name_en' => 'Ahmed Khalid',
            'position_ar' => 'مؤسس ستارت أب',
            'position_en' => 'Startup Founder',
            'quote_ar' => 'الاهتمام بالتفاصيل والجودة في العمل كانت فوق التوقعات. شريك تقني رائع.',
            'quote_en' => 'The attention to detail and quality of work exceeded expectations. A fantastic technical partner.',
        ]);

        \App\Models\Testimonial::create([
            'name_ar' => 'ليلى عبدالله',
            'name_en' => 'Layla Abdullah',
            'position_ar' => 'مديرة تسويق',
            'position_en' => 'Marketing Manager',
            'quote_ar' => 'تجربة مستخدم استثنائية وتصميم يعكس الفخامة التي كنا نبحث عنها.',
            'quote_en' => 'Exceptional user experience and design that reflects the luxury we were looking for.',
        ]);
    }
}
