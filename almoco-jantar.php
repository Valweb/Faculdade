<html>

    <head>
      <title>Estatística Refeição</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
      <script type="text/javascript" src="js/fusioncharts.js"></script>
      <script type="text/javascript" src="js/fusioncharts.charts.js"></script>
      <script type="text/javascript"src="js/themes/fusioncharts.theme.zune.js"></script>
      <script src="js/app.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://code.jquery.com/mobile/1.0b2/jquery.mobile-1.0b2.min.css">
      	
      <script  src="js/jquery.mobile-1.0b2.min.js"></script> 
     
		
    </head> 
    
<body bgcolor="#000000">

   <div class="ui-bar ui-bar-a ui-corner-all">
      
         
        <center><h1>Estatística Tipo de refeição</h1></center>
       <form name=form method="POST" class="ui-bar ui-bar-a ui-corner-all">
                    
                      <input type="date" name="datai"/>
                      <input type="date" name="dataf"/>
                      <input type="submit" value="Confirma" name="confirma"/>
                    
                    
         </form>
 
        <div id="chart-container">Renderizando, aguarde!</div>


      <?php
            session_start();
            
            include ('conexao.php');  // conexão com BD


    		// Minha query para calcular o tipo de refeição que mais sai no restaurante
    		$query ="SELECT tipo_refeicao, COUNT( * ) AS Repeticoes
                FROM cadastro
                where data between ('" . $_POST["datai"] . "') and ('" . $_POST["dataf"] . "')
                GROUP BY tipo_refeicao";
    		$result = $conn->query($query);
    	    	
    	
            	$jsonArray = array();
                
                //Se houver registros no periodo requisitado
                if ($result->num_rows > 0) {
                    
                  // E enquanto houver registro, converte os resultados em arrays
                  // E armazena nas variáveis label(nome da categoria) e value(percentual do tipo)
                 
                  while($row = $result->fetch_assoc()) {
                    $jsonArrayItem = array();
                    $jsonArrayItem['label'] = $row['tipo_refeicao'];
                    $jsonArrayItem['value'] = $row['Repeticoes'];
                    //anexar o objeto criado anteriormente para a matriz principal.
                    array_push($jsonArray, $jsonArrayItem);
                  }
                }
                
                //Fechando a conexão com o BD
                $conn->close();
                
                //set the response content type as JSON
                
                //output the return value of json encode using the echo function. 
                
                  file_put_contents("data.json", json_encode($jsonArray));
        
           ?>
           <p><input  type="button" value="Voltar" onclick="document.form.action='relatorios.php'; document.form.submit();"></p>
        </div>
        
</body>
</html>