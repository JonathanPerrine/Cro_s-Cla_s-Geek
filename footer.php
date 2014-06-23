<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Cro_s-Cla_s_Geek
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'cro_s-clacro_s_cla_s_geek_geek' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'cro_s-clacro_s_cla_s_geek_geek' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'cro_s-clacro_s_cla_s_geek_geek' ), 'Crocro_s-clacro_s_cla_s_geek_geek-Clacro_s_cla_s_geek_Geek', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
