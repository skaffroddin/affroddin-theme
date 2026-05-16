<?php
$categories = get_the_category();
$category_name = !empty($categories) ? esc_html($categories[0]->name) : 'Uncategorized';
?>
<article class="group rounded-3xl overflow-hidden border border-white/10 bg-white/5 backdrop-blur hover:border-[#b7fe50]/40 hover:-translate-y-2 transition-all duration-300">

  <!-- THUMBNAIL -->
  <div class="overflow-hidden relative h-60">
    <a href="<?php echo esc_url(get_permalink()); ?>">
      <?php if (has_post_thumbnail()) : ?>
        <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>"
          class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="<?php echo esc_attr(get_the_title()); ?>">
      <?php else: ?>
        <div class="w-full h-full bg-white/5 flex items-center justify-center text-white/30 group-hover:bg-white/10 transition duration-500">
            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
        </div>
      <?php endif; ?>
    </a>
  </div>

  <div class="p-6">

    <span class="inline-block rounded-full bg-[#b7fe50]/10 px-3 py-1 text-xs font-medium text-[#b7fe50] border border-[#b7fe50]/20">
      <?php echo $category_name; ?>
    </span>

    <h3 class="mt-4 text-xl font-semibold text-white group-hover:text-[#b7fe50] transition line-clamp-2">
      <a href="<?php echo esc_url(get_permalink()); ?>">
        <?php the_title(); ?>
      </a>
    </h3>

    <div class="mt-3 text-sm text-white/60 leading-relaxed line-clamp-3">
      <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
    </div>

    <!-- META -->
    <div class="mt-6 flex items-center justify-between">

      <div class="flex items-center gap-3">
        <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', array('class' => 'w-10 h-10 rounded-full border border-white/10')); ?>

        <div>
          <p class="text-sm font-medium text-white"><?php echo esc_html(get_the_author()); ?></p>
          <p class="text-xs text-white/50"><?php echo esc_html(get_the_date()); ?></p>
        </div>
      </div>

      <a href="<?php echo esc_url(get_permalink()); ?>" class="text-[#b7fe50] text-sm font-medium hover:translate-x-1 transition">
        Read →
      </a>

    </div>

  </div>
</article>
