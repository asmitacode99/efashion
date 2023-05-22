
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('seller.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('seller.sidebar')
      <!-- partial -->
      @include('seller.header')
        <!-- partial -->
        @include('seller.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('seller.script')
    <!-- End custom js for this page -->
  </body>
</html>