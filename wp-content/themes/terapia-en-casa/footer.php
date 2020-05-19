        
        <!-- ────────────── -->
        <!--     FOOTER     -->
        <!-- ────────────── -->

        <section id="contacto">

            <h2 class="titulo-seccion">Contacto</h2>

            <?php echo do_shortcode( '[contact-form-7 id="84" title="Formulario de contacto"]' ); ?>

        </section>

        <footer id="footer">

            <!-- Enlaces a RRSS -->
            <?php dynamic_sidebar( 'pie-de-pagina' ); ?>

            <!-- Legal -->

            <div class="legal">
                <div class="copyright">&copy; Terapia en casa <?php echo date("Y"); ?></div>
                <div>
                    <a href="" class="enlace">Política de privacidad</a>
                    <a href="" class="enlace">Política de cookies</a>
                </div>
            </div>

        </footer>
    </div>

    <?php wp_footer(); ?>

</body>
</html>