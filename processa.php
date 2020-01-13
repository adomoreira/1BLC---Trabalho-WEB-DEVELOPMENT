<?php
session_start();
include_once("conexao.php");

$codpro = filter_input(INPUT_POST, 'codpro');
$desc_p = filter_input(INPUT_POST, 'desc_p');
$qtd = filter_input(INPUT_POST, 'qtd');
$loc = filter_input(INPUT_POST, 'loc');

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_prod = "insert into produtos (codpro, desc_p, qtd, loc) values ('$codpro', '$desc_p', '$qtd', '$loc')";
$resultado_prod = mysqli_query($conn, $result_prod);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Produto cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Erro ao cadastrar produto</p>";
	header("Location: index.php");
}
