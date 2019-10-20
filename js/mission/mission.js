$(document).ready(function(){
    $.ajax({
        url: 'model/api/mission/mission.php',
        success: function(data){
            $('#mission').html(data);
        }
    });
});