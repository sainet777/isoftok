<?php get_header(); ?>

<main class="page-content" style="margin-top: 100px; padding: 40px 20px;">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title" style="color: #1e3a8a; font-size: 48px; margin-bottom: 40px;">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="page-thumbnail" style="margin-bottom: 40px;">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; border-radius: 12px;')); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="font-size: 18px; line-height: 1.8; color: #333;">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
