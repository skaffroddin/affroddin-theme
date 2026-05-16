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
      <?php
      if (have_posts()) :
          while (have_posts()) : the_post();
              get_template_part('template-parts/blog/card');
          endwhile;
      else :
          echo '<p class="text-white/60 col-span-full text-center">No posts found.</p>';
      endif;
      ?>
    </div>

    <!-- PAGINATION -->
    <div class="mt-20 flex justify-center gap-3 flex-wrap">
      <?php
      $links = paginate_links(array(
          'type'      => 'array',
          'prev_text' => __('&larr; Prev', 'affroddin'),
          'next_text' => __('Next &rarr;', 'affroddin'),
      ));

      if ($links) {
          foreach ($links as $link) {
              // Add tailwind classes to the links
              $link = str_replace("class='page-numbers'", "class='page-numbers px-5 py-2.5 rounded-xl border border-white/10 bg-white/5 text-white/70 hover:bg-white/10 hover:text-white transition font-medium'", $link);
              $link = str_replace("class=\"page-numbers\"", "class='page-numbers px-5 py-2.5 rounded-xl border border-white/10 bg-white/5 text-white/70 hover:bg-white/10 hover:text-white transition font-medium'", $link);
              
              // Handle current page styling
              $link = str_replace("current", "bg-gradient-to-r from-[#4d7c0f] to-[#b7fe50] text-black border-none font-semibold shadow-[0_0_15px_rgba(183,254,80,0.25)] pointer-events-none", $link);
              
              // Output
              echo $link;
          }
      }
      ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>