<?php

  session_start();

  $usuario_id = str_replace('#', '-', $_SESSION['usuario_id']);
  $titulo = str_replace('#', '-', $_POST['titulo']);
  $categoria = str_replace('#', '-', $_POST['categoria']);
  $descricao = str_replace('#', '-', $_POST['descricao']);

  $texto = $usuario_id . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

  $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

  fwrite($arquivo, $texto);

  fclose($arquivo);

  header('Location: abrir_chamado.php')

?>