<?php
/**
 * Die Seitenleiste mit den Haupt-Widget-Bereichen.
 *
 * @package BrainPress
 */
?>
<div id="secondary" class="widget-area" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>

		<aside id="archives" class="widget">
			<h1 class="widget-title"><?php _e( 'Archive', 'brainpress' ); ?></h1>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</aside>

		<aside id="meta" class="widget">
			<h1 class="widget-title"><?php _e( 'Meta', 'brainpress' ); ?></h1>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</aside>

	<?php endif; // Widget-Bereich der Seitenleiste beenden ?>
</div><!-- #secondary -->
