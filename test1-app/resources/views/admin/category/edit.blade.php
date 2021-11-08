<x-admin-layout>
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Update Product</h3>
    </div>

    @include('partials.form-category', [
      'action' => route('admincategory.update', ['category' => $category->id]),
      'method' => 'PUT',
    ])

  </div>
</x-admin-layout>