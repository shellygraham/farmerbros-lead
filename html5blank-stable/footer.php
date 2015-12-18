			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="container">
					<div class="btn-container mobile">
						<a class="btn mobile" href="tel:<?php the_field('telephone_number'); ?>"><?php the_field('telephone_button_text', 'option'); ?></a>
						<a class="btn contact-trig" href="#"><?php the_field('header_button_text', 'option'); ?></a>
					</div>
					<div class="logo">
						<div class="logo-container">
							<?php $bloginfo = get_bloginfo(); echo $bloginfo; ?> 
						</div>
					</div>
					<a class="btn contact-trig tablet" href="#"><?php the_field('header_button_text', 'option'); ?></a>
				</div>

			</footer>
			<!-- /footer -->
		</div>

			<div id="contact-form" class="lightbox" style="opacity: 0;z-index:0;display: none;">
				<div class="lightbox-content">
					<span class="lightbox-close-icon lightbox-close">✕</span>
					<iframe id="contact-content" width="800" height="600"></iframe>
				</div>
			</div>

		</div>
		<!-- /wrapper -->
		<?php wp_footer(); ?>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js?ver=2.5.0"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/reveal-it.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/src/js/scripts.js?ver=1.0"></script>

		<!-- analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-68254606-1', 'auto');
		  ga('send', 'pageview');
		</script>
		
		<script type="text/javascript">
		  _bizo_data_partner_id = "8903";
		</script>
		
		<script type="text/javascript">
		(function() {
		  var s = document.getElementsByTagName("script")[0];
		  var b = document.createElement("script");
		  b.type = "text/javascript";
		  b.async = true;
		  b.src = (window.location.protocol === "https:" ? "https://sjs" : "http://js") + ".bizographics.com/insight.min.js";
		  s.parentNode.insertBefore(b, s);
		})();
		</script>
		<noscript>
		  <img height="1" width="1" alt="" style="display:none;" src="//www.bizographics.com/collect/?pid=8903&fmt=gif" />
		</noscript>

	</body>
</html>
