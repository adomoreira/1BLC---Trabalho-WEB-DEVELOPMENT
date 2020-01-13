<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Atualizar catálogo</title>		
	</head>
	<body>
		<h1>Catalogar Produto</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
			<label>Codigo Produto: <br><br></label>
			<input type="text" name="codpro" placeholder="Apenas números"><br><br>
			
			<label>Descrição: <br><br>     </label>
			<input type="text" name="desc_p" placeholder="Nome do produto"><br><br>
            
            <label>Quantidade: <br><br>    </label>
			<input type="text" name="qtd" placeholder="Qtd em estoque"><br><br>
            
            <label>Localização: <br><br>   </label>
			<input type="text" name="loc" placeholder="Posição física no estoque"><br><br>
			
			<input type="submit" value="Inserir produto">
		</form>
	</body>
</html>