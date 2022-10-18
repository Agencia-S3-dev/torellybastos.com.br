<?php

add_action('customize_register', 's3_customize_register');

function s3_customize_register($wp_customize)
{
       /*Redes Sociais*/
       $wp_customize->add_section(
        'social_media', array(
            'title' => 'Redes Sociais',
            'capability' => 'edit_theme_options',
            'priority' => 45,
            'description' => 'Permite você configurar os link para as redes sociais'
        )
    );
    $wp_customize->add_setting(
        'social_media_linkeidn', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'social_media_linkeidn', array(
            'label' => 'Link para Linkedin',
            'section' => 'social_media',
            'type' => 'text'
        )
    );    
    $wp_customize->add_setting(
        'social_media_facebook', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'social_media_facebook', array(
            'label' => 'Link para Facebook',
            'section' => 'social_media',
            'type' => 'text'
        )
    );
    $wp_customize->add_setting(
        'social_media_instagram', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'social_media_instagram', array(
            'label' => 'Link para Instagram',
            'section' => 'social_media',
            'type' => 'text'
        )
    );

    $wp_customize->add_section(
        'contatos', array(
            'title' => 'Contatos',
            'capability' => 'edit_theme_options',
            'priority' => 45,
            'description' => 'Permite você configurar os link para as contatos'
        )
    );
    $wp_customize->add_setting(
        'contato_iframe', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'contato_iframe', array(
            'label' => 'Mapa',
            'section' => 'contatos',
            'type' => 'text'
        )
    );
    $wp_customize->add_setting(
        'contato_endereco', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'contato_endereco', array(
            'label' => 'Endereço',
            'section' => 'contatos',
            'type' => 'text'
        )
    );
    $wp_customize->add_setting(
        'contato_email', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'contato_email', array(
            'label' => 'E-mail',
            'section' => 'contatos',
            'type' => 'text'
        )
    );
    $wp_customize->add_setting(
        'contato_fone', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'contato_fone', array(
            'label' => 'Número de telefone',
            'section' => 'contatos',
            'type' => 'text'
        )
    );
}