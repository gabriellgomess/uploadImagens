<?php
$empresa = $_POST['empresa'];
$cargo = $_POST['cargo'];
// Lista de tipos de arquivos permitidos
$tiposPermitidos= array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
// O nome original do arquivo no computador do usuário
$arqName = $_FILES['arquivo']['name'];
// O tipo mime do arquivo. Um exemplo pode ser "image/gif"
$arqType = $_FILES['arquivo']['type'];
// O tamanho, em bytes, do arquivo
$arqSize = $_FILES['arquivo']['size'];
// O nome temporário do arquivo, como foi guardado no servidor
$arqTemp = $_FILES['arquivo']['tmp_name'];
// O código de erro associado a este upload de arquivo
$arqError = $_FILES['arquivo']['error'];

if ($arqError == 0) {
    // Verifica o tipo de arquivo enviado
    if (array_search($arqType, $tiposPermitidos) === false) {
      echo 'O tipo de arquivo enviado é inválido!';
    // Não houveram erros, move o arquivo
    } else {
      $pasta = '../arquivos/';
      // Pega a extensão do arquivo enviado
      $exp = explode('.', $arqName);
      $extensao = strtolower(end($exp));
      $newName = time().'_'.$empresa.'_'.$cargo.'.'.$extensao;
      $upload = move_uploaded_file($arqTemp, $pasta . $newName);
    }
  }

  echo "<a href='../index.php'>Voltar</a>"
?>