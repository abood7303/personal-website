{{-- Edited by Antigravity AI for testing GitHub Desktop integration --}}
@section('title', __('messages.seo.home_title'))
<x-layout>
    <!-- Hero -->
    <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 w-full relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="text-center md:text-start">
                    <h1 class="text-6xl md:text-9xl font-serif leading-tight text-text-primary mb-8 reveal">
                        {{ __('messages.hero.title') }} <br>
                        <span class="text-accent italic">{{ __('messages.hero.subtitle') }}</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-text-secondary max-w-2xl mb-12 reveal mx-auto md:mx-0">
                        {{ __('messages.hero.description') }}
                    </p>
                    <div class="reveal mt-4">
                        <a href="https://wa.me/{{ config('contact.whatsapp') }}" target="_blank"
                            class="group magnetic interactive relative inline-flex items-center justify-center px-10 py-5 font-medium tracking-wide text-dark-900 bg-accent rounded-full overflow-hidden transition-all duration-300 hover:scale-105 active:scale-95 shadow-xl shadow-accent/20">
                            <span class="relative z-10">{{ __('messages.hero.cta') }}</span>
                        </a>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="reveal flex justify-center md:justify-end">                    
                    <div class="relative w-full max-w-sm aspect-[3/4] group cursor-pointer float-anim">
                        <!-- Ornamental Frame -->
                        <div
                            class="absolute inset-0 border border-accent/30 translate-x-4 translate-y-4 transition-transform duration-500 group-hover:translate-x-2 group-hover:translate-y-2 rounded-[2px]">
                        </div>

                        <!-- Image Container -->
                        <div
                            class="relative h-full w-full overflow-hidden rounded-[2px] border border-white/5 bg-transparent">
                            <div
                                class="absolute inset-0 bg-accent/10 opacity-0 group-hover:opacity-20 transition-opacity duration-500 z-10">
                            </div>
                            <img src="{{ asset('images/hero-portrait.png') }}" alt="Abdulrahman Ahmed"
                                style="background: transparent;"
                                class="w-full h-full object-cover object-top transition-all duration-700 ease-in-out transform group-hover:scale-105 img-reveal">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Abstract Element -->
        <div class="absolute top-0 right-0 w-1/2 h-full opacity-10 pointer-events-none float-anim">
            <div
                class="w-full h-full bg-gradient-to-b from-accent to-transparent rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2">
            </div>
        </div>
    </section>

    <!-- Services Section: Minimalist & Interactive -->
    <section class="py-32 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                <!-- Sidebar Title -->
                <div class="lg:col-span-4">
                    <span
                        class="text-accent font-medium tracking-widest uppercase text-sm mb-4 block reveal">{{ __('messages.services.badge') }}</span>
                    <h2 class="text-5xl md:text-6xl font-serif text-text-primary mb-8 reveal leading-tight">
                        {{ __('messages.services.title') }}
                    </h2>
                    <p class="text-text-secondary leading-relaxed opacity-70 mb-10 reveal">
                        {{ __('messages.services.description') }}
                    </p>
                    <div class="reveal">
                        <a href="{{ route('services') }}" class="group inline-flex items-center gap-2 text-accent">
                            <span
                                class="border-b border-accent/20 group-hover:border-accent transition-all">{{ __('messages.services.view_details') }}</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Interactive Service List -->
                <div class="lg:col-span-8 space-y-4">
                    @foreach ($services as $service)
                        <div
                            class="group relative py-12 px-8 rounded-2xl transition-all duration-500 hover:bg-white/[0.02] border border-transparent hover:border-white/5 reveal">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                                <div class="flex items-start gap-8">
                                    <span
                                        class="text-accent/20 font-serif italic text-4xl group-hover:text-accent transition-colors duration-500">0{{ $loop->iteration }}</span>
                                    <div>
                                        <h3
                                            class="text-3xl font-serif text-text-primary mb-4 group-hover:text-accent transition-colors">
                                            {{ $service->{'title_' . app()->getLocale()} }}
                                        </h3>
                                        <p
                                            class="text-text-secondary line-clamp-2 max-w-lg opacity-60 group-hover:opacity-100 transition-opacity">
                                            {{ $service->{'description_' . app()->getLocale()} }}
                                        </p>
                                    </div>
                                </div>
                                <div class="hidden md:block">
                                    <div
                                        class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center opacity-0 group-hover:opacity-100 group-hover:border-accent transition-all duration-500">
                                        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Selected Work: Staggered Dynamic Grid -->
   

    <!-- Testimonials Section: Modern & Attractive -->
    <section class="py-32 relative overflow-hidden">
        <!-- Background decorative blur -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-accent/5 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-20 gap-6">
                <div class="max-w-2xl">
                    <span
                        class="text-accent font-medium tracking-widest uppercase text-sm mb-4 block reveal">{{ __('messages.testimonials.badge') }}</span>
                    <h2 class="text-4xl md:text-6xl font-serif text-text-primary reveal">
                        {{ __('messages.testimonials.title') }}</h2>
                </div>
                <div class="reveal">
                    <p class="text-text-secondary opacity-60 max-w-xs italic border-l-2 border-accent/30 pl-4">
                        {{ __('messages.testimonials.quote') }}
                    </p>
                </div>
            </div>

            @if(count($testimonials) > 0)
                <!-- Testimonials for Desktop (2 per slide) -->
                <div x-data="{ active: 0, total: {{ count($testimonials) }}, perPage: 2 }"
                    x-init="setInterval(() => active = (active + 1) % Math.ceil(total / perPage), 5000)" 
                    class="hidden md:block relative max-w-7xl mx-auto">

                    <div class="relative min-h-[400px]">
                        @php $chunks = $testimonials->chunk(2); @endphp
                        @foreach ($chunks as $chunkIndex => $chunk)
                            <div x-show="active === {{ $chunkIndex }}" x-transition:enter="transition ease-out duration-1000"
                                x-transition:enter-start="opacity-0 translate-y-12"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-800 absolute inset-0 w-full"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 -translate-y-12"
                                class="grid grid-cols-2 gap-8 w-full">

                                @foreach ($chunk as $testimonial)
                                    <x-testimonial-card :testimonial="$testimonial" />
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                    <!-- Navigation Dots -->
                    <div class="flex justify-center gap-3 mt-12">
                        @foreach ($chunks as $chunkIndex => $chunk)
                            <button @click="active = {{ $chunkIndex }}"
                                :class="active === {{ $chunkIndex }} ? 'bg-accent w-8' : 'bg-white/10 w-2 hover:bg-white/30'"
                                class="h-2 rounded-full transition-all duration-500"></button>
                        @endforeach
                    </div>
                </div>

                <!-- Testimonials for Mobile (1 per slide) -->
                <div x-data="{ active: 0, total: {{ count($testimonials) }}, perPage: 1 }"
                    x-init="setInterval(() => active = (active + 1) % total, 5000)" 
                    class="block md:hidden relative max-w-7xl mx-auto">

                    <div class="relative min-h-[500px]">
                        @foreach ($testimonials as $testimonialIndex => $testimonial)
                            <div x-show="active === {{ $testimonialIndex }}" x-transition:enter="transition ease-out duration-1000"
                                x-transition:enter-start="opacity-0 translate-y-12"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-800 absolute inset-0 w-full"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 -translate-y-12"
                                class="w-full">
                                <x-testimonial-card :testimonial="$testimonial" />
                            </div>
                        @endforeach
                    </div>

                    <!-- Navigation Dots -->
                    <div class="flex justify-center gap-3 mt-8">
                        @foreach ($testimonials as $testimonialIndex => $testimonial)
                            <button @click="active = {{ $testimonialIndex }}"
                                :class="active === {{ $testimonialIndex }} ? 'bg-accent w-8' : 'bg-white/10 w-2 hover:bg-white/30'"
                                class="h-2 rounded-full transition-all duration-500"></button>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Blog Section: Insights -->
    <section class="py-32 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div>
                    <span class="text-accent font-medium tracking-widest uppercase text-sm mb-4 block reveal">{{ app()->getLocale() == 'ar' ? 'المدونة' : 'Blog' }}</span>
                    <h2 class="text-4xl md:text-5xl font-serif text-text-primary reveal">{{ app()->getLocale() == 'ar' ? 'أحدث المقالات' : 'Latest Insights' }}</h2>
                </div>
                <div class="reveal">
                    <a href="{{ route('blog.index') }}" class="group flex items-center gap-3 text-accent hover:text-white transition-all duration-300">
                        <span class="text-lg border-b border-accent/30 group-hover:border-white">{{ app()->getLocale() == 'ar' ? 'عرض كل المقالات' : 'View All Posts' }}</span>
                        <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="group reveal flex flex-col bg-white/[0.02] border border-white/5 rounded-2xl overflow-hidden hover:border-accent/20 transition-all duration-500 card-tilt">
                        <div class="relative aspect-[16/10] overflow-hidden">
                             @if($post->image)
                                <img src="{{ str_starts_with($post->image, 'http') ? $post->image : asset('storage/'.$post->image) }}" alt="{{ $post->{'title_'.app()->getLocale()} }}" 
                                     loading="lazy"
                                     class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-700">
                            @else
                                <div class="w-full h-full bg-dark-800 flex items-center justify-center font-serif italic text-xl text-dark-700">Insights</div>
                            @endif
                        </div>
                        <div class="p-8">
                            <h3 class="text-xl font-serif text-text-primary mb-4 group-hover:text-accent transition-colors">
                                {{ $post->{'title_'.app()->getLocale()} }}
                            </h3>
                            <a href="{{ route('blog.show', $post->slug) }}" class="text-accent text-xs uppercase tracking-widest font-bold flex items-center gap-2">
                                {{ app()->getLocale() == 'ar' ? 'اقرأ' : 'Read' }}
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section: Let's Talk -->
    <section class="py-32 relative overflow-hidden">
        <div class="absolute inset-0 bg-accent/[0.02] pointer-events-none"></div>
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <span
                class="text-accent font-medium tracking-widest uppercase text-sm mb-6 block reveal">{{ __('messages.cta.badge') }}</span>
            <h2 class="text-5xl md:text-8xl font-serif text-text-primary mb-12 reveal">
                <span class="block mb-4 md:mb-8">{{ __('messages.cta.title') }}</span>
                <span class="italic text-accent block">{{ __('messages.cta.subtitle') }}</span>
            </h2>
            <div class="reveal mt-16">
                <a href="https://wa.me/{{ config('contact.whatsapp') }}" target="_blank"
                    class="group relative inline-flex items-center justify-center px-16 py-8 font-medium tracking-wide text-dark-900 bg-accent rounded-full overflow-hidden transition-all duration-300 hover:scale-105 active:scale-95 shadow-2xl shadow-accent/30">
                    <span class="relative z-10 text-2xl">{{ __('messages.cta.button') }}</span>
                    <div
                        class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    </div>
                </a>    
            </div>

            <!-- Floating Decorative Elements -->
            <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-accent/10 rounded-full blur-[100px] animate-pulse"></div>
            <div class="absolute -top-20 -right-20 w-64 h-64 bg-accent/10 rounded-full blur-[100px] animate-pulse delay-1000">
            </div>
        </div>
    </section>
</x-layout>
