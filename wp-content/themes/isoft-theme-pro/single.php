<?php get_header(); ?>

<main class="single-post" style="margin-top: 100px; padding: 40px 20px;">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title" style="color: #1e3a8a; font-size: 48px; margin-bottom: 20px;">
                        <?php the_title(); ?>
                    </h1>

                    <div class="entry-meta" style="color: #666; margin-bottom: 30px;">
                        <span>Opublikowano: <?php echo get_the_date(); ?></span>
                        <span> | </span>
                        <span>Autor: <?php the_author(); ?></span>
                    </div>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail" style="margin-bottom: 40px;">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; border-radius: 12px;')); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="font-size: 18px; line-height: 1.8; color: #333;">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer" style="margin-top: 40px; padding-top: 40px; border-top: 2px solid #f0f0f0;">
                    <?php
                    the_tags('<div class="tags" style="margin-bottom: 20px;"><strong>Tagi:</strong> ', ', ', '</div>');
                    ?>

                    <div class="post-navigation" style="display: flex; justify-content: space-between; gap: 20px;">
                        <div class="nav-previous">
                            <?php previous_post_link('%link', '← %title'); ?>
                        </div>
                        <div class="nav-next">
                            <?php next_post_link('%link', '%title →'); ?>
                        </div>
                    </div>
                </footer>
            </article>

            <?php
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
