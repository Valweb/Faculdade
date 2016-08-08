    <?php
		//Endereço do servidor 
		$servername = "127.0.0.1";

		//nome do usuario do Banco, que no caso é o root
		
		$username = "root";

		//Senha do banco caso existir, não coloquei
		$password = "";

		//Nome do Banco de Dados
		$dbName = "macaxeiradb";

		//Estabelecendo conexão com o DB
		$conn = mysqli_connect($servername, $username, $password, $dbName);
	
		mysqli_set_charset( $conn, 'utf8');
	
		//Checando, caso dê erro apresenta página de erro.
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		
	?>