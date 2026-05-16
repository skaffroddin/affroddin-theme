<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="bg-white min-h-screen pt-28 pb-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-12 gap-14">

            <!-- LEFT CONTENT -->
            <main class="lg:col-span-8">

                <!-- CATEGORY -->
                <div class="mb-4">
                    <?php the_category(' '); ?>
                </div>

                <!-- TITLE -->
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                    <?php the_title(); ?>
                </h1>

                <!-- META -->
                <div class="flex items-center gap-4 mt-6 text-sm text-gray-500 border-b border-gray-200 pb-8">
                    <span><?php the_author(); ?></span>
                    <span>•</span>
                    <span><?php echo get_the_date(); ?></span>
                </div>

                <!-- FEATURED IMAGE -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="mt-10 rounded-3xl overflow-hidden shadow-lg">
                        <?php the_post_thumbnail('full', [
                            'class' => 'w-full h-auto'
                        ]); ?>
                    </div>
                <?php endif; ?>

                <!-- CONTENT -->
                <article class="mt-12 text-gray-700 leading-8 space-y-6">

                    <?php the_content(); ?>

                </article>

                <!-- AUTHOR -->
                <div class="mt-20 p-8 bg-gray-50 rounded-3xl border border-gray-200">

                    <div class="flex items-center gap-5">

                        <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>

                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">
                                <?php the_author(); ?>
                            </h3>

                            <p class="text-gray-600 mt-2">
                                <?php the_author_meta('description'); ?>
                            </p>
                        </div>

                    </div>

                </div>

            </main>

            <!-- SIDEBAR -->
            <aside class="lg:col-span-4 space-y-8">

                <!-- SEARCH -->
                <div class="bg-gray-50 rounded-2xl border border-gray-200 p-6">

                    <h3 class="text-lg font-semibold text-gray-900 mb-4">
                        Search
                    </h3>

                    <?php get_search_form(); ?>

                </div>

                <!-- RECENT POSTS -->
                <div class="bg-gray-50 rounded-2xl border border-gray-200 p-6">

                    <h3 class="text-lg font-semibold text-gray-900 mb-5">
                        Recent Posts
                    </h3>

                    <?php
                    $recent = new WP_Query([
                        'posts_per_page' => 5
                    ]);

                    if($recent->have_posts()):
                        while($recent->have_posts()):
                            $recent->the_post();
                    ?>

                    <a href="<?php the_permalink(); ?>" class="block mb-5 group">

                        <h4 class="font-medium text-gray-800 group-hover:text-[#4d7c0f] transition">
                            <?php the_title(); ?>
                        </h4>

                        <p class="text-sm text-gray-500 mt-1">
                            <?php echo get_the_date(); ?>
                        </p>

                    </a>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                </div>

                <!-- CATEGORIES -->
                <div class="bg-gray-50 rounded-2xl border border-gray-200 p-6">

                    <h3 class="text-lg font-semibold text-gray-900 mb-5">
                        Categories
                    </h3>

                    <ul class="space-y-3 text-gray-600">

                        <?php wp_list_categories([
                            'title_li' => ''
                        ]); ?>

                    </ul>

                </div>

            </aside>

        </div>

    </div>

</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>