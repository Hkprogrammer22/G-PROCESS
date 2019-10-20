$('.link_parceiro').click(function(){
    var id_parceiro = $(this).data('id_usuario');
    $.ajax({
        url: 'model/api/partner/project_participated.php',
        type: 'post',
        data: {parceiro: id_parceiro},
        success: function(data){
            $('.find_project_participated').html(data);
        }
    });
});