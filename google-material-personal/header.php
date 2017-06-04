<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> translate="no">

    <!-- Simple header with scrollable tabs. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <a href="<?php echo get_site_url(); ?>" class="main-title-link"><span class="mdl-layout-title"><?php echo get_bloginfo(); ?></span></a>
                <div class="mdl-layout-spacer"></div>
            </div>
            <!-- Tabs -->
            <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
                <?php
                $menu_items= wp_get_nav_menu_items( 'Main');
                foreach($menu_items as $menu_item){
                    $isactive='';

                    if(strcmp(get_page_link(),$menu_item->url)==0 ){
                        $isactive=' is-active';

                    }
                    if (strpos(strtolower(get_permalink()), strtolower($menu_item->title),0)!=false){

                        $isactive=' is-active';
                    }
                    echo '<a href="'.$menu_item->url.'" class="mdl-layout__tab'.$isactive.'">'.$menu_item->title.'</a>';

                }
                ?>
            </div>


        </header>

            <div class="page-ribbon"></div>

        <main class="mdl-layout__content">
            <div class="page-content " ><!-- Your content goes here -->
