<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ __('messages.seo.description') }}">
    <meta name="keywords" content="{{ __('messages.seo.keywords') }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', __('messages.seo.title'))">
    <meta property="og:description" content="{{ __('messages.seo.description') }}">
    <meta property="og:image" content="{{ asset('images/hero-portrait.png') }}">

    <!-- Luxurious SVG Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%230A0A0A'/><text y='72' x='50' font-family='serif' font-size='65' text-anchor='middle' fill='%23C5A059' font-style='italic' font-weight='bold'>A</text></svg>">
    
    <link rel="canonical" href="{{ url()->current() }}">

    <title>@yield('title', __('messages.seo.title'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Cairo:wght@400;700&family=IBM+Plex+Sans+Arabic:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            900: 'rgb(var(--dark-900) / <alpha-value>)',
                            800: 'rgb(var(--dark-800) / <alpha-value>)',
                            700: 'rgb(var(--dark-700) / <alpha-value>)',
                            border: 'var(--dark-border)'
                        },
                        text: {
                            primary: 'rgb(var(--text-primary) / <alpha-value>)',
                            secondary: 'rgb(var(--text-secondary) / <alpha-value>)',
                        },
                        accent: 'rgb(var(--accent) / <alpha-value>)'
                    },
                    fontFamily: {
                        sans: ['Inter', 'IBM Plex Sans Arabic', 'sans-serif'],
                        serif: ['Playfair Display', 'Cairo', 'serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        :root {
            --dark-900: 11 12 14;
            --dark-800: 20 22 27;
            --dark-700: 26 29 35;
            --dark-border: rgba(255, 255, 255, 0.06);
            --text-primary: 242 242 242;
            --text-secondary: 231 211 176;
            --accent: 231 211 176;
            --bg-color: 14 14 14;
        }

        body {
            background: rgb(var(--bg-color));
            color: rgb(var(--text-primary));
        }
        /* Glowing Scroll Progress Bar */
        .scroll-progress-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            z-index: 1000;
            pointer-events: none;
        }
        .scroll-progress-bar {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, transparent, rgb(var(--accent)));
            box-shadow: 0 0 10px rgb(var(--accent)), 0 0 5px rgb(var(--accent));
            transition: width 0.1s ease-out;
        }

        /* Custom Scrollbar - The "Side Bar" */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgb(var(--bg-color));
        }

        ::-webkit-scrollbar-thumb {
            background: rgb(var(--accent));
            border-radius: 10px;
            border: 2px solid rgb(var(--bg-color));
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgb(var(--text-primary));
        }

        /* Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: rgb(var(--accent)) rgb(var(--bg-color));
        }
    </style>
</head>
<body class="antialiased font-sans text-text-primary selection:bg-accent selection:text-dark-900 overflow-x-hidden">
    <!-- Page Transition Overlay -->
    <div id="page-transition" class="fixed inset-0 bg-dark-900 z-[100] transform origin-bottom flex items-center justify-center">
        <div class="text-accent font-serif italic text-4xl reveal-logo opacity-0">Abdulrahman</div>
    </div>

    <div class="scroll-progress-container">
        <div class="scroll-progress-bar" id="progress-bar"></div>
    </div>

    <!-- Custom Cursor -->
    <div id="custom-cursor" class="fixed top-0 left-0 w-8 h-8 rounded-full border border-accent/50 pointer-events-none z-[9999] transition-transform duration-100 ease-out flex items-center justify-center hidden md:flex">
        <div class="w-1 h-1 bg-accent rounded-full"></div>
    </div>
    <x-nav />

    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer />

    <!-- Scripts -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gsap.registerPlugin(ScrollTrigger);

            // Initialize Lenis Smooth Scroll
            // تهيئة مكتبة Lenis

            const lenis = new Lenis({
                duration: 1.2, // مدة حركة التمرير
                easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                direction: 'vertical',
                gestureDirection: 'vertical',
                smooth: true,
                mouseMultiplier: 1,// سرعة استجابة الماوس
                smoothTouch: false,
                touchMultiplier: 2,  //سرعة استجابة الشاشة
                infinite: false,
            });

            function raf(time) {
                lenis.raf(time);
                requestAnimationFrame(raf);
            }
            requestAnimationFrame(raf);

            // Connect Lenis to ScrollTrigger
            // ربط التمرير الناعم بمكتبة GSAP الخاصة بالحركات
            lenis.on('scroll', ScrollTrigger.update);
            gsap.ticker.add((time) => {
                lenis.raf(time * 1000);
            });
            gsap.ticker.lagSmoothing(0);
            
            // Page Transition Animation
            // أنيميشن انتقال الصفحة عند التحميل
            const tl = gsap.timeline();
            tl.to('.reveal-logo', { opacity: 1, duration: 0.8, ease: 'power2.out' })
              .to('#page-transition', { scaleY: 0, duration: 1, ease: 'power4.inOut', delay: 0.2 })
              .set('#page-transition', { display: 'none' });

            // Global Reveal Animation
            // أنيميشن ظهور العناصر عند التمرير
            gsap.utils.toArray('.reveal').forEach(el => {
                gsap.fromTo(el, 
                    { y: 50, opacity: 0 },
                    {
                        y: 0, 
                        opacity: 1, 
                        duration: 1.2, 
                        ease: 'power3.out',
                        scrollTrigger: {
                            trigger: el,
                            start: 'top 90%',
                        }
                    }
                );
            });

            // Image Reveal (Parallax/Slow Scale on Scroll)
            // تأثير البارالاكس للصور عند التمرير
            gsap.utils.toArray('.img-reveal').forEach(el => {
                gsap.fromTo(el, 
                    { scale: 1.2 },
                    {
                        scale: 1,
                        ease: 'none',
                        scrollTrigger: {
                            trigger: el,
                            start: 'top bottom',
                            end: 'bottom top',
                            scrub: true
                        }
                    }
                );
            });

            // Card Tilt Effect
            // تأثير ميلان البطاقات عند مرور الماوس
            const cards = document.querySelectorAll('.card-tilt');
            cards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const xc = rect.width / 2;
                    const yc = rect.height / 2;
                    const dx = x - xc;
                    const dy = y - yc;
                    
                    gsap.to(card, {
                        rotateY: dx / 20,
                        rotateX: -dy / 20,
                        duration: 0.5,
                        ease: 'power3.out',
                        transformPerspective: 1000
                    });
                });
                
                card.addEventListener('mouseleave', () => {
                    gsap.to(card, {
                        rotateY: 0,
                        rotateX: 0,
                        duration: 0.5,
                        ease: 'power3.out'
                    });
                });
            });

            // Floating Animation
            // أنيميشن العناصر العائمة في الخلفية
            gsap.to('.float-anim', {
                y: -20,
                duration: 2,
                repeat: -1,
                yoyo: true,
                ease: 'power1.inOut',
                stagger: 0.2
            });

            // Custom Cursor Logic
            // منطق حركة المؤشر المخصص
            const cursor = document.getElementById('custom-cursor');
            if (cursor) {
                document.addEventListener('mousemove', (e) => {
                    gsap.to(cursor, {
                        x: e.clientX - 16,
                        y: e.clientY - 16,
                        duration: 0.5,
                        ease: 'power3.out'
                    });
                });

                // Cursor Hover Effect
                // تأثير المؤشر عند ملامسة الروابط والأزرار
                const interactables = document.querySelectorAll('a, button, .interactive');
                interactables.forEach(el => {
                    el.addEventListener('mouseenter', () => {
                        gsap.to(cursor, {
                            scale: 2,
                            backgroundColor: 'rgba(var(--accent) / 0.1)',
                            duration: 0.3
                        });
                    });
                    el.addEventListener('mouseleave', () => {
                        gsap.to(cursor, {
                            scale: 1,
                            backgroundColor: 'transparent',
                            duration: 0.3
                        });
                    });
                });
            }

            // Magnetic Button Effect
            // تأثير المغناطيس للأزرار
            const magneticElements = document.querySelectorAll('.magnetic');
            magneticElements.forEach(el => {
                el.addEventListener('mousemove', (e) => {
                    const rect = el.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    
                    gsap.to(el, {
                        x: x * 0.3,
                        y: y * 0.3,
                        duration: 0.3,
                        ease: 'power2.out'
                    });
                });
                el.addEventListener('mouseleave', () => {
                    gsap.to(el, {
                        x: 0,
                        y: 0,
                        duration: 0.5,
                        ease: 'elastic.out(1, 0.3)'
                    });
                });
            });

            // Scroll Progress Logic
            // حساب تقدم شريط التمرير
            const progressBar = document.getElementById('progress-bar');
            window.addEventListener('scroll', () => {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (winScroll / height) * 100;
                if (progressBar) {
                    progressBar.style.width = scrolled + "%";
                }
            });
        });
    </script>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/966501371564" target="_blank" class="fixed bottom-8 right-8 z-50 group magnetic hidden md:flex">
        <div class="w-16 h-16 bg-[#25D366] rounded-full flex items-center justify-center shadow-2xl transition-transform duration-300 group-hover:scale-110">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
            </svg>
        </div>
        <span class="absolute right-20 top-1/2 -translate-y-1/2 bg-white text-dark-900 px-4 py-2 rounded-lg text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-xl">
            {{ app()->getLocale() == 'ar' ? 'تحدث معي' : 'Chat with me' }}
        </span>
    </a>
    @stack('scripts')
</body>
</html>
