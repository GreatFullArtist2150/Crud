
<?php

require_once('conexao.php');

$usuario= $_POST['usuario'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$nivel= $_POST['nivel'];

$sql_cad=mysqli_query( $ligar , " INSERT INTO tb_usuarios (usuario, email, senha, nivel) VALUES ('$usuario','$email','$senha','$nivel')");

if($sql_cad==true) {

    echo " <script>

    alert('Cadastro Feito com Sucesso ');
    window.location.href='index.html';
    
    </script>";


}

else {

    echo " <script>

    alert(' Falha no Cadastro ');
    alert(' Já existe um Usuário com este Email ');
    window.location.href='cad.html';
    </script>";


}



?>