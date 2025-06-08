<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
<x-admin.head/>
</head>
<body>
  <div class="container-scroller d-flex">
    @guest
        @yield('auth')
    @endguest

    @auth

    <!-- partial:./partials/_sidebar.html -->
    <x-admin.sidebar></x-admin.sidebar>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
     <x-admin.navbar/>
      <!-- partial -->
     <div class="main-panel">
     @yield('content')

     <x-admin.footer/>
     </div>
    @endauth

      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <x-admin.script/>
  <!-- End custom js for this page-->
</body>

</html>
