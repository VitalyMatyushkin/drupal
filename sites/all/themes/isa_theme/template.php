<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function isa_theme_theme() {
    $items = array();

    $items['user_login'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'isa_theme') . '/templates',
        'template' => 'user-login',
        'preprocess functions' => array(
            'isa_theme_preprocess_user_login'
        ),
    );

    return $items;
}

function isa_theme_preprocess_user_login(&$vars) {
    $vars['intro_text'] = t('Login form');
}