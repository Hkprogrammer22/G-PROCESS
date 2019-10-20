$(document).ready(function(){
function atualizaProjetos() {
		$.ajax({
			url: 'model/api/project/projects.php',
			success: function (data) {
				$('.find_project_all').html(data);
			}
		});
	}
	atualizaProjetos();
  });