$('.link_membro').click(function(){
    var id_membro = $(this).data('id_membro');
    $.ajax({
        url: 'model/api/member/member_project.php',
        type: 'post',
        data: {membro: id_membro},
        success: function(data){
            $('.find_member_project').html(data);
        }
    });
});