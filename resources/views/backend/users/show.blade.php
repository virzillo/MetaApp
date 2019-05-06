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
  <!-- Profile Image -->
          <div class="box box-info">
            <div class="box-body box-profile">
              {{-- <img class="profile-user-img img-responsive img-rounded" src="{{asset('storage/user_image/')}}/{{$user->user_image}}" alt="User profile picture"> --}}

              <h3 class="profile-username text-center">{{$user->name}}</h3>

              <p class="text-muted text-center">{{$user->role}}</p>

              <ul class="list-group list-group-unbordered">
               
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">{{$user->email}}</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>

              </ul>

            <a type="button" name="edit-user" class="btn btn-success  pull-right flat " href="{{route('users.edit', $user->id )}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> &nbsp; <b>Modifica</b></a>

          <a href="{{route('users.index')}}" class="btn bg-maroon flat pull-left"><i class="fa fa-reply" aria-hidden="true"></i> &nbsp; <b>Torna</b></a>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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