@extends('layouts.app')

@section('content')
<section class="max-w-[1180px] mx-auto px-6 py-10" x-data="productFilter()">
    <!-- Header -->
    <div class="flex items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-4xl font-bold text-center lg:text-left">Collections</h1>
            <p class="text-sm text-muted mt-1" x-text="summaryText()"></p>
        </div>
        <div class="hidden sm:flex items-center gap-3">
            <button
                class="px-4 py-2 text-sm border border-border rounded-lg hover:border-black transition"
                @click="resetFilters"
                x-show="hasFilters()"
            >
                Clear filters
            </button>
            <select
                x-model="sortOrder"
                class="border border-border rounded px-3 py-2 text-sm focus:outline-none focus:border-black transition"
                aria-label="Sort products"
            >
                <option value="default">Sort by</option>
                <option value="price-asc">Price: Low → High</option>
                <option value="price-desc">Price: High → Low</option>
            </select>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Filters -->
        <aside class="w-full lg:w-1/4 flex flex-col gap-6 lg:sticky lg:top-8 h-fit">
            <div class="p-5 bg-white border border-border rounded-xl shadow-sm">
                <div class="flex items-center justify-between mb-3">
                    <h2 class="font-semibold text-lg">Category</h2>
                    <span class="text-xs text-muted" x-text="selectedCategories.length + ' selected'"></span>
                </div>
                <div class="space-y-2">
                    <template x-for="cat in categories" :key="cat">
                        <label class="flex items-center gap-3 cursor-pointer hover:text-black transition">
                            <input type="checkbox" :value="cat" x-model="selectedCategories" class="form-checkbox">
                            <span x-text="cat"></span>
                        </label>
                    </template>
                </div>
            </div>

            <div class="p-5 bg-white border border-border rounded-xl shadow-sm">
                <div class="flex items-center justify-between mb-3">
                    <h2 class="font-semibold text-lg">Type</h2>
                    <span class="text-xs text-muted" x-text="selectedTypes.length + ' selected'"></span>
                </div>
                <div class="space-y-2">
                    <template x-for="type in types" :key="type">
                        <label class="flex items-center gap-3 cursor-pointer hover:text-black transition">
                            <input type="checkbox" :value="type" x-model="selectedTypes" class="form-checkbox">
                            <span x-text="type"></span>
                        </label>
                    </template>
                </div>
            </div>

            <button
                class="w-full px-4 py-3 text-sm font-semibold text-white bg-accent rounded-xl hover:bg-[#333] transition"
                @click="resetFilters"
                x-show="hasFilters()"
            >
                Reset filters
            </button>
        </aside>

        <!-- Products -->
        <div class="flex-1">
            <div class="flex sm:hidden justify-between items-center mb-4">
                <div class="text-sm text-muted" x-text="summaryText()"></div>
                <select
                    x-model="sortOrder"
                    class="text-sm border border-border rounded px-3 py-2 focus:outline-none focus:border-black transition"
                    aria-label="Sort products"
                >
                    <option value="default">Sort by</option>
                    <option value="price-asc">Price: Low → High</option>
                    <option value="price-desc">Price: High → Low</option>
                </select>
            </div>

            <div class="flex flex-wrap gap-2 mb-4" x-show="hasFilters()">
                <template x-for="cat in selectedCategories" :key="'cat-'+cat">
                    <span class="inline-flex items-center gap-2 px-3 py-1 bg-white text-black text-xs rounded-full border border-border">
                        <span x-text="cat"></span>
                        <button class="text-muted hover:text-black" @click="toggleCategory(cat)">✕</button>
                    </span>
                </template>
                <template x-for="type in selectedTypes" :key="'type-'+type">
                    <span class="inline-flex items-center gap-2 px-3 py-1 bg-white text-black text-xs rounded-full border border-border">
                        <span x-text="type"></span>
                        <button class="text-muted hover:text-black" @click="toggleType(type)">✕</button>
                    </span>
                </template>
            </div>

            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"
                x-show="filteredProducts().length"
            >
                <template x-for="product in filteredProducts()" :key="product.id">
                    <article class="group border border-border rounded-xl overflow-hidden bg-white shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
                        <div class="relative aspect-[3/4] w-full overflow-hidden">
                            <img :src="product.image" :alt="product.name"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-4 flex flex-col gap-2 flex-1">
                            <div>
                                <p class="text-xs text-muted" x-text="product.category + ' / ' + product.type"></p>
                                <h3 class="font-semibold text-lg" x-text="product.name"></h3>
                            </div>
                            <div class="mt-auto flex items-center justify-between">
                                <span class="text-lg font-bold" x-text="'$' + product.price"></span>
                                <a href="#"
                                   class="inline-flex items-center gap-1 px-4 py-2 text-sm font-semibold text-white bg-accent rounded-lg hover:bg-[#333] transition">
                                    View
                                </a>
                            </div>
                        </div>
                    </article>
                </template>
            </div>

            <div class="flex flex-col items-center justify-center text-center py-14 border border-dashed border-border rounded-xl"
                 x-show="!filteredProducts().length">
                <h3 class="text-lg font-semibold mb-1">No products match these filters</h3>
                <p class="text-sm text-muted mb-4">Try adjusting the filters or clear them to see all products.</p>
                <button
                    class="px-4 py-2 text-sm font-semibold text-white bg-accent rounded-lg hover:bg-[#333] transition"
                    @click="resetFilters"
                >
                    Clear filters
                </button>
            </div>
        </div>
    </div>
