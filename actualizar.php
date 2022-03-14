<?php 
require_once('conexao.php');

$codigo= $_POST['txtcodigo'];
$usuario= $_POST['usuario'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$nivel= $_POST['nivel'];

$sql_atualizar=mysqli_query($ligar, " UPDATE tb_usuarios set usuario='$usuario', email='$email', senha='$senha', nivel='$nivel' WHERE id='$codigo' ");

if ($sql_atualizar==true){

    print "<script>
    
    alert('Usuário Actualizado com Sucesso');
    window.location.href='listaUsuario.php';
    
    
    </script>";

}else{

    echo "<script>
    
    alert('Falha ao actualizar dados');
    window.location.href='editar.php';
    
    
    </script>";

}



?>