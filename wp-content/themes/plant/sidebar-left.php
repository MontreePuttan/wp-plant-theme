<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plant
 */

if ( ! is_active_sidebar( 'leftbar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area -leftbar" role="complementary">
	<?php dynamic_sidebar( 'leftbar' ); ?>
</aside><!-- #secondary -->
