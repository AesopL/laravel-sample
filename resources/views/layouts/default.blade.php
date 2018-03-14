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
	<header class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="col-md-offset-1 col-md-10">
				<a href="#">vblog</a>
				<nav>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="">帮助</a></li>
						<li><a href="">关于</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<div class="container">
  @yield('content')
	</div>
</body>
</html>
