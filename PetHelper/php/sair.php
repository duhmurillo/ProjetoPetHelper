<?php
session_start();
unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email'], $_SESSION['telefone'], $_SESSION['CNPJ'], $_SESSION['descricao'], $_SESSION['animaisD'], $_SESSION['animaisS'], $_SESSION['endereco'], $_SESSION['latitude'], $_SESSION['longitude']);
header("Location: ../index.php");
?>