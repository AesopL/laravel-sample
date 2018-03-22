<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8"><!--
	<link href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
	<link rel="stylesheet" href="/css/app.css">
	<title>@yield('title','sample-vblog') -Laravel学习</title>
</head>
<body>
    @include('layouts._header')
	<div class="container">
		@include('shared._message')
        @yield('content')
        @include('layouts._footer')
	</div>
	<script src="/js/app.js"></script>
</body>
</html>
