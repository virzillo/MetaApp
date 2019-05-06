@extends('backend.layouts.master')


@push('style')
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/extensions/nouislider.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/ui/prism.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/ui/dragula.min.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/app.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/plugins/extensions/noui-slider.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/core/colors/palette-noui.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/css/style.css">
  <!-- END Custom CSS-->
@endpush

@section('titolopagina')Pagina Utenti @endsection

@section('content')
  

@push('breadcumbs')
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item"><a href="#">Page Layouts</a>
        </li>
        <li class="breadcrumb-item active">Content detached left sticky sidebar
        </li>
      </ol>
@endpush

@push('iconsright')
    <button class="btn-icon btn btn-secondary btn-round" type="button"><i class="ft-bell"></i></button>
    <button class="btn-icon btn btn-secondary btn-round" type="button"><i class="ft-life-buoy"></i></button>
    <button class="btn-icon btn btn-secondary btn-round" type="button"><i class="ft-settings"></i></button>
@endpush


      <div class="content-detached content-right">
        <div class="content-body" id="card-drag-area">
          <!-- Description -->
          <section id="descriptioin" class="card">
            <div class="card-header">
              <h4 class="card-title">Description</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <div class="card-text">
                  <p>Content layout with detached left sticky sidebar provides more
                    navigations options on page level. For the larger screen this
                    layout provides best usability. This layout use the third column
                    as a sticky sidebar section.</p>
                </div>
              </div>
            </div>
          </section>
          <!--/ Description -->
          <!-- CSS Classes -->
          <section id="css-classes" class="card">
<!-- Default box -->
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">MODIFICA UTENTE</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
              title="Collapse">
        <i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fa fa-times"></i></button>
    </div>
  </div>


  <div class="box-body">
    <div class="box">
    <div class="box-header">
      <h3 class="box-title">Inserisci i dati</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form class="form-horizontal" method="POST" action="{{ route('users.update' , $user->id) }}" enctype="multipart/form-data">
          {{ method_field('PUT') }}
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{$user->id}}">
          <div class="form-group">
              <div class="col-md-12">
                  <label for="name" class="control-label">Name</label>
                  <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required autofocus>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-12">
                <label for="email" class="control-label">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required>
              </div>
          </div>
          {{-- <div class="form-group">
              <div class="col-md-12">
                <label for="phone" class="control-label">Telefono</label>
                <input type="text" class="form-control" name="phone" value="{{$user->phone}}" required>
              </div>
          </div> --}}

          <div class="form-group">
              <div class="col-md-12">
                <label for="password" class="control-label">Password</label>
                  <input id="password" type="password" class="form-control" name="password" value="{{$user->password}}" required>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-12">
                <label for="ruolo" class=" control-label">Assegna ruolo</label>
                <select class="form-control" name="role" required>
                  @if ($user->role=='administrator')
                      <option value="administrator">administrator</option>
                      <option value="user">user</option>
                    @else
                      <option value="user">user</option>
                      <option value="administrator">administrator</option>
                  @endif
                </select>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-12">
                {{-- <img src="{{asset('/')}}storage/user_image/{{$user->user_image}}" class="img-thumbnail  m-t-20 m-b-20" alt="{{$user->user_image}}" width="300"> --}}
                <input type="file" name="user_image">
                <p class="help-block">L'immagine non deve suparare i 2 mega di dimensione</p>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-6 ">
                  <button type="submit" class="btn btn-info btn-flat">
                      Modifica
                  </button>
              </div>
          </div>
      </form>
    </div>
    <!-- /.box-body -->
  </div>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    Footer
  </div>
  <!-- /.box-footer-->
</div>
<!-- /.box -->
</div>

          </section>
        </div>
      </div>
     @include('backend.users.leftmenu')
 
@endsection

@push('script')
 <!-- BEGIN VENDOR JS-->
  <script src="{{asset('/')}}app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="{{asset('/')}}app-assets/vendors/js/ui/jquery.sticky.js"></script>
  <script src="{{asset('/')}}app-assets/vendors/js/ui/prism.min.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/vendors/js/extensions/jquery.raty.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/vendors/js/extensions/jquery.knob.min.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/vendors/js/extensions/wNumb.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/vendors/js/extensions/nouislider.min.js" type="text/javascript"></script>
   <script src="{{asset('/')}}app-assets/vendors/js/extensions/dragula.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{asset('/')}}app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('/')}}app-assets/js/scripts/extensions/knob.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/js/scripts/pages/content-sidebar.js" type="text/javascript"></script>
 <script src="{{asset('/')}}app-assets/js/scripts/cards/draggable.js" type="text/javascript"></script>
@endpush