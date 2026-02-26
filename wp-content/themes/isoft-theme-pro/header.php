<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="header-container">
        <a href="<?php echo home_url('/'); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="iSOFT" class="logo-image">
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
            ☰
        </button>

        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'main-menu',
                'fallback_cb'    => 'isoft_default_menu'
            ));
            ?>
        </nav>
    </div>
</header>

<?php
// Funkcja fallback dla menu
function isoft_default_menu() {
    echo '<ul class="main-menu">';
    echo '<li><a href="' . home_url('/') . '">Strona Główna</a></li>';
    echo '<li><a href="#o-nas">O nas</a></li>';
    echo '<li><a href="#oferta">Oferta</a></li>';
    echo '<li><a href="#szkolenia">Szkolenia</a></li>';
    echo '<li><a href="#akademia">Akademia edukacyjna</a></li>';
    echo '<li><a href="#projekty">Projekty Unijne</a></li>';
    echo '<li><a href="#praca">Praca</a></li>';
    echo '<li><a href="#przedsiebiorstwo">Przedsiębiorstwo społeczne</a></li>';
    echo '<li><a href="#kontakt">Kontakt</a></li>';
    echo '</ul>';
}
?>
