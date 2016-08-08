<html>
    
<body>
 
<?php
            session_start();
            
            include ('conexao.php');
            
 
//variaveis
// Escape user inputs for security
$dataPesquisa = mysqli_real_escape_string($conn, $_POST['dataPesquisa']);
$refeicao = mysqli_real_escape_string($conn, $_POST['refeicao']);
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$sexo = mysqli_real_escape_string($conn, $_POST['sexo']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$cep = mysqli_real_escape_string($conn, $_POST['cep']);
$logradouro = mysqli_real_escape_string($conn, $_POST['logradouro']);
$numero = mysqli_real_escape_string($conn, $_POST['numero']);
$bairro = mysqli_real_escape_string($conn, $_POST['bairro']);
$cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
$estado = mysqli_real_escape_string($conn, $_POST['estado']);
$telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
$dataNascimento = mysqli_real_escape_string($conn, $_POST['dataNascimento']);
$comoSoube = mysqli_real_escape_string($conn, $_POST['comoSoube']);
$sugestao = mysqli_real_escape_string($conn, $_POST['sugestao']);
$atendimento = mysqli_real_escape_string($conn, $_POST['atendimento']);
$qualidadeAlimentos = mysqli_real_escape_string($conn, $_POST['qualidadeAlimentos']);
$qualidadeBebidas = mysqli_real_escape_string($conn, $_POST['qualidadeBebidas']);
$rapidezServicoB = mysqli_real_escape_string($conn, $_POST['rapidezServicoB']);
$rapidezServicoC = mysqli_real_escape_string($conn, $_POST['rapidezServicoC']);
$custoBeneficio = mysqli_real_escape_string($conn, $_POST['custoBeneficio']);
 
// attempt insert query execution
$sql = "INSERT INTO cadastro (atendimento, alimento, bebida, bar, cozinha, custo, data, nome, sexo, email, cep, logradouro, numero, bairro, cidade, estado, tel, aniversario, comoSoube, sugestao, tipo_refeicao) 
VALUES ('".$atendimento."', '".$qualidadeAlimentos."', '".$qualidadeBebidas."', '".$rapidezServicoB."', '".$rapidezServicoC."', '".$custoBeneficio."', '".$dataPesquisa."', '".$nome."', '".$sexo."', '".$email."', '".$cep."', '".$logradouro."', '".$numero."', '".$bairro."', '".$cidade."', '".$estado."', '".$telefone."', '".$dataNascimento."', '".$comoSoube."', '".$sugestao."', '".$refeicao."')";

if(mysqli_query($conn, $sql)){
    echo "<script>location.href='confirmacao.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// close connection
mysqli_close($conn);   
 
?>
</body>
</html>