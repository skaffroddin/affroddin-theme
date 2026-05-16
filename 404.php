<?php get_header(); ?>

<main class="relative min-h-screen flex items-center justify-center overflow-hidden bg-[#050816] pt-28">

    <!-- GRID -->
    <div class="absolute inset-0 opacity-30"
        style="
            background-image:
            linear-gradient(to right, rgba(255,255,255,0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(255,255,255,0.05) 1px, transparent 1px);
            background-size:80px 80px;
        ">
    </div>

    <!-- GLOWS -->
    <div class="absolute -top-40 -left-40 h-96 w-96 bg-[#b7fe50]/10 blur-3xl rounded-full"></div>
    <div class="absolute bottom-0 -right-40 h-96 w-96 bg-[#b7fe50]/5 blur-3xl rounded-full"></div>

    <div class="relative z-10 max-w-3xl mx-auto px-6 text-center">

        <!-- 404 -->
        <h1 class="text-[120px] md:text-[180px] font-black leading-none text-transparent bg-clip-text bg-gradient-to-r from-[#4d7c0f] to-[#b7fe50]">
            404
        </h1>

        <!-- title -->
        <h2 class="mt-4 text-3xl md:text-5xl font-bold text-white">
            Lost in the Code?
        </h2>

        <!-- desc -->
        <p class="mt-5 text-lg text-white/60 max-w-xl mx-auto leading-relaxed">
            The page you’re looking for doesn’t exist, was moved, or maybe deleted during deployment.
        </p>

        <!-- buttons -->
        <div class="mt-10 flex flex-wrap justify-center gap-4">

            <a href="<?php echo esc_url(home_url('/')); ?>"
                class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-[#4d7c0f] to-[#b7fe50]
                px-7 py-4 text-sm font-semibold text-black shadow-lg shadow-[#b7fe50]/30
                hover:shadow-[#b7fe50]/50 hover:-translate-y-1 transition-all duration-300">

                Back Home →
            </a>

            <a href="<?php echo esc_url(home_url('/blog')); ?>"
                class="inline-flex items-center gap-2 rounded-xl border border-white/20 bg-white/5
                px-7 py-4 text-sm font-semibold text-white
                hover:border-[#b7fe50] hover:text-[#b7fe50] transition">

                Browse Blog →
            </a>

        </div>

        <!-- search -->
        <div class="mt-12 max-w-xl mx-auto">
            <?php get_search_form(); ?>
        </div>

    </div>

</main>

<?php get_footer(); ?>