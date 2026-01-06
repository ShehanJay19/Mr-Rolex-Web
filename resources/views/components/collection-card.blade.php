@props([
    'title' => 'Collection',
    'image' => '/images/collection1.jpg',
    'badge' => 'Collection',
    'tagline' => null,
    'href' => null,
])

@php
    $cardTag = $href ? 'a' : 'div';
@endphp

<{{ $cardTag }}
    @if($href) href="{{ $href }}" @endif
    class="collection-card relative aspect-[4/3] rounded-2xl overflow-hidden group shadow-lg hover:shadow-2xl transition-all duration-500 bg-canvas cursor-pointer"
    data-parallax="true"
>
    <!-- Parallax Image Container -->
    <div class="absolute inset-0 overflow-hidden">
        <img 
            src="{{ $image }}" 
            class="collection-card-image w-full h-full object-cover transition-transform duration-700 ease-out"
            data-parallax-speed="0.5"
            alt="{{ $title }}"
            loading="lazy"
        >
    </div>

    <!-- Premium Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

    <!-- Decorative Blur Elements -->
    <div class="absolute -top-1/2 -right-1/2 w-96 h-96 bg-accent/10 rounded-full blur-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

    <!-- Content Container -->
    <div class="absolute inset-0 flex flex-col items-end justify-end p-6 sm:p-8 pointer-events-none group-hover:pointer-events-auto">
        <div class="w-full space-y-3 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
            @if($badge)
                <div class="flex justify-between items-start gap-4">
                    <span class="inline-flex items-center gap-2 text-[10px] uppercase tracking-[0.3em] text-white/90 bg-white/15 backdrop-blur-md px-3 py-1.5 rounded-full border border-white/20 animate-fade-in-up" style="animation-delay: 0.1s;">
                        {{ $badge }}
                    </span>
                    <!-- Hover CTA Arrow -->
                    <div class="opacity-0 group-hover:opacity-100 translate-x-2 group-hover:translate-x-0 transition-all duration-500 pointer-events-auto">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>
                </div>
            @endif

            <div class="space-y-2">
                <h3 class="text-white text-2xl sm:text-3xl font-bold font-playfair tracking-tight drop-shadow-lg animate-fade-in-up" style="animation-delay: 0.2s;">
                    {{ $title }}
                </h3>
                @if($tagline)
                    <p class="text-white/80 text-sm max-w-sm leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 animate-fade-in-up" style="animation-delay: 0.3s;">
                        {{ $tagline }}
                    </p>
                @endif
            </div>

            <!-- Premium CTA Button (Hover State) -->
            @if($href)
                <div class="opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-500 delay-100 pointer-events-auto pt-2">
                    <button class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.2em] text-white bg-white/20 hover:bg-white/30 backdrop-blur-md px-4 py-2 rounded-lg border border-white/30 hover:border-white/50 transition-all duration-300 hover:shadow-lg">
                        Explore
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            @endif
        </div>
    </div>

    <!-- Premium Border -->
    <div class="absolute inset-0 pointer-events-none border border-white/5 rounded-2xl group-hover:border-white/20 transition-colors duration-500"></div>

    <!-- Corner Accent Light -->
    <div class="absolute -top-8 -left-8 w-24 h-24 bg-white/5 rounded-full blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
</{{ $cardTag }}>
