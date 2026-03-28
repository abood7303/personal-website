@props(['testimonial'])

<div
    class="group relative p-10 rounded-3xl bg-white/[0.02] border border-white/5 hover:border-accent/20 transition-all duration-500 card-tilt">
    <div class="flex justify-between items-start mb-8">
        <div
            class="w-12 h-12 rounded-full border border-accent/20 flex items-center justify-center bg-accent text-dark-900">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 7.55228 14.017 7V5C14.017 4.44772 14.4647 4 15.017 4H19.017C20.6739 4 22.017 5.34315 22.017 7V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM3.017 21L3.017 18C3.017 16.8954 3.91243 16 5.017 16H8.017C8.56928 16 9.017 15.5523 9.017 15V9C9.017 8.44772 8.56928 8 8.017 8H4.017C3.46472 8 3.017 7.55228 3.017 7V5C3.017 4.44772 3.46472 4 4.017 4H8.017C9.67386 4 11.017 5.34315 11.017 7V15C11.017 18.3137 8.33071 21 5.017 21H3.017Z" />
            </svg>
        </div>
        <span class="text-accent/20 font-serif italic text-4xl">0{{ $testimonial->id }}</span>
    </div>

    <p class="text-xl text-text-primary font-serif leading-relaxed mb-10 italic min-h-[100px]">
        "{{ $testimonial->{'quote_' . app()->getLocale()} }}"
    </p>

    <div class="flex items-center gap-4 border-t border-white/5 pt-8">
        <div
            class="w-12 h-12 rounded-full bg-accent/10 border border-accent/20 flex items-center justify-center uppercase font-bold text-accent">
            {{ substr($testimonial->{'name_en'}, 0, 1) }}
        </div>
        <div>
            <h4 class="text-text-primary font-medium tracking-wide">
                {{ $testimonial->{'name_' . app()->getLocale()} }}</h4>
            <p class="text-accent/60 text-xs uppercase tracking-widest mt-1">
                {{ $testimonial->{'position_' . app()->getLocale()} }}</p>
        </div>
    </div>
</div>
