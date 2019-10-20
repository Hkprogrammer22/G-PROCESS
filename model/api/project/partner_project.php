<?php
	//Requerimento das Classes
	require_once('../../classes/db.php');
	
	//Variáveis de Sessão
	session_start();
	$id = $_SESSION['id'];
	
	//Ojeto de Busca
	$db = new db();
	$colunas = 'id_partner, name, login, number_phone, email';
	$tabela = ' user ';
	$condicao = "u join partner p on p.id_partner = u.id WHERE id_user = '$id' ORDER BY name";
	$resultado_id = $db->query($colunas, $tabela, $condicao);

	//Resultado da Busca
	if ($resultado_id) {
		echo '
		
			<div role="heading" class="ui-controlgroup-label">
				<H1>Selecionar Parceiro(s):</lh1>
			</div>
			<div data-filter="true"></div>';
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
			echo '
			<div class="ui-controlgroup-controls">
				<div class="ui-checkbox">
					<label for="partner" class="ui-btn ui-corner-all ui-btn-inherit  ui-first-child">
						'.$registro['name'].'
						<input type="checkbox" name="partner" data-cacheval="false" value='.$registro['id_partner'].'>
					</label>
				</div>
			</div>';
		}
		
	}
?>
<script src="js/partner/perfil_partner.js"></script>

