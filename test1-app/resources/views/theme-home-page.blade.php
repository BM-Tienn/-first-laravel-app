<x-theme-lay-out>

	<x-theme-bread-crumbs>
	</x-theme-bread-crumbs>

	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
		<h2>Top selling offers</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">All Products</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Daily Offers</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="agile-tp">
								<h5>All Products</h5>
								<p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
							</div>
							<div class="agile_top_brands_grids" style="height:800px">
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
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>${{ $product->price_sale }} <span>${{ $product->price }}</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_detailsadd_to_cart">
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
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
							<div class="agile-tp">
								<h5>Daily Offers</h5>
								<p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
							</div>
							<div class="agile_top_brands_grids" style="height:800px" >
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
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>${{ $product->price_sale }} <span>${{ $product->price }}</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details add_to_cart">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- //top-brands -->

	<!--banner-bottom-->
				<div class="ban-bottom-w3l">
					<div class="container">
					<div class="col-md-6 ban-bottom3">
							<div class="ban-top">
								<a href="{{ route('theme-categories-page.show', ['id' => $categories->where('classify','BEVERAGES')->first()->id]) }}">
									<img src="{{ $categories->where('classify','BEVERAGES')->first()->image }}" class="img-responsive" alt=""/>
								</a>
							</div>
							<div class="ban-img">
								<div class=" ban-bottom1">
									<div class="ban-top">
										<a href="{{ route('theme-categories-page.show', ['id' => $categories->where('classify','GOURMET')->first()->id]) }}">
											<img src="{{ $categories->where('classify','GOURMET')->first()->image }}" class="img-responsive" alt=""/>
										</a>
									</div>
								</div>
								<div class="ban-bottom2">
									<div class="ban-top">
										<a href="{{ route('theme-categories-page.show', ['id' => $categories->where('classify','PERSONALCARE')->first()->id]) }}">
											<img src="{{ $categories->where('classify','PERSONALCARE')->first()->image }}" class="img-responsive" alt=""/>	
										</a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-6 ban-bottom">
							<div class="ban-top">
								<a href="{{ route('theme-categories-page.show', ['id' => $categories->where('classify','HOUSEHOLD')->first()->id]) }}">
									<img src="{{ $categories->where('classify','HOUSEHOLD')->first()->image }}" class="img-responsive" alt=""/>
								</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
	<!--banner-bottom-->
	
	<x-theme-new>
	</x-theme-new>
	@include('layouts.themes.add-to-cart')
</x-theme-lay-out>