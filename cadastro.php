<!DOCTYPE html> 
<html> 
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Pesquisa de Satisfação</title> 
	<link rel='stylesheet' type='text/css'  href='./css/estilo.css'>
	<script src="jqm/jquery.js"></script>
	<script src="jqm/jquery.min.js"></script>
	<script src="jqm/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" href="jqm/jquery.mobile-1.4.5.min.css">
	<script type='text/javascript' src='js/page_links1.js'></script>
	<script type='text/javascript' src='cep.js'></script>
	<script type='text/javascript' src='js/page_links1.js'></script>
	<script type='text/javascript' src='js/mask.js'></script>
	
		
</head> 
<body> 
<?php $today = date("Y-m-d"); ?> 

<div data-role="page"  data-theme="b" id='reg'>

  <div data-role="header" data-theme="b">
  		
    <h1>O Restaurante Macaxeira Beer deseja saber sua opinião</h1>
  </div>
			
  <form class = "tipo" id="form1"action="insert.php" method="post" enctype="multipart/form-data">
            <div data-role="fieldcontain" data-theme="a" >
            <label for="dataPesquisa">Data:</label>
            <input type="text" name='dataPesquisa' value="<?php echo $today; ?>"/>
            </div>
			<div data-role="fieldcontain" data-theme="b">
			    <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
			     	<legend>Refeição:</legend>
			         	<input type="radio" name="refeicao" id="1" value="Almoço" checked="checked" />
			         	<label for="1">Almoço</label>
			         	<input type="radio" name="refeicao" id="2" value="Jantar" />
			         	<label for="2">Jantar</label>
			    </fieldset>
			</div>
             <div data-role="fieldcontain" data-theme="b">
				<label for="atendimento">Atendimento:</label>
			 	<input type="range" name="atendimento" id="atendimento" value="0" min="0" max="5" data-highlight="true" data-theme="a" data-track-theme="b" />
			</div>			
             <div data-role="fieldcontain" data-theme="b">
				<label for="qualidadeAlimentos">Qualidade dos Alimentos:</label>
			 	<input type="range" name="qualidadeAlimentos" id="qualidadeAlimentos" value="0" min="0" max="5" data-highlight="true" data-theme="a" data-track-theme="b" />
			</div>			
             <div data-role="fieldcontain" data-theme="b">
				<label for="qualidadeBebidas">Qualidade das Bebidas:</label>
			 	<input type="range" name="qualidadeBebidas" id="qualidadeBebidas" value="0" min="0" max="5" data-highlight="true" data-theme="a" data-track-theme="b" />
			</div>			
             <div data-role="fieldcontain" data-theme="b">
				<label for="rapidezServicoB">Rapidez no Serviço / Bar:</label>
			 	<input type="range" name="rapidezServicoB" id="rapidezServicoB" value="0" min="0" max="5" data-highlight="true" data-theme="a" data-track-theme="b"  />
			</div>			
             <div data-role="fieldcontain" data-theme="b">
				<label for="rapidezServicoC">Rapidez no Serviço / Cozinha:</label>
			 	<input type="range" name="rapidezServicoC" id="rapidezServicoC" value="0" min="0" max="5" data-highlight="true" data-theme="a" data-track-theme="b"  />
			</div>		
			<div data-role="fieldcontain" data-theme="b">
				<label for="custoBeneficio">Custo Benefício:</label>
			 	<input type="range" name="custoBeneficio" id="custoBeneficio" value="0" min="0" max="5" data-highlight="true" data-theme="a" data-track-theme="b"  />
			</div>			
			<div data-role="fieldcontain">
    			<label for="nome">Nome:</label>
    			<input type="text" name="nome" id="nome" required />
    		</div>
			<div data-role="fieldcontain" data-theme="b">
			    <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
			     	<legend>Sexo:</legend>
			         	<input type="radio" name="sexo" id="m" value="Masculino" checked="checked" />
			         	<label for="m">Masculino</label>
			         	<input type="radio" name="sexo" id="f" value="Feminino" />
			         	<label for="f">Feminino</label>
			    </fieldset>
			</div>    		
			<div data-role="fieldcontain">
    			<label for="telefone">Telefone:</label>
    			<input type="text" name="telefone" id="telefone" onkeyup="mascara(this, mtel);"  />
    		</div>    		
            <div data-role="fieldcontain" data-theme="b">
	            <label for="dataNascimento">Data de Nascimento:</label>
	            <input type="text" name='dataNascimento' onkeyup="mascara(this, mdata);"/>
            </div>    			
			<div data-role="fieldcontain">
    			<label for="email">Email:</label>
    			<input type="email" name="email" id="email" value="" required  />
			</div>
			<div data-role="fieldcontain">
    			<label for="cep">CEP:</label>
    			<input type="text" name="cep" id="cep" placeholder="Somente Numeros" onkeyup="mascara(this, mcep);" />
			</div>
			<div data-role="fieldcontain">
				<label>Logradouro:</label>
 	           <input type="text" name="logradouro" id="logradouro" size="35" />
            </div>
			<div data-role="fieldcontain">
 	           <label>Número:</label>
  	          <input type="text" name="numero" id="numero" size="5" />
            </div>
			<div data-role="fieldcontain">
	            <label>Bairro:</label>
	            <input type="text" name="bairro" id="bairro" size="35" />
            </div>
			<div data-role="fieldcontain">
	            <label>Cidade:</label>
	            <input type="text" name="cidade" id="cidade" size="25" />
            </div>
			<div data-role="fieldcontain">
	            <label>Estado:</label>
	            <input type="text" name="estado" id="estado" size="2" />
            </div>
			<div data-role="fieldcontain">
				<label for="comoSoube">Como ficou sabendo do Restaurante Macaxeira Beer:</label>
				<textarea cols="40" rows="8" name="comoSoube" id="comoSoube" required></textarea>
			</div> 
			<div data-role="fieldcontain">
				<label for="sugestao">Sugestões para melhorarmos nossos serviços:</label>
				<textarea cols="40" rows="8" name="sugestao" id="sugestao"></textarea>
			</div> 			
		<div class="ui-body ui-body-b">
		<fieldset class="ui-grid-a">
				<div class="ui-block-a"><button type="reset" onclick="history.go(-1)" data-theme="d">Cancelar</button></div>
				<div class="ui-block-b"><button type="submit" data-theme="a" name="submit" id="submit">Confirmar</button></div>
	    </fieldset>

		</div>			
  </form>
 </div>

  <div data-role="footer" data-theme="b">
    <h1>Obrigado pela preferência!</h1>
  </div>



</body>
</html>