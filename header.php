<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link www.freshttheme.com
 * @package Fresh Theme
 */

?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
<!--         <title>Fresh theme</title> -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon"/>

        <script type="text/javascript">
            var templateUrl = '<?= get_bloginfo("template_url"); ?>';
        </script>

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

    	<header>
    		<?php
                wp_nav_menu(
    			     array(
    	    			'container'=> '',
    	    			'container_class'=> '',
    	    			'container_id'=> '',
    	    			'menu_class'=> '',
    	    			'menu_id'=> '',
    	    			'theme_location' => 'primary-menu'
    			     )
		        );
                wp_nav_menu(
                     array(
                        'container'=> '',
                        'container_class'=> '',
                        'container_id'=> '',
                        'menu_class'=> '',
                        'menu_id'=> '',
                        'theme_location' => 'filter-menu'
                     )
                );
            ?>​

            <?php locate_template( 'template-parts/categories.php', true ); ?>

    	</header>

        <main>
