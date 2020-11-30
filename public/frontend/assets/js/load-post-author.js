$('.loadPostAuthorActivity').on('click', function(){
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
        });
    var length = $('.listPostAuthor').length;
    var url =  $("input[name=ajaxLoadPostAuthor]").val();
    var last = $(".listPostAuthor").last().data("postid");
    var id = $(".loadPostAuthorActivity").data("userid");
    token = $('meta[name="csrf-token"]').attr('content');


   $.ajax({
        url: url,
        data: {
            '_token': token,
            'id': id,
            'length': length,
            'last': last,
        },
        type: "GET",
        success: function(res){
           // console.log(res);
          $('.allPostAuthor').append(res.data);
          if(res.end != ""){
            $('.loadPostAuthorActivity').hide();
          }
       //   alert(last);
        Toast.fire({
            icon: res.icon,
            title: res.message,
        });
    }
   });
});