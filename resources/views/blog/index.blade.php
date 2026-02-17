@section('title', __('messages.seo.blog_title'))
<x-layout>
    <!-- Blog Hero -->
    <section class="pt-40 pb-20 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-accent/5 blur-[120px] rounded-full -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <span class="text-accent font-medium tracking-widest uppercase text-sm mb-6 block reveal">{{ app()->getLocale() == 'ar' ? 'المدونة' : 'Blog' }}</span>
            <h1 class="text-6xl md:text-8xl font-serif text-text-primary mb-8 reveal leading-[1.1]">
                {{ app()->getLocale() == 'ar' ? 'أفكار' : 'Latest' }} <br>
                <span class="italic text-accent">{{ app()->getLocale() == 'ar' ? 'ورؤى رقمية.' : 'Insights & Thoughts.' }}</span>
            </h1>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="py-24 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($posts as $post)
                    <article class="group reveal flex flex-col bg-white/[0.02] border border-white/5 rounded-2xl overflow-hidden hover:border-accent/20 transition-all duration-500 card-tilt">
                        <!-- Image Container -->
                        <div class="relative aspect-[16/10] overflow-hidden">
                            @if($post->image)
                                <img src="{{ str_starts_with($post->image, 'http') ? $post->image : asset('storage/'.$post->image) }}" alt="{{ $post->{'title_'.app()->getLocale()} }}" 
                                     class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-700 img-reveal">
                            @else
                                <div class="w-full h-full bg-dark-800 flex items-center justify-center font-serif italic text-xl text-dark-700">Arik Insights</div>
                            @endif
                            <!-- Date Badge -->
                            <div class="absolute bottom-4 left-4 z-20">
                                <span class="bg-dark-900/80 backdrop-blur-md text-text-secondary text-[10px] uppercase tracking-widest px-3 py-1.5 rounded-full border border-white/5">
                                    {{ $post->published_at->format('M d, Y') }}
                                </span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8 flex flex-col flex-grow">
                            <h3 class="text-2xl font-serif text-text-primary mb-4 group-hover:text-accent transition-colors leading-tight">
                                {{ $post->{'title_'.app()->getLocale()} }}
                            </h3>
                            <p class="text-text-secondary opacity-60 line-clamp-3 mb-8 text-sm leading-relaxed">
                                {{ $post->{'excerpt_'.app()->getLocale()} }}
                            </p>
                            
                            <div class="mt-auto pt-6 border-t border-white/5 flex items-center justify-between">
                                <a href="{{ route('blog.show', $post->slug) }}" class="text-accent text-sm font-medium tracking-widest uppercase flex items-center gap-2 group/link">
                                    {{ app()->getLocale() == 'ar' ? 'اقرأ المزيد' : 'Read More' }}
                                    <svg class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full py-32 text-center">
                        <p class="text-2xl font-serif text-text-secondary opacity-40">{{ app()->getLocale() == 'ar' ? 'لا توجد مقالات حالياً.' : 'No posts published yet.' }}</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-layout>
