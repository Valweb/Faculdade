
<html>

<head>
                <title>Estatística de Genêro</title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
                <script type="text/javascript" src="js/fusioncharts.js"></script>
                <script type="text/javascript" src="js/fusioncharts.charts.js"></script>
                <script type="text/javascript"src="js/themes/fusioncharts.theme.zune.js"></script>
                <script src="js/appMF.js"></script>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://code.jquery.com/mobile/1.0b2/jquery.mobile-1.0b2.min.css">
                <script  src="js/jquery.mobile-1.0b2.min.js"></script> 
              
            

</head>

<body bgcolor="#000000">
  
  <div class="ui-bar ui-bar-a ui-corner-all">
     <center><h1>Estatística por Gênero</h1></center>
    <form method="post" name="form2">
                     <input type="date" name="datai"/>
                    <input type="date" name="dataf"/>
                    <input type="submit" value="Confirma" name="confirma" rel="external"/>
              
    </form>
  
     <div id="chart-container">Aguarde renderização do gráfico aqui!</div>


   <?php
            session_start();
            
            include ('conexao.php');

    		// Minha query para calcular fazer a contagem de gêneros por periodo
    		$query ="SELECT sexo, COUNT( * ) AS Repeticoes
                FROM cadastro
                where data between ('" . $_POST["datai"] . "') and ('" . $_POST["dataf"] . "')
                GROUP BY sexo";
    		$result = $conn->query($query);
    	    	
    	
      	$jsonArray = array();
        
        //Se hover retorno de registros vindo do BD 
        if ($result->num_rows > 0) {
          // E enquanto houver registro, converte os resultados em arrays
          // E armazena nas variáveis label(Tipo de sexo) e value(percentual do tipo)
          while($row = $result->fetch_assoc()) {
            $jsonArrayItem = array();
            $jsonArrayItem['label'] = $row['sexo'];
            $jsonArrayItem['value'] = $row['Repeticoes'];
            //anexar o objeto criado anteriormente para a matriz principal.
            array_push($jsonArray, $jsonArrayItem);
          }
        }
        
        //Fechando a conexão com o BD
        $conn->close();
        //set the response content type as JSON
        
        //output the return value of json encode using the echo function. 
        
          file_put_contents("dataMF.json", json_encode($jsonArray));

   ?>
   <p><input  type="button" value="Voltar" onclick="document.form2.action='relatorios.php'; document.form2.submit();"></p>
   </div>
   </body>
   </html>