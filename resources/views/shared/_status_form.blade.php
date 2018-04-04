<form action="{{ route('statuses.store') }}" method="post">
@include('shared._errors')
{{ csrf_field() }}
<div class="md-form mb-4 pink-textarea active-pink-textarea">
    <textarea name="content" type="text" id="form18" class="md-textarea form-control" rows="3"></textarea>
    <label for="form18">今天有什么新鲜事呢？？？？</label>
    <button type="submit" class="btn btn-default pull-right">发布</button>
</div>
</form>
