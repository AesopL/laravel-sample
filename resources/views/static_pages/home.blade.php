@extends('layouts.default')

@section('title','home')
@section('content')
<div class="jumbotron">
	<h1>home页面</h1>
	<p class="lead">
		这是一个home页面
	</p>
	<p>
		<a href="{{ route('signup') }}" class="btn btn-lg btn-success">现在注册</a>
	</p>
</div>

@stop
