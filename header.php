<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-black text-white'); ?>>

<header id="siteHeader" class="fixed inset-x-0 top-0 z-50 bg-[#050816]/90 backdrop-blur border-b border-white/10">

<div class="mx-auto max-w-7xl px-4 lg:px-8">
  <div class="flex h-16 lg:h-18 items-center justify-between gap-4">

    <!-- LOGO -->
    <a href="<?php echo esc_url( home_url('/') ); ?>" class="flex items-center gap-3">
      <div class="relative">
        <img 
          src="<?php echo esc_url( wp_get_upload_dir()['baseurl'] . '/2026/05/freelance-wordpress-developer.png' ); ?>" 
          alt="Affroddin"
          class="h-10 w-10 lg:h-11 lg:w-11 rounded-full object-cover border border-[#b7fe50]/40 shadow-lg"
        />
        <span class="absolute -bottom-0.5 -right-0.5 h-3 w-3 rounded-full bg-[#b7fe50] ring-2 ring-[#050816]"></span>
      </div>

      <div class="hidden sm:flex flex-col">
        <span class="text-xs font-semibold text-white/90">Affroddin</span>
        <span class="text-[11px] uppercase tracking-[0.18em] text-white/50">
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
      <a href="/contact-us/#lead"
         class="inline-flex items-center gap-2 rounded-full px-5 py-2.5 text-sm font-semibold text-[#b7fe50]
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
        <path d="M4 7h16M4 12h16M4 17h16"
          stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
      </svg>
    </button>

  </div>
</div>

<!-- MOBILE MENU (FIXED) -->
<div id="mobileMenu"
  class="md:hidden fixed inset-x-0 top-16 z-50
  bg-[#050816]/95 backdrop-blur-xl border-b border-white/10
  shadow-[0_20px_60px_rgba(0,0,0,0.6)]
  opacity-0 invisible -translate-y-3 scale-95
  transition-all duration-300 ease-out">

  <!-- background -->
  <div class="absolute inset-0 bg-gradient-to-b from-[#0b1220] via-[#050816] to-black"></div>

  <nav class="relative flex flex-col p-4 text-sm font-medium gap-2">

    <a href="/about/"
      class="group px-4 py-3 rounded-xl text-white/80
      hover:bg-white/10 hover:text-[#b7fe50]
      transition flex justify-between items-center">
      About <span class="opacity-0 group-hover:opacity-100">→</span>
    </a>

    <a href="/services/"
      class="group px-4 py-3 rounded-xl text-white/80
      hover:bg-white/10 hover:text-[#b7fe50]
      transition flex justify-between items-center">
      Services <span class="opacity-0 group-hover:opacity-100">→</span>
    </a>

    <a href="/work/"
      class="group px-4 py-3 rounded-xl text-white/80
      hover:bg-white/10 hover:text-[#b7fe50]
      transition flex justify-between items-center">
      Work <span class="opacity-0 group-hover:opacity-100">→</span>
    </a>

    <a href="/blog/"
      class="group px-4 py-3 rounded-xl text-white/80
      hover:bg-white/10 hover:text-[#b7fe50]
      transition flex justify-between items-center">
      Blog <span class="opacity-0 group-hover:opacity-100">→</span>
    </a>

    <a href="/contact-us/"
      class="group px-4 py-3 rounded-xl text-white/80
      hover:bg-white/10 hover:text-[#b7fe50]
      transition flex justify-between items-center">
      Contact <span class="opacity-0 group-hover:opacity-100">→</span>
    </a>

    <!-- CTA -->
    <a href="/contact-us/#lead"
      class="mt-4 text-center px-5 py-3 rounded-xl font-semibold
      text-black bg-gradient-to-r from-[#4d7c0f] to-[#b7fe50]
      shadow-[0_0_15px_rgba(183,254,80,0.35)]
      hover:shadow-[0_0_25px_rgba(183,254,80,0.6)]
      transition-all duration-300">
      Get Quote →
    </a>

  </nav>
</div>

<!-- SCRIPT -->
<script>
const btn = document.getElementById("mobileToggle");
const menu = document.getElementById("mobileMenu");

btn.addEventListener("click", () => {
  menu.classList.toggle("opacity-0");
  menu.classList.toggle("invisible");
  menu.classList.toggle("-translate-y-3");
  menu.classList.toggle("scale-95");
});
</script>

</header>