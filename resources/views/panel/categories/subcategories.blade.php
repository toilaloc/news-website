<li id="{{$subcategory->id}}" class="list-group-item"><a href="{{route('categories.edit', $subcategory->id)}}">{{$subcategory->name}}</a>
    <small class="text-muted">{{$subcategory->slug}}</small>
 @if($subcategory->categories)
	    <ul id="subcategory">
	        @foreach($subcategory->categories as $subcategory)
	            @include('panel.categories.subcategories', ['subcategory' => $subcategory])
	        @endforeach
	    </ul>
	@endif 
</li>

