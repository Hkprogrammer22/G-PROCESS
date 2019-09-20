<div id="login" data-role="page" data-theme="b">
	<div data-role="header">
		<h1>GDD MOBILE</h1>
	</div>
	<div data-role="content">
		<form method="post" action="#">
			<img src="../../img/logo.png" width="280" class="logo">
			<h1 align="center">Logar</h1>
			<div class="box">
				<input type="email" name="login" placeholder="Login" data-theme="a" required>
				<input type="password" name="senha" placeholder="Senha" data-theme="a" required>
				<a href="#cadastrar-se" class="ui-btn">Cadastrar-se</a>
				<a href="#esqueci" class="ui-btn">Esqueci minha Senha</a>
				<ul data-role="listview" data-inset="true">
					<li>
						<a href="#perfil-membro">
							<img src="../../img/facebook-icon.png">
							<h2>Logar com Facebook</h2>
						</a>
					</li>
					<li>
						<a href="#perfil-membro">
							<img src="../../img/google-icon.png">
							<h1>Logar com Google</h1>
						</a>
					</li>
				</ul>
				<input type="submit" value="Entrar">
			</div>
		</form>
	</div>
</div>