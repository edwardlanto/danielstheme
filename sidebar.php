<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="contact-form widget-area" role="complementary">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/contact-me.png" alt="">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
