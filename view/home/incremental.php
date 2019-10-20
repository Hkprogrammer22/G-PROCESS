<div data-role="page" id="incremental" data-theme="b">
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
		
		<div mbsc-card>

			<h1 style="text-align: center;" class="text-project">Game</h1>
			<h2 style="text-align: center">Incremental</h2>
			
			<div data-role="content" data-theme="b">
				<h2 class="text-project">Conceito</h2>
				
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<a href="#popupAnexo4" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-icon-edit ui-btn-icon-left ui-shadow ui-corner-all">Anexos</a>
					</div>
					<div class="ui-block-b">
						<a href="#missao" data-role="button" class="ui-btn ui-icon-tag ui-btn-icon-left ui-shadow ui-corner-all">Missão</a>
					</div>	
				</div>
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<a href="#cascata_dica" class="ui-btn ui-icon-info ui-btn-icon-left ui-shadow ui-corner-all">Dica</a>
					</div>	
				    <div class="ui-block-b">
						<a href="#cascata_dica" class="ui-btn ui-icon-gear ui-btn-icon-left ui-shadow ui-corner-all">Protótipo</a>
					</div>
				</div>
			<!-- POPUP Anexo -->
			<div data-role="popup" id="popupAnexo4" data-theme="b" class="ui-corner-all">
            	<div class="container">
                	<form enctype="multipart/form-data" action="upload.php" method="POST">
                		<label class="control-label">Selecione os arquivos desejados:</label><br>
                		<input id="arquivos" name="arquivos[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
                		<input type="submit" value="Enviar" />
                	</form>
                </div>
			</div>

    		  <input type="range" name="slider-2" id="slider-2" data-highlight="true" min="0" max="100" value="50">

			 <button>Finalizar etapa</button>
			</div>

			<div data-role="content" data-theme="b">
				<h2 class="text-project">Pré- Produção</h2>
				
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<a href="#popupAnexo5" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-state-disabled ui-icon-edit ui-btn-icon-left ui-shadow ui-corner-all">Anexos</a>
					</div>
					<div class="ui-block-b">
						<a href="#popupMissao5" data-rel="popup" data-position-to="window" data-transition="pop" data-role="button" class="ui-btn ui-state-disabled ui-icon-tag ui-btn-icon-left ui-shadow ui-corner-all">Missão</a>
					</div>	
				</div>
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<a href="#cascata_dica" class="ui-btn ui-icon-info ui-btn-icon-left ui-shadow ui-corner-all">Dica</a>
					</div>	
				    <div class="ui-block-b">
						<a href="#cascata_dica" class="ui-btn ui-icon-gear ui-state-disabled ui-btn-icon-left ui-shadow ui-corner-all">Protótipo</a>
					</div>
				</div>
			<!-- POPUP Anexo -->
			<div data-role="popup" id="popupAnexo5" data-theme="b" class="ui-corner-all">
            	<div class="container">
                	<form enctype="multipart/form-data" action="upload.php" method="POST">
                		<label class="control-label">Selecione os arquivos desejados:</label><br>
                		<input id="arquivos" name="arquivos[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
                		<input type="submit" value="Enviar" />
                	</form>
                </div>
			</div>
			<!-- POPUP MISSÃO -->
			<div data-role="popup" id="popupMissao5" data-theme="b" class="ui-corner-all">
            	<input type="text" placeholder="Adicionar missão" name="">
				Designar parceiro
				<select>
					<option>Parceiro X</option>
					<option>Parceiro X</option>
				</select>
				<hr>
				 <fieldset data-role="controlgroup">
               		<legend><h2>Lista de missões:</h2></legend>
             		<input type="checkbox" name="checkbox-4a" id="checkbox-4a" checked="">
             		<label for="checkbox-4a">Primeira Reunião</label>
                 	<input type="checkbox" name="checkbox-5a" id="checkbox-5a">
              	 	<label for="checkbox-5a">Termo de abertura</label>
              		<input type="checkbox" name="checkbox-6a" id="checkbox-6a">
             		<label for="checkbox-6a">Termo de desenvolvimento</label>
					<button>Salvar</button>
				</fieldset>
			</div>

			  <form>
    		  <input type="range" name="slider-2" id="slider-2" disabled="disabled" data-highlight="true" min="0" max="100" value="0">
			  </form>
			 <button disabled="disabled">Finalizar etapa</button>
			</div>

			<div data-role="content" data-theme="b">
				<h2 class="text-project">Protótipo</h2>
				
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<a href="#popupAnexo6" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-state-disabled ui-icon-edit ui-btn-icon-left ui-shadow ui-corner-all">Anexos</a>
					</div>
					<div class="ui-block-b">
						<a href="#popupMissao6" data-rel="popup" data-position-to="window" data-transition="pop" data-role="button" class="ui-btn ui-state-disabled ui-icon-tag ui-btn-icon-left ui-shadow ui-corner-all">Missão</a>
					</div>	
				</div>
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<a href="#cascata_dica" class="ui-btn ui-icon-info ui-btn-icon-left ui-shadow ui-corner-all">Dica</a>
					</div>	
				    <div class="ui-block-b">
						<a href="#cascata_dica" class="ui-btn ui-icon-gear ui-state-disabled ui-btn-icon-left ui-shadow ui-corner-all">Protótipo</a>
					</div>
				</div>
			<!-- POPUP Anexo -->
			<div data-role="popup" id="popupAnexo6" data-theme="b" class="ui-corner-all">
            	<div class="container">
                	<form enctype="multipart/form-data" action="upload.php" method="POST">
                		<label class="control-label">Selecione os arquivos desejados:</label><br>
                		<input id="arquivos" name="arquivos[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
                		<input type="submit" value="Enviar" />
                	</form>
                </div>
			</div>
			<!-- POPUP MISSÃO -->
			<div data-role="popup" id="popupMissao6" data-theme="b" class="ui-corner-all">
            	<input type="text" placeholder="Adicionar missão" name="">
				Designar parceiro
				<select>
					<option>Parceiro X</option>
					<option>Parceiro X</option>
				</select>
				<hr>
				 <fieldset data-role="controlgroup">
               		<legend><h2>Lista de missões:</h2></legend>
             		<input type="checkbox" name="checkbox-7a" id="checkbox-7a" checked="">
             		<label for="checkbox-7a">Primeira Reunião</label>
                 	<input type="checkbox" name="checkbox-8a" id="checkbox-8a">
              	 	<label for="checkbox-8a">Termo de abertura</label>
              		<input type="checkbox" name="checkbox-9a" id="checkbox-9a">
             		<label for="checkbox-9a">Termo de desenvolvimento</label>
					<button>Salvar</button>
				</fieldset>
			</div>

			  <form>
    		  <input type="range" name="slider-2" id="slider-2" disabled="disabled" data-highlight="true" min="0" max="100" value="0">
			  </form>
			 <button disabled="disabled">Finalizar etapa</button>
			</div>

	</main>

	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>
<script src="js/mission/insert_mission.js"></script>