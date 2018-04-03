<div class="list-group-item">
    <div class="row">
        <div class="col-md-8">
            <a href="{{ route('users.show',$user->id) }}">{{$user->name}}</a>
        </div>
        <div class="col-md-4">
            @can('destroy',$user)
            <form action="{{ route('users.destroy',$user->id) }}" method="post">
                {{ csrf_field() }} {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger btn-sm float-right">删除</button>
            </form>
            @endcan
        </div>
    </div>
</div>
