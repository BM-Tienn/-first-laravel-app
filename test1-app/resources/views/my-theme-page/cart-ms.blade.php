<x-theme-lay-out>
    <x-theme-bread-crumbs>
	    <li class="active slot">Cart</li>
	</x-theme-bread-crumbs>

    <section class="ftco-section ftco-cart">
        <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
            <div class="cart-list">
                <table class="table">
                <thead class="thead-primary">
                    <tr class="text-center">
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Product name</th>
                    <th>Price_sale</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="text-center">
                    <td class="product-remove"><a href="" class="product-delete" data-product_id="{{ $product->id }}"><i class="fas fa-trash-alt"></i></a></td>

                    <td class="image-prod"><img src="/{{ $product->image }}"></td>

                    <td class="product-name">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ Str::limit($product->description, 50) }}</p>
                    </td>

                    <td class="price">${{ $product->price_sale }}</td>

                    <td class="quantity">
                        <div class="input-group mb-3">
                        <input type="text" name="quantity" class="quantity form-control input-number" value="{{ $productData[$product->id] }}" min="1" max="100">
                        </div>
                    </td>

                    <td class="total">${{ $product->price_sale * $productData[$product->id] }}</td>
                    </tr><!-- END TR-->
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Coupon Code</h3>
                <p>Enter your coupon code if you have one</p>
                <form action="#" class="info">
                <div class="form-group">
                    <label for="">Coupon code</label>
                    <input type="text" class="form-control text-left px-3" placeholder="">
                </div>
                </form>
            </div>
            <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Estimate shipping and tax</h3>
                <p>Enter your destination to get a shipping estimate</p>
                <form action="#" class="info">
                <div class="form-group">
                    <label for="">Country</label>
                    <input type="text" class="form-control text-left px-3" placeholder="">
                </div>
                <div class="form-group">
                    <label for="country">State/Province</label>
                    <input type="text" class="form-control text-left px-3" placeholder="">
                </div>
                <div class="form-group">
                    <label for="country">Zip/Postal Code</label>
                    <input type="text" class="form-control text-left px-3" placeholder="">
                </div>
                </form>
            </div>
            <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Cart Totals</h3>
                <p class="d-flex">
                <span>Subtotal</span>
                <span>$20.60</span>
                </p>
                <p class="d-flex">
                <span>Delivery</span>
                <span>$0.00</span>
                </p>
                <p class="d-flex">
                <span>Discount</span>
                <span>$3.00</span>
                </p>
                <hr>
                <p class="d-flex total-price">
                <span>Total</span>
                <span>$17.60</span>
                </p>
            </div>
            <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
            <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
            <span>Get e-mail updates about our latest shops and special offers</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
                </div>
            </form>
            </div>
        </div>
        </div>
    </section>

    @section('script')
    <script type="text/javascript">
      $(document).ready(function() {
        $('.product-delete').click(function(e) {
          e.preventDefault();
          var productEl = $(this).parent().parent();
          var product_id = $(this).data('product_id');
          var url = "{{ route('order.remove') }}";
          Swal.fire({
            title: 'Are you sure?',
            showCancelButton: true,
            confirmButtonText: 'Remove',
          }).then((result) => {
            if (result.isConfirmed) {
              $.ajax(url, {
                type: 'POST',
                data: {
                  product_id: product_id,
                },
                success: function (data) {
                  console.log('success');
                  var objData = JSON.parse(data);
                  var newQuantity = Object.size(objData.cart);
                  $('.cart-quantity').text(newQuantity);
                  productEl.remove();
                  Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Remove success!',
                    showConfirmButton: false,
                    timer: 1500
                  });
                },
                error: function () {
                  console.log('fail');
                  Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Failed!',
                    showConfirmButton: false,
                    timer: 1500
                  });
                }
              });
            }
          });
        });

        
      });
    </script>
  @endsection

</x-theme-lay-out>
