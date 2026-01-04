@props([
    'label',
    'name',
    'type' => 'checkbox', // checkbox | color | range | text
    'options' => [],      // For checkbox/color: [['label'=>'', 'value'=>'', 'count'=>int|null, 'swatch'=>hex|null]]
    'value' => null,      // For text/range
])

<div class="space-y-3">
    <div class="flex items-center justify-between">
        <h3 class="text-sm font-semibold text-black">{{ $label }}</h3>
    </div>

    @if ($type === 'text')
        <input
            type="search"
            name="{{ $name }}"
            value="{{ $value }}"
            placeholder="Search"
            class="w-full border border-border rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-black"
        />
    @elseif ($type === 'range')
        <div class="flex items-center gap-3">
            <input
                type="number"
                name="{{ $name }}[min]"
                value="{{ $value['min'] ?? '' }}"
                placeholder="Min"
                class="w-1/2 border border-border rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-black"
            />
            <input
                type="number"
                name="{{ $name }}[max]"
                value="{{ $value['max'] ?? '' }}"
                placeholder="Max"
                class="w-1/2 border border-border rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-black"
            />
        </div>
    @elseif ($type === 'color')
        <div class="flex flex-wrap gap-2">
            @foreach ($options as $option)
                <label class="inline-flex items-center gap-2 px-3 py-2 border border-border rounded-full cursor-pointer hover:border-black transition">
                    <input
                        type="checkbox"
                        name="{{ $name }}[]"
                        value="{{ $option['value'] }}"
                        class="form-checkbox text-black"
                        @checked(in_array($option['value'], request($name, [])))
                    />
                    <span class="flex items-center gap-2 text-sm text-black">
                        <span class="h-3 w-3 rounded-full border border-border" style="background-color: {{ $option['swatch'] ?? '#000' }};"></span>
                        {{ $option['label'] }}
                    </span>
                    @if (!empty($option['count']))
                        <span class="text-xs text-muted">({{ $option['count'] }})</span>
                    @endif
                </label>
            @endforeach
        </div>
    @else
        <div class="space-y-2">
            @foreach ($options as $option)
                <label class="flex items-center justify-between gap-3 cursor-pointer border border-transparent hover:border-border rounded-lg px-2 py-1 transition">
                    <span class="flex items-center gap-3">
                        <input
                            type="checkbox"
                            name="{{ $name }}[]"
                            value="{{ $option['value'] }}"
                            class="form-checkbox text-black"
                            @checked(in_array($option['value'], request($name, [])))
                        />
                        <span class="text-sm text-black">{{ $option['label'] }}</span>
                    </span>
                    @if (!empty($option['count']))
                        <span class="text-xs text-muted">{{ $option['count'] }}</span>
                    @endif
                </label>
            @endforeach
        </div>
    @endif
</div>