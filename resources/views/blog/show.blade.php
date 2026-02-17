@section('title', $post->{'title_'.app()->getLocale()} . ' | ' . __('messages.seo.title'))
<x-layout>
    <!-- Post Header -->
    <article class="pt-40 pb-24">
        <div class="max-w-4xl mx-auto px-4">
            <!-- Back to Blog -->
            <div class="mb-12 reveal">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-accent text-sm font-medium uppercase tracking-widest group">
                    <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    {{ app()->getLocale() == 'ar' ? 'العودة للمدونة' : 'Back to Blog' }}
                </a>
            </div>

            <!-- Meta & Title -->
            <div class="reveal mb-12">
                <div class="flex items-center gap-4 text-accent/60 text-xs uppercase tracking-[0.2em] mb-6">
                    <span>{{ $post->published_at->format('M d, Y') }}</span>
                    <span class="w-1 h-1 rounded-full bg-accent/30"></span>
                    <span>{{ app()->getLocale() == 'ar' ? 'بواسطة عبدالرحمن' : 'By Abdulrahman' }}</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-serif text-text-primary leading-tight mb-8">
                    {{ $post->{'title_'.app()->getLocale()} }}
                </h1>
                <p class="text-xl md:text-2xl text-text-secondary leading-relaxed opacity-80 italic border-l-2 border-accent/30 pl-6">
                    {{ $post->{'excerpt_'.app()->getLocale()} }}
                </p>
            </div>

            <!-- Main Image -->
            @if($post->image)
                <div class="reveal rounded-2xl overflow-hidden border border-white/5 mb-16 aspect-[21/9]">
                    <img src="{{ str_starts_with($post->image, 'http') ? $post->image : asset('storage/'.$post->image) }}" alt="{{ $post->{'title_'.app()->getLocale()} }}" 
                         class="w-full h-full object-cover img-reveal">
                </div>
            @endif

            <!-- Content -->
            <div class="reveal prose prose-invert prose-lg max-w-none prose-playfair">
                <div class="text-text-secondary leading-loose space-y-8">
                    {!! nl2br($post->{'content_'.app()->getLocale()}) !!}
                </div>
            </div>

            <!-- Post Footer / Share -->
            <div class="mt-24 pt-12 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-8 reveal">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 rounded-full bg-accent/10 border border-accent/20 flex items-center justify-center text-accent uppercase font-bold text-xl">
                        A
                    </div>
                    <div>
                        <h4 class="text-text-primary font-medium tracking-wide">{{ __('messages.hero.title') }}</h4>
                        <p class="text-accent/60 text-xs uppercase tracking-widest mt-1">Creative Developer & Marketer</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-4">
                    <span class="text-xs uppercase tracking-widest text-text-secondary opacity-40">{{ app()->getLocale() == 'ar' ? 'شارك المقال:' : 'Share this:' }}</span>
                    <!-- Social icons (Placeholders) -->
                    <div class="flex gap-2">
                         @php
                            $shareUrl = urlencode(url()->current());
                            $shareTitle = urlencode($post->{'title_'.app()->getLocale()});
                         @endphp
                         <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareTitle }}" target="_blank" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:border-accent hover:text-accent transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                         </a>
                         <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $shareUrl }}&title={{ $shareTitle }}" target="_blank" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:border-accent hover:text-accent transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                         </a>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Related Section (Optional for future) -->
</x-layout>
