@section('title', __('messages.seo.about_title'))
<x-layout>
    <!-- About Hero -->
    <section class="pt-40 pb-20 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-accent/5 blur-[120px] rounded-full -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <span class="text-accent font-medium tracking-widest uppercase text-sm mb-6 block reveal">{{ __('messages.about.badge') }}</span>
            <h1 class="text-6xl md:text-9xl font-serif text-text-primary mb-12 reveal leading-[0.9]">
                 <span class="block mb-4 md:mb-8">
                {{ __('messages.about.hero_title') }} </span>
                <span class="italic text-accent">{{ __('messages.about.hero_subtitle') }}</span>
            </h1>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-start mt-20">
                <div class="reveal">
                    <p class="text-2xl md:text-3xl text-text-primary font-serif leading-snug mb-8">
                        {{ __('messages.about.intro') }}
                    </p>
                    <p class="text-lg text-text-secondary leading-relaxed opacity-70 mb-8">
                        {{ __('messages.about.description') }}
                    </p>
                </div>
                
                <div class="reveal relative">
                    <div class="aspect-[3/4] rounded-[2px] border border-white/10 bg-transparent overflow-hidden relative">
                         <div class="absolute inset-0 bg-accent/5 animate-pulse"></div>
                         <img src="{{ asset('images/hero-portrait.png') }}" 
                              alt="Abdulrahman Ahmed" 
                              style="background: transparent;"
                              class="w-full h-full object-cover object-top transition-all duration-700 img-reveal">
                    </div>
                    <!-- Ornamental Corner -->
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 border-r border-b border-accent/30 pointer-events-none"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills & Tools -->
    <section class="py-32 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                <div class="lg:col-span-4 reveal">
                    <h2 class="text-4xl font-serif text-text-primary mb-6">{{ __('messages.about.capabilities_title') }}</h2>
                    <p class="text-text-secondary opacity-60 leading-relaxed">
                        {{ __('messages.about.capabilities_desc') }}
                    </p>
                </div>
                
                <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
                    <div class="p-10 rounded-2xl bg-white/[0.02] border border-white/5 reveal card-tilt">
                        <h4 class="text-accent text-sm uppercase tracking-widest mb-6">Development</h4>
                        <ul class="space-y-3 text-text-primary text-lg font-serif">
                            <li>Laravel & PHP</li>
                           
                            <li> html & CSS</li>
                            <li>Performance Optimization</li>
                             <li>Bootstrap</li>
                        </ul>
                    </div>
                    <div class="p-10 rounded-2xl bg-white/[0.02] border border-white/5 reveal card-tilt">
                        <h4 class="text-accent text-sm uppercase tracking-widest mb-6">Design</h4>
                        <ul class="space-y-3 text-text-primary text-lg font-serif">
                            <li>UI/UX Design</li>
                            <li>Brand Identity</li>
                            <li>Visual Graphics</li>
                        </ul>
                    </div>
                    <div class="p-10 rounded-2xl bg-white/[0.02] border border-white/5 reveal card-tilt">
                        <h4 class="text-accent text-sm uppercase tracking-widest mb-6">Marketing</h4>
                        <ul class="space-y-3 text-text-primary text-lg font-serif">
                            <li>Digital Marketing</li>
                            <li>Social Media Management</li>
                            <li>SEO Optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
