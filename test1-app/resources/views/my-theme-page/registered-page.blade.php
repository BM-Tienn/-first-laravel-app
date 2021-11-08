<x-theme-lay-out>
    
	<x-theme-bread-crumbs>
	    <li class="active slot">Register Page</li>
	</x-theme-bread-crumbs>
    <div class="register">
		<div class="container">
			<h2>Register Here</h2>
			<div class="login-form-grids">
				<h5>profile information</h5>
                <form action="{{ route('userweb.store') }}" method="POST">
                @csrf
					<input type="text" placeholder="First Name..." name="first_name" required=" " >
					<input type="text" placeholder="Last Name..." name="last_name" required=" " >
				<div class="register-check-box">
					<div class="check">
						<label class="checkbox"><input type="checkbox" value="1" name="send_mail"><i> </i>Subscribe to Newsletter</label>
					</div>
				</div>
				<h6>Login information</h6>
				
					<input type="email" placeholder="Email Address" name="email" required=" " >
					<input type="password" placeholder="Password" name="password" required=" " >
					<!--<input type="password" placeholder="Password Confirmation" required=" " >
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
						</div>
					</div>-->
					<input type="submit" value="Register">
				</form>
			</div>
			<div class="register-home">
				<x-nav-link :href="route('theme-home-page')" :active="request()->routeIs('theme-home-page')" class="act">{{ __('Home') }}</x-nav-link>
			</div>
		</div>
	</div>
</x-theme-lay-out>