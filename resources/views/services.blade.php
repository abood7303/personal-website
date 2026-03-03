@section('title', __('messages.seo.services_title'))
<x-layout>
    <!-- Services Hero -->
    <section class="pt-40 pb-20 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-accent/5 blur-[120px] rounded-full -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <span class="text-accent font-medium tracking-widest uppercase text-sm mb-6 block reveal">{{ __('messages.services.badge') }}</span>
            <h1 class="text-6xl md:text-8xl font-serif text-text-primary mb-8 reveal leading-[1.1]">
                {{ __('messages.services.title') }}
            </h1>
            <p class="text-xl md:text-2xl text-text-secondary max-w-3xl leading-relaxed opacity-80 reveal">
                {{ __('messages.services.description') }}
            </p>
        </div>
    </section>

    <!-- Detailed Services Grid -->
    <section class="py-24 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($services as $service)
                    <div class="group relative p-12 rounded-3xl bg-white/[0.02] border border-white/5 hover:border-accent/20 transition-all duration-700 reveal flex flex-col justify-between min-h-[450px]">
                        <!-- Top Part -->
                        <div>
                            <div class="flex justify-between items-start mb-12">
                                <div class="w-16 h-16 rounded-2xl bg-accent/10 border border-accent/20 flex items-center justify-center group-hover:bg-accent group-hover:scale-110 transition-all duration-500">
                                    <span class="text-accent group-hover:text-dark-900 font-serif italic text-2xl">0{{ $loop->iteration }}</span>
                                </div>
                                <div class="h-[1px] w-24 bg-white/10 mt-8 group-hover:bg-accent/40 transition-all duration-500"></div>
                            </div>
                            <h3 class="text-4xl font-serif text-text-primary mb-6 group-hover:text-accent transition-colors duration-500">
                                {{ $service->{'title_'.app()->getLocale()} }}
                            </h3>
                            <p class="text-lg text-text-secondary leading-relaxed opacity-70 group-hover:opacity-100 transition-opacity duration-500">
                                {{ $service->{'description_'.app()->getLocale()} }}
                            </p>
                        </div>

                        <!-- Footer/Action -->
                        <div class="mt-12 pt-8 border-t border-white/5 flex items-center justify-between">
                            <span class="text-xs uppercase tracking-[0.2em] text-accent/50 font-medium">{{ app()->getLocale() == 'en' ? 'Premium Solution' : 'حلول فاخرة' }}</span>
                            <div class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center group-hover:border-accent group-hover:bg-accent group-hover:text-dark-900 transition-all duration-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-32 bg-accent/5 relative">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-6xl font-serif text-text-primary mb-10 reveal">
                {{ __('messages.services.cta_title') }}
            </h2>
            <div class="reveal">
                <a href="https://wa.me/{{ config('contact.whatsapp') }}" target="_blank" class="group relative inline-flex items-center justify-center px-12 py-6 font-medium tracking-wide text-dark-900 bg-accent rounded-full overflow-hidden transition-all duration-300 hover:scale-105 active:scale-95 shadow-xl shadow-accent/20">
                    <span class="relative z-10 text-xl">{{ __('messages.services.cta_button') }}</span>
                </a>
            </div>
        </div>
    </section>
</x-layout>
