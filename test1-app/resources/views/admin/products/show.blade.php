<x-admin-layout>
  @if (session('msg'))
    <div class="alert alert-success">
      {{ session('msg') }}
    </div>
  @endif

  @if (session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
  @endif
  <!-- Default box -->
  <div class="card card-solid">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3 class="d-inline-block d-sm-none">{{ $product->name }}</h3>
          <div class="col-12">
            <img src="{{ showProductImage($product->image) }}" class="product-image" alt="{{ $product->name }}">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <h3 class="my-3">{{ $product->name }}</h3>
          <p>{{ $product->description }}</p>

          <hr>
          <h4>Available Colors</h4>
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-default text-center active">
              <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
              Green
              <br>
              <i class="fas fa-circle fa-2x text-green"></i>
            </label>
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option_a2" autocomplete="off">
              Blue
              <br>
              <i class="fas fa-circle fa-2x text-blue"></i>
            </label>
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
              Purple
              <br>
              <i class="fas fa-circle fa-2x text-purple"></i>
            </label>
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
              Red
              <br>
              <i class="fas fa-circle fa-2x text-red"></i>
            </label>
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option_a5" autocomplete="off">
              Orange
              <br>
              <i class="fas fa-circle fa-2x text-orange"></i>
            </label>
          </div>

          <h4 class="mt-3">Size <small>Please select one</small></h4>
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
              <span class="text-xl">S</span>
              <br>
              Small
            </label>
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
              <span class="text-xl">M</span>
              <br>
              Medium
            </label>
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
              <span class="text-xl">L</span>
              <br>
              Large
            </label>
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
              <span class="text-xl">XL</span>
              <br>
              Xtra-Large
            </label>
          </div>

          <div class="bg-gray py-2 px-3 mt-4">
            <h2 class="mb-0">
              ${{ $product->price_sale }} 
            </h2>
            <h4 class="mt-0">
              <small>Ex Tax: ${{ $product->price }} </small>
            </h4>
          </div>

          <div class="mt-4">
            <div class="btn btn-primary btn-lg btn-flat">
              <i class="fas fa-cart-plus fa-lg mr-2"></i>
              Add to Cart
            </div>

            <div class="btn btn-default btn-lg btn-flat">
              <i class="fas fa-heart fa-lg mr-2"></i>
              Add to Wishlist
            </div>
          </div>

          <div class="mt-4 product-share">
            <a href="#" class="text-gray">
              <i class="fab fa-facebook-square fa-2x"></i>
            </a>
            <a href="#" class="text-gray">
              <i class="fab fa-twitter-square fa-2x"></i>
            </a>
            <a href="#" class="text-gray">
              <i class="fas fa-envelope-square fa-2x"></i>
            </a>
            <a href="#" class="text-gray">
              <i class="fas fa-rss-square fa-2x"></i>
            </a>
          </div>

        </div>
      </div>
      <div class="row mt-4">
        <nav class="w-100">
          <div class="nav nav-tabs" id="product-tab" role="tablist">
            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
            <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
          </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent">
          <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{ $product->description }} </div>
          <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">{{ $product->description }} </div>
          <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">{{ $product->description }} </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</x-admin-layout>