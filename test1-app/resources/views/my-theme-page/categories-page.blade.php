<x-theme-lay-out>

	<x-theme-bread-crumbs>
	    <li class="active slot">Categories</li>
	</x-theme-bread-crumbs>

<!--- products --->
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
									<img src="/images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<x-nav-link :href="route('theme-single-page', ['id' => $product->id])" :active="request()->routeIs('theme-single-page',['id' => $product->id])"><img title=" " alt=" " src="/{{ $product->image }}"></x-nav-link>		
												<p>{{ $product->name }}</p>
												<h4>${{ $product->price_sale }} <span>${{ $product->price }}</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="Fortune Sunflower Oil">
														<input type="hidden" name="amount" value="35.99">
														<input type="hidden" name="discount_amount" value="1.00">
														<input type="hidden" name="currency_code" value="USD">
														<input type="hidden" name="return" value=" ">
														<input type="hidden" name="cancel_return" value=" ">
														<input type="submit" name="submit" value="Add to cart" class="button">
													</fieldset>
												</form>
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

</x-theme-lay-out>