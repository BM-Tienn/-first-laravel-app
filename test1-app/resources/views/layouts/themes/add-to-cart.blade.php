@section('script')
	<script type="text/javascript">
		$(document).ready(function() {
			$('.add-to-cart-detalt').click(function(e) {
				e.preventDefault();	

				var product_id =$(this).data('product_id');
				var quantity = $('.product-quantity').val();	
				var url = "{{ route('order.save') }}";

				$.ajax(url, {
					type: 'POST',
					data: {
						product_id:  product_id,
						quantity: quantity,
					},
					success: function (data) {
						console.log('success');
						var objData = JSON.parse(data);
						var newQuantity = Object.size(objData.cart);
						$('.cart-quantity').text(newQuantity);
						Swal.fire({
							position: 'top-end',
							icon: 'success',
							title: 'Add to cart success!',
							showConfirmButton: false,
							timer: 1500
							});
						},
					error: function () {
						console.log('fall');
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

			$('.add-to-cart').click(function(e) {
				e.preventDefault();

				var product_id =$(this).data('product_id');
				var quantity = 1;	
				var url = "{{ route('order.save') }}";

				$.ajax(url, {
					type: 'POST',
					data: {
						product_id:  product_id,
						quantity: quantity,
					},
					success: function (data) {
						console.log('success');
						var objData = JSON.parse(data);
						var newQuantity = Object.size(objData.cart);
						$('.cart-quantity').text(newQuantity);
						Swal.fire({
							position: 'top-end',
							icon: 'success',
							title: 'Add to cart success!',
							showConfirmButton: false,
							timer: 1500
						});
					},
					error: function () {
						console.log('fall');
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

			$('.add-to-cart-hear').click(function(e) {
				e.preventDefault();

				var product_id =$(this).data('product_id');
				var quantity = 1;	
				var url = "{{ route('order.save') }}";

				$.ajax(url, {
					type: 'POST',
					data: {
						product_id:  product_id,
						quantity: quantity,
					},
					success: function (data) {
						console.log('success');
						var objData = JSON.parse(data);
						var newQuantity = Object.size(objData.cart);
						$('.cart-quantity').text(newQuantity);
						Swal.fire({
							position: 'top-end',
							icon: 'success',
							title: 'Add to cart success!',
							showConfirmButton: false,
							timer: 1500
						});
					},
					error: function () {
						console.log('fall');
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