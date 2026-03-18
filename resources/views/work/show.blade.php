@section('title', $work->{'title_'.app()->getLocale()} . ' | ' . __('messages.seo.title'))
<x-layout>
    <!-- Project Details Header -->
    <article class="pt-40 pb-24">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Back Button -->
            <div class="mb-12 reveal">
                <a href="{{ route('work.index') }}" class="inline-flex items-center gap-2 text-accent text-sm font-medium uppercase tracking-widest group">
                    <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    {{ app()->getLocale() == 'ar' ? 'العودة لمعرض الأعمال' : 'Back to Portfolio' }}
                </a>
            </div>

            <!-- Meta & Title -->
            <div class="reveal mb-16">
                <div class="flex items-center gap-4 text-accent/60 text-xs uppercase tracking-[0.2em] mb-6">
                    <span>{{ $work->{'category_'.app()->getLocale()} }}</span>
                    <span class="w-1 h-1 rounded-full bg-accent/30"></span>
                    <span>Project Case Study</span>
                </div>
                <h1 class="text-5xl md:text-8xl font-serif text-text-primary leading-[1.1] mb-12">
                    {{ $work->{'title_'.app()->getLocale()} }}
                </h1>
                
                @if($work->{'content_'.app()->getLocale()})
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 border-t border-white/5 pt-12">
                    <div class="lg:col-span-8">
                        <div class="prose prose-invert prose-lg max-w-none prose-playfair text-text-secondary leading-relaxed space-y-8">
                            {!! nl2br($work->{'content_'.app()->getLocale()}) !!}
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <!-- Main Image -->
            @if($work->image)
                <div class="reveal rounded-[2px] overflow-hidden border border-white/5 mb-24 relative bg-dark-800 aspect-video">
                    <img src="{{ str_starts_with($work->image, 'http') ? $work->image : asset('storage/'.$work->image) }}" alt="{{ $work->{'title_'.app()->getLocale()} }}" 
                         class="w-full h-full object-cover img-reveal">
                </div>
            @endif

            <!-- Gallery (Optional) -->
            @if(isset($work->gallery) && is_array($work->gallery))
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 reveal">
                    @foreach($work->gallery as $image)
                    <div class="rounded-lg overflow-hidden border border-white/5 h-96">
                        <img src="{{ asset('storage/'.$image) }}" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
    </article>

    <!-- Project Navigation (Next Project) -->
    @php
        $allWorks = \App\Services\StaticDataProvider::getWorks();
        $currentIndex = $allWorks->search(fn($w) => $w->id == $work->id);
        $nextWork = $allWorks->get($currentIndex + 1) ?: $allWorks->first();
    @endphp
    
    <section class="py-32 border-t border-white/5">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <span class="text-accent/40 text-xs uppercase tracking-widest mb-6 block">{{ app()->getLocale() == 'ar' ? 'المشروع التالي' : 'Next Project' }}</span>
            <a href="{{ route('work.show', $nextWork->slug) }}" class="group block py-12">
                <h2 class="text-5xl md:text-8xl font-serif text-text-primary group-hover:text-accent transition-colors duration-500">
                    {{ $nextWork->{'title_'.app()->getLocale()} }}
                </h2>
                <div class="mt-12 inline-flex w-24 h-24 rounded-full border border-white/10 items-center justify-center group-hover:bg-accent group-hover:border-accent transition-all duration-500">
                     <svg class="w-8 h-8 text-accent group-hover:text-dark-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </div>
            </a>
        </div>
    </section>
</x-layout>
