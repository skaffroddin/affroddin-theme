<?php
/* Template Name: Blog Page */
get_header();
?>

<section class="relative min-h-screen bg-[#050816] py-24 overflow-hidden">

  <!-- GRID BACKGROUND -->
  <div class="absolute inset-0 pointer-events-none opacity-30"
    style="
      background-image:
      linear-gradient(to right, rgba(255,255,255,0.05) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(255,255,255,0.05) 1px, transparent 1px);
      background-size:80px 80px;">
  </div>

  <!-- GLOW -->
  <div class="absolute -top-40 -left-40 h-96 w-96 bg-[#b7fe50]/10 blur-3xl rounded-full"></div>
  <div class="absolute bottom-0 -right-40 h-96 w-96 bg-[#b7fe50]/5 blur-3xl rounded-full"></div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

    <!-- HERO -->
    <div class="max-w-3xl mb-20">

      <span class="inline-flex items-center rounded-full bg-[#b7fe50]/10 px-4 py-1 text-sm font-semibold text-[#b7fe50] border border-[#b7fe50]/20">
        Blog & Insights
      </span>

      <h1 class="mt-6 text-5xl font-bold text-white leading-tight">
        Ideas That Build
        <span class="text-[#b7fe50]">Faster Websites</span>
      </h1>

      <p class="mt-5 text-lg text-white/60 leading-relaxed">
        WordPress tutorials, performance optimization, security insights,
        and practical development strategies to help build secure,
        scalable modern websites.
      </p>

    </div>

    <!-- GRID -->
    <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">

      <!-- CARD -->
      <article class="group rounded-3xl overflow-hidden border border-white/10 bg-white/5 backdrop-blur hover:border-[#b7fe50]/40 hover:-translate-y-2 transition-all duration-300">

        <!-- THUMBNAIL -->
        <div class="overflow-hidden">
          <img src="https://picsum.photos/700/500?1"
            class="w-full h-60 object-cover group-hover:scale-105 transition duration-500">
        </div>

        <div class="p-6">

          <span class="inline-block rounded-full bg-[#b7fe50]/10 px-3 py-1 text-xs font-medium text-[#b7fe50] border border-[#b7fe50]/20">
            Security
          </span>

          <h3 class="mt-4 text-xl font-semibold text-white group-hover:text-[#b7fe50] transition">
            How to Detect Malware in WordPress in Seconds
          </h3>

          <p class="mt-3 text-sm text-white/60 leading-relaxed line-clamp-3">
            Learn how modern malware scanners detect hidden backdoors,
            suspicious injections and hacked themes instantly.
          </p>

          <!-- META -->
          <div class="mt-6 flex items-center justify-between">

            <div class="flex items-center gap-3">
              <img src="https://picsum.photos/100?2"
                class="w-10 h-10 rounded-full border border-white/10">

              <div>
                <p class="text-sm font-medium text-white">Affroddin</p>
                <p class="text-xs text-white/50">May 11, 2026</p>
              </div>
            </div>

            <a href="#" class="text-[#b7fe50] text-sm font-medium hover:translate-x-1 transition">
              Read →
            </a>

          </div>

        </div>
      </article>


      <!-- CARD -->
      <article class="group rounded-3xl overflow-hidden border border-white/10 bg-white/5 backdrop-blur hover:border-[#b7fe50]/40 hover:-translate-y-2 transition-all duration-300">

        <div class="overflow-hidden">
          <img src="https://picsum.photos/700/500?3"
            class="w-full h-60 object-cover group-hover:scale-105 transition duration-500">
        </div>

        <div class="p-6">

          <span class="inline-block rounded-full bg-[#b7fe50]/10 px-3 py-1 text-xs font-medium text-[#b7fe50] border border-[#b7fe50]/20">
            Performance
          </span>

          <h3 class="mt-4 text-xl font-semibold text-white group-hover:text-[#b7fe50] transition">
            Core Web Vitals Optimization Guide
          </h3>

          <p class="mt-3 text-sm text-white/60 leading-relaxed line-clamp-3">
            Improve LCP, CLS and loading performance using smart asset
            delivery and server-side optimizations.
          </p>

          <div class="mt-6 flex items-center justify-between">

            <div class="flex items-center gap-3">
              <img src="https://picsum.photos/100?4"
                class="w-10 h-10 rounded-full border border-white/10">

              <div>
                <p class="text-sm font-medium text-white">Affroddin</p>
                <p class="text-xs text-white/50">May 9, 2026</p>
              </div>
            </div>

            <a href="#" class="text-[#b7fe50] text-sm font-medium hover:translate-x-1 transition">
              Read →
            </a>

          </div>

        </div>
      </article>


      <!-- CARD -->
      <article class="group rounded-3xl overflow-hidden border border-white/10 bg-white/5 backdrop-blur hover:border-[#b7fe50]/40 hover:-translate-y-2 transition-all duration-300">

        <div class="overflow-hidden">
          <img src="https://picsum.photos/700/500?5"
            class="w-full h-60 object-cover group-hover:scale-105 transition duration-500">
        </div>

        <div class="p-6">

          <span class="inline-block rounded-full bg-[#b7fe50]/10 px-3 py-1 text-xs font-medium text-[#b7fe50] border border-[#b7fe50]/20">
            WordPress
          </span>

          <h3 class="mt-4 text-xl font-semibold text-white group-hover:text-[#b7fe50] transition">
            Building Custom WordPress Themes with Tailwind
          </h3>

          <p class="mt-3 text-sm text-white/60 leading-relaxed line-clamp-3">
            Create lightning-fast modern themes using Tailwind CSS and
            component-driven development workflow.
          </p>

          <div class="mt-6 flex items-center justify-between">

            <div class="flex items-center gap-3">
              <img src="https://picsum.photos/100?6"
                class="w-10 h-10 rounded-full border border-white/10">

              <div>
                <p class="text-sm font-medium text-white">Affroddin</p>
                <p class="text-xs text-white/50">May 6, 2026</p>
              </div>
            </div>

            <a href="#" class="text-[#b7fe50] text-sm font-medium hover:translate-x-1 transition">
              Read →
            </a>

          </div>

        </div>
      </article>

    </div>


    <!-- LOAD MORE -->
    <div class="mt-20 text-center">

      <a href="#"
        class="inline-flex items-center gap-2 px-8 py-4 rounded-xl
        bg-gradient-to-r from-[#4d7c0f] to-[#b7fe50]
        text-black font-semibold
        shadow-[0_0_25px_rgba(183,254,80,0.25)]
        hover:shadow-[0_0_40px_rgba(183,254,80,0.45)]
        hover:-translate-y-1 transition-all">

        Load More Articles →
      </a>

    </div>

  </div>
</section>

<?php get_footer(); ?>