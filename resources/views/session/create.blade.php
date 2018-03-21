@extends('layouts.default')

@section('title','login')
@section('content')
	<div class="col-md-offset-2 col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5>login</h5>
			</div>
			<div class="panel-body">
				<form action="{{ route('login') }}" method="post">
					<div class="from-group">
						<label for="">email</label>
						<input type="text" class="form-control" value="">
					</div>
					<div class="from-group">
						<label for="">password</label>
						<input type="text" class="form-control" value="">
					</div>
					<button type="submit" class="btn btn-primary">login</button>
					<hr>
					<p>have not account?<a href="{{ route('signup') }}">signup</a></p>
				</form>
			</div>
		</div>
	</div>
@stop