@extends('layouts.admin.admin_layouts')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
           <form action="{{url('/admin/about-us/store')}}" method="post" role="form" enctype="multipart/form-data">
               @csrf
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Introduction in English
                    <small>Simple and fast</small>
                  </h3>
                  <!-- tools box -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                      <i class="fas fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea class="form-control " id="summary-ckeditor" name="introduction"></textarea>
                  </div>
                </div>
              </div>
               <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Introduction in Nepali
                    <small>Simple and fast</small>
                  </h3>
                  <!-- tools box -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                      <i class="fas fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea class="form-control" id="summary-ckeditor2" name="introduction_nep"></textarea>
                  </div>
                </div>
              </div>
               <button type="submit" class="btn btn-primary">Submit</button>
               <a href="{{route('about.index')}}" class="btn btn-outline-danger">Cancel</a>
           </form>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('scripts')
    <script>
      CKEDITOR.replace( 'summary-ckeditor' );
      CKEDITOR.replace( 'summary-ckeditor2' );
    </script>
@endsection
