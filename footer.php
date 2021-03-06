			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container-fluid fluid-custom">
					<div class="row">
						
						<div class="col-sm-4 col-sm-push-4">
							<div class="footer-social">
								<?php dynamic_sidebar('top-social'); ?>
							</div>
						</div>

						<div class="col-sm-4 col-sm-push-4">
							<div class="mailto">
								<a href="mailto:hola@tejiendoconciencia.org">hola@tejiendoconciencia.org</a>
							</div>
						</div>
						
						<div class="col-sm-4 col-sm-pull-8">
							<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> · Tucumán · Argentina.</p>
						</div>	

					</div>
				</div>
			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
