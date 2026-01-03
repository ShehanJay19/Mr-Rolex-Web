<div class="relative aspect-[4/3] rounded-xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-lg transition-all duration-300">
    <img src="{{ $image }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="{{ $title }}">
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex items-end p-6">
        <h3 class="text-white text-2xl font-serif font-bold drop-shadow-lg">{{ $title }}</h3>
    </div>
    <span class="absolute top-3 left-3 bg-white text-text text-xs px-3 py-1 rounded-full opacity-90 font-semibold">Collection</span>
</div>
