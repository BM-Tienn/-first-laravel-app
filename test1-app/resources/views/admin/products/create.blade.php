<x-admin-layout>
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Create Product</h3>
    </div>

    @include('partials.form-product', [
      'action' => route('adminproducts.store'),
      'method' => 'POST',
    ])

  </div>
</x-admin-layout>