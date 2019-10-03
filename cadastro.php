<?php
$conecta = mysqli_connect("localhost","id11034010_crudusuario","crudusuario","id11034010_crudusuario");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "insert into tb_usuario values (null,'$nome','$email','$senha')";

mysql_query($conecta,$query);

echo "Cadastro finalizado e realizado!";