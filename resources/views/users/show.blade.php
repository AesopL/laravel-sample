@extends('layouts.default')

@section('title',$user->name)

@section('content')
<div class="row">
	<div class="col-md-offset-2 col-md-8">
		<div class="col-md-12">
			<div class="col-md-offset-2 col-md-8">
				<!--Card-->
			    <div class="card">

			        <!--Card image-->
			        <div class="view overlay">
			            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
			            <a href="#">
			                <div class="mask rgba-white-slight"></div>
			            </a>
			        </div>

			        <!--Card content-->
			        <div class="card-body">
			            <!--Title-->
			            <h4 class="card-title">{{ $user->name }}</h4>
			            <!--Text-->
			            <p class="card-text">{{ $user->email }}</p>

			            <a href="#" class="btn btn-primary">Button</a>
			        </div>

			    </div>
			    <!--/.Card-->
			</div>
		</div>
	</div>
</div>
@stop
