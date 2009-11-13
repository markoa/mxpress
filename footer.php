<?php
/**
 * @package WordPress
 * @subpackage mxpress
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

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
	var pageTracker = _gat._getTracker("UA-11263928-1");
	pageTracker._trackPageview();
} catch(err) {}</script>

  <!-- ?php wp_footer(); ?-->
</body>
</html>
