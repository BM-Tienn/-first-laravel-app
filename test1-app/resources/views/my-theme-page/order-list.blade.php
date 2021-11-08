<x-theme-lay-out>
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
                  <th>Price</th>
                  <th>Sale off</th>
                  <th>Quantity</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr class="text-center">
                  <td class="product-remove">
                    <a href="" class="product-delete" data-product_id="{{ $product->id }}">
                      <span class="fas fa-trash-alt"></span>
                    </a>
                  </td>

                  <td class="image-prod"><div class="img" style="background-image:url({{ showProductImage($product->image) }});"></div></td>

                  <td class="product-name">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ Str::limit($product->description, 50) }}</p>
                  </td>

                  <td>$<span class="price">{{ $product->price }}</span></td>
                  <td><span class="sale-off">{{ $product->sale_off }}10</span>%</td>

                  <td class="quantity">
                    <div class="input-group mb-3">
                        <input type="text" name="quantity"
                            class="product-quantity quantity form-control input-number"
                            value="{{ $productData[$product->id] }}"
                            min="1"
                            max="100"
                            data-product_id="{{ $product->id }}"
                        >
                    </div>
                  </td>

                  <td>
                    $<span class="total">{{ $product->price * $productData[$product->id] * ((100 - $product->sale_off) / 100) }}</span>
                  </td>
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
            <h3>Cart Totals</h3>
            <p class="d-flex">
              <span>Subtotal</span>
              $<span id="subtotal">{{ $subtotal }}</span>
            </p>
            <p class="d-flex">
              <span>Delivery</span>
              $<span id="delivery">{{ $delivery }}</span>
            </p>
            <hr>
            <p class="d-flex total-price">
              <span>Total</span>
              $<span id="total-final">{{ $total }}</span>
            </p>
          </div>
          <p><a href="{{ route('order.checkout') }}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
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
        $('.product-quantity').keyup(function() {
          var newQuantity = $(this).val();
          var trElement = $(this).closest('tr');
          var url = "{{ route('order.update') }}";
          var product_id = $(this).data('product_id');
          var price = parseInt(trElement.find('.price').text());
          var saleOff = parseInt(trElement.find('.sale-off').text());
          var totalPrice = price * newQuantity * ((100 - saleOff) / 100);
          totalPrice = Math.round(totalPrice * 100) / 100;
          var totalElement = trElement.find('.total');
          $.ajax(url, {
            type: 'PUT',
            data: {
              product_id: product_id,
              quantity: newQuantity,
            },
            success: function (data) {
              console.log('success');
              var objData = JSON.parse(data);
              console.log(objData);
              if (objData.status === false) {
                location.reload();
              }
              totalElement.text(totalPrice);
              var subtotal = 0;
              $('.total').each(function() {
                subtotal += parseFloat($(this).text());
              });
              subtotal = Math.round(subtotal * 100) / 100;
              $('#subtotal').text(subtotal);
              var totalFinal = subtotal + parseFloat($('#delivery').text()) - parseFloat($('#discount').text());
              totalFinal = Math.round(totalFinal * 100) / 100;
              $('#total-final').text(totalFinal);
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
        });
      });
    </script>
  @endsection
</x-theme-lay-out>