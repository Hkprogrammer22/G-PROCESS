$(document).ready(function(){
    $('.btn_project_delete').click(function(){
        var id_project = $(this).data('id_project');
        $.ajax({
            url: 'model/api/project/delete_project.php',
            method: 'post',
            data: {name: id_project},
            success: function(data){
				alert(data);
                document.location.reload(true);
            }
        });
    });
});