<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<h1 class="logo logo-mobile" id="nav-toggle"></h1>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header class="site-header">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
			<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button"
                    data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
                <span class="site-mobile-title title-bar-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-text" rel="home"><?php bloginfo( 'name' ); ?></a>
                </span>
			</div>
		</div>	
		

		<div class="row">
			<div class="col span-1-of-1">
			<nav class="site-navigation top-bar" id="<?php foundationpress_mobile_menu_id(); ?>">
				<div class="top-bar-left">
					<div class="site-desktop-title top-bar-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
					</div>

				</div>
                <div class="site-desktop-title top-bar-title">
					<!-- <h1 class="logo" id="nav-toggle"></h1> -->
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
                </div>
            <div class="top-bar-right">
                <?php foundationpress_top_bar_r(); ?>

                <?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
                <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
                <?php endif; ?>
            </div>
			</nav>
			
			</div>
		</div>

		<div class="sidebar-nav">
		<div id="nav-container">
		<div id="nav-overlay"></div>
		<nav id="nav-fullscreen">
			<style>
				#nav-fullscreen .menu {
				padding: 0;
				margin: 0;
				list-style: none;
				position: relative;
				display: block !important;
				display: -webkit-flex;
				display: -ms-flexbox;
				display: flex;
				-webkit-flex-wrap: wrap;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				}
			</style>
			<?php foundationpress_top_bar_r(); ?>
		</nav>
		<!-- <h1 class="logo" id="nav-toggle"></h1> -->
	</div>
</div>
</header>

