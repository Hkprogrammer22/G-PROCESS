<pre><?php
	//Require das Classes
	require_once('../../classes/db.php');
	require_once('../../classes/project.php');
	//Valores do Form
	session_start();
	$id = $_SESSION['id'];
	$partners = $_POST['partner'];
	$name = $_POST['nome'];
	$method = $_POST['metodologia'];

	//Objetos
	$db = new db();
	$project = new project($id,$partners, $name, $method);
	print_r($project);
	//$db->insert($project);
?></pre>