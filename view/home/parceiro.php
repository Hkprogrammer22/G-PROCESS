<script src="js/partner/perfil_partner.js"></script>
<script src="js/partner/partner_project.js"></script>
<script src="js/partner/project_participated.js"></script>
<div id="parceiro" data-role="page" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="user" class="ui-btn-left"><?php echo $_SESSION['name']; ?></a>
		<h1>G-PROCESS</h1>
		<button onclick="sair()" id="sair" data-icon="lock" class="ui-btn-right">Sair</button>
	</header>
	<nav data-role="navbar">
		<ul>
			<li><a href="#home" class="ui-btn-active">Home</a></li>
			<li><a href="#iniciar_projetos">Iniciar Projeto</a></li>
			<li><a href="#checar_projetos">Checar Projetos</a></li>
		</ul>
	</nav>
	<main>

		<div id='perfil_parceiro'>

		</div>
		<div class="find_project_partner">
			
		</div>
		<div class="find_project_participated">
			
		</div>

	</main>
	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>