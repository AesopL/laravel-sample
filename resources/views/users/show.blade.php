@extends('layouts.default')
@section('title',$user->name)
@section('content')
<div class="row grey lighten-5">
    <div class="col-md-12">
        <div class="col-md-12">

            <div class="col-md-3">
                @include('shared._user_view')
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header text-center rgba-teal-strong white-text" style="line-height:4rem;height: 4rem;">
                        微博列表
                    </div>
                    <div class="card-body">
                        @if(count($statuses)>0)
                        <ul class="list-group">
                            @foreach($statuses as $status) @include('shared._status') @endforeach
                        </ul>
                        @endif
                    </div>
                    <div class="text-center">{!! $statuses->render() !!}</div>
                </div>
            </div>

        </div>
    </div>
</div>
@stop
