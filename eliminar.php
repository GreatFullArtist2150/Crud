<?php 
require_once('conexao.php');


$codigo= $_GET['codigo'];

$sql_excluir=mysqli_query($ligar, "DELETE FROM tb_usuarios WHERE id='$codigo' ");


if ($sql_excluir==true){

    print "<script>
    
    alert('Usuário Eliminado com Sucesso');
    window.location.href='listaUsuario.php';
    
    
    </script>";

}else{

    echo "<script>
    
    alert('Falha ao Eliminar Usuário');
    window.location.href='listaUsuario.php';
    
    
    </script>";

}



?>