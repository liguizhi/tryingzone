<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package earthpro
 */
?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php 	
		if ( !function_exists( 'earthpro_footer' ) ) {?>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'earthpro' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'earthpro' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'earthpro' ), 'earthpro', '<a href="http://www.vathemes.com" rel="designer">VA Themes</a>' ); ?>
			</div><!-- .site-info -->
		<?php } else {earthpro_footer();} ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!--百度统计代码-->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0ecf392a724dd69636fdf25c0cca708' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
