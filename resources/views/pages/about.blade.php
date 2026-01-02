@extends('layouts.app')

@section('content')
<section class="max-w-[960px] mx-auto px-6 py-16 space-y-12">
    <div class="space-y-4 text-center">
        <p class="text-sm uppercase tracking-[0.2em] text-muted">About XIV QR</p>
        <h1 class="text-4xl font-extrabold">Design for modern living</h1>
        <p class="text-muted max-w-3xl mx-auto">We craft minimalist, enduring pieces with premium materials and precise tailoring. Each collection focuses on clean lines, versatile layers, and a neutral palette that works across seasons.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-canvas border border-border rounded-xl p-6 shadow-sm">
            <h3 class="text-lg font-bold mb-2">Materials</h3>
            <p class="text-muted text-sm">Natural fabrics, responsible sourcing, and construction built to last.</p>
        </div>
        <div class="bg-canvas border border-border rounded-xl p-6 shadow-sm">
            <h3 class="text-lg font-bold mb-2">Craft</h3>
            <p class="text-muted text-sm">Tailored fits, refined silhouettes, and a focus on everyday comfort.</p>
        </div>
        <div class="bg-canvas border border-border rounded-xl p-6 shadow-sm">
            <h3 class="text-lg font-bold mb-2">Sustain</h3>
            <p class="text-muted text-sm">Lower-impact processes and timeless designs to reduce overconsumption.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <img src="/images/story1.jpg" alt="Studio" class="w-full h-80 object-cover rounded-xl border border-border">
        <div class="space-y-3">
            <h2 class="text-2xl font-bold">Studio ethos</h2>
            <p class="text-muted">We balance strong structure with relaxed drape, blending technical finishes with natural textures. Our team iterates quickly to deliver seasonless staples.</p>
            <a href="/contact" class="inline-flex items-center gap-2 text-sm font-semibold underline">Contact us</a>
        </div>
    </div>
</section>
@endsection
