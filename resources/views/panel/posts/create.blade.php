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
      <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="form-group">
          <label>Name: </label>
        <input id="namePost" class="form-control" type="text" name="name"/>
        </div>
        <div class="form-group">
          <label>Slug: </label>
        <input id="slugPost" class="form-control" type="text" name="slug" placeholder="This input auto get from name input"/>
        </div>
        {{-- input user_ id--}}
        <input class="form-control" type="text" name="user_id" value="1" hidden/>
        {{-- input vote --}}
        <input class="form-control" type="text" name="vote" value="NULL" hidden/>
        <div class="form-group">
          <lable>Category</lable>
          <div class="form-row pt-2">
          @foreach($categories as $category)
          <div id="categoryCheckbox" class="col-md-4" style="background: #cecece47; border: 2px solid white; border-radius: 5px;">
          <div class="form-check form-check-inline">
            <input id="parent_{{$category->id}}" class="form-check-input" type="checkbox" name="categories_id[]"  value="{{$category->id}}">
            <label class="form-check-label" for="inlineCheckbox1">{{$category->name}}</label>
            </div>
            @if($category->subcategories)
            @foreach ($category->subcategories as $subcategory)
            <div class="form-check ml-3">
            <input class="form-check-input" type="checkbox" value="{{$subcategory->id}}" name="categories_id[]">
            <label class="form-check-label">
            {{$subcategory->name}}
            </label>
            </div>
            @endforeach
        @endif
          </div>
          @endforeach

        </div>
        </div>
        <div class="form-group">
        <label>Content: </label>
        <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status"  value="0" checked>
            <label class="form-check-label">Save The Draft</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" value="1">
            <label class="form-check-label">Publish Now</label>
          </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Submit"/>
      </form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>

    // Start Jquery
     $(document).ready(function() {

      /** ****Feature resolve checkbox category****
        * catch event checked checkbox  
        * get id element clicking 
        * all element had class .col-md-4 is hide
        * just only parent of this checkbox show
      */
      $('[type=checkbox]').change(function(){       
        if($('[type=checkbox]').is(':checked')) {
        var id = $(this).attr("id");
        $('.col-md-4').hide().delay(1000); 
       // $(this).closest(".col-md-4").css("display", "block");
        var parent_id = $(this).closest(".col-md-4").css("display", "block");
        } else {
          $('.col-md-4').show(1000);
        }
         });

                
         /** ****testing of feature checkbox category****
          * console.log(parent_id);
          *  console.log(idroot);
          *  console.log('had changed');
         */ 

        /**   ****testing get slug feature****
        * $('#parent').val(this.checked);
        * id = $(this).attr("id");
        * console.log("1212");
        * $("#parent").attr("disabled", true);
        * $("#parent").each(function(){ $(this).toggle(!!this.id); });
        * $(this).attr("disabled", false);
        */

        $('#namePost').change(function(){
          var name = $('#namePost').val();
        //  $('#slugCategory').val(name);
          console.log(name);
          $.ajax({
            url: "{{route('categories.getslug')}}",
            type: "GET",
            data: {name: name},
            success: function(res){
                console.log(res);
               $('#slugPost').val(res.slug);
            }
          });
        });
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
