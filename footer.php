<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<hr />
<div id="footer">
	<p>
		<?php bloginfo('name'); ?> is written by
		<a href="http://www.marko.anastasov.name" rel="me">Marko Anastasov</a>
		and powered by <a href="http://wordpress.org/">WordPress</a>
                with RSS feeds for
                <a href="<?php bloginfo('rss2_url'); ?>">Entries</a>
		and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments</a>.
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
</div>
</div>

<?php ?>
		<!-- ?php wp_footer(); ?-->
</body>
</html>
