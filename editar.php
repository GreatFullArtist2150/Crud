
<?php 

require_once('conexao.PHP');

$codigo= $_GET['codigo'];
$sql_consulta=mysqli_query($ligar, "SELECT *FROM tb_usuarios WHERE id='$codigo' ");
$resultado=mysqli_fetch_array($sql_consulta);

?>

 <marquee>    <h1> EDITAR REGISTROS </h1>   </marquee>

<hr>
<center>  NOME:  <?=$resultado[1]   ?>  </center>
<hr>



<form  method="POST" action="actualizar.php">
    <input type="hidden" name="txtcodigo"   value='<?=$resultado[0]   ?>'>
    USUÁRIO: <br>
    <input type="text" name="usuario"   value='<?=$resultado[1]   ?>' ><br>
    EMAIL: <br>
    <input type="email" name="email"    value='<?=$resultado[2]   ?>'><br>
    SENHA: <br>
    <input type="password" name="senha"   value='<?=$resultado[3]   ?>' ><br> 
    NÍVEL: <br>
    <select name="nivel" > 
       
        <option value="<?=$resultado[4]   ?>" >   <?=$resultado[4]   ?></option>
             <option value="Admin">  Administrador    </option>
            <option value="Aluno">   Aluno  </option>
            <option value="Formador">  Formador    </option>
    </select>
    <br> <br>
    <input type="submit" value="Actualizar">


