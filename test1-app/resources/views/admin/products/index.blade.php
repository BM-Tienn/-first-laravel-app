<x-admin-layout>
  @if (session('msg'))
    <div class="alert alert-success">
      {{ session('msg') }}
    </div>
  @endif
  
  @if (session('error'))
    <div class="alert alert-success">
      {{ session('error') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Bordered Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Category</th>
            <th>Image</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Price_sale</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
            <td>{{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}.</td>
              <td>
                <a href="{{ route('adminproducts.show', ['product' => $product->id]) }}">
                  {{ $product->name }}
                </a>
              </td>
              <td>
                <a href="{{ route('theme-categories-page.show', ['id' => $product->category->id]) }}">
                  {{ $product->category->name }}
                </a>
              </td>
              <td>
                {{ $product->image }}
              </td>
              <td>
                {{ $product->quantity }}
              </td>
              <td>
                {{ $product->price }}
              </td>
              <td>
                {{ $product->price_sale }}
              </td>
              <td>
                  <i class="fas fa-eye"></i>
                  <a href="{{ route('adminproducts.edit', ['product' => $product->id]) }}" class="btn btn-info btn-xs">
                    <i class="fas fa-edit"></i>
                  </a>
                  <button type="button" class="btn btn-danger btn-xs confirm-delete" 
                    data-toggle="modal" data-target="#modal-delete" 
                    data-url="{{ route('adminproducts.destroy', ['product' => $product->id]) }}">
                    <i class="fas fa-trash-alt"></i>
                  </button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->

    {{ $products->links('partials.admin-paginate') }}

    </div>
  </div>

  @include('partials.form-delete')

</x-admin-layout>