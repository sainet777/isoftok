<?php
/*
Template Name: Homepage Template
*/
get_header();
?>

<!-- Hero Section -->
<section class="hero">
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

<!-- Why Us Section -->
<section class="why-us-section" id="dlaczego-my">
    <div class="section-header">
        <div class="services-decorator">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <h2 class="section-title">Dlaczego my?</h2>
    </div>

    <div class="why-us-container">
        <div class="why-us-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/isoft1e.png" alt="Personalizacja szkoleń">
        </div>
        <div class="why-us-content">
            <h3>Personalizacja szkoleń</h3>
            <ul class="checkmark-list">
                <li>Indywidualne podejście do każdego Klienta.</li>
                <li>Opracowanie trenerskiego feedback'u i rekomendacji szkoleniowych</li>
                <li>30- dniowe konsultacje po warsztatach z trenerem.</li>
            </ul>
        </div>
    </div>
</section>

<!-- Team Trainers Section -->
<section class="trainers-section" id="trenerzy">
    <div class="trainers-container">
        <div class="trainers-content">
            <h3>Trenerzy</h3>
            <ul class="checkmark-list">
                <li>Certyfikowani trenerzy i egzaminatorzy VCC, AutoCAD, ECDL, certyfikowani mistrzowie NLP</li>
                <li>Doradcy w zakresie pozyskiwania Funduszy Unijnych</li>
                <li>Akredytowani konsultanci metody Extended DISC® oraz Belbin Team Roles®.</li>
            </ul>
        </div>
        <div class="trainers-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/isoft1f.png" alt="Trenerzy">
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section" id="zespol">
    <div class="team-container">
        <div class="team-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/isoft1g.png" alt="Zespół">
        </div>
        <div class="team-content">
            <h3>Zespół</h3>
            <ul class="checkmark-list">
                <li>Licencjonowani Trenerzy Zarządzania Projektami IPMA Polska</li>
                <li>Wykładowcy wyższych uczelni współpracujący z okręgowymi komisjami egzaminacyjnymi</li>
                <li>Praktycy, specjaliści, analitycy, informatycy, psycholodzy</li>
            </ul>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section class="experience-section" id="doswiadczenie">
    <div class="experience-container">
        <div class="experience-content">
            <h3>Doświadczenie</h3>
            <ul class="checkmark-list">
                <li>Doświadczeni i zaangażowani organizatorzy szkoleń</li>
                <li>Autorskie programy szkoleniowe</li>
                <li>Wysoka efektywność zajęć pozwala uczestnikom na wykorzystanie zdobytej wiedzy i umiejętności w codziennej pracy.</li>
            </ul>
        </div>
        <div class="experience-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/isoft1h.png" alt="Doświadczenie">
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="kontakt-cta">
    <div class="cta-container">
        <div class="cta-image">
            <div class="cta-decorator">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/isoft1i.png" alt="Kontakt">
        </div>
        <div class="cta-content">
            <p class="cta-text">
                Oferujemy wynajem kompleksowo wyposażonych sal szkoleniowych i systemów do bezprzewodowej transmisji głosu Tour Guide. W tym zakresie współpracujemy min. z firmami zajmującymi się organizacją konferencji, sympozjów, kongresów, spotkań biznesowych.
            </p>
            <h3 class="cta-title">Zapraszamy do współpracy</h3>
            <div class="cta-logo">
                <span class="logo-i">i</span><span class="logo-soft">SOFT</span>
            </div>
        </div>
    </div>
</section>

<!-- Trusted Partners Section -->
<section class="partners-section" id="zaufali-nam">
    <div class="section-header">
        <div class="services-decorator">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <h2 class="section-title">Zaufali nam</h2>
    </div>
    <div class="partners-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/isoft1j.png" alt="Zaufali nam - partnerzy" class="partners-image">
    </div>
</section>

<!-- What Makes Us Different Section -->
<section class="features-section" id="co-nas-wyroznia">
    <h2 class="features-title">Co nas wyróżnia?</h2>
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon">📚</div>
            <h3>Personalizacja szkoleń</h3>
            <p>Wychodząc naprzeciw oczekiwań klientów starannie przygotowujemy programy szkoleniowe tak aby szkolenie było idealną odpowiedzią na wymogi uczestników. Wyróżnia nas prowadzana indywidualna analiza potrzeb Klienta, na podstawie której dostosowujemy charakter szkolenia do oczekiwań uczestników, uwzględniając ich kompetencje. Dzięki takiemu procesowi gwarantujemy sukces i pełne zadowolenie uczestnika szkolenia.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">👥</div>
            <h3>Trenerzy</h3>
            <p>Pragnąc zapewnić naszym klientom wysoką jakość organizowanych przez nas szkoleń współpracujemy z ekspertami z wieloletnim doświadczeniem w swoich dziedzinach. Praktycy, specjaliści, informatycy, certyfikowani trenerzy i egzaminatorzy to nasz główny aut.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">👔</div>
            <h3>Zespół</h3>
            <p>Największą wartością naszej firmy to zespół – który tworzą ludzie z pasją i wielkim zaangażowaniem. To profesjonaliści, eksperci w swojej dziedzinie pracy. Jesteśmy zespołem który opiera rozwiązania na doświadczeniach i efektywności.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">✅</div>
            <h3>Doświadczenie</h3>
            <p>Autorskie programy szkoleniowe opierają się na wiedzy i dokonaniach uznanych trenerów w swoich dziedzinach gwarantują nam najwyższą jakość świadczonych usług. Wysoka efektywność zajęć pozwala uczestnikom na wykorzystanie zdobytej wiedzy i umiejętności w codziennej pracy.</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
