<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin | Blank Page</title>
    <base href="{{asset('')}}">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="LTE/css/bootstrap.min.css">
	<link rel="stylesheet" href="LTE/css/font-awesome.min.css">
	<link rel="stylesheet" href="LTE/css/AdminLTE.css">
	<link rel="stylesheet" href="LTE/css/_all-skins.min.css">
	<link rel="stylesheet" href="LTE/css/jquery-ui.css">
	<link rel="stylesheet" href="LTE/css/style.css" />
	<script src="LTE/js/angular.min.js"></script>
	<script src="LTE/js/app.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">

		@include('admin.header')

		@include('admin.sidebar')


		<!-- =============================================== -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Main content -->
			<section class="content">
				@yield('content')
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		@include('admin.footer')


	</div>
	<!-- ./wrapper -->

	<!-- jQuery 3 -->

	<script src="LTE/js/jquery.min.js"></script>
	<script src="LTE/js/jquery-ui.js"></script>
	<script src="LTE/js/bootstrap.min.js"></script>
	<script src="LTE/js/adminlte.min.js"></script>
	<script src="LTE/js/dashboard.js"></script>
	<script src="LTE/tinymce/tinymce.min.js"></script>
	<script src="LTE/tinymce/config.js"></script>
	<script src="LTE/js/function.js"></script>
</body>

</html>