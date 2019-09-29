<div id="home" data-role="page" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="user" class="ui-btn-left"><?php echo $_SESSION['name']; ?></a>
		<h1>G-PROCESS</h1>
		<button onclick="sair()" id="sair" data-icon="lock" class="ui-btn-right">Sair</button>
	</header>
	<nav data-role="navbar">
		<ul>
			<li><a href="#home" class="ui-btn-active" id="navbar_home">Home</a></li>
			<li><a href="#iniciar_projetos">Iniciar Projeto</a></li>
			<li><a href="#checar_projetos">Checar Projetos</a></li>
		</ul>
	</nav>
	<main>
		<h1 style="text-align: center">Lista de Membros</h1>
		<div id="find_people">
	
		</div>
		<input type="number" name="id" value="">
		<div data-role="popup" id="solicitacao" data-theme="a" data-overlay-theme="b" class="s"style="max-width:340px; padding-bottom:2em;">
		<h3>Deseja Adcionar este membro aos parceiros?</h3>
		<a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-b ui-icon-check ui-btn-icon-left ui-btn-inline ui-mini">Solicitar</a>
		<a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-mini">Cancel</a>
		</div>
	</main>
	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>
<script type="text/javascript" src="js/home/atualiza_pessoas.js"></script>
<script type="text/javascript">
	$('').mouseenter(function(){
		//Quando o mouse ficar sobre o item vamos repassar ele
		alert("");
	});
</script>

