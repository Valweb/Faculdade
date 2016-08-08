
      <?php

            session_start();
            
            include ('conexao.php');



    		// Minha query para calcular a média de votos, de todas as categorias do restaurante
    		$query ="SELECT tipo_refeicao, COUNT( * ) AS Repeticoes
                FROM cadastro
                GROUP BY tipo_refeicao";
    		$result = $conn->query($query);
    	    	
    	
    	$jsonArray = array();
        
        //check if there is any data returned by the SQL Query
        if ($result->num_rows > 0) {
          //Converting the results into an associative array
          while($row = $result->fetch_assoc()) {
            $jsonArrayItem = array();
            $jsonArrayItem['label'] = $row['tipo_refeicao'];
            $jsonArrayItem['value'] = $row['Repeticoes'];
            //append the above created object into the main array.
            array_push($jsonArray, $jsonArrayItem);
          }
        }
        
        //Closing the connection to DB
        $conn->close();
        
        //set the response content type as JSON
        header('Content-Type: application/json; Charset="UTF-8"');
        //output the return value of json encode using the echo function. 
        
        echo json_encode($jsonArray);

   ?>