@extends('layouts.app')

@section('content')
<section class="max-w-[1100px] mx-auto px-4 sm:px-6 py-8 md:py-16">
    
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl md:text-4xl font-extrabold mb-2">Shopping Cart</h1>
        <p class="text-sm text-muted">Review your items before checkout</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
        
        <!-- Cart Items (2/3 width on desktop) -->
        <div class="lg:col-span-2 space-y-4">
            
            <!-- Cart Table (Desktop) -->
            <div class="hidden md:block bg-white border border-border rounded-xl shadow-sm overflow-hidden">
                <table class="w-full text-left">
                    <thead class="bg-gray-50 border-b border-border">
                        <tr class="text-sm font-semibold text-muted uppercase tracking-wide">
                            <th class="p-4 pl-6">Product</th>
                            <th class="p-4 text-center">Price</th>
                            <th class="p-4 text-center">Quantity</th>
                            <th class="p-4 text-center">Total</th>
                            <th class="p-4 pr-6"></th>
                        </tr>
                    </thead>
                    <tbody id="cart-items" class="divide-y divide-border"></tbody>
                </table>
            </div>

            <!-- Cart Items (Mobile) -->
            <div id="cart-items-mobile" class="md:hidden space-y-4"></div>

            <!-- Empty State -->
            <div id="cart-empty" 
                 class="hidden bg-white border-2 border-dashed border-border rounded-xl p-12 text-center">
                <svg class="w-20 h-20 mx-auto mb-4 text-muted/30" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                </svg>
                <h3 class="text-xl font-bold text-text mb-2">Your cart is empty</h3>
                <p class="text-muted mb-6">Add some products to get started!</p>
                <a href="/shop" 
                   class="inline-flex items-center gap-2 px-6 py-3 bg-accent text-white rounded-full font-semibold hover:bg-black transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2">
                    Continue Shopping
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Order Summary Sidebar (1/3 width on desktop) -->
        <div class="lg:col-span-1">
            <div class="bg-gray-50 border border-border rounded-xl p-6 sticky top-24 space-y-6">
                <h2 class="text-xl font-bold">Order Summary</h2>
                
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-muted">Subtotal</span>
                        <span id="cart-subtotal" class="font-semibold text-text">$0.00</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-muted">Shipping</span>
                        <span class="font-semibold text-text">Calculated at checkout</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-muted">Tax</span>
                        <span class="font-semibold text-text">Calculated at checkout</span>
                    </div>
                </div>

                <div class="pt-4 border-t border-border">
                    <div class="flex justify-between items-baseline mb-6">
                        <span class="text-lg font-semibold">Total</span>
                        <span id="cart-total" class="text-2xl font-bold text-accent">$0.00</span>
                    </div>
                    
                    <a href="/checkout" 
                       id="checkout-btn"
                       class="block w-full px-6 py-3.5 bg-accent text-white text-center rounded-full font-semibold hover:bg-black transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 mb-3">
                        Proceed to Checkout
                    </a>
                    
                    <a href="/shop" 
                       class="block w-full px-6 py-3 border-2 border-border text-accent text-center rounded-full font-semibold hover:bg-gray-100 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2">
                        Continue Shopping
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="pt-6 border-t border-border space-y-3 text-xs text-muted">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Secure checkout</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Free shipping over $200</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>30-day returns</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
