<li id="{{$category->id}}" class="list-group-item">
<div class="mb-4">
<div class="d-inline"><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a> </div>
<div class="d-inline" style="float:right;"> 
<form style="display: inline-block;" action="{{ route('categories.destroy',$category->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
</form>
</div>
</div>
    <ul id="subcategory" class="list-group mt-2">
           
        {{-- Get the first subcategory --}}
	        @foreach ($category->subcategories as $subcategory)
	            @include('admin.categories.childcategories', ['subcategory' => $subcategory])
            @endforeach
            
    </ul>
    
</li>