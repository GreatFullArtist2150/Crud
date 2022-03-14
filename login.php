
<?php

require_once("conexao.php");

$usuario = $_POST['txt_usuario'];
$senha = $_POST['txt_senha'];

$sql_login=mysqli_query($ligar, "SELECT *FROM tb_usuarios WHERE usuario='$usuario' AND senha='$senha'");

if(mysqli_num_rows($sql_login)!=0){
    header('location:inicio.php');

} else {
    echo " <script>

    alert('Usuário Não Registrado ');
    window.location.href='index.html';
    
    </script>";
}



?>