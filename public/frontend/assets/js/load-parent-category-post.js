$('.loadParentCategoryPost').on('click', function(){
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
    var length = $('.listPostCategory').length;
    var id = $('.loadParentCategoryPost').data("id");
    var url =  $("input[name=ajaxLoadPostCategoryAll]").val();
    var last = $(".listPostCategory").last().data("post");
    var first = $(".listPostCategory").first().data("post");
    token = $('meta[name="csrf-token"]').attr('content');
   $.ajax({
        url: url,
        data: {
            '_token': token,
            'id': id,
            'length': length,
            'last': last,
            'fisrt': first,
        },
        type: "GET",
        success: function(res){
          $('.allPostCategory').append(res.data);
          if(res.end != ""){
            $('.loadParentCategoryPost').hide();
          }
       //   alert(last);
        Toast.fire({
            icon: res.icon,
            title: res.message,
        });
    }
   });
});