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
		echo '<fieldset data-role="controlgroup" data-iconpos="right" class="ui-controlgroup ui-controlgroup-vertical ui-corne>
		<div role="heading" class="ui-controlgroup-label"> 
			<h1> Selecione seus parceiros para o projeto<h1>
			</div> <div class="ui-controlgroup-controls">';
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
			echo '<div class="ui-checkbox">
					<label for="checkbox-h-6a" class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-right ui-first-child"> '.$registro['name'].' 
					</label>
					<input type="checkbox" name="checkbox-h-6a" id="checkbox-h-6a" data-cacheval="false">
					</div> ';	 
			}
			echo '</div>
			</fieldset>';	
			echo '<a class="ui-btn"> Próximo </a> ';	
		}

?>
<script src="js/partner/perfil_partner.js"></script>

