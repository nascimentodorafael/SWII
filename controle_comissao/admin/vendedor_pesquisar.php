<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div class="container">
 <p class="text-center "> 
 <img src="../imagens/vendedor.png" alt="Cadastro de Vendedor" width="30%">
 </p>
 <?php
  
 echo "<h4 class='text-center text-info'>Controle de Comissão Pesquisa de Vendedor</h4>";
 require"../conexao.php"; 
 $sql-"SELECT FROM tbvendedor ORDER BY vendedor";
 $resultado-mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
  
 echo "<table align='center'>";
 echo "<tr>";
 echo "<th>Código</th>";
 echo "<th>Nome do vendedor</th>";
 echo "<th>E-mail</th>";
 echo "<th>Contato</th>";
 echo "<th>Editar</th>";
 echo "</tr>";
  
 while($linha-mysqli_fetch_array($resultado)) {
 $idvendedor = $linha ["idvendedor"];
 $vendedor = $linha ["vendedor"];
 $email = $linha["email"];
 $contato = $linha ["contato"];
 
 echo "<tr>";
 echo "<td align='right'>$idvendedor</td>"; 
 echo "<td align='left'>$vendedor</td>";
 echo "<td align='left'>$email</td>"; echo "<td align='right'>$contato</td>";
 echo "<tr>";
 echo "<td><a href='Vendedor_Editar.php?idvendedor=$idvendedor'>Editar</a></td>";
 }
 echo "</table>";
  ?>
 <h4 class="text-center"><a href="index.php">Voltar</a></h4>
</body>
</html>