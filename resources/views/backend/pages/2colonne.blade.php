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
        <div class="content-body">
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
            <div class="card-header">
              <h4 class="card-title">CSS Classes</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <div class="card-text">
                  <p>This table contains all classes related to the content detached
                    left sticky sidebar layout. This is a custom layout classes for
                    content detached left sticky sidebar layout page requirements.</p>
                  <p>All these options can be set via following classes:</p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Classes</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><code>.content-detached-left-sidebar</code></th>
                          <td>You can create 3 column detached left layout by adding
                            <code>.content-detached-left-sidebar</code> class in
                            <code>&lt;body&gt;</code> tag.</td>
                        </tr>
                        <tr>
                          <th scope="row"><code>.content-detached</code></th>
                          <td>In this layout content section is detached from left sticky
                            sidebar, for that <code>.content-detached</code> class
                            needs to add in content wrapper. Refer HTML markup line
                            no 27.</td>
                        </tr>
                        <tr>
                          <th scope="row"><code>.content-right</code></th>
                          <td>In this layout content should be float in right side, so
                            <code>.content-right</code> class needs to add in content
                            wrapper. Refer HTML markup line no 27.</td>
                        </tr>
                        <tr>
                          <th scope="row"><code>.sidebar-detached</code></th>
                          <td>In this layout left sticky sidebar section is detached
                            from content, for that <code>.sidebar-detached</code>                            class needs to add in sidebar wrapper. Refer HTML markup
                            line no 33.</td>
                        </tr>
                        <tr>
                          <th scope="row"><code>.sidebar-left</code></th>
                          <td>In this layout sidebar should be float in left side, so
                            <code>.sidebar-right</code> class needs to add in sidebar
                            wrapper. Refer HTML markup line no 33.</td>
                        </tr>
                        <tr>
                          <th scope="row"><code>.sidebar-sticky</code></th>
                          <td>To create sticky sidebar add <code>.sidebar-sticky</code>                            class. Refer HTML markup line no 34.</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="sidebar-detached sidebar-left sidebar-sticky"="">
        <div class="sidebar">
          <div class="sidebar-content card d-none d-lg-block">
            <div class="card-body">
              <div class="category-title pb-1">
                <h6>Card example</h6>
              </div>
              <!-- Card sample -->
              <div class="text-center">
                <img class="card-img-top mb-1 img-fluid" data-src="holder.js/100px180/" src="{{asset('/')}}app-assets/images/portfolio/portfolio-1.jpg"
                alt="Card image cap">
              </div>
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the
                bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Button</a>
              <!-- /Card sample -->
              <hr>
              <!-- Striped Progress sample -->
              <div class="category-title pb-1">
                <h6>Progress example</h6>
              </div>
              <div>
                <div class="progress progress-sm mt-1 mb-0">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress progress-sm mt-1 mb-0">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress progress-sm mt-1 mb-0">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <!-- /Striped Progress sample -->
              <hr>
              <!-- Media sample -->
              <div class="category-title pb-1">
                <h6>Media example</h6>
              </div>
              <div class="media">
                <a class="media-left pr-1" href="#">
                  <img class="media-object" src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-3.png"
                  alt="Generic placeholder image" style="width: 64px;height: 64px;"
                  />
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Cookie candy</h4> Cookie candy dragée marzipan pie pudding.
                </div>
              </div>
              <!-- /Media sample -->
              <hr>
              <!-- /Eange Slider sample -->
              <div class="category-title pb-1">
                <h6>Range Slider example</h6>
              </div>
              <fieldset>
                <div class="form-group">
                  <div class="slider-sm slider-success my-1" id="small-slider"></div>
                </div>
              </fieldset>
              <!-- /Range Slider sample -->
              <hr>
              <!-- Knob sample -->
              <div class="category-title pb-1">
                <h6>Knob example</h6>
              </div>
              <div>
                <div class="text-center">
                  <input type="text" value="35" class="knob angle-offset" data-angleOffset="90" data-linecap="round"
                  data-fgColor="#FB6E52">
                </div>
              </div>
              <!-- /Knob sample -->
              <hr>
              <!-- Form sample -->
              <div class="sidebar-category">
                <div class="category-title pb-1">
                  <h6>Form example</h6>
                </div>
                <form action="#" class="category-content">
                  <div class="form-group">
                    <label>Your name:</label>
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label>Your password:</label>
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Your message:</label>
                    <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button type="reset" class="btn btn-danger btn-block">Reset</button>
                    </div>
                    <div class="col-6">
                      <button type="submit" class="btn btn-info btn-block">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /form sample -->
              <hr>
              <!-- /Ratings sample -->
              <div class="category-title pb-1">
                <h6>Ratings example</h6>
              </div>
              <div>
                <p class="card-text">This is the most basic example of ratings.</p>
                <div id="score-rating"></div>
              </div>
              <!-- /Ratings sample -->
            </div>
          </div>
        </div>
      </div>
    

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