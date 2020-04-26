<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shopcase
 */

global $shopcase_redux;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <section>
        <header class="inner">
            <div class="container">
                <div class="line-top">
                    <div class="wither-w">
                        <span class="cloud">
                            <img src="<?php echo get_template_directory_uri();?>/images/cloud.png" alt="" />
                        </span>
                        <span>18°c</span>
                        <div class="city-wrap"><a href="javascript:void(0)" class="w-select">London <i class="fa fa-angle-down"></i></a>
                            <div class="city-drop">
                                <a href="#">Paris</a>
                                <a href="#">Kopengagen</a>
                                <a href="#">Berlin</a>
                            </div>
                        </div>
                    </div>
                    <div class="logo">
                        <a href="<?php echo home_url('/')?>">
                            <?php if( !empty( $shopcase_redux['shopcase-logo']['url'] ) ):?>
                                <img src="<?php echo esc_url( $shopcase_redux['shopcase-logo']['url'] ) ?>" alt="" />
                            <?php endif;?>
                        </a>
                    </div>
                    <div class="contacts">
                        <?php if( !empty( $shopcase_redux['header-phone'] ) ):?><span><i class="fa fa-mobile"></i><?php echo esc_attr( $shopcase_redux['header-phone']) ?></span><?php endif;?>
                        <?php if( !empty( $shopcase_redux['header-email'] ) ):?><span><i class="fa fa-envelope"></i><?php echo esc_attr( $shopcase_redux['header-email']) ?></span><?php endif;?>
                    </div>
                </div>
                <nav class="main-nav in">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'main_menu',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'nav-menu',
                            'container'      => 'ul',
                            'container_id'      => ''
                        )
                    );?>
                    <div class="search">
                        <form action="<?php echo home_url('/');?>" class="search-form">
                            <input type="text" name="s" id="search-input" placeholder="Keywords"/>
                            <button class="btn-search"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </nav>
            </div>

        </header>

    </section>


<?php /*
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'shopcase' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$shopcase_description = get_bloginfo( 'description', 'display' );
			if ( $shopcase_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $shopcase_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'shopcase' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

 */