<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_filter( 'use_default_gallery_style', '__return_false' );

    //タイトル出力
    function wpbeg_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'wpbeg_title' );

    function hamburger_script(){
        wp_enqueue_style('destyle','https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css',array());
        wp_enqueue_style('Mplus','https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',array());
        wp_enqueue_style('style',get_template_directory_uri() .'/sass/style.css',array());
        wp_enqueue_script('minjs',get_template_directory_uri() .'/sass/jquery-3.6.0.min.js',array());
        wp_enqueue_script('script',get_template_directory_uri() .'/sass/script.js',array());
    }
    add_action('wp_enqueue_scripts', 'hamburger_script');

    // function hamburger_widgets_init() {
    //     register_sidebar (
    //         array(
    //             'name'          => 'カテゴリーウィジェット',
    //             'id'            => 'category_widget',
    //             'description'   => 'カテゴリー用ウィジェットです',
    //             'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //             'after_widget'  => '</div>',
    //             'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
    //             'after_title'   => "</h2>\n",
    //         )
    //     );
    // }
    // add_action( 'widgets_init', 'hamburger_widgets_init' );

    // register_nav_menus( array(
    //     'side-menu' => 'Sidebar Navigation',
    //     'footer-menu' => 'Footer Navigation',
    //   ) );
?>