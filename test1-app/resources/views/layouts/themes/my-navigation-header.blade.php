<nav x-data="{ open: false }">

    <!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>SALE UP TO 70% OFF. USE CODE "SALE70%" .<x-nav-link :href="route('theme-products-page')" :active="request()->routeIs('theme-products-page')">{{ __('SHOP NOW') }}</x-nav-link></p>
			</div>
			<div class="agile-login">
				<ul>
					<li><x-nav-link :href="route('userweb.create')" :active="request()->routeIs('theme-registered-page')">{{ __('Create Account') }}</x-nav-link></li>
					<li><x-nav-link :href="route('theme-login-page')" :active="request()->routeIs('theme-login-page')">{{ __('Login') }}</x-nav-link></li>
					<li><x-nav-link :href="route('theme-contact-page')" :active="request()->routeIs('theme-contact-page')">{{ __('Help') }}</x-nav-link></li>
				</ul>
			</div>
			<div class="product_list_header">  
					<!--<form action="#" method="get" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>-->  
					@if(session('msg'))
						<span class="cta">{{ session('msg') }}</span>
					@endif
					<span id="cta">
						<a href="{{ route('order.list') }}"><i class="fa fa-cart-arrow-down"  id="numberItem"> [ <span class="cart-quantity"> {{ showCartQuantity() }}</span> ] </i></a>
					</span>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><x-nav-link :href="route('theme-home-page')" :active="request()->routeIs('theme-home-page')" class="act">{{ __('super Market') }}</x-nav-link></h1>
			</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
    <!-- //header -->

    <!-- navigation -->
    <div class="navigation-agileits">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active"><x-nav-link :href="route('theme-home-page')" :active="request()->routeIs('theme-home-page')" class="act">{{ __('Home') }}</x-nav-link></li>	
                            <li><x-nav-link :href="route('theme-groceries-page')" :active="request()->routeIs('theme-groceries-page')">{{ __('Groceries') }}</x-nav-link></li>
                            <li><x-nav-link :href="route('theme-household-page')" :active="request()->routeIs('theme-household-page')">{{ __('Household') }}</x-nav-link></li>
                            <li><x-nav-link :href="route('theme-personalcare-page')" :active="request()->routeIs('theme-personalcare-page')">{{ __('Personal Care') }}</x-nav-link></li>
                            <li><x-nav-link :href="route('theme-packagedfoods-page')" :active="request()->routeIs('theme-packagedfoods-page')">{{ __('Packaged Foods') }}</x-nav-link></li>
                            <li><x-nav-link :href="route('theme-beverages-page')" :active="request()->routeIs('theme-beverages-page')">{{ __('Beverages') }}</x-nav-link></li>
                            <li><x-nav-link :href="route('theme-gourmet-page')" :active="request()->routeIs('theme-gourmet-page')">{{ __('Gourmet') }}</x-nav-link></li>
                            <li><x-nav-link :href="route('theme-offers-page')" :active="request()->routeIs('theme-offers-page')">{{ __('Offers') }}</x-nav-link></li>
                            <li><x-nav-link :href="route('theme-contact-page')" :active="request()->routeIs('theme-contact-page')">{{ __('Contact') }}</x-nav-link></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>		
    <!-- //navigation -->
</nav>