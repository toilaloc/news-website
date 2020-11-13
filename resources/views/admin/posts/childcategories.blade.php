@foreach($childCategories->subcategories as $childrenCategories)
<div class="form-check">
  <input class="form-check-input" name="categories_id[]" type="checkbox" value="{{$childrenCategories->id}}" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    {{$childrenCategories->name}}
  </label>
</div>
@if($childrenCategories->subcategories)
@include('admin.posts.childcategories', ['childrenCategories' => $childrenCategories])
@endif
@endforeach