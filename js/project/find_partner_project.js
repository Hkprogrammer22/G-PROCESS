$(document).ready(function(){
    $.ajax({
        url: 'model/api/project/partner_project.php',
        success: function(data){
            $('.parceiros_projetos').html(data);
        }
    });
});