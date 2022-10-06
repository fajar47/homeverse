<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.min.css')}}">
  <!-- Alert  -->
  <link rel="stylesheet" href="{{asset('myalert/toastr.min.css')}}">
  <link rel="stylesheet" href="{{asset('sweetalert2/dist/sweetalert2.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/skins/_all-skins.min.css')}}">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


</head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- header. navbar -->
    @include('admin.layouts.navbar')
    <!-- Left side column. contains the sidebar -->
    @include('admin.layouts.sidebar')
    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- Footer -->
    @include('admin.layouts.footer')

    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="backend/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="backend/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="backend/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="backend/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="backend/dist/js/demo.js"></script>
  <!-- Start Toaster & Sweetalert -->
  <script src="myalert/toastr.min.js"></script>
  <script src="sweetalert2/dist/sweetalert2.min.js"></script>

  <script>
    var type = "{{Session::get('alert-type','info')}}"
    switch (type) {
      // case 'info':
      //   toastr.info("{{ Session::get('messege') }}");
      //   break;
      case 'success':
        toastr.success("{{ Session::get('messege') }}");
        break;
      case 'warning':
        toastr.warning("{{ Session::get('messege') }}");
        break;
      case 'error':
        toastr.error("{{ Session::get('messege') }}");
        break;
    }
  </script>

  <script>
    $(document).on("click", "#delete", function(e) {
      e.preventDefault();
      var link = $(this).attr("href");
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
          window.location.href = link;
        } else {
          Swal.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
          )
        }
      })
    });
  </script>
  <!-- End Toaster & Sweetalert2 -->

  <script>
    $(document).ready(function() {
      $('.sidebar-menu').tree()
    })
  </script>
  <!-- page script -->
  <script>
    $(function() {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
      })
    })
  </script>
</body>

</html>