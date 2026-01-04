@props([
    'title',
    'subtitle' => null,
])

<header class="flex flex-col gap-2">
    <h1 class="text-3xl sm:text-4xl font-semibold text-black leading-tight">{{ $title }}</h1>
    @if ($subtitle)
        <p class="text-sm text-muted">{{ $subtitle }}</p>
    @endif
</header>