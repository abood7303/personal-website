<footer class="bg-dark-900 pt-24 pb-12 border-t border-white/5 relative overflow-hidden">
    <!-- Decorative Glow -->
    <div
        class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[800px] h-[300px] bg-accent/5 blur-[150px] rounded-full pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 mb-20">
            <!-- Brand Column -->
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}" class="inline-block mb-8">
                    <span class="font-serif italic text-4xl text-text-primary tracking-tight">Abdulrahman</span>
                </a>
                <p class="text-text-secondary opacity-60 leading-relaxed mb-8 max-w-xs">
                    {{ __('messages.footer.description') }}
                </p>
                <div class="flex gap-4">
                    <a href="{{ config('contact.github') }}" target="_blank"
                        class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-accent hover:border-accent hover:text-dark-900 transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                        </svg>
                    </a>
                    <a href="{{ config('contact.linkedin') }}"
                        class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-accent hover:border-accent hover:text-dark-900 transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.2225 0h.002z" />
                        </svg>
                    </a>
                    <a href="{{ config('contact.instagram') }}"
                        class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-accent hover:border-accent hover:text-dark-900 transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Links Column 1 -->
            <div>
                <h4 class="text-text-primary font-serif italic text-xl mb-8">{{ __('messages.footer.quick_links') }}</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('home') }}"
                            class="text-text-secondary opacity-60 hover:text-accent hover:opacity-100 transition-all duration-300 flex items-center gap-2 group"><span
                                class="w-0 group-hover:w-4 h-[1px] bg-accent transition-all duration-300"></span>{{ __('nav.home') }}</a>
                    </li>
                    <li><a href="{{ route('services') }}"
                            class="text-text-secondary opacity-60 hover:text-accent hover:opacity-100 transition-all duration-300 flex items-center gap-2 group"><span
                                class="w-0 group-hover:w-4 h-[1px] bg-accent transition-all duration-300"></span>{{ __('nav.services') }}</a>
                    </li>
                    <li><a href="{{ route('work.index') }}"
                            class="text-text-secondary opacity-60 hover:text-accent hover:opacity-100 transition-all duration-300 flex items-center gap-2 group"><span
                                class="w-0 group-hover:w-4 h-[1px] bg-accent transition-all duration-300"></span>{{ __('nav.work.index') }}</a>
                    </li>
                    <li><a href="{{ route('blog.index') }}"
                            class="text-text-secondary opacity-60 hover:text-accent hover:opacity-100 transition-all duration-300 flex items-center gap-2 group"><span
                                class="w-0 group-hover:w-4 h-[1px] bg-accent transition-all duration-300"></span>{{ __('nav.blog.index') }}</a>
                    </li>
                    <li><a href="{{ route('about') }}"
                            class="text-text-secondary opacity-60 hover:text-accent hover:opacity-100 transition-all duration-300 flex items-center gap-2 group"><span
                                class="w-0 group-hover:w-4 h-[1px] bg-accent transition-all duration-300"></span>{{ __('nav.about') }}</a>
                    </li>
                </ul>
            </div>

            <!-- Links Column 2 -->
            <div>
                <h4 class="text-text-primary font-serif italic text-xl mb-8">{{ __('messages.footer.services') }}</h4>
                <ul class="space-y-4">
                    @foreach(\App\Models\Service::take(4)->get() as $service)
                        <li><a href="{{ route('services') }}"
                                class="text-text-secondary opacity-60 hover:text-accent hover:opacity-100 transition-all duration-300 line-clamp-1 border-b border-transparent hover:border-accent/20">
                                {{ $service->{'title_'.app()->getLocale()} }}
                            </a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Contact Column -->
            <div>
                <h4 class="text-text-primary font-serif italic text-xl mb-8">{{ __('messages.footer.work_with_me') }}</h4>
                <p class="text-text-secondary opacity-60 leading-relaxed mb-6">
                    {{ __('messages.footer.contact_desc') }}
                </p>
                <div class="space-y-4">
                    <a href="https://wa.me/{{ config('contact.whatsapp') }}" target="_blank"
                        class="flex items-center gap-2 group text-accent text-lg font-medium">
                        <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.63 1.438h.004c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                        <span class="border-b border-accent/20 group-hover:border-accent transition-all">+966 501 371
                            564</span>
                    </a>
                    <a href="mailto:{{ config('contact.email') }}"
                        class="block text-text-secondary opacity-60 hover:text-accent hover:opacity-100 transition-all duration-300">
                        {{ config('contact.email') }}
                    </a>
                </div>
            </div>
        </div>

        <div class="pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-8">
            <p class="text-text-secondary text-sm opacity-40">
                &copy; {{ date('Y') }} Abdulrahman Ahmed. {{ __('messages.footer.rights') }}
            </p>

            <!-- Back to Top -->
            <button x-data @click="window.scrollTo({top: 0, behavior: 'smooth'})"
                class="group flex items-center gap-4 text-sm uppercase tracking-widest text-text-secondary opacity-60 hover:opacity-100 transition-all duration-300">
                <span>{{ __('messages.footer.back_to_top') }}</span>
                <div
                    class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center group-hover:bg-accent group-hover:border-accent group-hover:text-dark-900 transition-all duration-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                </div>
            </button>
        </div>
    </div>
</footer>
