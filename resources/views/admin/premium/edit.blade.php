@extends('layouts.admin.admin_layouts')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Premium Structure Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Premium Structure Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-sm-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-plus"></i> Edit Premium Structure</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('premium.update', $premiums->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Premium Structure</label>
                      <textarea id="summary-ckeditor13" name="premium_details" class="form-control"required>{{$premiums->premium_details}}</textarea>
                  </div>
                    <div class="form-group">
                        <h3>Nepali Format</h3>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Premium Structure Nepali</label>
                      <textarea id="summary-ckeditor14" name="premium_details_nep" class="form-control"required>{{$premiums->premium_details_nep}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select class="custom-select form-control" name="status">
                        <option value="--Select Here--">--Select Here--</option>
                          <option value="1"{{$premiums->status == 1 ? 'selected':''}}>Active</option>
                          <option value="0"{{$premiums->status == 0 ? 'selected':''}}>Inactive</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="" class="btn btn-outline-danger">Cancel</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@section('scripts')
    <script>
      CKEDITOR.replace( 'summary-ckeditor13' );
      CKEDITOR.replace( 'summary-ckeditor14' );
    </script>
@endsection