<div class="bg-white border border-[#E5E5E5] rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col">
    <div class="relative aspect-[3/4] w-full">
        <img src="{{ $image }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300 rounded-t-xl" alt="{{ $name }}">
        <span class="absolute top-3 left-3 bg-black text-white text-xs px-3 py-1 rounded-full opacity-80">New</span>
    </div>
    <div class="p-5 flex-1 flex flex-col justify-between">
        <div>
            <h3 class="font-serif text-lg font-bold mb-1 text-[#111] group-hover:text-black transition">{{ $name }}</h3>
            <p class="text-xs text-[#6B6B6B] mb-3">{{ $description }}</p>
        </div>
        <div class="flex items-center justify-between mt-auto">
            <span class="font-bold text-lg text-[#111]">${{ $price }}</span>
            <a href="#" class="px-4 py-2 bg-black text-white rounded hover:bg-[#333] transition text-xs font-semibold">View</a>
        </div>
    </div>
</div>
