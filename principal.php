<?php 
require_once('conexao.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Camuetec Principal</title>

</head>
<body>
    
          <center>  <h1> BEM VINDO A CamueTEC 2020/2021 </h1>   </center> 

    <hr>
  <center>  <h2> Lista de Usuários </h2> </center>
    <hr>
<center>



<table rules="all">
<thead>
    <tr> 
    <th> NOME </th>
    <th> EMAIL </th>
    <th> SENHA </th>
    <th> NÍVEL </th>
    <th>  </th>
    </tr>
</thead>



<tbody> 


    <?php 
$sql_consulta=mysqli_query($ligar , " SELECT *FROM tb_usuarios ");

    while( $linha=mysqli_fetch_array($sql_consulta)){
        ?>
    <tr>
        <td> <?= $linha[1]  ?></td>
        <td> <?= $linha[2]  ?></td>
        <td> <?= $linha[3] ?></td>
        <td> <?= $linha[4]  ?></td>
        <td><a href="eliminar.php?codigo=<?= $linha[0] ?>" > Exluir </a> </td>
        <td><a href="Editar.php?codigo=<?= $linha[0] ?>" > Editar </a> </td>


    </tr>
     
       <?php 
    }

    ?>

</tbody>
</table>

</center>

</body>

</html>