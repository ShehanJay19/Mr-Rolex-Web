@extends('layouts.app')

@section('content')
<!-- CONTACT HERO SECTION -->
<section class="relative bg-gradient-to-b from-slate-950 to-canvas py-16 md:py-28 mb-20 overflow-hidden">
    <!-- Decorative Blur Elements -->
    <div class="absolute -top-1/2 -right-1/4 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-1/4 -left-1/4 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl"></div>
    
    <div class="max-w-[900px] mx-auto px-4 sm:px-6 relative z-10">
        <div class="text-center space-y-6">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-white/80 text-sm font-semibold mb-6 animate-fade-in-up">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Get in Touch
            </div>
            <h1 class="text-5xl md:text-6xl font-bold font-playfair text-white drop-shadow-lg animate-fade-in-up" style="animation-delay: 0.1s;">
                Let's talk
            </h1>
            <p class="text-white/80 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                Questions about sizing, orders, or collaborations? Reach out and we'll get back within 24 hours.
            </p>
        </div>
    </div>
</section>

<!-- CONTACT FORM & INFO SECTION -->
<section class="max-w-[900px] mx-auto px-4 sm:px-6 pb-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Premium Contact Form -->
        <div class="scroll-animate opacity-0">
            <div class="glass-dark rounded-2xl p-8 border border-white/20 shadow-xl">
                <h2 class="text-2xl font-bold font-playfair text-text mb-2">Send us a Message</h2>
                <div class="h-1 w-12 bg-gradient-to-r from-accent to-transparent rounded-full mb-8"></div>

                <form class="space-y-6" onsubmit="event.preventDefault(); showToast('Message sent! We\'ll be in touch soon.');">
                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-semibold text-text mb-2" for="name">Full Name</label>
                        <input id="name" 
                               type="text" 
                               placeholder="Your name" 
                               class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm" 
                               required>
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-semibold text-text mb-2" for="email">Email Address</label>
                        <input id="email" 
                               type="email" 
                               placeholder="you@example.com" 
                               class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm" 
                               required>
                    </div>

                    <!-- Subject -->
                    <div>
                        <label class="block text-sm font-semibold text-text mb-2" for="subject">Subject</label>
                        <select id="subject" 
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm" 
                                required>
                            <option value="" disabled selected>Select a subject</option>
                            <option value="inquiry">Product Inquiry</option>
                            <option value="sizing">Sizing Question</option>
                            <option value="order">Order Status</option>
                            <option value="collab">Collaboration</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-sm font-semibold text-text mb-2" for="message">Message</label>
                        <textarea id="message" 
                                  rows="5" 
                                  placeholder="How can we help?" 
                                  class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm resize-none" 
                                  required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="w-full px-6 py-4 bg-gradient-to-r from-accent to-black text-white rounded-xl font-semibold hover:shadow-xl transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-canvas hover:scale-105 active:scale-95">
                        Send Message
                        <span class="block text-xs font-medium text-white/80 mt-1">We'll respond within 24 hours</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Contact Information Cards -->
        <div class="space-y-6 scroll-animate opacity-0" style="animation-delay: 0.1s;">
            <!-- Contact Info Header -->
            <div>
                <h2 class="text-2xl font-bold font-playfair text-text mb-2">Contact Information</h2>
                <div class="h-1 w-12 bg-gradient-to-r from-accent to-transparent rounded-full"></div>
            </div>

            <!-- Email Card -->
            <div class="group glass-dark rounded-xl p-6 border border-white/20 hover:border-accent/50 transition-all duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer">
                <div class="flex items-start gap-4">
                    <div class="flex items-center justify-center w-12 h-12 bg-accent/20 rounded-full group-hover:bg-accent/40 transition-colors duration-300">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-text mb-1">Email</h3>
                        <p class="text-muted">hello@xivqr.com</p>
                        <p class="text-xs text-muted/70 mt-2">Typically responds within 24 hours</p>
                    </div>
                </div>
            </div>

            <!-- Phone Card -->
            <div class="group glass-dark rounded-xl p-6 border border-white/20 hover:border-accent/50 transition-all duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer">
                <div class="flex items-start gap-4">
                    <div class="flex items-center justify-center w-12 h-12 bg-accent/20 rounded-full group-hover:bg-accent/40 transition-colors duration-300">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-text mb-1">Phone</h3>
                        <p class="text-muted">+1 (555) 123-4567</p>
                        <p class="text-xs text-muted/70 mt-2">Mon-Fri, 9 AM - 6 PM EST</p>
                    </div>
                </div>
            </div>

            <!-- Address Card -->
            <div class="group glass-dark rounded-xl p-6 border border-white/20 hover:border-accent/50 transition-all duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer">
                <div class="flex items-start gap-4">
                    <div class="flex items-center justify-center w-12 h-12 bg-accent/20 rounded-full group-hover:bg-accent/40 transition-colors duration-300">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-text mb-1">Studio Location</h3>
                        <p class="text-muted">123 Fashion Ave<br>New York, NY 10001</p>
                        <p class="text-xs text-muted/70 mt-2">By appointment only</p>
                    </div>
                </div>
            </div>

            <!-- Social Links -->
            <div class="pt-4 border-t border-white/20">
                <p class="text-sm font-semibold text-text mb-4">Follow Us</p>
                <div class="flex gap-3">
                    <a href="#" class="flex items-center justify-center w-10 h-10 bg-accent/20 rounded-full hover:bg-accent/40 transition-all duration-300 hover:scale-110">
                        <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/></svg>
                    </a>
                    <a href="#" class="flex items-center justify-center w-10 h-10 bg-accent/20 rounded-full hover:bg-accent/40 transition-all duration-300 hover:scale-110">
                        <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                    </a>
                    <a href="#" class="flex items-center justify-center w-10 h-10 bg-accent/20 rounded-full hover:bg-accent/40 transition-all duration-300 hover:scale-110">
                        <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
