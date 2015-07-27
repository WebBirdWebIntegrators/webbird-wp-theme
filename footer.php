<div id="footer">
	
	<div class="fb1">
		<h3>Overtuigd? Neem contact met ons op!</h3>
		<ul>
			<li>
				<a href="tel:+3215112233">
					<div class="icon">
						<i class="fa fa-mobile"></i>
					</div>
					<div class="label">
						+32 15 65 76 41
					</div>
				</a>
			</li>
			<li>
				<a href="mailto:hi@webbird.be">
					<div class="icon">
						<i class="fa fa-inbox"></i>
					</div>
					<div class="label">
						hi@webbird.be
					</div>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="icon">
						<i class="fa fa-map-marker"></i>
					</div>
					<div class="label">
						Contact & Route
					</div>
				</a>
			</li>
		</ul>
	</div>
	
	<div class="fb2">
		<ul class="social-media">
			<li class="twitter">
				<div class="icon-table">
					<div class="icon-table-cell">
						<i class="fa fa-twitter"></i>
					</div>
				</div>
			</li>
			<li class="linkedin">
				<div class="icon-table">
					<div class="icon-table-cell">
						<i class="fa fa-linkedin"></i>
					</div>
				</div>
			</li>
			<li class="facebook">
				<div class="icon-table">
					<div class="icon-table-cell">
						<i class="fa fa-facebook"></i>
					</div>
				</div>
			</li>
		</ul>
		<?php gravity_form(
			7, 
			$display_title = false, 
			$display_description = false, 
			$display_inactive = false, 
			$field_values = null, 
			$ajax = true, 
			$tabindex = 999); 
		?>
		<ul class="contact-info">
			<li class="company-name">WebBird bvba</li>
			<li class="address">Sint-Gommarusstraat 54H</li>
			<li class="postal-code-city">2800 Mechelen</li>
			<li class="phone"><a href="tel:+3215112233">+32 15 11 22 33</a></li>
			<li class="email"><a href="mailto:hi@webbird.be">hi@webbird.be</a></li>
		</ul>
		
		<ul class="footer-navigation">
			<li><a href="">Disclaimer</a></li>
			<li><a href="">Terms & conditions</a></li>
			<li>©2015</li>
		</ul>
		
	</div>
	
</div>

<!-- Google Analytics -->
<?php get_template_part( 'assets/google-analytics' ) ?>

<?php wp_footer(); ?>

</body></html>