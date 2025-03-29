<?php get_header(); ?>

<main class="container mx-auto p-4 min-h-screen">
    <h2 class="text-3xl font-bold mb-4">Latest Posts</h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="p-4 border-b">
            <h3 class="text-xl font-semibold">
                <a href="<?php the_permalink(); ?>" class="text-blue-600"><?php the_title(); ?></a>
            </h3>
            <p class="text-gray-700"><?php the_excerpt(); ?></p>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
