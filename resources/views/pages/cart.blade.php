@extends('layouts.app')

@section('content')
<!-- CART HERO SECTION -->
<section class="relative bg-gradient-to-b from-slate-950 to-canvas py-12 md:py-16 mb-12">
    <div class="absolute -top-1/2 -right-1/4 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
    
    <div class="max-w-[1100px] mx-auto px-4 sm:px-6 relative z-10">
        <div class="flex items-center gap-3 mb-6">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-white/80 text-sm font-semibold">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 6H6.28l-.31-1.243A1 1 0 005 4H3z"/><path d="M16 16a2 2 0 11-4 0 2 2 0 014 0zM4 12a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                Shopping Cart
            </div>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold font-playfair text-white mb-3 drop-shadow-lg">Your Cart</h1>
        <p class="text-white/80 text-base md:text-lg">Review your items before proceeding to checkout</p>
    </div>
</section>

<!-- CART CONTENT -->
<section class="max-w-[1100px] mx-auto px-4 sm:px-6 pb-20">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
        
        <!-- Cart Items (2/3 width on desktop) -->
        <div class="lg:col-span-2 space-y-6">
            
            <!-- Cart Table (Desktop) -->
            <div class="hidden md:block rounded-2xl overflow-hidden shadow-xl border border-border/50">
                <table class="w-full text-left">
                    <thead class="bg-gradient-to-r from-canvas to-white/5 border-b border-border/50">
                        <tr class="text-sm font-semibold text-text uppercase tracking-widest">
                            <th class="p-6 pl-8">Product</th>
                            <th class="p-6 text-center">Price</th>
                            <th class="p-6 text-center">Quantity</th>
                            <th class="p-6 text-center">Total</th>
                            <th class="p-6 pr-8"></th>
                        </tr>
                    </thead>
                    <tbody id="cart-items" class="divide-y divide-border/50 bg-white"></tbody>
                </table>
            </div>

            <!-- Cart Items (Mobile) -->
            <div id="cart-items-mobile" class="md:hidden space-y-4"></div>

            <!-- Empty State with Premium Design -->
            <div id="cart-empty" 
                 class="hidden rounded-2xl p-12 text-center bg-gradient-to-b from-white/50 to-white/20 border-2 border-dashed border-border/50">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-accent/10 rounded-full mb-6">
                    <svg class="w-10 h-10 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold font-playfair text-text mb-2">Your cart is empty</h3>
                <p class="text-muted mb-8 max-w-md mx-auto">Start shopping now and discover our premium collection of fashion essentials.</p>
                <a href="/shop" 
                   class="inline-flex items-center gap-2 px-8 py-4 bg-accent hover:bg-black text-white rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                    Start Shopping
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0l-4 4m4-4l-4-4m4 4v8" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Premium Order Summary Sidebar -->
        <div class="lg:col-span-1">
            <!-- Glass Morphism Card -->
            <div class="glass-dark rounded-2xl p-8 border border-white/20 sticky top-24 space-y-8 shadow-xl">
                <div>
                    <h2 class="text-2xl font-bold font-playfair text-text">Order Summary</h2>
                    <div class="h-1 w-12 bg-gradient-to-r from-accent to-transparent mt-2 rounded-full"></div>
                </div>
                
                <!-- Summary Items -->
                <div class="space-y-4 text-sm">
                    <div class="flex justify-between items-center py-2 px-3 bg-white/5 rounded-lg border border-white/10">
                        <span class="text-muted font-medium">Subtotal</span>
                        <span id="cart-subtotal" class="font-bold text-text">$0.00</span>
                    </div>
                    <div class="flex justify-between items-center py-2 px-3 bg-white/5 rounded-lg border border-white/10">
                        <span class="text-muted font-medium">Shipping</span>
                        <span class="font-semibold text-text/80 text-xs">Calculated at checkout</span>
                    </div>
                    <div class="flex justify-between items-center py-2 px-3 bg-white/5 rounded-lg border border-white/10">
                        <span class="text-muted font-medium">Tax</span>
                        <span class="font-semibold text-text/80 text-xs">Calculated at checkout</span>
                    </div>
                </div>

                <!-- Total -->
                <div class="pt-6 border-t border-white/20">
                    <div class="flex justify-between items-baseline mb-8">
                        <span class="text-lg font-playfair font-bold text-text">Total</span>
                        <span id="cart-total" class="text-4xl font-bold font-playfair bg-gradient-to-r from-accent to-orange-600 bg-clip-text text-transparent">$0.00</span>
                    </div>
                    
                    <!-- Premium CTA Button -->
                    <a href="/checkout" 
                       id="checkout-btn"
                       class="block w-full px-6 py-4 bg-gradient-to-r from-accent to-black text-white text-center rounded-xl font-semibold hover:shadow-xl transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-canvas mb-3 hover:scale-105 active:scale-95">
                        Proceed to Checkout
                        <span class="block text-xs font-medium text-white/80 mt-1">Secure payment</span>
                    </a>
                    
                    <a href="/shop" 
                       class="block w-full px-6 py-3 border-2 border-border text-accent text-center rounded-xl font-semibold hover:bg-accent/10 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-canvas">
                        Continue Shopping
                    </a>
                </div>

                <!-- Trust Badges with Premium Design -->
                <div class="pt-6 border-t border-white/20 space-y-3">
                    <div class="flex items-center gap-3 text-sm">
                        <div class="flex items-center justify-center w-6 h-6 bg-green-500/20 rounded-full">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-text font-medium">Secure checkout</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <div class="flex items-center justify-center w-6 h-6 bg-blue-500/20 rounded-full">
                            <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-text font-medium">Free shipping over $200</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <div class="flex items-center justify-center w-6 h-6 bg-purple-500/20 rounded-full">
                            <svg class="w-4 h-4 text-purple-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-text font-medium">30-day returns</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
