$('.report-comment').on('click', function(){
    var commentId = $(this).data("id");
    $('.comment-id').val(commentId);
    // token = $('meta[name="csrf-token"]').attr('content');
    // var url = $("input[name=ajaxReport]").val();
    // var type = "comment";
    // $.ajax({
    //     url: url,
    //     token: token,
    //     type: "POST",
    //     data: {
    //         "commentId": commentId,
    //         "type": type,
    //     },
    //     success: function(){

    //     }
    // });
});