<li id="status-{{ $status->id }}" class="list-group-item d-flex  justify-content-between align-items-center">
    <div class="row hoverable">
        <div class="col-md-12">
            <div class="col-md-8">{{ $status->content }}</div>
            <div class="col-md-4">
                @can('destroy',$status)
                <form action="{{ route('statuses.destroy',$status->id) }}" method="post">
                    {{ csrf_field() }} {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-sm fix-top pull-right">删除</button>
                </form>
                @endcan
            </div>
        </div>
        <span class="grey-text ml-1 ">{{ $status->created_at->diffForHumans() }}</span>
    </div>
</li>
