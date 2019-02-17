<?php

    /*
    @package sunrise-theme
    =================
    Admin Page
    =================
    */
    function sunrise_add_admin_page()
    {
        // generate sunrise admin page
        add_menu_page( 'Sunrise Theme Options', 'Sunrise', 'manage_options', 'jahangir_sunrise', 'sunrise_theme_create_page', get_template_directory_uri().'/img/sunrise-icon.png', 110 );
        
        // generate sunrise sub menu page
        add_submenu_page('jahangir_sunrise', 'Sunrise Theme Options', 'Settings', 'manage_options', 'jahangir_sunrise', 'sunrise_theme_create_page');
        add_submenu_page('jahangir_sunrise', 'Sunrise Theme Options  CSS', 'Custom CSS', 'manage_options', 'jahangir_sunrise_css', 'sunrise_theme_settings_page');
    }

    add_action('admin_menu', 'sunrise_add_admin_page');

    function sunrise_theme_create_page()
    {
        // generation of our admin page
        require_once(get_template_directory().'/inc/templates/sunrise-admin.php');
    }

    function sunrise_theme_settings_page()
    {
        // generation of our sub menu page
        require_once(get_template_directory().'/inc/templates/sunrise-admin.php');
    }
