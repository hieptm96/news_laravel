<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Trang Thông Tin Mới Nhất">
    <meta name="author" content="TonyHuynh">
    <title>Admin - News</title>
    <base href="{{ asset('') }}">

    <!-- Bootstrap Core CSS -->
    <link href="{!! url('public/admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{!! url('public/admin_asset/bower_components/metisMenu/dist/metisMenu.min.css') !!}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!! url('public/admin_asset/dist/css/sb-admin-2.css') !!}" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="{!! url('public/admin_asset/bower_components/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link href="{!! url('public/admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') !!}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{!! url('public/admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css') !!}" rel="stylesheet">
    
    <!-- Ckeditor && Ckfinder -->
    <script src="{!! url('public/admin_asset/js/ckeditor/ckeditor.js') !!}"></script>
    <script src="{!! url('public/admin_asset/js/ckfinder/ckfinder.js') !!}"></script>
    
    <script type="text/javascript">
        var baseURL = '{!! url('/') !!}';
    </script>
    
    <script src="{!! url('public/admin_asset/js/func_ckfinder.js') !!}"></script>
    <!--End Ckeditor && Ckfinder -->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.layout.header');

        <!-- Page Content -->
        @yield('content') 
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{!! url('public/admin_asset/bower_components/jquery/dist/jquery.min.js') !!}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{!! url('public/admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{!! url('public/admin_asset/bower_components/metisMenu/dist/metisMenu.min.js') !!}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{!! url('public/admin_asset/dist/js/sb-admin-2.js') !!}"></script>

    <!-- DataTables JavaScript -->
    <script src="{!! url('public/admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! url('public/admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') !!}"></script>
     
    
    <!-- My JavaScript -->
    <script src="{!! url('public/admin_asset/js/myscript.js') !!}"></script>
    
    @yield('script')

</body>

</html>