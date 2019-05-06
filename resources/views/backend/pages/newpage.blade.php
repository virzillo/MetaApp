@extends('backend.layouts.master')


@push('style')
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/extensions/unslider.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/weather-icons/climacons.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/fonts/meteocons/style.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/charts/morris.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/app.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/pages/timeline.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/css/style.css">
  <!-- END Custom CSS-->
@endpush


@section('titolopagina')  @endsection

@section('content')
  

@push('breadcumbs')
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{url('/')}}"></a>
        </li>
      </ol>
@endpush

@push('iconsright')
    <button class="btn-icon btn btn-primary " type="button"><i class="ft-bell"></i></button>
    <button class="btn-icon btn btn-primary" type="button"><i class="ft-life-buoy"></i></button>
    <button class="btn-icon btn btn-primary" type="button"><i class="ft-settings"></i></button>
@endpush

      <div class="content-body">
        <!-- Full calendar extra example section start -->
        <section id="extra-examples">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Gcal</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <p class="card-text">FullCalendar can display events from a public google Calendar.
                      google Calendar can serve as a backend that manages and persistently
                      stores event data (a feature that FullCalendar currently lacks).
                      You must have google calendar API key, make your google calendar
                      public and obtain your google calendar's ID. Please visit this
                      <a href="http://fullcalendar.io/docs/google_calendar/" target="_blank">link</a>                      for all the documentation </p>
                    <div id='fc-gcal'></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
        
        </section>
        <!-- // Full calendar extra example section end -->
      </div>
 


  <!-- ////////////////////////////////////////////////////////////////////////////-->





@endsection

@push('script')
 <!-- BEGIN VENDOR JS-->
  <script src="{{asset('/')}}app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('/')}}app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>

  <script src="{{asset('/')}}app-assets/vendors/js/extensions/moment.min.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/vendors/js/extensions/fullcalendar.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{asset('/')}}app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('/')}}app-assets/js/scripts/extensions/fullcalendar.js" type="text/javascript"></script>
  {{-- <script src="{{asset('/')}}app-assets/js/scripts/pages/dashboard-ecommerce.js" type="text/javascript"></script> --}}
@endpush