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
        
        // activate custom settings
        add_action('admin_init', 'sunrise_custom_settings');
    
    }

    add_action('admin_menu', 'sunrise_add_admin_page');

    function sunrise_custom_settings()
    {
        register_setting('sunrise-settings-group', 'first_name');
        add_settings_section('sunrise-sidebar-options', 'Sidebar Options', 'sunrise_sidebar_options', 'jahangir_sunrise');
    
        add_settings_field('sidebar-name', 'Frist name', 'sunrise_sidebar_name', 'jahangir_sunrise', 'sunrise-sidebar-options');
    
    }

    function sunrise_sidebar_options()
    {
        echo 'Customize your sidebar';
    }

    function sunrise_sidebar_name()
    {
        $firstName = esc_attr( get_option('first_name') );
        echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First name" />';
    }

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
