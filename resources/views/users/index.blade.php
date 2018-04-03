@extends('layouts.default')
@section('content')
<div class="col-md-offset-2 col-md-8">
    <h1>用户列表</h1>
    <div class="list-group">
        @foreach($users as $user)
        	@include('users._user')
        @endforeach
    </div>
    <div class="text-center">
        {!! $users->render() !!}
    </div>
</div>
@stop
