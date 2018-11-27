<?php 
    define('PATH', get_template_directory_uri());
    define('JS_PATH', PATH . '/js');

    wp_localize_script('functions', 'WPURLS', array( 'siteurl' => get_option('siteurl') ));
    add_action('wp_enqueue_scripts', 'nervrecords_scripts');
    
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
        
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.js', array(), null);
        wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), null);
        wp_enqueue_script ('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), null);
        wp_enqueue_script('youtube', 'https://www.youtube.com/iframe_api', array(), null);
        wp_enqueue_script('maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBrpwOEtZp9kSy0w0ml5sdwKRui1FPtXSo&libraries=places', array(), null);
        wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], null);
        wp_enqueue_script('fancybox', JS_PATH . '/jquery.fancybox.min.js', ['jquery'], null);
        wp_enqueue_script('functions', JS_PATH . '/functions.js', ['jquery'], null);
        wp_enqueue_script('main', JS_PATH . '/main.js', ['jquery'], null);
    }
?>