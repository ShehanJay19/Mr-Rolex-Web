@extends('layouts.app')

@section('content')
<!-- CHECKOUT HERO SECTION -->
<section class="relative bg-gradient-to-b from-slate-950 to-canvas py-12 md:py-16 mb-12">
    <div class="absolute -top-1/2 -right-1/4 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
    
    <div class="max-w-[900px] mx-auto px-4 sm:px-6 relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold font-playfair text-white mb-3 drop-shadow-lg">Secure Checkout</h1>
        <p class="text-white/80 text-base md:text-lg">Complete your order with our encrypted payment system</p>
    </div>
</section>

<!-- CHECKOUT CONTENT -->
<section class="max-w-[900px] mx-auto px-4 sm:px-6 pb-20">
    <!-- Progress Indicator -->
    <div class="mb-12">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center flex-1">
                <div class="step-badge active w-10 h-10 rounded-full bg-accent text-white font-bold flex items-center justify-center text-sm">1</div>
                <div class="flex-1 h-1 bg-gradient-to-r from-accent to-accent/50 mx-2"></div>
            </div>
            <div class="flex items-center flex-1">
                <div class="step-badge w-10 h-10 rounded-full bg-white/20 text-text font-bold flex items-center justify-center text-sm border border-white/40">2</div>
                <div class="flex-1 h-1 bg-border/50 mx-2"></div>
            </div>
            <div class="flex items-center">
                <div class="step-badge w-10 h-10 rounded-full bg-white/20 text-text font-bold flex items-center justify-center text-sm border border-white/40">3</div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 text-center text-sm font-semibold">
            <span class="text-text">Shipping</span>
            <span class="text-muted">Payment</span>
            <span class="text-muted">Confirmation</span>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Checkout Form -->
        <div class="lg:col-span-2">
            <!-- Glass Morphism Form Container -->
            <form class="glass-dark rounded-2xl p-8 border border-white/20 shadow-xl space-y-8" onsubmit="event.preventDefault(); window.location.href='/order-success';">
                
                <!-- SHIPPING SECTION -->
                <div>
                    <h2 class="text-2xl font-bold font-playfair text-text mb-2">Shipping Address</h2>
                    <div class="h-1 w-12 bg-gradient-to-r from-accent to-transparent rounded-full mb-6"></div>
                    
                    <div class="space-y-4">
                        <!-- Full Name -->
                        <div>
                            <label class="block text-sm font-semibold text-text mb-2">Full Name</label>
                            <input type="text" 
                                   placeholder="John Doe" 
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm" 
                                   required>
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block text-sm font-semibold text-text mb-2">Email Address</label>
                            <input type="email" 
                                   placeholder="john@example.com" 
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm" 
                                   required>
                        </div>

                        <!-- Phone -->
                        <div>
                            <label class="block text-sm font-semibold text-text mb-2">Phone Number</label>
                            <input type="tel" 
                                   placeholder="+1 (555) 123-4567" 
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm" 
                                   required>
                        </div>

                        <!-- Address -->
                        <div>
                            <label class="block text-sm font-semibold text-text mb-2">Street Address</label>
                            <input type="text" 
                                   placeholder="123 Main Street" 
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm" 
                                   required>
                        </div>

                        <!-- City, State, Zip -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-text mb-2">City</label>
                                <input type="text" 
                                       placeholder="New York" 
                                       class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm" 
                                       required>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-text mb-2">Postal Code</label>
                                <input type="text" 
                                       placeholder="10001" 
                                       class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm" 
                                       required>
                            </div>
                        </div>

                        <!-- Country -->
                        <div>
                            <label class="block text-sm font-semibold text-text mb-2">Country</label>
                            <select class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm" required>
                                <option value="" disabled selected>Select country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="GB">United Kingdom</option>
                                <option value="AU">Australia</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- PAYMENT SECTION -->
                <div class="pt-8 border-t border-white/20">
                    <h2 class="text-2xl font-bold font-playfair text-text mb-2">Payment Details</h2>
                    <div class="h-1 w-12 bg-gradient-to-r from-accent to-transparent rounded-full mb-6"></div>
                    
                    <div class="space-y-4">
                        <!-- Card Number -->
                        <div>
                            <label class="block text-sm font-semibold text-text mb-2">Card Number</label>
                            <input type="text" 
                                   placeholder="1234 5678 9012 3456" 
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm font-mono" 
                                   maxlength="19"
                                   required>
                        </div>

                        <!-- Cardholder Name -->
                        <div>
                            <label class="block text-sm font-semibold text-text mb-2">Cardholder Name</label>
                            <input type="text" 
                                   placeholder="John Doe" 
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm" 
                                   required>
                        </div>

                        <!-- Expiry & CVC -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-text mb-2">Expiration</label>
                                <input type="text" 
                                       placeholder="MM/YY" 
                                       class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm font-mono" 
                                       maxlength="5"
                                       required>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-text mb-2">CVC</label>
                                <input type="text" 
                                       placeholder="123" 
                                       class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm font-mono" 
                                       maxlength="4"
                                       required>
                            </div>
                        </div>
                    </div>

                    <!-- Security Info -->
                    <div class="mt-6 p-4 bg-green-500/10 border border-green-500/30 rounded-xl flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 111.414 1.414L7.414 9l3.293 3.293a1 1 0 11-1.414 1.414l-4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-green-800">Your payment information is encrypted and secure</span>
                    </div>
                </div>

                <!-- SUBMIT BUTTON -->
                <button type="submit" 
                        class="w-full mt-8 px-8 py-4 bg-gradient-to-r from-accent to-black text-white rounded-xl text-lg font-bold hover:shadow-2xl transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-canvas hover:scale-105 active:scale-95">
                    Complete Purchase
                    <span class="block text-sm font-medium text-white/80 mt-1">Secure encrypted payment</span>
                </button>
            </form>
        </div>

        <!-- Order Summary Sidebar -->
        <div class="lg:col-span-1">
            <div class="glass-dark rounded-2xl p-8 border border-white/20 sticky top-24 shadow-xl space-y-6">
                <h3 class="text-xl font-bold font-playfair text-text">Order Summary</h3>
                
                <!-- Sample Items -->
                <div class="space-y-3 pb-6 border-b border-white/20">
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p class="font-semibold text-text">Classic T-Shirt</p>
                            <p class="text-xs text-muted">Qty: 1</p>
                        </div>
                        <span class="font-bold text-text">$99.00</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p class="font-semibold text-text">Modern Polo</p>
                            <p class="text-xs text-muted">Qty: 1</p>
                        </div>
                        <span class="font-bold text-text">$89.00</span>
                    </div>
                </div>

                <!-- Price Breakdown -->
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-muted">Subtotal</span>
                        <span class="font-semibold text-text">$188.00</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-muted">Shipping</span>
                        <span class="font-semibold text-green-600">Free</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-muted">Tax</span>
                        <span class="font-semibold text-text">$15.04</span>
                    </div>
                </div>

                <!-- Total -->
                <div class="pt-6 border-t border-white/20">
                    <div class="flex justify-between items-center mb-6">
                        <span class="font-playfair font-bold text-text">Total</span>
                        <span class="text-3xl font-bold font-playfair bg-gradient-to-r from-accent to-orange-600 bg-clip-text text-transparent">$203.04</span>
                    </div>

                    <!-- Trust Badges -->
                    <div class="space-y-2 text-xs">
                        <div class="flex items-center gap-2 text-green-600">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>SSL Encrypted</span>
                        </div>
                        <div class="flex items-center gap-2 text-blue-600">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Secure Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
