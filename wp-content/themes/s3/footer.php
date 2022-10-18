<footer class="bg-dark">
    <div class="">
        <div class="pt-5">
            <div class=" pt-5 container">
                <hr class="hr-footer">
            </div>
            <div class=" pt-5 pb-5 mb-5 contato-footer container col-md-12 d-flex">
                <div class="col-md-5">
                    <div class="mb-5 logo-footer">
                        <a href="<?php echo home_url(); ?>" title="<?php bloginfo("name"); ?>">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.png" alt="<?php bloginfo("name"); ?>">
                        </a>
                    </div>

                    <div class="text-white font-24 mb-5">
                        <?php if (have_rows('redes_sociais', 'option')) : ?>
                            <ul class="nav mt-3">
                                <?php
                                while (have_rows('redes_sociais', 'option')) : the_row();
                                ?>
                                    <li class="nav-item">
                                        <a href="<?php echo get_sub_field("link")["url"] ?>" class="icon-span text-primary p-2" target="<?php echo get_sub_field("link")["target"] ?>">
                                            <?php the_sub_field("icone"); ?>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-2">
                    <ul class="text-white font-14 list-inline font justify-content-center">
                        <li class="nav-item mb-3">
                            <?php
                            wp_nav_menu(array(
                                'theme_location'    => 'menu-desktop',
                                'menu_class'        => 'nav-link flex-column ',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ));
                            ?>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 mb-5">
                    <ul class="text-white font-14 list-inline font justify-content-center">
                        <li class="nav-item mb-3">
                            <?php
                            wp_nav_menu(array(
                                'theme_location'    => 'menu-desktop-two',
                                'menu_class'        => 'nav-link flex-column ',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ));
                            ?>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <?php if (have_rows('informacoes_empresa', 'option')) : ?>
                        <?php
                        while (have_rows('informacoes_empresa', 'option')) : the_row();
                        ?>
                            <div class="mb-3">
                                <a class="font-14 text-white text-decoration-none " href="<?php echo get_sub_field("url")["url"] ?>" target="<?php echo get_sub_field("url")["target"] ?>">
                                    <span class="text-primary padding-right-2"><?php the_sub_field("icone"); ?></span>
                                    <?php echo get_sub_field("url")["title"] ?>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class=" bg-primary">
            <div class="container col-12 d-flex pt-3 pb-3">
                <div class="col-md-6">
                    <p class="text-white font-16 font m-0">Todos os Direitos Reservados</p>
                </div>
                <div class="col-md-6 text-lg-end">
                    <a href="https://www.agencias3.com.br" tutle="Agência S3" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/S3-WHITE.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();
?>
</body>

</html>