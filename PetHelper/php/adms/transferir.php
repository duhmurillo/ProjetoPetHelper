<?php

    if(!isset($_POST['submit'])){
        header("Location: ../perfil.php");
    }
    
    include_once '../classes/conexao.class.php';
	$conectar = new conexao;
    $conn = $conectar->getConexao();
    $id = filter_input(INPUT_POST, 'pen_id', FILTER_SANITIZE_STRING);
    $select_pendente = "Select * from pendentes where pen_id = '$id'";
    $pendente = mysqli_query($conn, $select_pendente);
    $resultado_pendente = mysqli_fetch_assoc($pendente);

    $nome = $resultado_pendente['pen_nome'];
    $email = $resultado_pendente['pen_email'];
    $telefone = $resultado_pendente['pen_telefone'];
    $CNPJ = $resultado_pendente['pen_CNPJ'];
    $descricao = $resultado_pendente['pen_descricao'];
    $domesticos = $resultado_pendente['pen_animais_domesticos'];
    $silvestres = $resultado_pendente['pen_animais_silvestres'];
    $senha = $resultado_pendente['pen_senha'];

    $select_transferir = "insert into clinicas (cli_id, cli_nome, cli_email, cli_telefone, cli_CNPJ, cli_descricao, cli_animais_domesticos, cli_animais_silvestres, cli_senha) values (null, '$nome', '$email', '$telefone', '$CNPJ', '$descricao', '$domesticos', '$silvestres', '$senha')";
    $transferir = mysqli_query($conn, $select_transferir);
    if(mysqli_insert_id($conn)){
        $deleta = "delete from pendentes where pen_id = $id";
        $deletar = mysqli_query($conn, $deleta);
        header("Location: pendentes.php");
    }else{
    echo "deu ruim<br>";
    echo $select_transferir;
    }
?>
