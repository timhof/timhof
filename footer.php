	</div><!-- main -->	
		<div id="footer">
			<div id="liamTough">
				<img src='<?php echo get_stylesheet_directory_uri() ?>/img/liam_cutout.png' />
			</div>
			<div id="liamPop">
				<img src='<?php echo get_stylesheet_directory_uri() ?>/img/eli_transp-cropped.png' />
			</div>
		</div>


	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
	
<script type="text/javascript">
	SyntaxHighlighter.autoloader(
		'bash shell	http://alexgorbatchev.com/pub/sh/current/scripts/shBrushBash.js',
		'rails ror ruby	http://alexgorbatchev.com/pub/sh/current/scripts/shBrushRuby.js'
	);
     	SyntaxHighlighter.all()
</script>
</body>

</html>
