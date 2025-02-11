<?php
session_start();
//apaga uma a uma as variáveis da sessão
unset($_SESSION['cd']);
unset($_SESSION['nome']);
unset($_SESSION['tipo']);

//destroi a sessão
session_destroy();

//redireciona o usuário
header('location: index.php');
?>