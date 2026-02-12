<x-layout>
    <!-- Work Hero -->
    <section class="pt-40 pb-20 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1/3 h-full bg-accent/5 blur-[120px] rounded-full -translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <span class="text-accent font-medium tracking-widest uppercase text-sm mb-6 block reveal">{{ app()->getLocale() == 'en' ? 'Portfolio' : 'معرض الأعمال' }}</span>
            <h1 class="text-6xl md:text-8xl font-serif text-text-primary mb-8 reveal leading-[1.1]">
                {{ app()->getLocale() == 'en' ? 'Digital' : 'تجارب' }} <br>
                <span class="italic text-accent">{{ app()->getLocale() == 'en' ? 'Case Studies.' : 'رقمية ملهمة.' }}</span>
            </h1>
        </div>
    </section>

    <!-- Project Grid -->
    <section class="py-24 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20">
                @foreach($works as $work)
                    <div class="reveal block">
                        <div class="relative overflow-hidden rounded-[2px] bg-dark-800 aspect-[16/10] mb-8 group">
                            <!-- Category Badge -->
                            <div class="absolute top-6 right-6 z-20">
                                <span class="bg-dark-900/80 backdrop-blur-md text-accent text-[10px] uppercase tracking-[0.2em] px-4 py-2 rounded-full border border-white/5">
                                    {{ $work->{'category_'.app()->getLocale()} }}
                                </span>
                            </div>

                            <!-- Image -->
                            @if($work->image)
                                <img src="{{ asset('storage/'.$work->image) }}" alt="{{ $work->{'title_'.app()->getLocale()} }}" 
                                     class="img-reveal object-cover w-full h-full transform scale-110 group-hover:scale-100 transition-transform duration-1000 ease-out grayscale-[0.3] group-hover:grayscale-0">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-dark-700 font-serif italic text-2xl">Arik Studio</div>
                            @endif

                            <!-- View Overlay -->
                            <div class="absolute inset-0 bg-dark-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center z-10">
                                <div class="w-20 h-20 rounded-full bg-accent flex items-center justify-center transform scale-50 group-hover:scale-100 transition-transform duration-500">
                                    <svg class="w-6 h-6 text-dark-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between items-start">
                             <div>
                                <h3 class="text-3xl font-serif text-text-primary transition-colors duration-300">
                                    {{ $work->{'title_'.app()->getLocale()} }}
                                </h3>
                                <p class="text-sm text-text-secondary/50 uppercase tracking-[0.2em] mt-3"> {{ $work->{'category_'.app()->getLocale()} }}</p>
                             </div>
                             <span class="text-text-secondary/20 font-serif italic text-3xl transition-colors">/0{{ $loop->iteration }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
