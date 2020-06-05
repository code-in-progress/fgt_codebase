@can('update', $reply)
<div class="panel-footer level">
    <button @click="editing = true" class="btn btn-xs mr-1">Edit</button>
    <form method="POST" action="/replies/{{$reply->id}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger btn-xs">Delete Reply</button>
    </form>
</div>
@endcan
