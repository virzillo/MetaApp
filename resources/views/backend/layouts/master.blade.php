<!DOCTYPE html>
<html class="loading" lang="it" data-textdirection="ltr">
 @include('backend.layouts.head')
  <body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- fixed-top-->
@include('backend.layouts.navbar')

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
@include('backend.layouts.mainmenu')
    <!-- / main menu-->
   


 <div class="app-content content">
    <div class="content-wrapper">

      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">@yield('titolopagina')</h3>
            @include('backend.layouts.partials.breadcumbs')
        </div>
        <div class="content-header-right text-md-right col-md-6 col-12">
            @include('backend.layouts.partials.iconsright')
        </div>
      </div>


          @yield('content')



    </div>
  </div>
 <div id="app">
  </div>


 @include('backend.layouts.footer')



    @stack('script')
  </body>
</html>
