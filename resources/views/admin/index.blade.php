<!DOCTYPE html>
<html>
@include('admin.header.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  	@include('admin.header.header')
  	@include('admin.sidebar.sidebar')
  	@yield('content')
  	@include('admin.footer.footer')
	@include('admin.footer.script')
</body>
</html