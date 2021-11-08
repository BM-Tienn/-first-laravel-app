<!-- /.card-header -->
<div class="card-body">
  <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf

    @if ($method == 'PUT')
      @method('PUT')
    @endif
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label>Name</label>
          <input name="name" type="text" class="form-control" value="">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label>Classify</label>
          <input name="price" type="text" class="form-control" value="">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label for="image">Image</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image" name="image">
              <label class="custom-file-label" for="image">
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <div class="form-check">
            <input name="status" class="form-check-input" type="checkbox" value="1">
            <label class="form-check-label">Is_public</label>
          </div>
        </div>
      </div>
    </div>
    <input type="submit" value="Submit" class="btn btn-primary">
  </form>
</div>
<!-- /.card-body -->
@section('script')
  <script type="text/javascript">
    $(document).ready(function() {
      $('#image').change(function(e) {
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
      });
    });
  </script>
@endsection