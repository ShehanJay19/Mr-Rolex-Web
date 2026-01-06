@extends('layouts.app')

@section('content')
<section class="max-w-[600px] mx-auto px-6 py-24 flex flex-col items-center text-center">
    <div class="mb-8">
        <svg class="mx-auto mb-4" width="72" height="72" fill="none" viewBox="0 0 72 72"><circle cx="36" cy="36" r="36" fill="#E5F9ED"/><path d="M24 37.5L33 46.5L48 31.5" stroke="#22C55E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <h1 class="text-3xl md:text-4xl font-extrabold mb-2 text-black">Thank you for your order!</h1>
        <p class="text-gray-500 mb-6">Your order has been placed successfully. We’ve sent a confirmation email with your order details.</p>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-8 w-full mb-8">
        <h2 class="text-lg font-bold mb-4">Order Summary</h2>
        <div class="flex flex-col gap-2 text-left">
            <div class="flex justify-between"><span>Order Number:</span> <span class="font-semibold">#123456</span></div>
            <div class="flex justify-between"><span>Date:</span> <span>Jan 2, 2026</span></div>
            <div class="flex justify-between"><span>Total:</span> <span class="font-bold">$257</span></div>
        </div>
    </div>
    <a href="/shop" class="px-8 py-4 bg-black text-white rounded-full text-lg font-bold hover:bg-[#333] transition">Continue Shopping</a>
</section>
@endsection
