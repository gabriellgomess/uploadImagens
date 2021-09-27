<?php


$arquivo = $_POST['arq'];

$resultado = unlink($arquivo);

echo '<a href="../index.php"><button class="btn btn-dark">Voltar</button></a>'


?>