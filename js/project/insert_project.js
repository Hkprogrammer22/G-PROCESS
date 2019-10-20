$(document).ready(function(){
		$('.form-parceiros').show();
		$('.form-info').hide();
		$('#voltar').hide();
		$('#voltar').click(function(){
			$('.form-parceiros').show();
			$('.form-info').hide();
			$('#voltar').hide();
		});
		$('#proximo').click(function(){
			$('.form-parceiros').hide();
			$('.form-info').show();
			$('#voltar').show();
		});
		$('#project_insert').submit(function(){
			$.ajax({
				url: 'model/api/project/insert.php',
				type: 'post',
				data: $('#project_insert').serialize(),
				success: function(data){
					alert(data);
				}
			});
		});
	});