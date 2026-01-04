@extends('layouts.app')

@section('content')
<!-- ABOUT HERO SECTION -->
<section class="relative bg-gradient-to-b from-slate-950 to-canvas py-16 md:py-28 mb-20 overflow-hidden">
    <!-- Decorative Blur Elements -->
    <div class="absolute -top-1/2 -right-1/4 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-1/4 -left-1/4 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl"></div>
    
    <div class="max-w-[960px] mx-auto px-4 sm:px-6 relative z-10">
        <div class="text-center space-y-6">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-white/80 text-sm font-semibold mb-6 animate-fade-in-up">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Our Story
            </div>
            <h1 class="text-5xl md:text-6xl font-bold font-playfair text-white drop-shadow-lg animate-fade-in-up" style="animation-delay: 0.1s;">
                Design for<br>modern living
            </h1>
            <p class="text-white/80 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                We craft minimalist, enduring pieces with premium materials and precise tailoring. Each collection focuses on clean lines, versatile layers, and a neutral palette that works across seasons and moments.
            </p>
        </div>
    </div>
</section>

<!-- CORE VALUES SECTION -->
<section class="max-w-[960px] mx-auto px-4 sm:px-6 mb-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Value Card 1 -->
        <div class="group scroll-animate opacity-0 rounded-2xl p-8 bg-gradient-to-br from-white/50 to-white/20 border border-white/30 backdrop-blur-xl hover:border-accent/50 transition-all duration-500 hover:shadow-2xl hover:-translate-y-1">
            <div class="inline-flex items-center justify-center w-14 h-14 bg-accent/20 rounded-full mb-6 group-hover:bg-accent/40 transition-colors duration-300">
                <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m0 10v10l8 4m0-10l8-4" />
                </svg>
            </div>
            <h3 class="text-xl font-bold font-playfair text-text mb-3">Premium Materials</h3>
            <p class="text-muted leading-relaxed">Natural fabrics, responsible sourcing, and construction built to last through seasons and styles.</p>
        </div>

        <!-- Value Card 2 -->
        <div class="group scroll-animate opacity-0 rounded-2xl p-8 bg-gradient-to-br from-white/50 to-white/20 border border-white/30 backdrop-blur-xl hover:border-accent/50 transition-all duration-500 hover:shadow-2xl hover:-translate-y-1" style="animation-delay: 0.1s;">
            <div class="inline-flex items-center justify-center w-14 h-14 bg-accent/20 rounded-full mb-6 group-hover:bg-accent/40 transition-colors duration-300">
                <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
            </div>
            <h3 class="text-xl font-bold font-playfair text-text mb-3">Refined Craft</h3>
            <p class="text-muted leading-relaxed">Tailored fits, refined silhouettes, and a focus on everyday comfort without compromising on style.</p>
        </div>

        <!-- Value Card 3 -->
        <div class="group scroll-animate opacity-0 rounded-2xl p-8 bg-gradient-to-br from-white/50 to-white/20 border border-white/30 backdrop-blur-xl hover:border-accent/50 transition-all duration-500 hover:shadow-2xl hover:-translate-y-1" style="animation-delay: 0.2s;">
            <div class="inline-flex items-center justify-center w-14 h-14 bg-accent/20 rounded-full mb-6 group-hover:bg-accent/40 transition-colors duration-300">
                <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold font-playfair text-text mb-3">Sustainable Ethos</h3>
            <p class="text-muted leading-relaxed">Lower-impact processes and timeless designs to reduce overconsumption and build a better future.</p>
        </div>
    </div>
</section>

<!-- STORY SECTION -->
<section class="max-w-[960px] mx-auto px-4 sm:px-6 mb-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Image -->
        <div class="relative group scroll-animate opacity-0">
            <div class="absolute inset-0 bg-gradient-to-r from-accent/20 to-transparent rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <img src="/images/story1.jpg" 
                 alt="Our Design Studio" 
                 class="w-full h-96 md:h-[28rem] object-cover rounded-2xl border border-border/50 shadow-xl group-hover:shadow-2xl transition-shadow duration-500 relative z-10">
        </div>

        <!-- Content -->
        <div class="space-y-6 scroll-animate opacity-0" style="animation-delay: 0.1s;">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold font-playfair text-text mb-4">Studio Ethos</h2>
                <div class="h-1 w-16 bg-gradient-to-r from-accent to-transparent rounded-full"></div>
            </div>

            <p class="text-muted leading-relaxed text-lg">
                We balance strong structure with relaxed drape, blending technical finishes with natural textures. Our team iterates quickly to deliver seasonless staples that define modern wardrobes.
            </p>

            <p class="text-muted leading-relaxed text-lg">
                Every piece undergoes rigorous quality checks to ensure it meets our standards for durability, fit, and aesthetic excellence. We believe fashion should be timeless, not trendy.
            </p>

            <!-- CTA Button -->
            <div class="pt-4">
                <a href="/contact" 
                   class="inline-flex items-center gap-2 px-8 py-4 bg-accent hover:bg-black text-white rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                    Get in Touch
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- STATS SECTION -->
<section class="max-w-[960px] mx-auto px-4 sm:px-6 mb-20">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="glass-dark rounded-xl p-6 border border-white/20 text-center">
            <p class="text-3xl font-bold font-playfair text-accent mb-2">500+</p>
            <p class="text-sm text-muted">Happy Customers</p>
        </div>
        <div class="glass-dark rounded-xl p-6 border border-white/20 text-center">
            <p class="text-3xl font-bold font-playfair text-accent mb-2">50+</p>
            <p class="text-sm text-muted">Products</p>
        </div>
        <div class="glass-dark rounded-xl p-6 border border-white/20 text-center">
            <p class="text-3xl font-bold font-playfair text-accent mb-2">15+</p>
            <p class="text-sm text-muted">Years Experience</p>
        </div>
        <div class="glass-dark rounded-xl p-6 border border-white/20 text-center">
            <p class="text-3xl font-bold font-playfair text-accent mb-2">100%</p>
            <p class="text-sm text-muted">Satisfaction</p>
        </div>
    </div>
</section>
@endsection
