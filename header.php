<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-black text-white'); ?>>

  <?php if (is_front_page()): ?>
    <div id="siteLoader" class="fixed inset-0 z-[999999] bg-[#050816] flex items-center justify-center overflow-hidden">

      <!-- glow -->
      <div class="absolute -top-40 -left-40 h-96 w-96 rounded-full bg-[#b7fe50]/10 blur-3xl"></div>
      <div class="absolute bottom-0 -right-40 h-96 w-96 rounded-full bg-[#b7fe50]/10 blur-3xl"></div>

      <!-- grid -->
      <div class="absolute inset-0 opacity-20" style="
      background-size:100px 100px;
      background-image:
      linear-gradient(to right, rgba(255,255,255,0.05) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(255,255,255,0.05) 1px, transparent 1px);
    ">
      </div>

      <!-- content -->
      <div class="relative text-center font-mono max-w-xl px-8">

        <div class="text-4xl md:text-6xl font-bold text-white mb-8 tracking-tight">
          Aff<span class="text-[#b7fe50]">roddin</span>.com
        </div>

        <p class="text-[#b7fe50] text-left mb-3">
          Initializing portfolio...
        </p>

        <div class="h-2 bg-white/10 rounded overflow-hidden mb-3">
          <div id="loaderBar"
            class="h-full w-0 bg-gradient-to-r from-[#4d7c0f] to-[#b7fe50] transition-all duration-[3500ms]">
          </div>
        </div>

        <p id="loaderPercent" class="text-right text-white/60 mb-8">0%</p>

        <div class="space-y-2 text-left text-sm md:text-base">

          <p id="step1" class="opacity-0 text-white/70 transition">
            ✓ Loading about...
          </p>
          <p id="step2" class="opacity-0 text-white/70 transition">
            ✓ Loading skills...
          </p>
          <p id="step3" class="opacity-0 text-white/70 transition">
            ✓ Loading contact information...
          </p>

          <p id="step2" class="opacity-0 text-white/70 transition">
            ✓ Security modules loaded
          </p>

          <p id="step3" class="opacity-0 text-[#b7fe50] font-semibold transition">
            ✓ Portfolio ready
          </p>

        </div>

      </div>
    </div>
  <?php endif; ?>

  <header id="siteHeader" class="fixed inset-x-0 top-0 z-50 bg-[#050816]/90 backdrop-blur border-b border-white/10">

    <div class="mx-auto max-w-7xl px-4 lg:px-8">
      <div class="flex h-16 lg:h-18 items-center justify-between gap-4">

        <!-- LOGO -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">

          <div class="relative shrink-0">
            <img
              src="<?php echo esc_url(wp_get_upload_dir()['baseurl'] . '/2026/05/freelance-wordpress-developer.png'); ?>"
              alt="Affroddin" class="h-10 w-10 lg:h-11 lg:w-11 rounded-full object-cover border border-[#b7fe50]/40" />

            <span
              class="absolute -bottom-0.5 -right-0.5 h-3 w-3 rounded-full bg-[#b7fe50] ring-2 ring-[#050816]"></span>
          </div>

          <div class="hidden sm:flex flex-col leading-none">

            <span class="text-base font-bold tracking-tight">
              <span class="text-white">Aff</span><span class="text-[#b7fe50]">roddin</span>
            </span>

            <span class="text-[10px] uppercase tracking-[0.22em] text-white/45 mt-1">
              WordPress Developer
            </span>

          </div>

        </a>

        <!-- DESKTOP MENU -->
        <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-white/70">
          <a href="/about/" class="hover:text-[#b7fe50] transition">About</a>
          <a href="/services/" class="hover:text-[#b7fe50] transition">Services</a>
          <a href="/work/" class="hover:text-[#b7fe50] transition">Work</a>
          <a href="/blog/" class="hover:text-[#b7fe50] transition">Blog</a>
          <a href="/contact-us/" class="hover:text-[#b7fe50] transition">Contact</a>
        </nav>

        <!-- DESKTOP CTA -->
        <div class="hidden md:flex items-center gap-3">
          <a href="/contact-us/#lead" class="inline-flex items-center gap-2 rounded-full px-5 py-2.5 text-sm font-semibold text-[#b7fe50]
         bg-transparent border border-[#b7fe50]/60
         shadow-[0_0_8px_rgba(183,254,80,0.35)]
         hover:shadow-[0_0_14px_rgba(183,254,80,0.7)]
         transition-all duration-300">
            Get Quote
          </a>
        </div>

        <!-- MOBILE BUTTON -->
        <button id="mobileToggle"
          class="md:hidden inline-flex items-center justify-center h-10 w-10 rounded-xl border border-[#b7fe50]/40 bg-white/5 text-white hover:border-[#b7fe50] transition">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">
            <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
          </svg>
        </button>

      </div>
    </div>

    <!-- MOBILE MENU (FIXED) -->
    <div id="mobileMenu" class="md:hidden fixed inset-x-0 top-16 z-50
  bg-[#050816]/95 backdrop-blur-xl border-b border-white/10
  shadow-[0_20px_60px_rgba(0,0,0,0.6)]
  opacity-0 invisible -translate-y-3 scale-95
  transition-all duration-300 ease-out">

      <!-- background -->
      <div class="absolute inset-0 bg-gradient-to-b from-[#0b1220] via-[#050816] to-black"></div>

      <nav class="relative flex flex-col p-4 text-sm font-medium gap-2">

        <a href="/about/" class="group px-4 py-3 rounded-xl text-white/80
      hover:bg-white/10 hover:text-[#b7fe50]
      transition flex justify-between items-center">
          About <span class="opacity-0 group-hover:opacity-100">→</span>
        </a>

        <a href="/services/" class="group px-4 py-3 rounded-xl text-white/80
      hover:bg-white/10 hover:text-[#b7fe50]
      transition flex justify-between items-center">
          Services <span class="opacity-0 group-hover:opacity-100">→</span>
        </a>

        <a href="/work/" class="group px-4 py-3 rounded-xl text-white/80
      hover:bg-white/10 hover:text-[#b7fe50]
      transition flex justify-between items-center">
          Work <span class="opacity-0 group-hover:opacity-100">→</span>
        </a>

        <a href="/blog/" class="group px-4 py-3 rounded-xl text-white/80
      hover:bg-white/10 hover:text-[#b7fe50]
      transition flex justify-between items-center">
          Blog <span class="opacity-0 group-hover:opacity-100">→</span>
        </a>

        <a href="/contact-us/" class="group px-4 py-3 rounded-xl text-white/80
      hover:bg-white/10 hover:text-[#b7fe50]
      transition flex justify-between items-center">
          Contact <span class="opacity-0 group-hover:opacity-100">→</span>
        </a>

        <!-- CTA -->
        <a href="/contact-us/#lead" class="mt-4 text-center px-5 py-3 rounded-xl font-semibold
      text-black bg-gradient-to-r from-[#4d7c0f] to-[#b7fe50]
      shadow-[0_0_15px_rgba(183,254,80,0.35)]
      hover:shadow-[0_0_25px_rgba(183,254,80,0.6)]
      transition-all duration-300">
          Get Quote →
        </a>

      </nav>
    </div>

    <div class="absolute bottom-0 left-0 w-full h-[2px] bg-white/5 overflow-hidden">
      <div id="scrollProgress"
        class="h-full w-0 bg-gradient-to-r from-[#4d7c0f] to-[#b7fe50] transition-all duration-75">
      </div>
    </div>

  </header>