@extends('layouts.app')

@section('content')
<section class="max-w-[700px] mx-auto px-6 py-16">
    <h1 class="text-4xl font-extrabold mb-10">Checkout</h1>
    <form class="bg-canvas border border-border rounded-xl shadow-lg p-8 flex flex-col gap-8" onsubmit="event.preventDefault(); window.location.href='/order-success';">
        <div>
            <h2 class="text-lg font-bold mb-4">Shipping Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="text" class="border border-border rounded px-4 py-2" placeholder="Full Name" required>
                <input type="email" class="border border-border rounded px-4 py-2" placeholder="Email Address" required>
                <input type="text" class="border border-border rounded px-4 py-2 md:col-span-2" placeholder="Address" required>
                <input type="text" class="border border-border rounded px-4 py-2" placeholder="City" required>
                <input type="text" class="border border-border rounded px-4 py-2" placeholder="Postal Code" required>
                <input type="text" class="border border-border rounded px-4 py-2" placeholder="Country" required>
            </div>
        </div>
        <div>
            <h2 class="text-lg font-bold mb-4">Payment</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="text" class="border border-border rounded px-4 py-2 md:col-span-2" placeholder="Card Number" required>
                <input type="text" class="border border-border rounded px-4 py-2" placeholder="MM/YY" required>
                <input type="text" class="border border-border rounded px-4 py-2" placeholder="CVC" required>
            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-between items-center gap-6 mt-4">
            <div class="text-lg text-muted">
                <span>Total:</span>
                <span class="font-bold text-2xl text-text ml-2">$257</span>
            </div>
            <button type="submit" class="px-8 py-4 bg-accent text-white rounded-full text-lg font-bold hover:bg-[#333] transition w-full md:w-auto">Place Order</button>
        </div>
    </form>
</section>
@endsection
