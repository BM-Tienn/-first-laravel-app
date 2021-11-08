<x-theme-lay-out>

	<x-theme-bread-crumbs>
	    <li class="active slot">Singlepage</li>
	</x-theme-bread-crumbs>
	
	<div class="products">
		<div class="container">
			<div class="agileinfo_single">

				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="/{{ $product->image }}" alt=" " class="img-responsive">
				</div>
				<div class="col-md-8 agileinfo_single_right">
				<h2>{{ $product->name }}</h2>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Description :</h4>
						<p>{{ $product->description }}</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing">${{ $product->price_sale }} <span>${{ $product->price }}</span></h4>
						</div>
						<div class="input-group">
							<input type="text" id="quantity" name="quantity" class="form-control input-number product-quantity" value="1" min="1" max="100">
						</div>
						<div class="input-group">
							<input type="submit" name="submit" value="Add to Cart" data-product_id="{{ $product->id }}" class="button add-to-cart-detalt">
						</div>
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

    <div class="newproducts-w3agile">
		<div class="container">
			<h3>New offers</h3>
				<div class="agile_top_brands_grids">
					@foreach ($newProduct as $newProduct)
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="/images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<x-nav-link :href="route('theme-products-page')" :active="request()->routeIs('theme-products-page')"><img title=" " alt=" " src="/{{ $newProduct->image }}"></x-nav-link>		
												<p>{{ $newProduct->name }}</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4>${{ $newProduct->price_sale }} <span>${{ $newProduct->price }}</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<input type="submit" name="submit" value="Add to cart" data-product_id="{{ $newProduct->id }}" class="button add-to-cart">
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div> 
					@endforeach
						<div class="clearfix"> </div>
				</div>
		</div>
	</div>

	@include('layouts.themes.add-to-cart')
</x-theme-lay-out>