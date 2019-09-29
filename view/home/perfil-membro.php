<script type="text/javascript">
	$(document).ready(function(){
		function getDados() {
			$.ajax({
				url: 'model/api/home/member_profile.php',
				success: function (data) {
					$('#dados_member2').html(data);
					$('#dados_member').html(data);
				}
			});
		}
		getDados();
	});
</script>
<div id="perfil-membro" data-role="page" data-theme="b">
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
		<div id="dados_member">
			<ul data-role="listview" data-inset="true">
				<li>
					<img src="../../img/user.png">
					<h2>Usuário</h2>
					<p>Email:</p>
					<p>Telefone: </p>
				</li>
			</ul>
		</div>
		<button>Solicitar Parceiria</button>
		<nav data-role="navbar">
			<ul>
				<li><a href="#perfil-membro" class="ui-btn-active">Projetos Gerenciado</a></li>
				<li><a href="#perfil-membro-participados">Projetos Participados</a></li>
			</ul>
		</nav>
		<ul data-role="listview">
		    <li><a href="#">Game 1</a></li>
		    <li><a href="#">Game 2</a></li>
		    <li><a href="#">Game 3</a></li>
		    <li><a href="#">Game 4</a></li>
		    <li><a href="#">Game 5</a></li>
		</ul>
	</main>
	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>

<div id="perfil-membro-participados" data-role="page" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="user" class="ui-btn-left">Perfil</a>
		<h1>G-PROCESS</h1>
		<a href="#" data-icon="lock" class="ui-btn-right">Sair</a>
	</header>
	<nav data-role="navbar">
		<ul>
			<li><a href="#home" class="ui-btn-active">Home</a></li>
			<li><a href="#iniciar_projetos">Iniciar Projeto</a></li>
			<li><a href="#checar_projetos">Checar Projetos</a></li>
		</ul>
	</nav>
	<main>
		<div id="dados_member2">
			
		</div>
		<button>Solicitar Parceiria</button>
		<nav data-role="navbar">
			<ul>
				<li><a href="#perfil-membro">Projetos Gerenciado</a></li>
				<li><a href="#perfil-membro-participados" class="ui-btn-active">Projetos Participados</a></li>
			</ul>
		</nav>
		<ul data-role="listview">
		    <li><a href="#">Game 1</a></li>
		    <li><a href="#">Game 2</a></li>
		    <li><a href="#">Game 3</a></li>
		    <li><a href="#">Game 4</a></li>
		    <li><a href="#">Game 5</a></li>
		</ul>
	</main>
	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>