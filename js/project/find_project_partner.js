$(document).ready(function(){
function atualizaProjetos() {
		$.ajax({
			url: 'model/api/project/query_partner.php',
			success: function (data) {
				$('#find_project_partner').html(data);
			}
		});
	}
	atualizaProjetos();
  });