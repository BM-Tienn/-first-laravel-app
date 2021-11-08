<nav x-data="{ open: false }">
	<!-- //footer -->
	<div class="footer">
			<div class="container">
				<div class="w3_footer_grids">
					<div class="col-md-3 w3_footer_grid">
						<h3>Contact</h3>
						<ul class="address">
							<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
						</ul>
					</div>
					<div class="col-md-3 w3_footer_grid">
						<h3>Information</h3>
						<ul class="info"> 
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-about-page')" :active="request()->routeIs('theme-about-page')">{{ __('About Us') }}</x-nav-link></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-contact-page')" :active="request()->routeIs('theme-contact-page')">{{ __('Contact Us') }}</x-nav-link></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-short-codes-page')" :active="request()->routeIs('theme-short-codes-page')">{{ __('Short Codes') }}</x-nav-link></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-faq-page')" :active="request()->routeIs('theme-faq-page')">{{ __('FAQ') }}</x-nav-link></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-products-page')" :active="request()->routeIs('theme-products-page')">{{ __('Special Products') }}</x-nav-link></li>
						</ul>
					</div>
					<div class="col-md-3 w3_footer_grid">
						<h3>Category</h3>
						<ul class="info"> 
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-groceries-page')" :active="request()->routeIs('theme-groceries-page')">{{ __('Groceries') }}</x-nav-link></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-household-page')" :active="request()->routeIs('theme-household-page')">{{ __('Household') }}</x-nav-link></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-personalcare-page')" :active="request()->routeIs('theme-personalcare-page')">{{ __('Personal Care') }}</x-nav-link></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-packagedfoods-page')" :active="request()->routeIs('theme-packagedfoods-page')">{{ __('Packaged Foods') }}</x-nav-link></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-beverages-page')" :active="request()->routeIs('theme-beverages-page')">{{ __('Beverages') }}</x-nav-link></li>
						</ul>
					</div>
					<div class="col-md-3 w3_footer_grid">
						<h3>Profile</h3>
						<ul class="info"> 
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-products-page')" :active="request()->routeIs('theme-products-page')">{{ __('Store') }}</x-nav-link></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-checkout-page')" :active="request()->routeIs('theme-checkout-page')">{{ __('My Cart') }}</x-nav-link></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-login-page')" :active="request()->routeIs('theme-login-page')">{{ __('Login') }}</x-nav-link></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><x-nav-link :href="route('theme-registered-page')" :active="request()->routeIs('theme-registered-page')">{{ __('Create Account') }}</x-nav-link></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			
			<div class="footer-copy">
				
				<div class="container">
					<p>© 2017 Super Market. All rights reserved </p>
				</div>
			</div>
			
		</div>	
		<div class="footer-botm">
				<div class="container">
					<div class="w3layouts-foot">
						<ul>
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="payment-w3ls">	
						<img src="images/card.png" alt=" " class="img-responsive">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
	<!-- //footer -->	
</nav>