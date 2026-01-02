@extends('layouts.app')

@section('content')
<section class="max-w-[900px] mx-auto px-6 py-16 space-y-10">
    <div class="space-y-3 text-center">
        <p class="text-sm uppercase tracking-[0.2em] text-muted">Contact</p>
        <h1 class="text-4xl font-extrabold">Let’s talk</h1>
        <p class="text-muted max-w-2xl mx-auto">Questions about sizing, orders, or collaborations? Reach out and we’ll get back quickly.</p>
    </div>

    <div class="bg-canvas border border-border rounded-xl shadow-sm p-8 space-y-6">
        <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="md:col-span-1">
                <label class="block text-sm font-semibold text-text mb-1" for="name">Name</label>
                <input id="name" type="text" class="w-full px-3 py-2 border border-border rounded-lg focus:outline-none focus:border-accent" placeholder="Your name" required>
            </div>
            <div class="md:col-span-1">
                <label class="block text-sm font-semibold text-text mb-1" for="email">Email</label>
                <input id="email" type="email" class="w-full px-3 py-2 border border-border rounded-lg focus:outline-none focus:border-accent" placeholder="you@example.com" required>
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-text mb-1" for="message">Message</label>
                <textarea id="message" rows="4" class="w-full px-3 py-2 border border-border rounded-lg focus:outline-none focus:border-accent" placeholder="How can we help?" required></textarea>
            </div>
            <div class="md:col-span-2 flex justify-end">
                <button type="submit" class="px-6 py-3 bg-accent text-white rounded-full font-semibold hover:bg-[#333] transition">Send</button>
            </div>
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm text-muted">
        <div class="bg-canvas border border-border rounded-xl p-5">
            <p class="text-text font-semibold mb-1">Email</p>
            <p>hello@xivqr.com</p>
        </div>
        <div class="bg-canvas border border-border rounded-xl p-5">
            <p class="text-text font-semibold mb-1">Phone</p>
            <p>+1 555 123 4567</p>
        </div>
        <div class="bg-canvas border border-border rounded-xl p-5">
            <p class="text-text font-semibold mb-1">Studio</p>
            <p>123 Fashion Ave, NY</p>
        </div>
    </div>
</section>
@endsection
