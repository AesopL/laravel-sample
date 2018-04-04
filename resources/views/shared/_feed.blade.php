<div class="card ">
    <div class="card-body">
        <ul class="list-group  list-group-flush">
            @if(count($feed_items))
             @foreach($feed_items as $status)
             @include('shared._status')
             @endforeach
            @endif
        </ul>
    </div>
</div>
