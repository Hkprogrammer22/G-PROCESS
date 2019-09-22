$(document).ready(function(){
	$('#insert_user').submit(function(){
		$.ajax({
			url: '../../model/api/user/insert.php',
			type: 'POST',
			data: $('#insert_user').serialize(),
			success: function(data){
				alert(data);
				window.location.href = '../../index.php';
			}
		});
		return false;
	});
});