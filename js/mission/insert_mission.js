$(document).ready(function(){
$('#mission_insert').submit(function(){
			$.ajax({
				url: 'model/api/mission/insert.php',
				type: 'post',
				data: $('#mission_insert').serialize(),
				success: function(data){
					alert(data);
				}
			});
		});
	});