  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Macaxeira Beer - Nota Média de Setores</title>
    <script type="text/javascript" src="js/fusioncharts.js"></script>
    <script type="text/javascript" src="js/themes/fusioncharts.theme.fint.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.0b2/jquery.mobile-1.0b2.min.css">
    <script  src="https://code.jquery.com/mobile/1.0b2/jquery.mobile-1.0b2.min.js"></script>
	

		
  </head>
    
    <body bgcolor="#000000">

         <div class="ui-bar ui-bar-a ui-corner-all">
        
            <div data-role="header" data-theme="b">
               <center> <h1>Macaxeira Beer</h1></center>  
            </div>        
              
            <center><h3 class="ui-bar ui-bar-a ui-corner-all">Estatística Satisfação do Cliente</h3></center></br>
                   
              <form method="post" name="form0" class="ui-bar ui-bar-a ui-corner-all">
                  <input type="date"  name="datai"/>
                  <input type="date"  name="dataf"/>
                  <input type="submit" value="Confirma" name="confirma"/>
              </form> 
                
            
       <!-- Inicio da conexão com o BD-->   
     
      <?php
              
            session_start();
            
            include ('conexao.php');

            //$datai = mysqli_real_escape_string($conn, $_POST['nome']);
    		// Minha query para calcular a média de votos, de todas as categorias do restaurante por determinado periodo
    		$query ="SELECT AVG(atendimento) as Atendimento, AVG(alimento) as Alimentos, 
    				AVG(bebida) as Bebidas, AVG(bar) as Bar, AVG(cozinha) as Cozinha, 
    				AVG(custo) as Custo FROM cadastro where data between ('" .$_POST["datai"] . "') and ('" . $_POST["dataf"] . "')";
    		$result = $conn->query($query);
    		
    		   //Se houver registros e enquanto tiver registros, armazenada em cada variável da categoria.  		
    		if ($result->num_rows > 0) {
    			while($row = $result->fetch_assoc()){
    		
            	$Ate = $row['Atendimento'];
                $Ali = $row['Alimentos'];
                $Beb = $row['Bebidas'];
                $Bar = $row['Bar'];
                $Coz = $row['Cozinha'];
                $Cust = $row['Custo'];

     			}
     			
    		}
    	    
            
    	?>
     <!-- Início da construção da apresentação gráfica com a label e variável de cada categoria-->
    <script type="text/javascript">
      FusionCharts.ready(function(){
        var revenueChart = new FusionCharts({
            "type": "column3d",
            "renderAt": "chartContainer",
            "width": "100%",
            "height": "70%",
            "dataFormat": "json",
            "dataSource":  {
              "chart": {
                "caption": "Média(notas 0 a 5) satisfação pontuada pelo cliente",
                "subCaption": "Macaxeira Beer",
                "xAxisName": "Setores",
                "yAxisName": "Médias",
                "theme": "fint"
             },
             "data": [
                 
                {
                   "label": "Atendimento",
                   "value": "<?php echo $Ate;?>" 
                },
                {
                   "label": "Alimentos",
                   "value": "<?php echo $Ali;?>"
                },
                {
                   "label": "Bebidas",
                   "value": "<?php echo $Beb;?>"
                },
                {
                   "label": "Bar",
                   "value": "<?php echo $Bar;?>"
                },
                {
                   "label": "Cozinha",
                   "value": "<?php echo  $Coz;?>"
                },
                {
                   "label": "Custo",
                   "value": "<?php echo  $Cust;?>"
                }
                
              ]
          }

      });
    revenueChart.render();
    })
    </script>

      
   
     <div id="chartContainer">Estatística renderizando aqui, aguarde!</div>
    <p><input  type="button" value="Voltar" onclick="document.form0.action='relatorios.php'; document.form0.submit();"></p>
    
</body>

   