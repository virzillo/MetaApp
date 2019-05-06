{{-- @if (session('status'))
  <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-check"></i> Alert!</h4>
      {{ session('status') }}
 </div>
@endif --}}

@if (session('status'))
  <div class="alert bg-success alert-dismissible mb-2" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
      {{ session('status') }}
  </div>
@endif