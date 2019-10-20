
<?php
	//Requerimento das Classes
	require_once('../../classes/db.php');
	
	//Variáveis de Sessão
	session_start();
	$id = $_SESSION['id'];
	
	//Ojeto de Busca
	$db = new db();
	$colunas = 'id, idphase, name, partners';
	$tabela = ' mission ';
	$condicao = "where idphase = '$id'";
	$resultado_id = $db->query($colunas, $tabela, $condicao);

	//Resultado da Busca
	if ($resultado_id) {
		echo '
		
			<div role="heading" class="ui-controlgroup-label">
				
			</div>
			<div data-filter="true"></div>';
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
			echo '
			<div class="ui-controlgroup-controls">
				<div class="ui-checkbox">
					<label for="partner" class="ui-btn ui-corner-all ui-btn-inherit  ui-first-child">
						'.$registro['name'].'
						<input type="checkbox" name="partner" data-cacheval="false" value='.$registro['name'].'>
					</label>
				</div>
			</div>';
		}
		
	}
?>
<script src="js/mission/mission.js"></script>

