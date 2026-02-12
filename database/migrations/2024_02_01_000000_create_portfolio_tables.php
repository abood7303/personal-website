<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar');
            $table->string('title_en');
            $table->text('description_ar')->nullable();
            $table->text('description_en')->nullable();
            $table->string('icon')->nullable();
            $table->timestamps();
        });

        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('category_ar')->nullable();
            $table->string('category_en')->nullable();
            $table->text('content_ar')->nullable();
            $table->text('content_en')->nullable();
            $table->string('image')->nullable();
            $table->json('gallery')->nullable();
            $table->timestamps();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->nullable();
            $table->string('title_ar');
            $table->string('title_en');
            $table->text('excerpt_ar')->nullable();
            $table->text('excerpt_en')->nullable();
            $table->longText('content_ar')->nullable();
            $table->longText('content_en')->nullable();
            $table->string('image')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('position_ar')->nullable();
            $table->string('position_en')->nullable();
            $table->text('quote_ar');
            $table->text('quote_en');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('process_steps', function (Blueprint $table) {
            $table->id();
            $table->integer('step_number')->default(1);
            $table->string('title_ar');
            $table->string('title_en');
            $table->text('description_ar')->nullable();
            $table->text('description_en')->nullable();
            $table->timestamps();
        });
        
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->text('message');
            $table->string('locale')->default('en');
            $table->timestamps();
        });

        Schema::create('settings', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->text('value')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
        Schema::dropIfExists('works');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('testimonials');
        Schema::dropIfExists('process_steps');
        Schema::dropIfExists('contact_messages');
        Schema::dropIfExists('settings');
    }
};
