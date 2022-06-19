@INCLUDE('admin.layout.header')
<!-- Page Wrapper -->
<div id="wrapper">
  @INCLUDE('admin.layout.sidebar')
  <!-- Content Wrapper -->
  <div id="content-wrapper" CLASS="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        @INCLUDE('admin.layout.navbar')
      <!-- Begin Page Content -->
      <div CLASS="container-fluid">
          @yield('content')
              <!-- End of Main Content -->
    @INCLUDE('admin.layout.footer')
      </div>
      <!-- /.container-fluid -->
    </div>
  </div>
  <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
@INCLUDE('admin.layout.js')
