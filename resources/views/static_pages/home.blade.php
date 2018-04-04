@extends('layouts.default')

@section('title','home')
@section('content')
@if(Auth::check())
<div class="row">
	<div class="col-md-8">
		<section>
			@include('shared._status_form')
		</section>
		<h3>
			微博列表
		</h3>
		@include('shared._feed')
	</div>
	<div class="col-md-4">
		<section >
			@include('shared._user_view',['user'=>Auth::user()])
		</section>
	</div>
</div>
@else
<div class="jumbotron">
	<h1>home页面</h1>
	<p class="lead">
		这是一个home页面
	</p>
	<p>
		<a href="{{ route('signup') }}" class="btn btn-lg btn-success">现在注册</a>
	</p>
</div>
@endif

@stop
