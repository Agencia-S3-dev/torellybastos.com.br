<?php
// Register Custom Post Type
add_action('init', 's3_init');
function s3_init()
{
    s3_register_post_types();
    s3_register_taxonomies();
}
function s3_register_post_types()
{
    register_post_type(
        'banners',
        array(
            'labels' => array(
                'name' => 'Banners',
                'singular_name' => 'Banner',
                'add_new' => 'Adicionar Banner',
                'edit_item' => 'Editar Banner',
                'set_featured_image' => 'Adicionar Banner'
            ),
            'public' => false,
            'show_ui' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-images-alt2',
            'has_archive' => false,
            'supports' => array('title'),
        )
    );
}
function s3_register_taxonomies()
{
}

function s3_rename_post_label()
{
    global $menu;
    global $submenu;
    global $wp_post_types;
    $menu[5][0] = 'Blog';
    $menu[5][6] = 'dashicons-welcome-write-blog';
    $submenu[$menu[5][2]][5][0] = 'Blog';
    $submenu[$menu[5][2]][10][0] = 'Adicionar novo post';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Blog';
    $labels->add_new = 'Adicionar post';
    $labels->add_new_item = 'Adicionar post';
    $labels->not_found = 'Nenhum post cadastrado';
    $labels->not_found_in_trash = 'Nenhum post encontrado na lixeira.';

   
}
add_action('admin_menu', 's3_rename_post_label');
