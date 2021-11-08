<x-admin-layout>
    <section class="content">

    @include('partials.form-search', [
      'action' => route('adminsearchs'),
      'method' => 'GET',
    ])
    </section>
</x-admin-layout>