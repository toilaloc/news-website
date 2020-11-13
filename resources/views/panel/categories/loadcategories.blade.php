<li id="{{$category->id}}" class="list-group-item"><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a>
    <small class="text-muted">{{$category->slug}}</small>
    <ul id="subcategory" class="list-group mt-2">
      {{-- Get the first subcategory --}}
	        @foreach ($category->subcategories as $subcategory)
	            @include('panel.categories.subcategories', ['subcategory' => $subcategory])
	        @endforeach
	  </ul>
</li>



