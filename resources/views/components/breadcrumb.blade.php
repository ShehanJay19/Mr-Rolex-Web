@props(['items' => []])

<nav class="text-sm text-muted flex items-center gap-2" aria-label="Breadcrumb">
    @foreach ($items as $index => $item)
        @if (!empty($item['url']) && $index < count($items) - 1)
            <a href="{{ $item['url'] }}" class="text-black hover:underline">{{ $item['label'] }}</a>
        @else
            <span class="text-muted">{{ $item['label'] }}</span>
        @endif
        @if ($index < count($items) - 1)
            <span class="text-muted">/</span>
        @endif
    @endforeach
</nav>