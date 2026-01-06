@props([
    'filters' => [], // structured by type/sections
    'action' => null, // form action (defaults to current URL)
    'method' => 'GET',
])

<aside class="w-full lg:w-1/4 space-y-6">
    <form action="{{ $action ?? url()->current() }}" method="{{ strtolower($method) === 'get' ? 'GET' : 'POST' }}" class="space-y-6">
        @csrf
        @if (strtolower($method) !== 'get')
            @method($method)
        @endif

        @foreach ($filters as $filter)
            <div class="p-5 bg-white border border-border rounded-xl shadow-sm space-y-3">
                @if ($filter['type'] === 'search')
                    <x-filter-item
                        :label="$filter['label']"
                        :name="$filter['name']"
                        type="text"
                        :value="$filter['value'] ?? request($filter['name'], '')"
                    />
                @elseif ($filter['type'] === 'range')
                    <x-filter-item
                        :label="$filter['label']"
                        :name="$filter['name']"
                        type="range"
                        :value="$filter['value'] ?? request($filter['name'], [])"
                    />
                @else
                    <x-filter-item
                        :label="$filter['label']"
                        :name="$filter['name']"
                        :type="$filter['type']"
                        :options="$filter['options']"
                    />
                @endif
            </div>
        @endforeach

        <div class="flex gap-3">
            <button type="submit" class="flex-1 px-4 py-3 text-sm font-semibold text-white bg-black rounded-xl hover:bg-neutral-800 transition">
                Apply filters
            </button>
            <a href="{{ url()->current() }}" class="px-4 py-3 text-sm font-semibold border border-border text-black rounded-xl hover:border-black transition">
                Reset
            </a>
        </div>
    </form>
</aside>