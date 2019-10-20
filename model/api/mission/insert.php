<pre><?php
	//Require das Classes
	require_once('../../classes/db.php');
	require_once('../../classes/mission.php');

	//Valores do Form
	session_start();
	$id = $_POST['id'];
	$name = $_POST['nome_missao'];
	$partners = $_POST['partner'];
	

	//if ($_POST['#project_insert']) {
	//	$partner = implode(',',$_POST['partner']);

	//}
		
	//Objetos
	$db = new db();
	$mission = new mission($id, $name, $partners);
	//print_r($mission);		
	$db->insert($mission);	
?></pre>