<?php

if ( class_exists( 'ObloPlugin' ) && class_exists( 'ACF' ) && class_exists( 'OCDI_Plugin' ) ) {

function oblo_ocdi_import_files() {
    return array(
        array(
            'import_file_name'             => esc_attr__( 'Default Demo', 'oblo' ),
            'categories'                   => array( esc_attr__( 'Main', 'oblo' ) ),
            'import_file_url'            => OBLO_EXTRA_PLUGINS_DIRECTORY . '/normal/ocdi-import/demo/00/content.xml',
            'preview_url'                  => 'https://1.envato.market/c/1790164/275988/4415?u=https://themeforest.net/item/oblo-portfolio-showcase-wordpress-theme/full_screen_preview/31478022',
            'import_preview_image_url'     => OBLO_EXTRA_PLUGINS_DIRECTORY . '/normal/ocdi-import/demo/00/preview.jpg',
        ),
        array(
            'import_file_name'             => esc_attr__( 'Creative Portfolio', 'oblo' ),
            'categories'                   => array( esc_attr__( 'Additional', 'oblo' ) ),
            'import_file_url'            => OBLO_EXTRA_PLUGINS_DIRECTORY . '/normal/ocdi-import/demo/04/content.xml',
            'preview_url'                  => 'https://1.envato.market/c/1790164/275988/4415?u=https://themeforest.net/item/oblo-portfolio-showcase-wordpress-theme/full_screen_preview/31478022',
            'import_preview_image_url'     => OBLO_EXTRA_PLUGINS_DIRECTORY . '/normal/ocdi-import/demo/04/preview.jpg',
        ),
        array(
            'import_file_name'             => esc_attr__( 'Creative Agency', 'oblo' ),
            'categories'                   => array( esc_attr__( 'Additional', 'oblo' ) ),
            'import_file_url'            => OBLO_EXTRA_PLUGINS_DIRECTORY . '/normal/ocdi-import/demo/03/content.xml',
            'preview_url'                  => 'https://1.envato.market/c/1790164/275988/4415?u=https://themeforest.net/item/oblo-portfolio-showcase-wordpress-theme/full_screen_preview/31478022',
            'import_preview_image_url'     => OBLO_EXTRA_PLUGINS_DIRECTORY . '/normal/ocdi-import/demo/03/preview.jpg',
        ),
        array(
            'import_file_name'             => esc_attr__( 'Creative Photography', 'oblo' ),
            'categories'                   => array( esc_attr__( 'Additional', 'oblo' ) ),
            'import_file_url'            => OBLO_EXTRA_PLUGINS_DIRECTORY . '/normal/ocdi-import/demo/01/content.xml',
            'preview_url'                  => 'https://1.envato.market/c/1790164/275988/4415?u=https://themeforest.net/item/oblo-portfolio-showcase-wordpress-theme/full_screen_preview/31478022',
            'import_preview_image_url'     => OBLO_EXTRA_PLUGINS_DIRECTORY . '/normal/ocdi-import/demo/01/preview.jpg',
        ),
        array(
            'import_file_name'             => esc_attr__( 'Minimalist Portfolio', 'oblo' ),
            'categories'                   => array( esc_attr__( 'Additional', 'oblo' ) ),
            'import_file_url'            => OBLO_EXTRA_PLUGINS_DIRECTORY . '/normal/ocdi-import/demo/02/content.xml',
            'preview_url'                  => 'https://1.envato.market/c/1790164/275988/4415?u=https://themeforest.net/item/oblo-portfolio-showcase-wordpress-theme/full_screen_preview/31478022',
            'import_preview_image_url'     => OBLO_EXTRA_PLUGINS_DIRECTORY . '/normal/ocdi-import/demo/02/preview.jpg',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'oblo_ocdi_import_files' );

function oblo_ocdi_after_import_setup( $selected_import ) {

    $front_page_id = get_page_by_title( 'Home' );
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    if ( 'Minimalist Portfolio' === $selected_import['import_file_name'] ) {
        $front_page_id = get_page_by_title( 'Home (Photography)' );
        $main_menu = get_term_by( 'name', 'PhotographerMenu', 'nav_menu' );
    }

    if ( 'Creative Agency' === $selected_import['import_file_name'] ) {
        $front_page_id = get_page_by_title( 'Home (Agency)' );
        $main_menu = get_term_by( 'name', 'AgencyMenu', 'nav_menu' );
    }

    if ( 'Creative Portfolio' === $selected_import['import_file_name'] ) {
        $front_page_id = get_page_by_title( 'Home (Portfolio)' );
        $main_menu = get_term_by( 'name', 'MenuPortfolio', 'nav_menu' );
    }

    if ( 'Default Demo' === $selected_import['import_file_name'] ) {
        $front_page_id = get_page_by_title( 'Home Parallax Slider' );
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    }

    set_theme_mod( 'nav_menu_locations', array(
        'primary' => $main_menu->term_id,
    ) );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'posts_per_page', 6 );

    $ocdi_fields_static = array(
        'options_header_logo_img' => 561,
        '_options_header_logo_img' => 'field_5d11763c9ed10',
        'options_header_logo_img_d' => '',
        '_options_header_logo_img_d' => 'field_5ea9898567643',
        'options_header_logo_size' => '',
        '_options_header_logo_size' => 'field_5fa7fbd7c1c4d',
        'options_header_logo_size_mob' => '',
        '_options_header_logo_size_mob' => 'field_5fa7fcc0c1c4e',
        'options_menu_type' => 2,
        '_options_menu_type' => 'field_5d2799da7df5b',
        'options_menu_items_h_size' => '',
        '_options_menu_items_h_size' => 'field_5fa8018e1d4eb',
        'options_menu_items_size_h_mob' => '',
        '_options_menu_items_size_h_mob' => 'field_5fa801b81d4ed',
        'options_footer_text' => '© 2021 OBLO',
        '_options_footer_text' => 'field_60489c0fcaa3f',
        'options_social_links_type' => 'symbols',
        '_options_social_links_type' => 'field_5eadb9ddcf56e',
        'options_social_links' => 4,
        '_options_social_links' => 'field_5b68ccabc1b63',
        'options_subscribe_form' => 'null',
        '_options_subscribe_form' => 'field_5ef62a14aa6a3',
        'options_blog_title' => '',
        '_options_blog_title' => 'field_5e5e39b87f0e0',
        'options_post_page' => '',
        '_options_post_page' => 'field_5d29eb446dca9',
        'options_blog_categories' => 1,
        '_options_blog_categories' => 'field_5b81b6d930cb9',
        'options_blog_excerpt' => 0,
        '_options_blog_excerpt' => 'field_5b81b7ca30cba',
        'options_social_share' => 'a:5:{i:0;s:8:"facebook";i:1;s:7:"twitter";i:2;s:8:"linkedin";i:3;s:6:"reddit";i:4;s:9:"pinterest";}',
        '_options_social_share' => 'field_5c610c399cf20',
        'options_portfolio_page' => '',
        '_options_portfolio_page' => 'field_5d29e1a48ac41',
        'options_p404_content' => 'The page you\'re looking for doesn\'t exist or has been moved.',
        '_options_p404_content' => 'field_5d180feb59b80',
        'options_bg_image' => '',
        '_options_bg_image' => 'field_5d2a5bab8dc53',
        'options_preloader_logo_size' => '',
        '_options_preloader_logo_size' => 'field_5fa7fd943064a',
        'options_disable_preloader' => 0,
        '_options_disable_preloader' => 'field_5e7d27a0e322a',
        'options_social_links_0_icon_label' => 'Instagram',
        '_options_social_links_0_icon_label' => 'field_5d879352bc7a2',
        'options_social_links_0_name' => 'Instagram',
        '_options_social_links_0_name' => 'field_5ef614b63614e',
        'options_social_links_0_url' => 'https://instagram.com/',
        '_options_social_links_0_url' => 'field_5b68ccd7c1b65',
        'options_social_links_1_icon_label' => 'Facebook',
        '_options_social_links_1_icon_label' => 'field_5d879352bc7a2',
        'options_social_links_1_name' => 'Facebook',
        '_options_social_links_1_name' => 'field_5ef614b63614e',
        'options_social_links_1_url' => 'https://facebook.com/',
        '_options_social_links_1_url' => 'field_5b68ccd7c1b65',
        'options_social_links_2_icon_label' => 'Twitter',
        '_options_social_links_2_icon_label' => 'field_5d879352bc7a2',
        'options_social_links_2_name' => 'Twitter',
        '_options_social_links_2_name' => 'field_5ef614b63614e',
        'options_social_links_2_url' => 'https://twitter.com/',
        '_options_social_links_2_url' => 'field_5b68ccd7c1b65',
        'options_social_links_3_icon_label' => 'Linkedin',
        '_options_social_links_3_icon_label' => 'field_5d879352bc7a2',
        'options_social_links_3_name' => 'Linkedin',
        '_options_social_links_3_name' => 'field_5ef614b63614e',
        'options_social_links_3_url' => 'https://linkedin.com/',
        '_options_social_links_3_url' => 'field_5b68ccd7c1b65',
        'options_social_links_0_icon' => 'fa fa-instagram',
        '_options_social_links_0_icon' => 'field_5eadbff631a92',
        'options_social_links_1_icon' => 'fa fa-facebook',
        '_options_social_links_1_icon' => 'field_5eadbff631a92',
        'options_social_links_2_icon' => 'fa fa-twitter',
        '_options_social_links_2_icon' => 'field_5eadbff631a92',
        'options_social_links_3_icon' => 'fa fa-linkedin',
        '_options_social_links_3_icon' => 'field_5eadbff631a92',
        'options_header_layout' => 0,
        '_options_header_layout' => 'field_6047f336daec0',
        'options_header_template' => 600,
        '_options_header_template' => 'field_6047f4160611f',
        'options_footer_layout' => 0,
        '_options_footer_layout' => 'field_6047f44e06120',
        'options_footer_template' => 712,
        '_options_footer_template' => 'field_6047f46706121',
        'options_footer_heading_title' => 'hello',
        '_options_footer_heading_title' => 'field_60489c2ccaa40',
        'options_footer_heading_subtitle' => 'Say',
        '_options_footer_heading_subtitle' => 'field_60489c3ccaa41',
        'options_footer_heading_description' => 'Aliquam erat volutpat. Quisque vitae odio at odio congue elementum. Fusce purus nibh, bibendum non vehicula id, pretium quis sem.',
        '_options_footer_heading_description' => 'field_60489c4acaa42',
        'options_footer_heading' => '',
        '_options_footer_heading' => 'field_5b68cceac1b66',
        'options_theme_ui' => 0,
        '_options_theme_ui' => 'field_607dcd3956c17',
        'options_primary_font_family' => 0,
        '_options_primary_font_family' => 'field_5b68cfc4906fc',
        'options_text_font_family' => 0,
        '_options_text_font_family' => 'field_5b68d188906fd',
        'options_text_color' => '',
        '_options_text_color' => 'field_60672b1d6115f',
        'options_theme_color' => '',
        '_options_theme_color' => 'field_60672bee61163',
        'options_base_bg_color' => '',
        '_options_base_bg_color' => 'field_5b68d509665d9',
        'options_extra_bg_color' => '',
        '_options_extra_bg_color' => 'field_60672b1b6115e',
        'options_extra_text_color' => '',
        '_options_extra_text_color' => 'field_60672b1f61160',
        'options_base_white_color' => '',
        '_options_base_white_color' => 'field_60672b2061161',
        'options_base_dark_color' => '',
        '_options_base_dark_color' => 'field_60672bec61162',
        'options_base_font_size' => '',
        '_options_base_font_size' => 'field_60672c8261165',
        'options_extra_font_size' => '',
        '_options_extra_font_size' => 'field_60672cb761166',
        'options_small_font_size' => '',
        '_options_small_font_size' => 'field_60672cd861167',
        'options_heading_font_size' => '',
        '_options_heading_font_size' => 'field_60672cef61168',
        'options_post_heading_font_size' => '',
        '_options_post_heading_font_size' => 'field_60672d3361169',
        'options_full_slider_font_size' => '',
        '_options_full_slider_font_size' => 'field_60672d726116a',
        'options_half_slider_font_size' => '',
        '_options_half_slider_font_size' => 'field_60672da76116b',
        'options_menu_items_size' => '',
        '_options_menu_items_size' => 'field_60672e186116c',
        'options_menu_items_size_mob' => '',
        '_options_menu_items_size_mob' => 'field_60677041e07fd',
        'options_sub_menu_items_size' => '',
        '_options_sub_menu_items_size' => 'field_60677075e07fe',
        'options_sub_menu_items_size_mob' => '',
        '_options_sub_menu_items_size_mob' => 'field_606770b9e07ff',
        'options_menu_btn_color' => '',
        '_options_menu_btn_color' => 'field_606782cbf0ddc',
        'options_menu_head_color' => '',
        '_options_menu_head_color' => 'field_606787b95943b',
        'options_menu_align' => 'left',
        '_options_menu_align' => 'field_608d3d8c48ba3',
    );
    $ocdi_fields_to_change = array();

    if( 'Minimalist Portfolio' === $selected_import['import_file_name'] ) {
        $ocdi_fields_to_change = array(
            'options_header_layout' => 1,
            '_options_header_layout' => 'field_6047f336daec0',
            'options_header_template' => 1856,
            '_options_header_template' => 'field_6047f4160611f',
            'options_footer_layout' => 1,
            '_options_footer_layout' => 'field_6047f44e06120',
            'options_footer_template' => 1851,
            '_options_footer_template' => 'field_6047f46706121',
            'options_theme_ui' => 0,
            '_options_theme_ui' => 'field_607dcd3956c17',
            'options_primary_font_family' => 778,
            '_options_primary_font_family' => 'field_5b68cfc4906fc',
            'options_text_font_family' => 778,
            '_options_text_font_family' => 'field_5b68d188906fd',
            'options_text_color' => '',
            '_options_text_color' => 'field_60672b1d6115f',
            'options_theme_color' => '',
            '_options_theme_color' => 'field_60672bee61163',
            'options_base_bg_color' => '#000000',
            '_options_base_bg_color' => 'field_5b68d509665d9',
            'options_extra_bg_color' => '#000000',
            '_options_extra_bg_color' => 'field_60672b1b6115e',
            'options_extra_text_color' => '',
            '_options_extra_text_color' => 'field_60672b1f61160',
            'options_base_white_color' => '',
            '_options_base_white_color' => 'field_60672b2061161',
            'options_base_dark_color' => '',
            '_options_base_dark_color' => 'field_60672bec61162',
            'options_base_font_size' => '',
            '_options_base_font_size' => 'field_60672c8261165',
            'options_extra_font_size' => '',
            '_options_extra_font_size' => 'field_60672cb761166',
            'options_small_font_size' => '',
            '_options_small_font_size' => 'field_60672cd861167',
            'options_heading_font_size' => '',
            '_options_heading_font_size' => 'field_60672cef61168',
            'options_post_heading_font_size' => '',
            '_options_post_heading_font_size' => 'field_60672d3361169',
            'options_full_slider_font_size' => '',
            '_options_full_slider_font_size' => 'field_60672d726116a',
            'options_half_slider_font_size' => '',
            '_options_half_slider_font_size' => 'field_60672da76116b',
            'options_menu_items_size' => '',
            '_options_menu_items_size' => 'field_60672e186116c',
            'options_menu_items_size_mob' => '',
            '_options_menu_items_size_mob' => 'field_60677041e07fd',
            'options_sub_menu_items_size' => '',
            '_options_sub_menu_items_size' => 'field_60677075e07fe',
            'options_sub_menu_items_size_mob' => '',
            '_options_sub_menu_items_size_mob' => 'field_606770b9e07ff',
            'options_menu_btn_color' => '',
            '_options_menu_btn_color' => 'field_606782cbf0ddc',
            'options_menu_head_color' => '',
            '_options_menu_head_color' => 'field_606787b95943b',
            'options_menu_font_weight' => '200',
            '_options_menu_font_weight' => 'field_6086d19ab1238',
            'options_menu_align' => 'left',
            '_options_menu_align' => 'field_608d3d8c48ba3',
        );
    }

    if( 'Creative Agency' === $selected_import['import_file_name'] ) {
        $ocdi_fields_to_change = array(
            'options_preloader_color' => '#ffffff',
            '_options_preloader_color' => 'field_608c707f85717',
            'options_preloader_height' => '1',
            '_options_preloader_height' => 'field_608c70a285718',
            'options_social_links_0_icon_label' => 'IG',
            '_options_social_links_0_icon_label' => 'field_5d879352bc7a2',
            'options_social_links_1_icon_label' => 'FB',
            '_options_social_links_1_icon_label' => 'field_5d879352bc7a2',
            'options_social_links_2_icon_label' => 'TW',
            '_options_social_links_2_icon_label' => 'field_5d879352bc7a2',
            'options_social_links_3_icon_label' => 'IN',
            '_options_social_links_3_icon_label' => 'field_5d879352bc7a2',
            'options_header_layout' => 1,
            '_options_header_layout' => 'field_6047f336daec0',
            'options_header_template' => 1514,
            '_options_header_template' => 'field_6047f4160611f',
            'options_footer_layout' => 1,
            '_options_footer_layout' => 'field_6047f44e06120',
            'options_footer_template' => 1509,
            '_options_footer_template' => 'field_6047f46706121',
            'options_theme_ui' => 1,
            '_options_theme_ui' => 'field_607dcd3956c17',
            'options_primary_font_family' => 660,
            '_options_primary_font_family' => 'field_5b68cfc4906fc',
            'options_text_font_family' => 660,
            '_options_text_font_family' => 'field_5b68d188906fd',
            'options_text_color' => '',
            '_options_text_color' => 'field_60672b1d6115f',
            'options_theme_color' => '',
            '_options_theme_color' => 'field_60672bee61163',
            'options_base_bg_color' => '',
            '_options_base_bg_color' => 'field_5b68d509665d9',
            'options_extra_bg_color' => '#010101',
            '_options_extra_bg_color' => 'field_60672b1b6115e',
            'options_extra_text_color' => '#676767',
            '_options_extra_text_color' => 'field_60672b1f61160',
            'options_base_white_color' => '',
            '_options_base_white_color' => 'field_60672b2061161',
            'options_base_dark_color' => '',
            '_options_base_dark_color' => 'field_60672bec61162',
            'options_base_font_size' => '',
            '_options_base_font_size' => 'field_60672c8261165',
            'options_extra_font_size' => '',
            '_options_extra_font_size' => 'field_60672cb761166',
            'options_small_font_size' => '',
            '_options_small_font_size' => 'field_60672cd861167',
            'options_heading_font_size' => '',
            '_options_heading_font_size' => 'field_60672cef61168',
            'options_post_heading_font_size' => '',
            '_options_post_heading_font_size' => 'field_60672d3361169',
            'options_full_slider_font_size' => '',
            '_options_full_slider_font_size' => 'field_60672d726116a',
            'options_half_slider_font_size' => '',
            '_options_half_slider_font_size' => 'field_60672da76116b',
            'options_menu_items_size' => '95',
            '_options_menu_items_size' => 'field_60672e186116c',
            'options_menu_items_size_mob' => '30',
            '_options_menu_items_size_mob' => 'field_60677041e07fd',
            'options_sub_menu_items_size' => '',
            '_options_sub_menu_items_size' => 'field_60677075e07fe',
            'options_sub_menu_items_size_mob' => '',
            '_options_sub_menu_items_size_mob' => 'field_606770b9e07ff',
            'options_menu_btn_color' => '#101017',
            '_options_menu_btn_color' => 'field_606782cbf0ddc',
            'options_menu_head_color' => '',
            '_options_menu_head_color' => 'field_606787b95943b',
            'options_menu_font_weight' => '400',
            '_options_menu_font_weight' => 'field_6086d19ab1238',
            'options_menu_align' => 'center',
            '_options_menu_align' => 'field_608d3d8c48ba3',
        );
    }

    if( 'Creative Portfolio' === $selected_import['import_file_name'] ) {
        $ocdi_fields_to_change = array(
            'options_header_layout' => 1,
            '_options_header_layout' => 'field_6047f336daec0',
            'options_header_template' => 1348,
            '_options_header_template' => 'field_6047f4160611f',
            'options_footer_layout' => 1,
            '_options_footer_layout' => 'field_6047f44e06120',
            'options_footer_template' => 1343,
            '_options_footer_template' => 'field_6047f46706121',
            'options_theme_ui' => 0,
            '_options_theme_ui' => 'field_607dcd3956c17',
            'options_primary_font_family' => 778,
            '_options_primary_font_family' => 'field_5b68cfc4906fc',
            'options_text_font_family' => 778,
            '_options_text_font_family' => 'field_5b68d188906fd',
            'options_text_color' => '',
            '_options_text_color' => 'field_60672b1d6115f',
            'options_theme_color' => '',
            '_options_theme_color' => 'field_60672bee61163',
            'options_base_bg_color' => '#050608',
            '_options_base_bg_color' => 'field_5b68d509665d9',
            'options_extra_bg_color' => '#050608',
            '_options_extra_bg_color' => 'field_60672b1b6115e',
            'options_extra_text_color' => '#c0c0c7',
            '_options_extra_text_color' => 'field_60672b1f61160',
            'options_base_white_color' => '',
            '_options_base_white_color' => 'field_60672b2061161',
            'options_base_dark_color' => '',
            '_options_base_dark_color' => 'field_60672bec61162',
            'options_base_font_size' => '',
            '_options_base_font_size' => 'field_60672c8261165',
            'options_extra_font_size' => '',
            '_options_extra_font_size' => 'field_60672cb761166',
            'options_small_font_size' => '',
            '_options_small_font_size' => 'field_60672cd861167',
            'options_heading_font_size' => '',
            '_options_heading_font_size' => 'field_60672cef61168',
            'options_post_heading_font_size' => '',
            '_options_post_heading_font_size' => 'field_60672d3361169',
            'options_full_slider_font_size' => '140',
            '_options_full_slider_font_size' => 'field_60672d726116a',
            'options_half_slider_font_size' => '',
            '_options_half_slider_font_size' => 'field_60672da76116b',
            'options_menu_items_size' => '112',
            '_options_menu_items_size' => 'field_60672e186116c',
            'options_menu_items_size_mob' => '36',
            '_options_menu_items_size_mob' => 'field_60677041e07fd',
            'options_sub_menu_items_size' => '',
            '_options_sub_menu_items_size' => 'field_60677075e07fe',
            'options_sub_menu_items_size_mob' => '',
            '_options_sub_menu_items_size_mob' => 'field_606770b9e07ff',
            'options_menu_btn_color' => '',
            '_options_menu_btn_color' => 'field_606782cbf0ddc',
            'options_menu_head_color' => '',
            '_options_menu_head_color' => 'field_606787b95943b',
            'options_menu_font_weight' => '800',
            '_options_menu_font_weight' => 'field_6086d19ab1238',
            'options_menu_align' => 'right',
            '_options_menu_align' => 'field_608d3d8c48ba3',
            'options_social_links_type' => 'icons',
            '_options_social_links_type' => 'field_5eadb9ddcf56e',
            'options_social_links_0_icon' => 'fab fa-instagram',
            '_options_social_links_0_icon' => 'field_5eadbff631a92',
            'options_social_links_1_icon' => 'fab fa-facebook',
            '_options_social_links_1_icon' => 'field_5eadbff631a92',
            'options_social_links_2_icon' => 'fab fa-twitter',
            '_options_social_links_2_icon' => 'field_5eadbff631a92',
            'options_social_links_3_icon' => 'fab fa-linkedin',
            '_options_social_links_3_icon' => 'field_5eadbff631a92',
        );
    }

    if( 'Default Demo' === $selected_import['import_file_name'] ) {
        $ocdi_fields_to_change = array(
            'options_header_layout' => 1,
            '_options_header_layout' => 'field_6047f336daec0',
            'options_header_template' => 600,
            '_options_header_template' => 'field_6047f4160611f',
            'options_footer_layout' => 1,
            '_options_footer_layout' => 'field_6047f44e06120',
            'options_footer_template' => 1838,
            '_options_footer_template' => 'field_6047f46706121',
            'options_theme_ui' => 0,
            '_options_theme_ui' => 'field_607dcd3956c17',
            'options_primary_font_family' => 0,
            '_options_primary_font_family' => 'field_5b68cfc4906fc',
            'options_text_font_family' => 0,
            '_options_text_font_family' => 'field_5b68d188906fd',
            'options_text_color' => '',
            '_options_text_color' => 'field_60672b1d6115f',
            'options_theme_color' => '',
            '_options_theme_color' => 'field_60672bee61163',
            'options_base_bg_color' => '',
            '_options_base_bg_color' => 'field_5b68d509665d9',
            'options_extra_bg_color' => '',
            '_options_extra_bg_color' => 'field_60672b1b6115e',
            'options_extra_text_color' => '',
            '_options_extra_text_color' => 'field_60672b1f61160',
            'options_base_white_color' => '',
            '_options_base_white_color' => 'field_60672b2061161',
            'options_base_dark_color' => '',
            '_options_base_dark_color' => 'field_60672bec61162',
            'options_base_font_size' => '',
            '_options_base_font_size' => 'field_60672c8261165',
            'options_extra_font_size' => '',
            '_options_extra_font_size' => 'field_60672cb761166',
            'options_small_font_size' => '',
            '_options_small_font_size' => 'field_60672cd861167',
            'options_heading_font_size' => '',
            '_options_heading_font_size' => 'field_60672cef61168',
            'options_post_heading_font_size' => '',
            '_options_post_heading_font_size' => 'field_60672d3361169',
            'options_full_slider_font_size' => '',
            '_options_full_slider_font_size' => 'field_60672d726116a',
            'options_half_slider_font_size' => '',
            '_options_half_slider_font_size' => 'field_60672da76116b',
            'options_menu_items_size' => '49',
            '_options_menu_items_size' => 'field_60672e186116c',
            'options_menu_items_size_mob' => '32',
            '_options_menu_items_size_mob' => 'field_60677041e07fd',
            'options_sub_menu_items_size' => '22',
            '_options_sub_menu_items_size' => 'field_60677075e07fe',
            'options_sub_menu_items_size_mob' => '22',
            '_options_sub_menu_items_size_mob' => 'field_606770b9e07ff',
            'options_menu_btn_color' => '',
            '_options_menu_btn_color' => 'field_606782cbf0ddc',
            'options_menu_head_color' => '',
            '_options_menu_head_color' => 'field_606787b95943b',
            'options_menu_font_weight' => '700',
            '_options_menu_font_weight' => 'field_6086d19ab1238',
            'options_menu_align' => 'center',
            '_options_menu_align' => 'field_608d3d8c48ba3',
            'options_social_links_type' => 'icons',
            '_options_social_links_type' => 'field_5eadb9ddcf56e',
            'options_social_links_0_icon' => 'fab fa-instagram',
            '_options_social_links_0_icon' => 'field_5eadbff631a92',
            'options_social_links_1_icon' => 'fab fa-facebook',
            '_options_social_links_1_icon' => 'field_5eadbff631a92',
            'options_social_links_2_icon' => 'fab fa-twitter',
            '_options_social_links_2_icon' => 'field_5eadbff631a92',
            'options_social_links_3_icon' => 'fab fa-linkedin',
            '_options_social_links_3_icon' => 'field_5eadbff631a92',
            'options_preloader_logo_size' => '',
            '_options_preloader_logo_size' => 'field_5fa7fd943064a',
            'options_disable_preloader' => 0,
            '_options_disable_preloader' => 'field_5e7d27a0e322a',
            'options_preload_logo_img' => 561,
            '_options_preload_logo_img' => 'field_612149b43f54f',
            'options_wooshop_sidebar' => 'right',
            '_options_wooshop_sidebar' => 'field_6127d9e62e80d',
            'options_wooshop_parallax' => 1,
            '_options_wooshop_parallax' => 'field_6127da2f2e80f',
            'options_wooshop_parallax_img' => 1216,
            '_options_wooshop_parallax_img' => 'field_6127da602e810',
            'options_wooshop_parallax_title' => 'Welcome <br>to Store',
            '_options_wooshop_parallax_title' => 'field_6127daa62e811',
        );
    }

    global $wpdb;
    foreach ( array_merge( $ocdi_fields_static, $ocdi_fields_to_change ) as $field => $value ) {
        if ( $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->options WHERE option_name = %s", $field ) ) == 0 ) {
            $wpdb->query( $wpdb->prepare( "INSERT INTO $wpdb->options ( option_name, option_value, autoload ) VALUES (%s, %s, 'no')", $field, $value ) );
        } else {
            $wpdb->query( $wpdb->prepare( "UPDATE $wpdb->options SET option_value = %s WHERE option_name = %s", $value, $field ) );
        }
    }

}
add_action( 'pt-ocdi/after_import', 'oblo_ocdi_after_import_setup' );

}
