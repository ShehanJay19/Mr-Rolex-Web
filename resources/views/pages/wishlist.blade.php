@extends('layouts.app')

@section('content')
<section class="max-w-[1280px] mx-auto px-6 py-16">
    <h1 class="text-4xl font-extrabold mb-10">My Wishlist</h1>
    <div id="wishlist-grid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10"></div>
    <div id="wishlist-empty" class="bg-canvas border border-border rounded-xl shadow-lg p-12 text-center text-muted text-lg hidden">
        <svg class="mx-auto mb-4" width="48" height="48" fill="none" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#F87171"/></svg>
        Your wishlist is empty.
    </div>
</section>
@endsection
