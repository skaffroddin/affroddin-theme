<!-- Testimonial Section -->
<section id="testimonials" class="relative py-24 bg-[#050816] overflow-hidden">

  <!-- BACKGROUND EFFECTS -->
  <div class="absolute inset-0 pointer-events-none opacity-20"
    style="
      background-image:
      linear-gradient(to right, rgba(255,255,255,0.05) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(255,255,255,0.05) 1px, transparent 1px);
      background-size: 100px 100px;
    ">
  </div>
  <div class="absolute -top-40 right-0 w-[600px] h-[600px] bg-[#b7fe50]/5 blur-[120px] rounded-full pointer-events-none"></div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

    <!-- HEADER -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-16">
      <div class="max-w-2xl">
        <span class="inline-flex items-center rounded-full bg-[#b7fe50]/10 px-4 py-1 text-sm font-semibold text-[#b7fe50] border border-[#b7fe50]/20 mb-6">
          Client Testimonials
        </span>
        <h2 class="text-3xl md:text-5xl font-bold text-white tracking-tight">
          Trusted by <span class="text-[#b7fe50]">Founders</span>
        </h2>
        <p class="mt-4 text-lg text-white/60">
          Don't just take my word for it. Here's what my clients have to say about working together.
        </p>
      </div>

      <!-- Slider Controls -->
      <div class="flex gap-4">
        <button id="prevTestimonial" class="p-4 rounded-full border border-white/20 bg-white/5 text-white hover:bg-[#b7fe50] hover:text-black hover:border-[#b7fe50] transition-all" aria-label="Previous">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>
        <button id="nextTestimonial" class="p-4 rounded-full border border-white/20 bg-white/5 text-white hover:bg-[#b7fe50] hover:text-black hover:border-[#b7fe50] transition-all" aria-label="Next">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>
      </div>
    </div>

    <!-- SLIDER -->
    <style>
      .hide-scrollbar::-webkit-scrollbar { display: none; }
      .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
    <div id="testimonialSlider" class="flex overflow-x-auto gap-6 pb-12 snap-x snap-mandatory hide-scrollbar scroll-smooth">

      <!-- TESTIMONIAL 1 -->
      <div class="w-[85vw] md:w-[400px] shrink-0 snap-start group relative p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur hover:border-[#b7fe50]/30 hover:-translate-y-2 hover:z-10 transition-all duration-300">
        <div class="flex gap-1 text-[#b7fe50] text-sm mb-6">
          <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
        </div>
        <p class="text-white/80 leading-relaxed mb-8 text-lg">
          "Affroddin completely transformed our online presence. Our new WordPress site is not only blazing fast but also beautiful. Conversions have doubled since launch."
        </p>
        <div class="flex items-center gap-4">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="w-12 h-12 rounded-full border border-white/20 object-cover">
          <div>
            <h4 class="text-white font-semibold">David Peterson</h4>
            <p class="text-sm text-white/50">CEO, TechFlow</p>
          </div>
        </div>
      </div>

      <!-- TESTIMONIAL 2 -->
      <div class="w-[85vw] md:w-[400px] shrink-0 snap-start group relative p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur hover:border-[#b7fe50]/30 hover:-translate-y-2 hover:z-10 transition-all duration-300">
        <div class="flex gap-1 text-[#b7fe50] text-sm mb-6">
          <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
        </div>
        <p class="text-white/80 leading-relaxed mb-8 text-lg">
          "The attention to detail and security expertise was exactly what we needed. Our Shopify store is now secure, fast, and ready for scaling."
        </p>
        <div class="flex items-center gap-4">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client" class="w-12 h-12 rounded-full border border-white/20 object-cover">
          <div>
            <h4 class="text-white font-semibold">Sarah Jenkins</h4>
            <p class="text-sm text-white/50">Founder, Aura Beauty</p>
          </div>
        </div>
      </div>

      <!-- TESTIMONIAL 3 -->
      <div class="w-[85vw] md:w-[400px] shrink-0 snap-start group relative p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur hover:border-[#b7fe50]/30 hover:-translate-y-2 hover:z-10 transition-all duration-300">
        <div class="flex gap-1 text-[#b7fe50] text-sm mb-6">
          <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
        </div>
        <p class="text-white/80 leading-relaxed mb-8 text-lg">
          "A true professional. Communication was flawless throughout the entire project, and the final delivery exceeded our expectations."
        </p>
        <div class="flex items-center gap-4">
          <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Client" class="w-12 h-12 rounded-full border border-white/20 object-cover">
          <div>
            <h4 class="text-white font-semibold">Michael Chen</h4>
            <p class="text-sm text-white/50">Director, FinTech Solutions</p>
          </div>
        </div>
      </div>

       <!-- TESTIMONIAL 2 -->
      <div class="w-[85vw] md:w-[400px] shrink-0 snap-start group relative p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur hover:border-[#b7fe50]/30 hover:-translate-y-2 hover:z-10 transition-all duration-300">
        <div class="flex gap-1 text-[#b7fe50] text-sm mb-6">
          <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
        </div>
        <p class="text-white/80 leading-relaxed mb-8 text-lg">
          "The attention to detail and security expertise was exactly what we needed. Our Shopify store is now secure, fast, and ready for scaling."
        </p>
        <div class="flex items-center gap-4">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client" class="w-12 h-12 rounded-full border border-white/20 object-cover">
          <div>
            <h4 class="text-white font-semibold">Sarah Jenkins</h4>
            <p class="text-sm text-white/50">Founder, Aura Beauty</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
