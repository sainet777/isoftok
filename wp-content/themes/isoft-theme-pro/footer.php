<footer>
    <div class="footer-container">
        <div class="footer-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="iSOFT" class="footer-logo">
            <div class="footer-links">
                <a href="#szkolenia">Szkolenia</a>
                <a href="#kontakt">Kontakt</a>
            </div>
            <div class="footer-links">
                <a href="#ochrona-danych">Ochrona danych osobowych</a>
                <a href="#polityka">Polityka prywatności</a>
            </div>
        </div>

        <div class="footer-center">
            <h3>Krótko o firmie ISOFT...</h3>
            <p>
                Jako Akademia Edukacyjna specjalizujemy się w prowadzeniu szkoleń dla
                pracowników firm z sektora MŚP, jak i korporacji na różnych szczeblach
                organizacji. Nasza oferta obejmuje szereg szkoleń i projektów
                dofinansowanych z środków unijnych. Celem warsztatów, jest podnoszenie
                kompetencji uczestników z różnych dziedzin poprzez rozwój zawodowy oraz
                rozwój osobisty. Przygotowując szkolenia wykonujemy szczegółową analizę
                potrzeb Klienta, dzięki czemu szkolenia przynoszą wymierne korzyści dla
                uczestników
            </p>
        </div>

        <div class="footer-right">
            <div class="footer-contact">
                <div class="contact-item">
                    <span class="contact-icon">📍</span>
                    <div>
                        <strong>ISOFT Spółka z o.o.</strong><br>
                        al. Sikorskiego 55<br>
                        35-304 Rzeszów
                    </div>
                </div>
                <div class="contact-item">
                    <span class="contact-icon">💬</span>
                    <div>
                        <strong>Tel: 530 527 223</strong><br>
                        E-mail: biuro@isoft.biz.pl
                    </div>
                </div>
            </div>
            <div class="footer-social">
                <a href="#" aria-label="Facebook"><span>f</span></a>
                <a href="#" aria-label="Instagram"><span>📷</span></a>
                <a href="#" aria-label="Google Plus"><span>G+</span></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> iSOFT - Przedsiębiorstwo Społeczne. Wszystkie prawa zastrzeżone.</p>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const menu = document.querySelector('nav ul');

    if (menuToggle && menu) {
        menuToggle.addEventListener('click', function() {
            menu.classList.toggle('active');
        });
    }
});
</script>

</body>
</html>
