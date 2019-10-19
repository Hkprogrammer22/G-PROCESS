$(document).ready(function(){
$('.link_method').click(function(){
		var method = $(this).data('id_method');		

		switch(method) {
			case('incremental'):
			window.location.href = '#incremental';
			break;

			case('cascata'):
			window.location.href = '#cascata';
			break;

			case('scrum'):
			window.location.href = '#scrum_definir_nome';
			break;

			case('prototipacao'):
			window.location.href = '#prototipacao';
			break;

			case('espiral'):
			window.location.href = '#espiral';
			break;
		}

	});
});
