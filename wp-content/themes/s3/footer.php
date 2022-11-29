<footer class="py-5 bg-secondary">
    <div class="container py-lg-5">
        <div class="row">
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.png" alt="">
                    </a>
                    <?php if (have_rows('redes_sociais', 'option')) : ?>
                        <nav class="nav mt-3">
                            <?php
                            while (have_rows('redes_sociais', 'option')) : the_row();
                            ?>
                                <a href="<?php echo get_sub_field("url")["url"] ?>" class="nav-link font-24 ps-0" aria-current="page" target="<?php echo get_sub_field("url")["target"] ?>">
                                    <?php the_sub_field("icone"); ?>
                                </a>
                            <?php endwhile; ?>
                        </nav>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-3">
                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'menu-footer-1',
                            'menu_class'        => 'nav flex-column menuFooter navMenuScroll',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>
                    </div>
                    <div class="col-md-3 mb-4 mb-lg-0">
                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'menu-footer-2',
                            'menu_class'        => 'nav flex-column menuFooter navMenuScroll',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav">
                            <?php if (have_rows('informacoes_da_empresa', 'option')) : ?>
                                <?php
                                while (have_rows('informacoes_da_empresa', 'option')) : the_row();
                                ?>
                                    <li class="nav-item">
                                        <a href="<?php echo get_sub_field("link")["url"] ?>" class="nav-link text-white font-14 fw-light" target="<?php echo get_sub_field("link")["target"] ?>">
                                            <span class="text-primary me-1">
                                                <?php the_sub_field("icone"); ?>
                                            </span>
                                            <?php echo get_sub_field("link")["title"] ?>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php if (have_rows('informacoes_empresa', 'option')) : ?>
                                <?php
                                while (have_rows('informacoes_empresa', 'option')) : the_row();
                                ?>
                                    <li class="nav-item">
                                        <a href="<?php echo get_sub_field("url")["url"] ?>" class="d-flex align-items-start nav-link text-white font-14 fw-light" target="<?php echo get_sub_field("url")["target"] ?>">
                                            <span class="text-primary me-2">
                                                <?php the_sub_field("icone"); ?>
                                            </span>
                                            <?php echo get_sub_field("url")["title"] ?>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="copy" class="bg-primary py-3">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col">
                <div class="text-white font-12 fw-light">
                    Todos os Direitos Reservados
                </div>
            </div>
            <div class="col text-end">
                <a href="https://www.agencias3.com.br" target="_blank" title="Agência S3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-s3.png" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<?php wp_footer();
?>
</body>

</html>