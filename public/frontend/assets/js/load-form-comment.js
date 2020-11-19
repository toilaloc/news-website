$('.reply-button').on('click', function(){
    id = $(this).data('idcmt');
    authorReply = $(this).data('authorreply');
    token = $('meta[name="csrf-token"]').attr('content');
    post_id = $("input[name=post_id").val();
    user_id  = $("input[name=user_id]").val();
    date = (new Date()).toISOString().split('T')[0];
    $("#commentForm").hide();
    $.ajax({
        url: $("input[name=loadFormReply]").val(),
        type: "GET",
        data: {'_token': token},
        success: function(res){
          html = res.formReply;
          changePostID = html.replace("postID", post_id);
          changeUserID = changePostID.replace("userID", user_id);
          changeCommentID = changeUserID.replace("commentID", id);
          changeDate = changeCommentID.replace("dateRoot", date);
          changeAuthorReply = changeDate.replace("authorReplyName", authorReply);
          htmlChanged = changeAuthorReply;
         $('#loadCmt').html(htmlChanged);
        }
    });
});
function backComment(){
         $("#replyForm").remove();
         $("#commentForm").show();
}
