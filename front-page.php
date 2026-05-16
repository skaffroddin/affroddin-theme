<?php get_header(); ?>


<!-- Hero -->
<section class="relative overflow-hidden min-h-screen flex items-center bg-[#050816] pt-24">

  <!-- GRID BACKGROUND -->
  <div class="absolute inset-0 pointer-events-none opacity-40"
    style="
      background-color:#050816;
      background-size:100px 100px;
      background-image:
        linear-gradient(to right, rgba(255,255,255,0.05) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255,255,255,0.05) 1px, transparent 1px);
    ">
  </div>

  <!-- GLOW -->
  <div class="absolute -top-40 -left-40 h-96 w-96 rounded-full bg-[#b7fe50]/10 blur-3xl"></div>
  <div class="absolute bottom-0 -right-40 h-96 w-96 rounded-full bg-[#b7fe50]/5 blur-3xl"></div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

    <div class="grid lg:grid-cols-2 gap-14 items-center">

      <!-- LEFT -->
      <div>

        <span class="inline-flex items-center rounded-full bg-[#b7fe50]/10 px-4 py-1 text-sm font-semibold text-[#b7fe50] border border-[#b7fe50]/20">
          About Me
        </span>

        <h2 class="mt-6 text-3xl sm:text-4xl font-bold text-white leading-tight">
          I’m a <span class="text-[#b7fe50]">WordPress Developer</span> &
          <span class="text-[#b7fe50]">Security Expert</span>
        </h2>

        <p class="mt-4 text-white/70 text-lg leading-relaxed">
          I build fast, secure, and scalable websites using WordPress, PHP, and modern frontend tools.
          I also focus on performance optimization and ethical hacking practices.
        </p>

        <!-- SKILLS -->
        <div class="mt-6 flex flex-wrap gap-3">

          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white text-sm">
            WordPress
          </span>

          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white text-sm">
            PHP & MySQL
          </span>

          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white text-sm">
            Security
          </span>

          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white text-sm">
            Performance
          </span>

        </div>

        <!-- ⭐ STATUS CARD (NEW BEST POSITION) -->
        <div class="mt-10">

          <div class="relative rounded-2xl border border-white/10 bg-white/5 backdrop-blur p-5">

            <div class="flex flex-wrap items-center justify-between gap-4 text-sm text-white/80">

              <!-- LEFT -->
              <div class="flex flex-wrap items-center gap-3">

                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1">
                  <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
                  <span>
                    Availability:
                    <span class="font-semibold text-white">Taking 1–2 new projects</span>
                  </span>
                </span>

              </div>

              <!-- RIGHT -->
              <div class="flex items-center gap-2">

                <span class="text-white/60 hidden sm:inline">Rating</span>

                <div class="flex items-center gap-1 rounded-full bg-black/30 px-3 py-1 border border-white/10">
                  <span class="text-amber-300 text-sm">★★★★★</span>
                  <span class="text-xs text-white/70">4.9</span>
                </div>

              </div>

            </div>

          </div>

        </div>

        <!-- CTA -->
        <div class="mt-8 flex flex-wrap gap-4">

          <a href="/contact-us/"
            class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-[#4d7c0f] to-[#b7fe50]
            px-7 py-3.5 text-sm font-semibold text-black shadow-lg shadow-[#b7fe50]/30
            hover:shadow-[#b7fe50]/50 hover:-translate-y-0.5 transition">

            Hire Me →
          </a>

          <a href="/work/"
            class="inline-flex items-center gap-2 rounded-xl border border-white/20 bg-white/5
            px-7 py-3.5 text-sm font-semibold text-white
            hover:border-[#b7fe50] hover:text-[#b7fe50] transition">

            View Work →
          </a>

        </div>

      </div>

      <!-- RIGHT IMAGE -->
      <div class="relative flex justify-center lg:justify-end">

        <div class="relative w-[340px] sm:w-[420px] lg:w-[500px]">

          <div class="rounded-full overflow-hidden border border-white/10 shadow-2xl aspect-square">
            <img
              src="https://affroddin.com/wp-content/uploads/2026/04/fina_wp.png"
              class="w-full h-full object-cover"
              alt="Affroddin"
            />
          </div>

          <!-- BADGE -->
          <div class="absolute bottom-4 left-4 bg-[#050816]/90 backdrop-blur border border-[#b7fe50]/20 rounded-2xl px-4 py-2 shadow-lg">
            <p class="text-[#b7fe50] font-bold text-base">5+ Years</p>
            <p class="text-white/60 text-xs">Experience</p>
          </div>

        </div>

      </div>

    </div>

  </div>
</section>

<!-- Service section  -->
<section id="services" class="relative py-24 bg-white overflow-hidden">

  <!-- GRID BACKGROUND -->
  <div class="absolute inset-0 pointer-events-none opacity-[0.03]"
    style="
      background-image:
      linear-gradient(to right, #000 1px, transparent 1px),
      linear-gradient(to bottom, #000 1px, transparent 1px);
      background-size: 70px 70px;
    ">
  </div>

  <!-- GLOW -->
  <div class="absolute -top-40 -left-40 h-96 w-96 bg-[#b7fe50]/10 blur-3xl rounded-full"></div>

  <div class="relative max-w-6xl mx-auto px-6">

    <!-- BADGE -->
    <div class="text-center mb-16">

      <span class="inline-flex items-center gap-2 rounded-full
      bg-gradient-to-r from-[#b7fe50]/15 to-[#4d7c0f]/10
      px-4 py-1 text-xs font-semibold text-[#2f4f1b]
      border border-[#b7fe50]/30 shadow-sm backdrop-blur">
        <span class="h-1.5 w-1.5 rounded-full bg-[#b7fe50]"></span>
        My Services
      </span>

      <!-- HEADING -->
      <h2 class="mt-6 text-3xl md:text-4xl font-semibold tracking-tight text-gray-900 leading-tight">
        Services That Help Your Website
        <span class="text-[#4d7c0f]">Perform Better</span>
      </h2>

      <!-- DESCRIPTION -->
      <p class="mt-4 text-gray-600 max-w-2xl mx-auto text-base leading-relaxed">
        I build fast, secure and scalable WordPress solutions focused on performance, SEO, and real business growth.
      </p>

    </div>

    <!-- GRID -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- CARD -->
      <div class="group p-6 rounded-2xl border border-gray-200 bg-white
        hover:border-[#b7fe50]/40 hover:shadow-lg hover:-translate-y-1
        transition-all duration-300">

        <div class="w-10 h-10 flex items-center justify-center rounded-xl
          bg-[#b7fe50]/10 text-[#4d7c0f] text-lg">
          🛠️
        </div>

        <h3 class="mt-4 text-base font-semibold text-gray-900 group-hover:text-[#4d7c0f] transition">
          WordPress Development
        </h3>

        <p class="mt-2 text-sm text-gray-600 leading-relaxed">
          Fast, scalable & SEO-ready WordPress websites built with clean architecture.
        </p>

      </div>

      <!-- CARD -->
      <div class="group p-6 rounded-2xl border border-gray-200 bg-white
        hover:border-[#b7fe50]/40 hover:shadow-lg hover:-translate-y-1
        transition-all duration-300">

        <div class="w-10 h-10 flex items-center justify-center rounded-xl
          bg-[#b7fe50]/10 text-[#4d7c0f] text-lg">
          🛡️
        </div>

        <h3 class="mt-4 text-base font-semibold text-gray-900 group-hover:text-[#4d7c0f] transition">
          Website Security
        </h3>

        <p class="mt-2 text-sm text-gray-600 leading-relaxed">
          Malware removal, firewall setup & full OWASP-based protection.
        </p>

      </div>

      <!-- CARD -->
      <div class="group p-6 rounded-2xl border border-gray-200 bg-white
        hover:border-[#b7fe50]/40 hover:shadow-lg hover:-translate-y-1
        transition-all duration-300">

        <div class="w-10 h-10 flex items-center justify-center rounded-xl
          bg-[#b7fe50]/10 text-[#4d7c0f] text-lg">
          ⚡
        </div>

        <h3 class="mt-4 text-base font-semibold text-gray-900 group-hover:text-[#4d7c0f] transition">
          Performance Optimization
        </h3>

        <p class="mt-2 text-sm text-gray-600 leading-relaxed">
          Improve Core Web Vitals, speed score & overall SEO performance.
        </p>

      </div>

      <!-- CARD -->
      <div class="group p-6 rounded-2xl border border-gray-200 bg-white
        hover:border-[#b7fe50]/40 hover:shadow-lg hover:-translate-y-1
        transition-all duration-300">

        <div class="w-10 h-10 flex items-center justify-center rounded-xl
          bg-[#b7fe50]/10 text-[#4d7c0f] text-lg">
          🔍
        </div>

        <h3 class="mt-4 text-base font-semibold text-gray-900 group-hover:text-[#4d7c0f] transition">
          SEO Optimization
        </h3>

        <p class="mt-2 text-sm text-gray-600 leading-relaxed">
          Technical SEO + on-page optimization to boost Google rankings.
        </p>

      </div>

      <!-- CARD -->
      <div class="group p-6 rounded-2xl border border-gray-200 bg-white
        hover:border-[#b7fe50]/40 hover:shadow-lg hover:-translate-y-1
        transition-all duration-300">

        <div class="w-10 h-10 flex items-center justify-center rounded-xl
          bg-[#b7fe50]/10 text-[#4d7c0f] text-lg">
          🔌
        </div>

        <h3 class="mt-4 text-base font-semibold text-gray-900 group-hover:text-[#4d7c0f] transition">
          Custom Plugins
        </h3>

        <p class="mt-2 text-sm text-gray-600 leading-relaxed">
          Lightweight custom features built without bloating your website.
        </p>

      </div>

      <!-- CARD -->
      <div class="group p-6 rounded-2xl border border-gray-200 bg-white
        hover:border-[#b7fe50]/40 hover:shadow-lg hover:-translate-y-1
        transition-all duration-300">

        <div class="w-10 h-10 flex items-center justify-center rounded-xl
          bg-[#b7fe50]/10 text-[#4d7c0f] text-lg">
          🔧
        </div>

        <h3 class="mt-4 text-base font-semibold text-gray-900 group-hover:text-[#4d7c0f] transition">
          Maintenance & Support
        </h3>

        <p class="mt-2 text-sm text-gray-600 leading-relaxed">
          Regular updates, backups, monitoring & long-term support.
        </p>

      </div>

    </div>

    <!-- CTA -->
    <div class="mt-20 text-center">

      <a href="/contact-us/"
        class="inline-flex items-center gap-2 px-8 py-4 rounded-xl
        bg-gradient-to-r from-[#4d7c0f] to-[#b7fe50]
        text-black font-semibold shadow-lg shadow-[#b7fe50]/20
        hover:shadow-[#b7fe50]/40 hover:-translate-y-1
        transition-all duration-300">

        Get Free Website Audit →
      </a>

    </div>

  </div>
</section>


<!-- Wordpress section  -->
 <section class="relative py-24 bg-white overflow-hidden">

  <!-- subtle grid -->
  <div class="absolute inset-0 pointer-events-none opacity-[0.03]"
    style="
      background-image:
      linear-gradient(to right, #000 1px, transparent 1px),
      linear-gradient(to bottom, #000 1px, transparent 1px);
      background-size: 70px 70px;
    ">
  </div>

  <!-- soft glow -->
  <div class="absolute -top-40 -left-40 h-96 w-96 bg-[#b7fe50]/10 blur-3xl rounded-full"></div>

  <div class="relative max-w-6xl mx-auto px-6">

    <!-- heading -->
    <div class="text-center mb-16">

      <h2 class="text-3xl md:text-4xl font-semibold text-gray-900 leading-tight">
        WordPress Services That Drive
        <span class="text-[#4d7c0f]">Growth & Conversions</span>
      </h2>

      <p class="mt-4 text-gray-600 max-w-2xl mx-auto text-base leading-relaxed">
        I help businesses build fast, secure, and conversion-focused WordPress websites using modern development practices, performance optimization, and UX-driven design.
      </p>

    </div>

    <!-- grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- card -->
      <div class="group p-7 rounded-2xl border border-gray-200 bg-white
        hover:border-[#b7fe50]/40 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

        <div class="w-11 h-11 flex items-center justify-center rounded-xl
          bg-[#b7fe50]/10 text-[#4d7c0f] text-xl">
          🛠
        </div>

        <h3 class="mt-4 text-lg font-semibold text-gray-900 group-hover:text-[#4d7c0f] transition">
          Custom WordPress Development
        </h3>

        <p class="mt-2 text-sm text-gray-600 leading-relaxed">
          Clean architecture using ACF, modern PHP, Tailwind & performance-first structure.
        </p>

      </div>

      <!-- card -->
      <div class="group p-7 rounded-2xl border border-gray-200 bg-white
        hover:border-[#b7fe50]/40 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

        <div class="w-11 h-11 flex items-center justify-center rounded-xl
          bg-[#b7fe50]/10 text-[#4d7c0f] text-xl">
          ⚡
        </div>

        <h3 class="mt-4 text-lg font-semibold text-gray-900 group-hover:text-[#4d7c0f] transition">
          Performance Optimization
        </h3>

        <p class="mt-2 text-sm text-gray-600 leading-relaxed">
          Core Web Vitals improvement, caching, asset optimization & speed tuning.
        </p>

      </div>

      <!-- card -->
      <div class="group p-7 rounded-2xl border border-gray-200 bg-white
        hover:border-[#b7fe50]/40 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

        <div class="w-11 h-11 flex items-center justify-center rounded-xl
          bg-[#b7fe50]/10 text-[#4d7c0f] text-xl">
          📈
        </div>

        <h3 class="mt-4 text-lg font-semibold text-gray-900 group-hover:text-[#4d7c0f] transition">
          Conversion Landing Pages
        </h3>

        <p class="mt-2 text-sm text-gray-600 leading-relaxed">
          UX-driven landing pages designed to convert visitors into customers.
        </p>

      </div>

    </div>

    <!-- CTA -->
    <div class="mt-16 text-center">

      <p class="text-gray-700 font-medium mb-6">
        Not sure which service fits your business?
      </p>

      <a href="/contact-us/"
        class="inline-flex items-center gap-2 px-8 py-4 rounded-xl
        bg-gradient-to-r from-[#4d7c0f] to-[#b7fe50]
        text-black font-semibold shadow-lg shadow-[#b7fe50]/20
        hover:shadow-[#b7fe50]/40 hover:-translate-y-1 transition-all duration-300">

        Start Your Project →
      </a>

    </div>

  </div>
</section>


<!-- blog section  -->
<section class="relative bg-[#050816] py-24 overflow-hidden">

  <!-- GRID BACKGROUND -->
  <div class="absolute inset-0 pointer-events-none opacity-30"
    style="
      background-image:
      linear-gradient(to right, rgba(255,255,255,0.05) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(255,255,255,0.05) 1px, transparent 1px);
      background-size: 80px 80px;
    ">
  </div>

  <!-- GLOW EFFECTS -->
  <div class="absolute -top-40 -left-40 h-96 w-96 bg-[#b7fe50]/10 blur-3xl rounded-full"></div>
  <div class="absolute bottom-0 -right-40 h-96 w-96 bg-[#b7fe50]/5 blur-3xl rounded-full"></div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

    <!-- HEADER -->
    <div class="max-w-2xl">
      <span class="inline-flex items-center rounded-full bg-[#b7fe50]/10 px-4 py-1 text-sm font-semibold text-[#b7fe50] border border-[#b7fe50]/20">
        Blog
      </span>

      <h2 class="mt-6 text-4xl font-bold text-white">
        Insights that Drive Real Growth
      </h2>

      <p class="mt-4 text-white/60 text-lg">
        Practical insights, WordPress tutorials, performance tips, and security strategies to build faster websites.
      </p>
    </div>

    <!-- GRID -->
    <div class="mt-14 grid gap-10 lg:grid-cols-3">

      <!-- CARD 1 -->
      <article class="group relative rounded-2xl border border-white/10 bg-white/5 backdrop-blur overflow-hidden
        hover:border-[#b7fe50]/40 hover:-translate-y-2 transition-all duration-300">

        <!-- thumbnail -->
        <div class="h-44 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085"
            class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
        </div>

        <div class="p-6 relative">

          <time class="text-xs text-white/50">May 10, 2026</time>

          <h3 class="mt-3 text-lg font-semibold text-white group-hover:text-[#b7fe50] transition">
            I Built a WordPress Scanner That Finds Malware in 10 Seconds
          </h3>

          <p class="mt-3 text-sm text-white/60 leading-relaxed line-clamp-3">
            A real-world story about detecting malware in hacked WordPress sites and building an automated scanner...
          </p>

          <!-- AUTHOR -->
          <div class="mt-5 flex items-center gap-3">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085"
              class="h-9 w-9 rounded-full border border-white/10" />
            <div>
              <p class="text-sm text-white font-medium">Affroddin</p>
              <p class="text-xs text-white/50">WordPress Developer</p>
            </div>
          </div>

          <a href="#" class="mt-5 inline-flex text-sm text-[#b7fe50]">
            Read More →
          </a>

        </div>
      </article>

      <!-- CARD 2 -->
      <article class="group relative rounded-2xl border border-white/10 bg-white/5 backdrop-blur overflow-hidden
        hover:border-[#b7fe50]/40 hover:-translate-y-2 transition-all duration-300">

        <div class="h-44 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085"
            class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
        </div>

        <div class="p-6 relative">

          <time class="text-xs text-white/50">May 9, 2026</time>

          <h3 class="mt-3 text-lg font-semibold text-white group-hover:text-[#b7fe50] transition">
            Visual Stability Index (VSI) WordPress Guide
          </h3>

          <p class="mt-3 text-sm text-white/60 leading-relaxed line-clamp-3">
            Understanding Google’s new Core Web Vital and how it affects WordPress performance optimization...
          </p>

          <div class="mt-5 flex items-center gap-3">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085"
              class="h-9 w-9 rounded-full border border-white/10" />
            <div>
              <p class="text-sm text-white font-medium">Affroddin</p>
              <p class="text-xs text-white/50">Security Expert</p>
            </div>
          </div>

          <a href="#" class="mt-5 inline-flex text-sm text-[#b7fe50]">
            Read More →
          </a>

        </div>
      </article>

      <!-- CARD 3 -->
      <article class="group relative rounded-2xl border border-white/10 bg-white/5 backdrop-blur overflow-hidden
        hover:border-[#b7fe50]/40 hover:-translate-y-2 transition-all duration-300">

        <div class="h-44 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085"
            class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
        </div>

        <div class="p-6 relative">

          <time class="text-xs text-white/50">May 6, 2026</time>

          <h3 class="mt-3 text-lg font-semibold text-white group-hover:text-[#b7fe50] transition">
            Why I Built My Own SEO Tool (SeoVitals)
          </h3>

          <p class="mt-3 text-sm text-white/60 leading-relaxed line-clamp-3">
            A breakdown of why existing SEO tools fail developers and how I built a better workflow...
          </p>

          <div class="mt-5 flex items-center gap-3">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085"
              class="h-9 w-9 rounded-full border border-white/10" />
            <div>
              <p class="text-sm text-white font-medium">Affroddin</p>
              <p class="text-xs text-white/50">Full Stack Developer</p>
            </div>
          </div>

          <a href="#" class="mt-5 inline-flex text-sm text-[#b7fe50]">
            Read More →
          </a>

        </div>
      </article>

    </div>

    <!-- CTA -->
    <div class="mt-16 text-center">
      <a href="/blog/"
        class="inline-flex items-center gap-2 rounded-full border border-[#b7fe50]/30 px-6 py-3
        text-[#b7fe50] hover:bg-[#b7fe50]/10 transition">

        View All Articles →
      </a>
    </div>

  </div>
</section>




<!-- Work country section  -->
<section class="relative overflow-hidden py-24 bg-gradient-to-br from-gray-50 via-white to-green-50">

    <!-- Background Map -->
    <div class="absolute inset-0 pointer-events-none">
        <div
            class="absolute inset-0 bg-[url('https://upload.wikimedia.org/wikipedia/commons/8/80/World_map_-_low_resolution.svg')] bg-center bg-no-repeat bg-cover opacity-20">
        </div>
    </div>

    <!-- Glow Effects -->
    <div class="absolute -top-40 -left-40 h-96 w-96 rounded-full bg-[#B7FE50]/30 blur-3xl animate-ping"></div>
    <div class="absolute bottom-0 -right-40 h-96 w-96 rounded-full bg-[#B7FE50]/20 blur-3xl"></div>

    <!-- Floating Dots -->
    <div class="absolute inset-0 pointer-events-none">
        <span class="absolute top-[35%] left-[28%] h-3 w-3 rounded-full bg-[#B7FE50] animate-ping"></span>
        <span class="absolute top-[40%] left-[55%] h-3 w-3 rounded-full bg-[#B7FE50] animate-ping"></span>
        <span class="absolute top-[50%] left-[70%] h-3 w-3 rounded-full bg-[#B7FE50] animate-ping"></span>
        <span class="absolute top-[60%] left-[45%] h-3 w-3 rounded-full bg-[#B7FE50] animate-ping"></span>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid lg:grid-cols-12 gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div class="lg:col-span-6">

                <span
                    class="inline-flex items-center rounded-full bg-[#B7FE50]/10 px-4 py-1 text-sm font-semibold text-[#4d7c0f] border border-[#B7FE50]/30">
                    Global Collaboration
                </span>

                <h2 class="mt-6 text-3xl sm:text-4xl font-bold text-gray-900 leading-tight">
                    Collaborated with clients from
                    <span class="text-[#4d7c0f]">5+ countries</span>
                </h2>

                <p class="mt-4 text-lg text-gray-600 max-w-xl">
                    I work with startups, agencies, and founders worldwide — delivering high-performance WordPress
                    solutions built to scale across markets and time zones.
                </p>

                <!-- Badge -->
                <div
                    class="mt-6 inline-flex items-center gap-2 rounded-full bg-[#B7FE50]/10 px-4 py-2 text-sm font-semibold text-[#4d7c0f] border border-[#B7FE50]/20">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute h-full w-full rounded-full bg-[#B7FE50] opacity-75"></span>
                        <span class="relative h-2 w-2 rounded-full bg-[#B7FE50]"></span>
                    </span>
                    Timezone-friendly · Async & overlap hours
                </div>

                <!-- Countries -->
                <div class="mt-8 flex flex-wrap gap-3">

                    <div class="flex items-center gap-2 rounded-xl bg-white px-4 py-2 shadow-sm border border-gray-200">
                        <svg class="w-5 h-4 rounded-sm" viewBox="0 0 900 600" xmlns="http://www.w3.org/2000/svg">
                            <rect width="900" height="600" fill="#FF9933"></rect>
                            <rect y="200" width="900" height="200" fill="#FFFFFF"></rect>
                            <rect y="400" width="900" height="200" fill="#138808"></rect>
                            <circle cx="450" cy="300" r="60" stroke="#000080" stroke-width="8" fill="none"></circle>
                            <circle cx="450" cy="300" r="4" fill="#000080"></circle>
                        </svg>
                        <span class="text-sm font-medium text-gray-900">India</span>
                    </div>

                    <div class="flex items-center gap-2 rounded-xl bg-white px-4 py-2 shadow-sm border border-gray-200">
                        <svg class="w-5 h-4 rounded-sm" viewBox="0 0 7410 3900" xmlns="http://www.w3.org/2000/svg">
                            <rect width="7410" height="3900" fill="#B22234"></rect>
                            <g fill="#FFFFFF">
                                <rect y="300" width="7410" height="300"></rect>
                                <rect y="900" width="7410" height="300"></rect>
                                <rect y="1500" width="7410" height="300"></rect>
                                <rect y="2100" width="7410" height="300"></rect>
                                <rect y="2700" width="7410" height="300"></rect>
                                <rect y="3300" width="7410" height="300"></rect>
                            </g>
                            <rect width="2964" height="2100" fill="#3C3B6E"></rect>
                        </svg>
                        <span class="text-sm font-medium text-gray-900">USA</span>
                    </div>

                    <div class="flex items-center gap-2 rounded-xl bg-white px-4 py-2 shadow-sm border border-gray-200">
                        <svg class="w-5 h-4 rounded-sm" viewBox="0 0 60 30" xmlns="http://www.w3.org/2000/svg">
                            <rect width="60" height="30" fill="#012169"></rect>
                            <path d="M0 0 L60 30 M60 0 L0 30" stroke="#FFF" stroke-width="6"></path>
                            <path d="M0 0 L60 30 M60 0 L0 30" stroke="#C8102E" stroke-width="4"></path>
                            <rect x="25" width="10" height="30" fill="#FFF"></rect>
                            <rect y="10" width="60" height="10" fill="#FFF"></rect>
                            <rect x="27" width="6" height="30" fill="#C8102E"></rect>
                            <rect y="12" width="60" height="6" fill="#C8102E"></rect>
                        </svg>
                        <span class="text-sm font-medium text-gray-900">UK</span>
                    </div>

                    <div class="flex items-center gap-2 rounded-xl bg-white px-4 py-2 shadow-sm border border-gray-200">
                        <svg class="w-5 h-4 rounded-sm" viewBox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
                            <rect width="600" height="100" fill="#CE1126"></rect>
                            <rect y="100" width="600" height="100" fill="#FFFFFF"></rect>
                            <rect y="200" width="600" height="100" fill="#000000"></rect>
                        </svg>
                        <span class="text-sm font-medium text-gray-900">Egypt</span>
                    </div>

                    <div class="flex items-center gap-2 rounded-xl bg-white px-4 py-2 shadow-sm border border-gray-200">
                        <svg class="w-5 h-4 rounded-sm" viewBox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
                            <rect width="600" height="300" fill="#00732F"></rect>
                            <rect y="100" width="600" height="100" fill="#FFFFFF"></rect>
                            <rect y="200" width="600" height="100" fill="#000000"></rect>
                            <rect width="150" height="300" fill="#FF0000"></rect>
                        </svg>
                        <span class="text-sm font-medium text-gray-900">UAE</span>
                    </div>

                    <div class="flex items-center gap-2 rounded-xl bg-white px-4 py-2 shadow-sm border border-gray-200">
                        <svg class="w-5 h-4 rounded-sm" viewBox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
                            <rect width="200" height="300" fill="#169B62"></rect>
                            <rect x="200" width="200" height="300" fill="#FFFFFF"></rect>
                            <rect x="400" width="200" height="300" fill="#FF883E"></rect>
                        </svg>
                        <span class="text-sm font-medium text-gray-900">Ireland</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-xl bg-white px-4 py-2 shadow-sm border border-gray-200">

                        <svg class="w-5 h-4 rounded-sm" viewBox="0 0 60 30" xmlns="http://www.w3.org/2000/svg">

                            <!-- Background -->
                            <rect width="60" height="30" fill="#012169"></rect>

                            <!-- Simplified Union Jack (top-left) -->
                            <path d="M0 0 L30 15 M30 0 L0 15" stroke="#FFFFFF" stroke-width="3"></path>
                            <path d="M0 0 L30 15 M30 0 L0 15" stroke="#C8102E" stroke-width="1.5"></path>

                            <path d="M0 15 L30 0 M0 0 L30 15" stroke="#FFFFFF" stroke-width="3"></path>
                            <path d="M0 15 L30 0 M0 0 L30 15" stroke="#C8102E" stroke-width="1.5"></path>

                            <!-- Stars (Australia flag simplified) -->
                            <circle cx="40" cy="10" r="1.5" fill="#FFFFFF"></circle>
                            <circle cx="45" cy="18" r="1.5" fill="#FFFFFF"></circle>
                            <circle cx="50" cy="12" r="1.5" fill="#FFFFFF"></circle>
                            <circle cx="48" cy="24" r="1.5" fill="#FFFFFF"></circle>

                        </svg>

                        <span class="text-sm font-medium text-gray-900">Australia</span>

                    </div>

                </div>

                <!-- Buttons -->
                <div class="mt-10 flex flex-wrap gap-4">

                    <a href="/contact-us/"
                        class="group px-8 py-4 rounded-lg bg-gradient-to-r from-primary to-[#7CFF00] text-black font-semibold hover:shadow-[0_0_25px_theme(colors.primary)] hover:-translate-y-0.5 transition-all duration-300">
                        Let's Collaborate
                        <span class="inline-block group-hover:translate-x-1 transition-transform">→</span>
                    </a>

                    <a href="#projects"
                        class="inline-flex items-center gap-2 rounded-lg border-2 border-gray-300 bg-white px-8 py-3.5 text-sm font-semibold text-gray-800 hover:border-[#B7FE50] hover:text-[#4d7c0f] transition-all duration-300">
                        View Case Studies →
                    </a>

                </div>

            </div>

            <!-- RIGHT STATS -->
            <div class="lg:col-span-6 grid sm:grid-cols-2 gap-6">

                <div class="rounded-2xl bg-white p-6 shadow-sm border">
                    <p class="text-4xl font-bold text-[#B7FE50]">5+</p>
                    <p class="mt-1 text-gray-600">Countries Served</p>
                </div>

                <div class="rounded-2xl bg-white p-6 shadow-sm border">
                    <p class="text-4xl font-bold text-[#4d7c0f]">50+</p>
                    <p class="mt-1 text-gray-600">Projects Delivered</p>
                </div>

                <div class="rounded-2xl bg-white p-6 shadow-sm border">
                    <p class="text-4xl font-bold text-[#4d7c0f]">100%</p>
                    <p class="mt-1 text-gray-600">Remote Friendly</p>
                </div>

                <div class="rounded-2xl bg-white p-6 shadow-sm border">
                    <p class="text-4xl font-bold text-[#4d7c0f]">24/7</p>
                    <p class="mt-1 text-gray-600">Async Communication</p>
                </div>

            </div>

        </div>

    </div>

</section>


<?php get_footer(); ?>