			<footer class="footer">
				<div class="contain">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/hetzelcreative-logo-white.svg" alt="Hetzel Creative" width="150" height="48">
					</a>

					<p class="footer__copyright">&copy; <?php echo date("Y"); ?> Hetzel Creative</p>

					<ul class="footer__nav">
						<li><a href="<?php echo get_home_url(); ?>/">Home</a></li>
						<li><a href="<?php echo get_home_url(); ?>/services">Services</a></li>
						<li><a href="<?php echo get_home_url(); ?>/projects">Work</a></li>
						<li><a href="<?php echo get_home_url(); ?>/about">About</a></li>
						<li><a href="<?php echo get_home_url(); ?>/contact">Contact</a></li>
					</ul>
				</div>
			</footer>
		</section>

		<?php wp_footer(); ?>

		<script>
			(function () {
				var stickyHeader = {
					els: {
						header: document.querySelector('#header'),
						body: document.body
					},

					height: '',

					init: function () {
						window.addEventListener('scroll', this.fixedHeader.bind(this));
					},

					fixedHeader: function () {
						var navTop = this.els.header.offsetTop + 63;

						if (window.scrollY >= navTop) {
							this.els.body.classList.add('--fixed-nav');
						} else {
							this.els.body.classList.remove('--fixed-nav');
						}
					}
				}

				stickyHeader.init();
			})();

			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-76320050-1', 'auto');
			ga('send', 'pageview');
		</script>
</body>
</html>
