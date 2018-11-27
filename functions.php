<?php 
    define('PATH', get_template_directory_uri());
    define('JS_PATH', PATH . '/js');

    add_action('wp_enqueue_scripts', 'nervrecords_scripts');
    add_action('init', 'init_service_type');
    add_action( 'init', 'gallery');
    add_theme_support('post-thumbnails');

    function nervrecords_scripts() {
        wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), null);
        wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css?family=Roboto|Rubik+Mono+One', array(), null);
        wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', array(), null);
        wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null);
        wp_enqueue_style('style', PATH . '/style.css', array(), null);
        wp_enqueue_style('responsive', PATH . '/css/responsive.css', array(), null);
        wp_enqueue_style('animate', PATH . '/css/animate.css', array(), null);
        wp_enqueue_style('fancybox', PATH . '/css/jquery.fancybox.min.css', array(), null);

        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.js', array(), null, false);
        wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), null, true);
        wp_enqueue_script ('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), null, true);
        wp_enqueue_script('youtube', 'https://www.youtube.com/iframe_api', array(), null, true);
        wp_enqueue_script('maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBrpwOEtZp9kSy0w0ml5sdwKRui1FPtXSo&libraries=places', array(), null, true);
        wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], null, true);
        wp_enqueue_script('fancybox', JS_PATH . '/jquery.fancybox.min.js', ['jquery'], null, true);
        
        wp_register_script('function', JS_PATH . '/functions.js');
        wp_localize_script('functions', 'WPURLS', array( 'siteurl' => get_option('siteurl') ));

        wp_enqueue_script('functions');
        wp_enqueue_script('main', JS_PATH . '/main.js', ['jquery'], null, true);
    }
    
    function init_service_type(){
        register_post_type('services', array(
            'labels'             => array(
                'name'               => 'Наши услуги', // Основное название типа записи
                'singular_name'      => 'Книга', // отдельное название записи типа Book
                'add_new'            => 'Добавить услугу',
                'add_new_item'       => 'Добавить новую услугу',
                'edit_item'          => 'Редактировать услугу',
                'new_item'           => 'Новая книга',
                'view_item'          => 'Посмотреть услугу',
                'search_items'       => 'Найти услугу',
                'not_found'          =>  'Услуг не найдено',
                'not_found_in_trash' => 'В корзине книг не найдено',
                'parent_item_colon'  => '',
                'menu_name'          => 'Наши услуги'

            ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => true,
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'dashicons-admin-tools',
            'supports'           => array('title','thumbnail','excerpt')
        ) );
    }

    function getServiceList() {
        $args = array(
            'orderby'   => 'title',
            'post_type' => 'services',
            'numberposts' => -1
        );

        return get_posts($args);
    }

    // Register Custom Post Type
    function gallery() {
        $labels = array(
            'name'                  => _x( 'galleries', 'Post Type General Name', 'sage' ),
            'singular_name'         => _x( 'gallery', 'Post Type Singular Name', 'sage' ),
            'menu_name'             => __( 'Галлерея', 'sage' ),
            'name_admin_bar'        => __( 'Галлереи', 'sage' ),
            'archives'              => __( 'Архив', 'sage' ),
            'attributes'            => __( 'Атрибуты', 'sage' ),
            'parent_item_colon'     => __( 'Родительская галерея:', 'sage' ),
            'all_items'             => __( 'Все галлереи', 'sage' ),
            'add_new_item'          => __( 'Добавить новую галерею', 'sage' ),
            'add_new'               => __( 'Добавить новую галерею', 'sage' ),
            'new_item'              => __( 'Новая галерея', 'sage' ),
            'edit_item'             => __( 'Редактировать галерею', 'sage' ),
            'update_item'           => __( 'Обновить галерею', 'sage' ),
            'view_item'             => __( 'Посмотреть галерею', 'sage' ),
            'view_items'            => __( 'Посмотреть галереи', 'sage' ),
            'search_items'          => __( 'Поиск галереи', 'sage' ),
            'not_found'             => __( 'Галерея не найдена', 'sage' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
            'featured_image'        => __( 'Featured Image', 'sage' ),
            'set_featured_image'    => __( 'Set featured image', 'sage' ),
            'remove_featured_image' => __( 'Remove featured image', 'sage' ),
            'use_featured_image'    => __( 'Use as featured image', 'sage' ),
            'insert_into_item'      => __( 'Insert into Gallery', 'sage' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Gallery', 'sage' ),
            'items_list'            => __( 'Galleries list', 'sage' ),
            'items_list_navigation' => __( 'Galleries list navigation', 'sage' ),
            'filter_items_list'     => __( 'Filter Galleries list', 'sage' ),
        );
        $args = array(
            'label'                 => __( 'gallery', 'sage' ),
            'description'           => __( 'gallery pages', 'sage' ),
            'labels'                => $labels,
            'supports'              => array( 'editor' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-format-gallery',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'gallery', $args );

    }

?>