<li id="{{$subcategory->id}}" class="list-group-item">
	<div class="mb-2">
		<div class="d-inline"><a href="{{route('categories.edit', $subcategory->id)}}">{{$subcategory->name}}</a> </div>
		<div class="d-inline" style="float:right;"> 
		<form style="display: inline-block;" action="{{ route('categories.destroy',$subcategory->id) }}" method="POST">
			@csrf
			@method('DELETE')
			<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('bạn có chắc muốn xóa');"><i class="far fa-trash-alt"></i></button>
		</form>
		</div>
	</div>
 @if($subcategory->categories)
	    <ul id="subcategory">
	        @foreach($subcategory->categories as $subcategory)
	            @include('admin.categories.childcategories', ['subcategory' => $subcategory])
	        @endforeach
	    </ul>
	@endif 
</li>
