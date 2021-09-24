<?php
/**
 * questo è il file functions.php che serve per tutto
 * @link
 * 
 */

 // definizione del tema
 define('THEME_VERSION', '1.0');



 if( ! function_exists('martinagrandi_setup')) {
     function martinagrandi_setup() {
         // no parentesi aperte in php!, qui mettiamo tutte le funzioni del nostro tema

         require get_template_directory() . '/inc/extend-functions/add-theme-support.php';
     }
 }
 add_action('after_setup_theme', 'martinagrandi-setup');