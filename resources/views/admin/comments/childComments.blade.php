<li id="{{$subComments->id}}" class="list-group-item">
	<div class="mb-2">
		<div class="d-inline"><a href="{{route('comments.edit', $subComments->id)}}">{{$subComments->content}}</a> </div>
		<div class="d-inline" style="float:right;">
		<form style="display: inline-block;" action="{{ route('comments.destroy',$subComments->id) }}" method="POST">
			@csrf
			@method('DELETE')
			<button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
		</form>
		</div>
	</div>
 @if($subComments->Comments)
	    <ul id="subcategory">
	        @foreach($subComments->Comments as $subComments)
	            @include('admin.comments.childComments', ['subComments' => $subComments])
	        @endforeach
	    </ul>
	@endif
</li>
