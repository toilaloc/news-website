       $('.status-select').on('change', function(){
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
})
            var url =  $("input[name=ajaxLoadStatus]").val();
            var status = $( ".status-select" ).val();
            token = $('meta[name="csrf-token"]').attr('content');
           $.ajax({
           url: url,
           data: {
            'status': status,
            '_token': token,
           },
           type: "POST",
           success: function(res){
            $('.resDataStatus').html(res.status);
            Toast.fire({
            icon: res.icon,
            title: res.message,
            });
           }
           });
        });