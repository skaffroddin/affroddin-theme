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

<a href="https://rajangupta.com/" class="flex items-center gap-3">
<div class="relative">
<img data-lazyloaded="1"
src="/wp-content/uploads/2026/01/freelance-wordpress-developer-rajan-gupta.webp"
class="h-9 w-9 lg:h-10 lg:w-10 rounded-full border border-white/40">

<span class="absolute -bottom-0.5 -right-0.5 h-2.5 w-2.5 rounded-full bg-[#b7fe50] ring-2 ring-[#050816]"></span>
</div>

<div class="hidden sm:flex flex-col">
<span class="text-xs font-semibold text-white/90">Rajan Gupta</span>
<span class="text-[11px] uppercase tracking-[0.18em] text-white/50">
WordPress · Frontend
</span>
</div>
</a>

<nav class="hidden md:flex items-center gap-6 text-sm font-medium text-white/70">

<a href="/about/" class="hover:text-[#b7fe50] transition">About</a>
<a href="/services/" class="hover:text-[#b7fe50] transition">Services</a>

<div class="relative group">
<button class="inline-flex items-center gap-1 hover:text-[#b7fe50] transition">
Tools
<svg class="h-4 w-4 transition-transform group-hover:rotate-180" viewBox="0 0 20 20" fill="none">
<path d="M5 7l5 5 5-5" stroke="currentColor" stroke-width="1.6"/>
</svg>
</button>

<div class="invisible opacity-0 translate-y-2 group-hover:visible group-hover:opacity-100 group-hover:translate-y-0
absolute left-1/2 -translate-x-1/2 mt-3 w-72 rounded-2xl bg-[#050816] border border-white/10 shadow-xl p-3">

<!-- unchanged dropdown -->
</div>
</div>

<a href="/work/" class="hover:text-[#b7fe50] transition">Work</a>
<a href="/blog/" class="hover:text-[#b7fe50] transition">Blog</a>
<a href="/contact-us/" class="hover:text-[#b7fe50] transition">Contact</a>

</nav>

<div class="hidden md:flex items-center gap-3">

<a href="/contact-us/" class="text-sm font-medium text-white/70 hover:text-[#b7fe50] transition">
Talk to me
</a>

<a href="/contact-us/#lead"
class="inline-flex items-center gap-2 rounded-full
bg-gradient-to-r from-[#4d7c0f] to-[#b7fe50]
px-5 py-2.5 text-sm font-semibold text-black
shadow-lg shadow-[#b7fe50]/30
hover:shadow-[#b7fe50]/50 transition">

Get Quote <span class="text-xs">↗</span>
</a>

</div>

<!-- WhatsApp unchanged (already good green) -->

</div>
</div>

</header>