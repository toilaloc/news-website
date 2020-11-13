@extends('admin.layouts.index')

@section('content')
<div class="col-lg-12 mb-12 sm-12">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div><br />
@endif
  <div class="card shadow mb-4">
      <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">EDIT POSTS: {{$postEditing->name}}</h6>
      </div>
      <div class="card-body">
        <form action="{{route('posts.update', $postEditing->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name"  id="postName" value="{{$postEditing->name}}">
              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">URL</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="slug"  id="postSlug" value="{{$postEditing->slug}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Content</label>
               <div class="col-sm-10 mb-2">
                <div id="editor" style="height: 20rem;">
                  @php 
                  echo $postEditing->content;
                  @endphp
                </div>
                <textarea style="display:none;" id="contentPostEdit" name="content">
                @php 
                  echo $postEditing->content;
                  @endphp
                </textarea>
              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Short Description</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="Description" name="desc"  row="3" placeholder="Short Description">{{$postEditing->desc}}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Author</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="author_id" id="Author" value="{{$postEditing->author_id}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Date Posting</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="date" id="Date" value="{{$postEditing->date}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Categories</label>
                <div class="col-sm-10">

                   <div class="row">
                    @foreach($categories as $categoryParent)
                    <div class="col-sm-3 mb-2">
                        <div class="form-check">
                            <input name="categories_id[]"  class="form-check-input" type="checkbox" value="{{$categoryParent->id}}" id="defaultCheck1" 
                            @php
                            foreach($postEditing->Categories as $oldCategoryId){
                             if($oldCategoryId->id === $categoryParent->id){
                                 echo "checked";
                             }
                            }
                            @endphp
                            >
                            <label class="form-check-label" for="defaultCheck1">
                              <strong>{{$categoryParent->name}}</strong>
                            </label>
                          </div>

                          @if($categoryParent->categories)
                          @foreach($categoryParent->categories as $subCategories)
                            <div class="form-check">
                            <input name="categories_id[]" class="form-check-input" type="checkbox" value="{{$subCategories->id}}" id="defaultCheck1"
                            @php
                            foreach($postEditing->Categories as $oldCategoryId){
                             if($oldCategoryId->id === $subCategories->id){
                                 echo "checked";
                             }
                            }
                            @endphp
                            >
                            <label class="form-check-label" for="defaultCheck1">
                            {{$subCategories->name}}
                            </label>
                            </div>

                            @if($subCategories->categories)
                            @foreach($subCategories->categories as $childCategories)
                                    <div class="form-check">
                                    <input name="categories_id[]" class="form-check-input" type="checkbox" value="{{$childCategories->id}}" id="defaultCheck1"
                                    @php
                            foreach($postEditing->Categories as $oldCategoryId){
                             if($oldCategoryId->id === $childCategories->id){
                                 echo "checked";
                             }
                            }
                            @endphp
                                    >
                                    <label class="form-check-label" for="defaultCheck1">
                                      {{$childCategories->name}}
                                    </label>
                                  </div>
                                  @if($childCategories->subcategories)
                                  @include('admin.posts.childCategoriesEdit', ['childCategories' => $childCategories, 'postEditing' => $postEditing])
                                  @endif
                                @endforeach
                            @endif


                            @endforeach
                          @endif

                    </div>
                    @endforeach

                    {{-- <select name="categories_id[]" multiple>
                      @foreach ($categories as $categoryParent)
                        <option value="{{ $categoryParent->id }}">{{ $categoryParent->name }}</option>
                      @endforeach
                      </select> --}}
                   </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Thumbnails</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" name="thumbnail" class="form-control pb-5 pt-3" id="exampleFormControlFile1">
                      </div>
                </div>
              </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Post</button>
              </div>
            </div>
          </form>
      </div>
    </div>
</div>
<script>

var toolbarOptions = [
  ['bold', 'italic', 'underline', 'strike'],     // toggled buttons
  ['blockquote', 'code-block'],  
  [{ 'align': [] }],             // custom button values
  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
  [{ 'direction': 'rtl' }],                         // text direction

  [{ 'size': ['small', false, 'large', 'huge'] }],
  [ 'link', 'image', 'video' ],   // custom dropdown
  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
  
  // dropdown with defaults from theme

  ['clean']                                         // remove formatting button
];

var quill = new Quill('#editor', {
  modules: {
    toolbar: toolbarOptions
  },
  theme: 'snow'
});

quill.on('text-change', function(delta, oldDelta, source) {
           // console.log(quill.container.firstChild.innerHTML)
            $('#contentPostEdit').val(quill.container.firstChild.innerHTML);
});

</script>
@endsection