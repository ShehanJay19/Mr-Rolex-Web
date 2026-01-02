@extends('layouts.app')

@section('content')
<section class="max-w-[900px] mx-auto px-6 py-16">
    <h1 class="text-4xl font-extrabold mb-10">Your Cart</h1>
    <div class="bg-canvas border border-border rounded-xl shadow-lg overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-50 border-b border-border">
                <tr>
                    <th class="p-4">Product</th>
                    <th class="p-4">Price</th>
                    <th class="p-4">Quantity</th>
                    <th class="p-4">Total</th>
                    <th class="p-4"></th>
                </tr>
            </thead>
            <tbody id="cart-items"></tbody>
        </table>
    </div>
    <div id="cart-empty" class="bg-canvas border border-border rounded-xl shadow-lg p-12 text-center text-muted text-lg hidden">
        Your cart is empty.
    </div>
    <div class="flex flex-col md:flex-row justify-between items-center mt-8 gap-6">
        <div class="text-lg text-muted">
            <span>Subtotal:</span>
            <span id="cart-subtotal" class="font-bold text-2xl text-text ml-2">$0</span>
        </div>
        <a href="/checkout" class="px-8 py-4 bg-accent text-white rounded-full text-lg font-bold hover:bg-[#333] transition w-full md:w-auto text-center">Proceed to Checkout</a>
    </div>
</section>
@endsection
