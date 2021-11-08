<x-admin-layout>
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Create category</h3>
    </div>

    @include('partials.form-category', [
      'action' => route('admincategory.store'),
      'method' => 'POST',
    ])

  </div>
</x-admin-layout>