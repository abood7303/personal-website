<nav x-data="{ open: false }"
    class="fixed top-0 left-1/2 -translate-x-1/2 w-full z-[60] bg-dark-900/60 backdrop-blur-2xl border-b border-white/5 transition-all duration-500 shadow-2xl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="font-serif italic text-2xl text-text-primary hover:text-accent transition">
                    Abdulrahman
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 rtl:space-x-reverse items-center">
                @foreach (['home', 'services', 'work.index', 'about'] as $route)
                    <a href="{{ route($route) }}"
                        class="text-sm font-medium {{ request()->routeIs($route) ? 'text-accent' : 'text-text-secondary hover:text-text-primary' }} transition">
                        {{ __('nav.' . $route) }}
                    </a>
                @endforeach

                <!-- WhatsApp Direct Button -->
                <a href="https://wa.me/966501371564" target="_blank"
                    class="px-6 py-2 bg-accent text-dark-900 rounded-full text-sm font-bold hover:bg-white transition-all duration-300">
                    {{ __('nav.contact') }}
                </a>

                <!-- Lang Switcher -->
                <a href="{{ route('lang.switch', app()->getLocale() == 'en' ? 'ar' : 'en') }}"
                    class="px-3 py-1 border border-dark-border rounded-full text-xs hover:bg-dark-800 transition text-text-secondary hover:text-text-primary">
                    {{ app()->getLocale() == 'en' ? 'AR' : 'EN' }}
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="-mr-2 flex items-center md:hidden">
                <button @click="open = !open" class="text-text-secondary hover:text-text-primary p-2">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden bg-dark-900 border-b border-dark-border absolute w-full left-0">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            @foreach (['home', 'services', 'work.index', 'about'] as $route)
                <a href="{{ route($route) }}"
                    class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs($route) ? 'text-accent bg-dark-800' : 'text-text-secondary hover:text-text-primary hover:bg-dark-800' }}">
                    {{ __('nav.' . $route) }}
                </a>
            @endforeach
            <a href="https://wa.me/966501371564" target="_blank"
                class="block px-3 py-2 rounded-md text-base font-medium text-accent bg-accent/10 border border-accent/20">
                {{ __('nav.contact') }}
            </a>
            <a href="{{ route('lang.switch', app()->getLocale() == 'en' ? 'ar' : 'en') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-text-secondary hover:text-text-primary hover:bg-dark-800">
                Switch to {{ app()->getLocale() == 'en' ? 'Arabic' : 'English' }}
            </a>
        </div>
    </div>
</nav>
