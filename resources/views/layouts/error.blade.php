@if(Session::has('error_message'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ Session::get('error_message') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif
