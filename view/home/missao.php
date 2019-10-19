<div data-role="page" id="missao" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="user" class="ui-btn-left"><?php echo $_SESSION['name']; ?></a>
		<h1>G-PROCESS</h1>
		<button onclick="sair()" id="sair" data-icon="lock" class="ui-btn-right">Sair</button>
	</header>
	<nav data-role="navbar">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#iniciar_projetos" class="ui-btn-active">Iniciar Projeto</a></li>
			<li><a href="#checar_projetos">Checar Projetos</a></li>
		</ul>
	</nav>

<main>

   <form method="post" id="mission_insert">
	<input type="text" name="nome_missao" placeholder="Adicionar Missão" data-theme="a" required>
	<div class='parceiros_projetos form-parceiros'></div>
	<input type="submit" name="nome_missao" value="Salvar">
   </form>	
   	<hr>
	<div id="mission"></div>
</main>
<script src="js/mission/mission.js"></script>
