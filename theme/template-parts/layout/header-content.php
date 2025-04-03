<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gorilabs
 */

?>

<header id="masthead" class="sticky top-0 bg-white z-10 shadow">
<div class="w-full mx-auto flex justify-center md:justify-between items-center text-white">
	<div class="brand py-2 px-5 md:py-0">
		<a href="/">
		<img class="w-50" src="https://wikilok.com/wp-content/uploads/2020/02/wikilok_1.png" alt="">
		</a>
	</div>

	<nav id="site-navigation" class="w-full hidden md:flex justify-end items-center gap-5 bg-purple-to-red py-5 pr-5 " aria-label="<?php esc_attr_e( 'Main Navigation', 'gorilabs' ); ?>">

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s flex gap-5" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->
</div>
</header><!-- #masthead -->
