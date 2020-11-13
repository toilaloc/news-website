<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


      <div class="container mt-5">
          
      <!-- Errors Notification -->
      @if($errors->any())
          <div class="alert alert-danger" role="alert">
             <ul>
                 @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
                 @endforeach
             </ul> 
          </div>
          @endif
      <!-- Add Success Notification --> 
      <form action="{{route('categories.update', $category->id)}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="form-group">
          <label>Name: </label>
        <input id="nameCategory" class="form-control" type="text" name="name" value="{{$category->name}}"/>
        </div>
        <div class="form-group">
          <label>Slug: </label>
        <input id="slugCategory" class="form-control" type="text" name="slug" value="{{$category->slug}}"/>
        </div>
        <div class="form-group">
          <label>Thumbnail: </label>
        <input  class="form-control" type="file" name="thumbnail"/><br>
        <img src="{{url('uploads', $category->thumbnail)}}" height="100px" width="100px"/>
        </div>
        <div class="form-group">
        <label>Description: </label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$category->description}}</textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Submit"/>
      </form>   
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
     $(document).ready(function() { 
      
        $('#nameCategory').change(function(){
          var name = $('#nameCategory').val();
        //  $('#slugCategory').val(name);
          console.log(name);
          $.ajax({
            url: "{{route('categories.getslug')}}",
            type: "GET",
            data: {name: name},
            success: function(res){
                console.log(res);
               $('#slugCategory').val(res.slug);
            }
          });
        });
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
