<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend')}}/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.19.0/ckeditor.js" integrity="sha512-tjxUra6WjSA8H5+nC7G61SVqEXj1e958LdR4N8BGZeRx9tObm/YhsrUzY6tH4EuHQyZqOyu317pgV7f8YPFoAQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">



<div class="wrapper">
  
  @include('admin.body.header')



  @include('admin.body.sidebar')


  @yield('content')



  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

  @include('admin.body.footer')



</div>



<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('backend')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backend')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend')}}/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('backend')}}/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('backend')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{asset('backend')}}/plugins/raphael/raphael.min.js"></script>
<script src="{{asset('backend')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{asset('backend')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('backend')}}/plugins/chart.js/Chart.min.js"></script>

<script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('backend')}}/dist/js/pages/dashboard2.js"></script>




<script type="text/javascript">
    
    @if(Session::has('message'))



  let type = "{{ Session::get('type') }}";

  if(type == 'success'){

    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: "{{ Session::get('message') }}",
  showConfirmButton: false,
  timer: 1500
})

  }

  


  @endif


  @if(Session::get('type') == 'error')

    let message = "{{Session::get('message')}}"

    let type = "{{Session::get('type')}}"

   Swal.fire({
  icon: type,
  title: 'Oops...',
  text: message,
    timer: 1500
  
})



@endif


</script>


<script>
    $(document).ready(function (){
        CKEDITOR.replace('description',{
            height:250,
        })
    });
</script>








</body>
</html>