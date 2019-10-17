<?php
$conecta = mysqli_connect("localhost","id11034010_crudusuario","crudusuario","id11034010_crudusuario");

$codigo = $_POST['codigo'];
$query = "delete from tb_usuario where cd_usuario = $codigo";

mysqli_query($conecta, $query);

echo "Registro removido com sucesso";