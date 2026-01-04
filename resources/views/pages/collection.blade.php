@extends('layouts.app')

@section('content')
@php
    /** These should be provided by the controller */
    $breadcrumbItems = [
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Products'],
    ];

    $filters = [
        ['type' => 'search', 'label' => 'Search', 'name' => 'q', 'value' => request('q')],
        ['type' => 'checkbox', 'label' => 'Size', 'name' => 'sizes', 'options' => $sizes],              // $sizes: [['label'=>'S','value'=>'s','count'=>12], ...]
        ['type' => 'checkbox', 'label' => 'Availability', 'name' => 'availability', 'options' => $availability], // $availability: [['label'=>'In Stock','value'=>'in'], ...]
        ['type' => 'checkbox', 'label' => 'Category', 'name' => 'categories', 'options' => $categories], // $categories: [['label'=>'Men','value'=>'men'], ...]
        ['type' => 'color', 'label' => 'Colors', 'name' => 'colors', 'options' => $colors],             // $colors: [['label'=>'Black','value'=>'black','swatch'=>'#000','count'=>8], ...]
        ['type' => 'range', 'label' => 'Price Range', 'name' => 'price', 'value' => request('price', [])],
        ['type' => 'checkbox', 'label' => 'Tags', 'name' => 'tags', 'options' => $tags],                // $tags: [['label'=>'New','value'=>'new'], ...]
    ];

    $products = $products ?? []; // Controller should supply products with keys: name, subtitle, price (formatted), image (url), url
@endphp

<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="flex items-center justify-between mb-6">
        <x-breadcrumb :items="$breadcrumbItems" />
    </div>

    <div class="mb-8">
        <x-page-header
            title="Products"
            :subtitle="$products ? (count($products) . ' items') : null"
        />
    </div>

    <div class="flex flex-col lg:flex-row gap-10">
        <x-filter-sidebar :filters="$filters" />

        <div class="flex-1 space-y-6">
            <div class="flex items-center justify-end">
                {{-- Example sort control hooked to request --}}
                <form method="GET" class="flex items-center gap-2">
                    @foreach(request()->except('sort') as $key => $value)
                        @if(is_array($value))
                            @foreach($value as $v)
                                <input type="hidden" name="{{ $key }}[]" value="{{ $v }}">
                            @endforeach
                        @else
                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                        @endif
                    @endforeach
                    <label for="sort" class="text-sm text-muted">Sort</label>
                    <select
                        id="sort"
                        name="sort"
                        class="border border-border rounded px-3 py-2 text-sm focus:outline-none focus:border-black transition"
                        onchange="this.form.submit()"
                    >
                        <option value="">Default</option>
                        <option value="price-asc" @selected(request('sort') === 'price-asc')>Price: Low → High</option>
                        <option value="price-desc" @selected(request('sort') === 'price-desc')>Price: High → Low</option>
                    </select>
                </form>
            </div>

            <x-product-grid :products="$products" />
        </div>
    </div>
</section>
@endsection