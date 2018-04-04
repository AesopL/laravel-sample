@extends('layouts.default')
@section('title','登陆')
@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="card">
        <div class="card-header text-center">
            <h3>登陆</h3>
        </div>
        <div class="card-body">
            <div class="m-3">
                @include('shared._errors')
                <form action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="md-form">
                        <label for="email" class="ml-2">邮箱</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email')}}">
                    </div>
                    <div class="md-form">
                        <label for="password">密码</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>
                    <div class="form-check">
                    	<input type="checkbox" id="inlineFormCheckMD" class="form-check-input" name="remember">
                        <label class="form-check-label" for="inlineFormCheckMD">记住我</label>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">登陆</button>
                    <hr>
                    <p>还没有账号？<a href="{{ route('signup') }}">注册一个吧</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
