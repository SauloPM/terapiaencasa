        
        <!-- ────────────── -->
        <!--     FOOTER     -->
        <!-- ────────────── -->

        <footer id="footer">

            <!-- Copyright -->
            <div class="copyright">&copy; Terapiaencasa.es <?php echo date("Y"); ?></div>

            <!-- Menú de navegación -->
            <?php
                wp_nav_menu(

                    array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'legal',
                        'container' => '',
                    )
                );
            ?>
        </footer>
    </div>

    <?php wp_footer(); ?>

</body>
</html>