</section>

<script>
function productFilter() {
    return {
        categories: ['Men', 'Women', 'Kids'],
        types: ['Topwear', 'Bottomwear', 'Winterwear'],
        selectedCategories: [],
        selectedTypes: [],
        sortOrder: 'default',
        products: [
  {"id":1,"name":"Women Round Neck Cotton Top","category":"Women","type":"Topwear","price":100,"image":"/images/p_img1.png"},
  {"id":2,"name":"Men Round Neck Pure Cotton T-shirt","category":"Men","type":"Topwear","price":200,"image":"/images/p_img2_1.png"},
  {"id":3,"name":"Girls Round Neck Cotton Top","category":"Kids","type":"Topwear","price":220,"image":"/images/p_img3.png"},
  {"id":4,"name":"Men Round Neck Pure Cotton T-shirt","category":"Men","type":"Topwear","price":110,"image":"/images/p_img4.png"},
  {"id":5,"name":"Women Round Neck Cotton Top","category":"Women","type":"Topwear","price":130,"image":"/images/p_img5.png"},
  {"id":6,"name":"Girls Round Neck Cotton Top","category":"Kids","type":"Topwear","price":140,"image":"/images/p_img6.png"},
  {"id":7,"name":"Men Tapered Fit Flat-Front Trousers","category":"Men","type":"Bottomwear","price":190,"image":"/images/p_img7.png"},
  {"id":8,"name":"Men Round Neck Pure Cotton T-shirt","category":"Men","type":"Topwear","price":140,"image":"/images/p_img8.png"},
  {"id":9,"name":"Girls Round Neck Cotton Top","category":"Kids","type":"Topwear","price":100,"image":"/images/p_img9.png"},
  {"id":10,"name":"Men Tapered Fit Flat-Front Trousers","category":"Men","type":"Bottomwear","price":110,"image":"/images/p_img10.png"},
  {"id":11,"name":"Men Round Neck Pure Cotton T-shirt","category":"Men","type":"Topwear","price":120,"image":"/images/p_img11.png"},
  {"id":12,"name":"Men Round Neck Pure Cotton T-shirt","category":"Men","type":"Topwear","price":150,"image":"/images/p_img12.png"},
  {"id":13,"name":"Women Round Neck Cotton Top","category":"Women","type":"Topwear","price":130,"image":"/images/p_img13.png"},
  {"id":14,"name":"Boy Round Neck Pure Cotton T-shirt","category":"Kids","type":"Topwear","price":160,"image":"/images/p_img14.png"},
  {"id":15,"name":"Men Tapered Fit Flat-Front Trousers","category":"Men","type":"Bottomwear","price":140,"image":"/images/p_img15.png"},
  {"id":16,"name":"Girls Round Neck Cotton Top","category":"Kids","type":"Topwear","price":170,"image":"/images/p_img16.png"},
  {"id":17,"name":"Men Tapered Fit Flat-Front Trousers","category":"Men","type":"Bottomwear","price":150,"image":"/images/p_img17.png"},
  {"id":18,"name":"Boy Round Neck Pure Cotton T-shirt","category":"Kids","type":"Topwear","price":180,"image":"/images/p_img18.png"},
  {"id":19,"name":"Boy Round Neck Pure Cotton T-shirt","category":"Kids","type":"Topwear","price":160,"image":"/images/p_img19.png"},
  {"id":20,"name":"Women Palazzo Pants with Waist Belt","category":"Women","type":"Bottomwear","price":190,"image":"/images/p_img20.png"},
  {"id":21,"name":"Women Zip-Front Relaxed Fit Jacket","category":"Women","type":"Winterwear","price":170,"image":"/images/p_img21.png"},
  {"id":22,"name":"Women Palazzo Pants with Waist Belt","category":"Women","type":"Bottomwear","price":200,"image":"/images/p_img22.png"},
  {"id":23,"name":"Boy Round Neck Pure Cotton T-shirt","category":"Kids","type":"Topwear","price":180,"image":"/images/p_img23.png"},
  {"id":24,"name":"Boy Round Neck Pure Cotton T-shirt","category":"Kids","type":"Topwear","price":210,"image":"/images/p_img24.png"},
  {"id":25,"name":"Girls Round Neck Cotton Top","category":"Kids","type":"Topwear","price":190,"image":"/images/p_img25.png"},
  {"id":26,"name":"Women Zip-Front Relaxed Fit Jacket","category":"Women","type":"Winterwear","price":220,"image":"/images/p_img26.png"},
  {"id":27,"name":"Girls Round Neck Cotton Top","category":"Kids","type":"Topwear","price":200,"image":"/images/p_img27.png"},
  {"id":28,"name":"Men Slim Fit Relaxed Denim Jacket","category":"Men","type":"Winterwear","price":230,"image":"/images/p_img28.png"},
  {"id":29,"name":"Women Round Neck Cotton Top","category":"Women","type":"Topwear","price":210,"image":"/images/p_img29.png"},
  {"id":30,"name":"Girls Round Neck Cotton Top","category":"Kids","type":"Topwear","price":240,"image":"/images/p_img30.png"},
  {"id":31,"name":"Men Round Neck Pure Cotton T-shirt","category":"Men","type":"Topwear","price":220,"image":"/images/p_img31.png"},
  {"id":32,"name":"Men Round Neck Pure Cotton T-shirt","category":"Men","type":"Topwear","price":250,"image":"/images/p_img32.png"},
  {"id":33,"name":"Girls Round Neck Cotton Top","category":"Kids","type":"Topwear","price":230,"image":"/images/p_img33.png"},
  {"id":34,"name":"Women Round Neck Cotton Top","category":"Women","type":"Topwear","price":260,"image":"/images/p_img34.png"},
  {"id":35,"name":"Women Zip-Front Relaxed Fit Jacket","category":"Women","type":"Winterwear","price":240,"image":"/images/p_img35.png"},
  {"id":36,"name":"Women Zip-Front Relaxed Fit Jacket","category":"Women","type":"Winterwear","price":270,"image":"/images/p_img36.png"},
  {"id":37,"name":"Women Round Neck Cotton Top","category":"Women","type":"Topwear","price":250,"image":"/images/p_img37.png"},
  {"id":38,"name":"Men Round Neck Pure Cotton T-shirt","category":"Men","type":"Topwear","price":280,"image":"/images/p_img38.png"},
  {"id":39,"name":"Men Printed Plain Cotton Shirt","category":"Men","type":"Topwear","price":260,"image":"/images/p_img39.png"},
  {"id":40,"name":"Men Slim Fit Relaxed Denim Jacket","category":"Men","type":"Winterwear","price":290,"image":"/images/p_img40.png"},
  {"id":41,"name":"Men Round Neck Pure Cotton T-shirt","category":"Men","type":"Topwear","price":270,"image":"/images/p_img41.png"},
  {"id":42,"name":"Boy Round Neck Pure Cotton T-shirt","category":"Kids","type":"Topwear","price":300,"image":"/images/p_img42.png"},
  {"id":43,"name":"Kid Tapered Slim Fit Trouser","category":"Kids","type":"Bottomwear","price":280,"image":"/images/p_img43.png"},
  {"id":44,"name":"Women Zip-Front Relaxed Fit Jacket","category":"Women","type":"Winterwear","price":310,"image":"/images/p_img44.png"},
  {"id":45,"name":"Men Slim Fit Relaxed Denim Jacket","category":"Men","type":"Winterwear","price":290,"image":"/images/p_img45.png"},
  {"id":46,"name":"Men Slim Fit Relaxed Denim Jacket","category":"Men","type":"Winterwear","price":320,"image":"/images/p_img46.png"},
  {"id":47,"name":"Kid Tapered Slim Fit Trouser","category":"Kids","type":"Bottomwear","price":300,"image":"/images/p_img47.png"},
  {"id":48,"name":"Men Slim Fit Relaxed Denim Jacket","category":"Men","type":"Winterwear","price":330,"image":"/images/p_img48.png"},
  {"id":49,"name":"Kid Tapered Slim Fit Trouser","category":"Kids","type":"Bottomwear","price":310,"image":"/images/p_img49.png"},
  {"id":50,"name":"Kid Tapered Slim Fit Trouser","category":"Kids","type":"Bottomwear","price":340,"image":"/images/p_img50.png"},
  {"id":51,"name":"Women Zip-Front Relaxed Fit Jacket","category":"Women","type":"Winterwear","price":320,"image":"/images/p_img51.png"},
  {"id":52,"name":"Men Slim Fit Relaxed Denim Jacket","category":"Men","type":"Winterwear","price":350,"image":"/images/p_img52.png"}
]
,
        filteredProducts() {
            let filtered = [...this.products];

            if (this.selectedCategories.length > 0) {
                filtered = filtered.filter(p => this.selectedCategories.includes(p.category));
            }
            if (this.selectedTypes.length > 0) {
                filtered = filtered.filter(p => this.selectedTypes.includes(p.type));
            }
            if (this.sortOrder === 'price-asc') {
                filtered = [...filtered].sort((a, b) => a.price - b.price);
            } else if (this.sortOrder === 'price-desc') {
                filtered = [...filtered].sort((a, b) => b.price - a.price);
            }
            return filtered;
        },
        hasFilters() {
            return this.selectedCategories.length > 0 || this.selectedTypes.length > 0;
        },
        resetFilters() {
            this.selectedCategories = [];
            this.selectedTypes = [];
            this.sortOrder = 'default';
        },
        toggleCategory(cat) {
            this.selectedCategories = this.selectedCategories.includes(cat)
                ? this.selectedCategories.filter(c => c !== cat)
                : [...this.selectedCategories, cat];
        },
        toggleType(type) {
            this.selectedTypes = this.selectedTypes.includes(type)
                ? this.selectedTypes.filter(t => t !== type)
                : [...this.selectedTypes, type];
        },
        summaryText() {
            const count = this.filteredProducts().length;
            const total = this.products.length;
            if (!this.hasFilters()) return `${count} products available`;
            return `${count} of ${total} products shown`;
        }
    }
}
</script>
@endsection