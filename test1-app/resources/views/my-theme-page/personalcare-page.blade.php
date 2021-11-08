<x-theme-lay-out>

	<x-theme-bread-crumbs>
	    <li class="active slot">Personal Care</li>
	</x-theme-bread-crumbs>

    <!--- personalcare --->
	<div class="products">
		<div class="container">

			<x-theme-menu>
			</x-theme-menu>																																											
			
			<div class="col-md-8 products-right">
				<x-theme-product-view>
				</x-theme-product-view>	

				<div class="agile_top_brands_grids">
				@foreach ($products as $product) 
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<x-nav-link :href="route('theme-single-page', ['id' => $product->id])" :active="request()->routeIs('theme-single-page',['id' => $product->id])"><img title=" " alt=" " src="{{ $product->image }}"></x-nav-link>		
												<p>{{ $product->name }}</p>
												<h4>${{ $product->price_sale }} <span>${{ $product->price }}</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<input type="submit" name="submit" value="Add to cart" data-product_id="{{ $product->id }}" class="button add-to-cart-hear">
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div> 
				@endforeach 
				</div>
				
				{{ $products->links('my-theme-page.my-paginate') }}
				
				</div>
			<div class="clearfix"> </div>
		</div>
	</div>
    <!--- personalcare --->
	@include('layouts.themes.add-to-cart')
</x-theme-lay-out>
			