<div data-role="page" id="iniciar_projetos" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="user" class="ui-btn-left"><?php echo $_SESSION['name']; ?></a>
		<h1>G-PROCESS</h1>
		<button onclick="sair()" id="sair" name="sair" data-icon="lock" class="ui-btn-right">Sair</button>
	</header>
	<nav data-role="navbar">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#iniciar_projetos" class="ui-btn-active">Iniciar Projeto</a></li>
			<li><a href="#checar_projetos">Checar Projetos</a></li>
		</ul>
	</nav>
	<main>
		<form method="post" id="project_insert">
		<div class='parceiros_projetos form-parceiros'>
			<!-- Conteúdo dos parceiros -->
		</div>
		<div class='form-info'>
			<h1>Digitar Nome do Game</h1>
			<input type="text" name="nome" placeholder="Nome do Game" data-theme="a" required>
			<h1>Selecionar Metodologia</h1>
			<fieldset data-role="controlgroup">
				<input type="radio" name="metodologia" id="cascata" value="cascata" checked="checked" >
				<label for="cascata">Cascata</label>
				<input type="radio" name="metodologia" id="espiral" value="espiral">
				<label for="espiral">Espiral</label>
				<input type="radio" name="metodologia" id="prototipacao" value="prototipacao">
				<label for="prototipacao">Prototipação</label>
				<input type="radio" name="metodologia" id="incremental" value="incremental">
				<label for="incremental">Incremental</label>
				<input type="radio" name="metodologia" id="scrum" value="scrum">
				<label for="scrum">Scrum</label>
			</fieldset>
			<input type="submit" name="" value="Iniciar Projeto">
		</div>
		</form>
	</main>
	<footer data-role="footer" class="ui-bar" data-position="fixed">
		<nav data-role="navbar">
			<ul>
				<li><button id='voltar'>Voltar</button></li>
				<li><button id='proximo'>Próximo</button></li>
			</ul>
		</nav>
		&reg; Direcione Sua Ideia
	</footer>
</div>
<script src="js/project/find_partner_project.js"></script>
<script src="js/project/insert_project.js"></script>
