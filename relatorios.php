<!DOCTYPE html> 
<html> 
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Administrador - Relatórios</title> 
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
	<div data-role="page" data-theme="b" id='index.php'>
		
		
		<div data-role="header" data-theme="b">
		<h1>Macaxeira Beer</h1>
		
    </div><!-- Menu Principal-->
    <div data-role="content">
        <a href="mediaSetores.php" data-role="button" data-ajax = false>Avaliação por Setores</a>
        <a href="almoco-jantar.php" data-role="button" data-ajax = false>Total de Refeições</a>
        <a href="masculino-feminino.php" data-role="button" data-ajax = false>Atendimento por Gênero</a>
        <a href="regiao.php" data-role="button" data-ajax = false>Relatório por Regiões</a>
        
    </div>
    
	</div><!--/content-primary -->		
	
</body>
</html>