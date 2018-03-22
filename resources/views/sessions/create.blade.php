@extends('layouts.default')

@section('title','登陆')
@section('content')
	<div class="col-md-offset-2 col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5>登陆</h5>
			</div>
			<div class="panel-body">
				@include('shared._errors')
				<form action="{{ route('login') }}" method="post">
					{{ csrf_field() }}
					<div class="from-group">
						<label for="email">邮箱</label>
						<input type="text" name="email" class="form-control" value="{{ old('email')}}">
					</div>
					<div class="form-group">
						<label for="password">密码</label>
						<input type="password" name="password" class="form-control" value="{{ old('password') }}">
					</div>

					<div class="checkbox">
						<label><input type="checkbox" name="remember">记住我</label>
					</div>
					<button type="submit" class="btn btn-primary">登陆</button>
					<hr>
					<p>还没有账号？<a href="{{ route('signup') }}">注册一个吧</a></p>
				</form>
			</div>
		</div>
	</div>
@stop
