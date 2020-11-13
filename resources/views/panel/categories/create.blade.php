

      <!-- Add Success Notification --> 
      <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="form-group">
          <label>Name: </label>
        <input id="nameCategory" class="form-control" type="text" name="name"/>
        </div>
        <div class="form-group">
          <label>Slug: </label>
        <input id="slugCategory" class="form-control" type="text" name="slug"/>
        </div>
        <div class="form-group">
          <lable>Parent's Category?</lable>
          <select name="parent_id" class="form-control">
          <option value="" disabled selected>Choose option</option>
          @foreach($categories as $category)  
          <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group">
          <label>Thumbnail: </label>
        <input  class="form-control" type="file" name="thumbnail"/>
        </div>
        <div class="form-group">
        <label>Description: </label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Submit"/>
      </form>   
      </div>
