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
      <h3 class="card-title">List Category</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Image</th>
            <th>Is_public</th>
            <th>Classify</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $categories)
            <tr>
            <td>{{ $loop->iteration }}.</td>
              <td>
                <a href="">
                  {{ $categories->name }}
                </a>
              </td>
              <td>
                {{ $categories->image }}
              </td>
              <td>
                {{ $categories->is_public }}
              </td>
              <td>
                {{ $categories->classify }}
              </td>
              <td>
                  <i class="fas fa-eye"></i>
                  <a href="" class="btn btn-info btn-xs">
                    <i class="fas fa-edit"></i>
                  </a>
                  <button type="button" class="btn btn-danger btn-xs confirm-delete" 
                    data-toggle="modal" data-target="#modal-delete" 
                    data-url="">
                    <i class="fas fa-trash-alt"></i>
                  </button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    </div>
  </div>

</x-admin-layout>