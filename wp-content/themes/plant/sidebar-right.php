<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plant
 */

if ( ! is_active_sidebar( 'rightbar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area -rightbar" role="complementary">
	<?php dynamic_sidebar( 'rightbar' ); ?>
</aside><!-- #secondary -->
