<li id="{{ $comment->id }}" class="list-group-item">
    <div class="mb-3">
        <div class="d-inline"><a href="{{ route('comments.edit', $comment->id) }}">{{ $comment->user_id }}</a> </div>
        <div class="d-inline" style="float:right;">
            <form style="display: inline-block;" action="{{ route('categories.destroy', $comment->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
            </form>
        </div>
    </div>
    <ul id="listComments" class="list-group">

        <!-- Get the first listComments  -->
        @foreach ($comment->subComments as $subComments)

            @include('admin.comments.childComments', ['subComments' => $subComments])

        @endforeach

    </ul>

</li>
