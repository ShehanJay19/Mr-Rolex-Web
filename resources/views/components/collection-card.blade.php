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
    class="relative aspect-[4/3] rounded-2xl overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 bg-black/5"
>
    <img src="{{ $image }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $title }}">
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end p-6">
        <div class="space-y-2">
            @if($badge)
                <span class="inline-flex items-center gap-2 text-[11px] uppercase tracking-[0.2em] text-white/80 bg-white/10 backdrop-blur px-3 py-1 rounded-full">
                    {{ $badge }}
                </span>
            @endif
            <h3 class="text-white text-2xl font-semibold drop-shadow-lg">{{ $title }}</h3>
            @if($tagline)
                <p class="text-white/80 text-sm max-w-sm leading-relaxed">{{ $tagline }}</p>
            @endif
        </div>
    </div>
    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl"></div>
</{{ $cardTag }}>
