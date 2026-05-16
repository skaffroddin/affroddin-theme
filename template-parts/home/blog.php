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
      <?php
      $blog_query = new WP_Query(array(
          'post_type'      => 'post',
          'posts_per_page' => 3,
          'post_status'    => 'publish',
      ));

      if ($blog_query->have_posts()) :
          while ($blog_query->have_posts()) : $blog_query->the_post();
              get_template_part('template-parts/blog/card');
          endwhile;
          wp_reset_postdata();
      else :
          echo '<p class="text-white/60 col-span-full text-center">No posts found.</p>';
      endif;
      ?>
    </div>

    <!-- CTA -->
    <div class="mt-16 text-center">
      <?php 
      $blog_page_id = get_option('page_for_posts');
      $blog_url = $blog_page_id ? get_permalink($blog_page_id) : home_url('/blog/');
      ?>
      <a href="<?php echo esc_url($blog_url); ?>"
        class="inline-flex items-center gap-2 rounded-full border border-[#b7fe50]/30 px-6 py-3
        text-[#b7fe50] hover:bg-[#b7fe50]/10 transition">

        View All Articles →
      </a>
    </div>

  </div>
</section>
