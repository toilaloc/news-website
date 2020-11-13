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
      @if(session()->get('success'))
      <div class="alert alert-success" role="alert">
                {{session()->get('success') }}
            </div>
        @endif  

    <ul class="list-group">
    <a href="{{route('categories.create')}}" class="btn btn-primary">ADD NEW CATEGORY</a>
    {{-- Get all Parent Category --}}
    @foreach($categories as $category)
        {{-- include from blade loadcategory subcategory --}}
        @include('panel.categories.loadcategories', ['category' => $category])
    @endforeach
        <div id="loadResult"></div>
    </ul>
      <button id="loadCategory" class="btn btn-primary mt-2">View More</button> 
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>

    $(document).ready(function(){

          // loadmore
          // khong dung --> $('#loadCategory').click(function(){
          // khong dung --> $("li").click(function(){
          // khong dung -->  console.log($(this).attr("id"));
          // get id attr click

            // var id = $(this).attr("id");   
        //     $('#loadCategory').click(function(){
        //       var count = $('.list-group-item').length; 

        //   //  khong dung --> $(this).remove(); 

        //     console.log(count);
        //     $.ajax({
        //       url: "{{route('load.categories')}}",
        //       type: "GET",
        //       data: {count:count},
        //       success: function(res){
        //         console.log(res.data);
        //         $('#loadResult').append(res.data);
        //     },
        //     error: function(error){
        //       console.log(error);
        //     }
        //   });  
          
        // });

        $( window ).scroll(function() {
        
          console.log('fdfd');
        
        });
          
          // show hide subcategories
          $('ul#subcategory').hide();
          $(".list-group-item").click(function() {
          var id = $(this).attr("id");   
          //console.log(id);
          $(this).find('#subcategory').toggle();
          });
          });   

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>