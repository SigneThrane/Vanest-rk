<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
                    <div class="logo">
                     <img src="<?php the_field('logo'); ?>" alt="logo" class="center" />
                     <button id="book">BOOK NU</button>
                    </div>

                    <div id="nav">
                      <ul>
                        <li><a href="#">Forside</a></li>
                          <li><a href="#">Om Vanestærk</a></li>
                             <li><a href="#">Forløb og priser</a></li>
                                 <li><a href="#">Booking</a></li>
                                     <li><a href="#">Kontakt</a></li>       
                                        <li><a href="#">Shop</a></li>
                       </ul>
        
    <div class="Social-media">
      <a id="icon" href="https://www.facebook.com/"><font color="#000000"><i class="fab fa-facebook"></i></font></a>
      <a id="icon" href="https://www.instagram.com/"><font color="#000000"><i class="fab fa-instagram"></i></font></a>
    
    </div>
       

		</div><!-- .col-full -->
                    </div>

    </header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
