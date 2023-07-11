<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
@include('backend.admin.includes.style')
    <!-- endinject -->
    <!-- Plugin css for this page -->
 
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
   
    <!-- End layout styles -->
    
  </head>
  <body>
   @include('backend.admin.includes.sidebar')
   <div class="container-fluid page-body-wrapper">   
   <!-- partial -->
     @include('backend.admin.includes.navbar')
        <!-- partial -->
       @yield('content')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('backend.admin.includes.script')
    <!-- End custom js for this page -->
  </body>
</html>