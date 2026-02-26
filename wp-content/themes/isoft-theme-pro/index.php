<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/isoft.png');">
    <div class="hero-content">
        <h1>
            Przedsiębiorstwo
            <span>SPOŁECZNE</span>
        </h1>
        <a href="#o-nas" class="btn-primary">Zobacz więcej</a>
    </div>
</section>

<!-- About Section -->
<section class="about-section" id="o-nas">
    <div class="about-container">
        <div class="about-left">
            <div class="about-label">O firmie</div>
            <h2 class="about-title">Wiedza kluczem sukcesu twojej Firmy</h2>
            <a href="#oferta" class="btn-primary">Zobacz więcej</a>
        </div>
        <div class="about-right">
            <p class="about-text">
                Jako Akademia Edukacyjna specjalizujemy się w prowadzeniu szkoleń dla
                pracowników firm z sektora MŚP, jak i korporacji na różnych szczeblach
                organizacji. Nasza oferta obejmuje szereg szkoleń i projektów dofinansowanych
                z środków unijnych.
            </p>
            <p class="about-text">
                Celem warsztatów, jest podnoszenie kompetencji uczestników z różnych dziedzin
                poprzez rozwój zawodowy oraz rozwój osobisty. Przygotowując szkolenia
                wykonujemy szczegółową analizę potrzeb Klienta, dzięki czemu szkolenia
                przynoszą wymierne korzyści dla uczestników.
            </p>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" id="oferta">
    <div class="services-header">
        <div class="services-decorator">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <h2 class="services-title">W czym pomagamy</h2>
    </div>

    <div class="services-grid">
        <!-- Certyfikaty -->
        <div class="service-card">
            <div class="service-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/isoft1a.png" alt="Certyfikaty">
            </div>
            <h3>Certyfikaty</h3>
            <ul class="service-list">
                <li>Egzaminy ECDL - Base Standard, Advanced</li>
                <li>Egzaminy VCC - Vocational Competence Certificate</li>
                <li>Egzaminy EJL i ESL - European Junior Logistician, European Senior Logistician</li>
            </ul>
        </div>

        <!-- Szkolenia -->
        <div class="service-card">
            <div class="service-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/isoft1b.png" alt="Szkolenia">
            </div>
            <h3>Szkolenia</h3>
            <ul class="service-list">
                <li>Szkolenia Sprzedaż i marketing</li>
                <li>Szkolenia Prawo, Finanse, Księgowość</li>
                <li>Szkolenia HR</li>
                <li>Szkolenia Administracja</li>
            </ul>
            <a href="#szkolenia" class="service-link">
                POKAŻ WIĘCEJ
                <span>↓</span>
            </a>
        </div>

        <!-- Projekty UE -->
        <div class="service-card">
            <div class="service-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/isoft1c.png" alt="Projekty UE">
            </div>
            <h3>Projekty UE</h3>
            <ul class="service-list">
                <li>Projekty zrealizowane</li>
                <li>Pozyskiwanie Funduszy Krajowych i Unijnych</li>
            </ul>
        </div>
    </div>
</section>

<!-- WordPress Loop for Posts -->
<?php if (have_posts()) : ?>
    <section class="blog-section container">
        <h2>Aktualności</h2>
        <div class="posts-grid">
            <?php while (have_posts()) : the_post(); ?>
                <article class="post-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>

                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="post-meta">
                        <span><?php echo get_the_date(); ?></span>
                    </div>
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="read-more">Czytaj więcej →</a>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="pagination">
            <?php
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('← Poprzednia', 'isoft-theme'),
                'next_text' => __('Następna →', 'isoft-theme'),
            ));
            ?>
        </div>
    </section>
<?php else : ?>
    <section class="no-posts container">
        <p>Brak wpisów do wyświetlenia.</p>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
