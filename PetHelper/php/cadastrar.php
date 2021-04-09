<?php
    include_once 'classes/conexao.class.php';
	$conectar = new conexao;
	$conn = $conectar->getConexao();
	
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if((strlen($dados['senha'])) < 8){
		$erro = true;
		$msg = "A senha deve ter no minímo 8 caracteres";
	}else if($dados['senha'] !== $dados['confirmaSenha']){
        $erro = true;
        $msg = "As senhas não coincidem.";
    }

    if($dados['animais'] == 0){
        $animais_domesticos = true;
        $animais_silvestres = false;
    }else if($dados['animais'] == 1){
        $animais_domesticos = false;
        $animais_silvestres = true;
    }else if($dados['animais'] == 2){
        $animais_domesticos = true;
        $animais_silvestres = true;
    }
		
	$result_pendente = "SELECT pen_id FROM pendentes WHERE pen_CNPJ='". $dados['CNPJ'] ."'";
	$resultado_pendente = mysqli_query($conn, $result_pendente);
	if(($resultado_pendente) AND ($resultado_pendente->num_rows != 0)){
		$erro = true;
		$msg = "Este CNPJ já está cadastrado";
    }
    $result_pendente = "SELECT pen_id FROM pendentes WHERE pen_email='". $dados['email'] ."'";
	$resultado_pendente = mysqli_query($conn, $result_pendente);
	if(($resultado_pendente) AND ($resultado_pendente->num_rows != 0)){
		$erro = true;
		$msg = "Este email já está cadastrado";
    }

    $result_cadastrado = "SELECT cli_id FROM clinicas WHERE cli_CNPJ='". $dados['CNPJ'] ."'";
	$resultado_cadastrado = mysqli_query($conn, $result_cadastrado);
	if(($resultado_cadastrado) AND ($resultado_cadastrado->num_rows != 0)){
		$erro = true;
		$msg = "Este CNPJ já está cadastrado";
    }
    $result_cadastrado = "SELECT cli_id FROM clinicas WHERE cli_email='". $dados['email'] ."'";
	$resultado_cadastrado = mysqli_query($conn, $result_cadastrado);
	if(($resultado_cadastrado) AND ($resultado_cadastrado->num_rows != 0)){
		$erro = true;
		$msg = "Este email já está cadastrado";
	}
	
	if($erro == false){
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
		
		$result_pendente = "INSERT INTO pendentes (pen_nome, pen_email, pen_telefone, pen_CNPJ, pen_descricao, pen_animais_domesticos, pen_animais_silvestres, pen_senha) VALUES (
						'" .$dados['nome']. "',
						'" .$dados['email']. "',
						'" .$dados['telefone']. "',
						'" .$dados['CNPJ']. "',
						'" .$dados['descricao']. "',
						'" .$animais_domesticos. "',
						'" .$animais_silvestres. "',
						'" .$dados['senha']. "'
						)";
		$resultado_pendente = mysqli_query($conn, $result_pendente);
		if(mysqli_insert_id($conn)){
            header("Location: login.php");
		}else{
            $erro = true;
			$msg = "Erro ao cadastrar o usuário";
		}
	}
	mysqli_close($conn);
?>
<!DOCTYPE HTML>
<html>
    <?php
        $root = $_SERVER['DOCUMENT_ROOT'];
        $arquivo = $root."/ProjetoSiteFacens/PetHelper/";
        include_once($arquivo."elements/head.html");
	?>
	<body class="landing is-preload">
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header" class="">
                <?php
                    include_once($arquivo."elements/menu.php");
                ?>

                <!-- Page Wrapper -->
                <section class="wrapper style5">
                    <div class="inner">
                    <h4>Formulário</h4>
                        <form method="POST" action="php/cadastrar.php">
                            <div class="row gtr-uniform">
                                <div class="col-6 col-12-xsmall">
                                    <input type="text" name="nome" id="nome" value="" placeholder="Nome" required/>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <input type="email" name="email" id="email" value="" placeholder="Email" required/>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <input type="text" name="telefone" id="telefone" value="" placeholder="Telefone" required/>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <input type="text" name="CNPJ" id="CNPJ" value="" placeholder="CNPJ" required/>
                                </div>
                                <div class="col-12">
                                    <textarea name="descricao" id="descricao" placeholder="Descrição da sua Clínica." rows="6"></textarea>
                                </div>
                                <div class="col-12">
                                    <select name="animais" id="demo-category" required>
                                        <option value="">Tipos de Animais</option>
                                        <option value="0">Animais Domésticos</option>
                                        <option value="1">Animais Silvestres</option>
                                        <option value="2">Animais Domésticos e Silvestres</option>
                                    </select>
                                    <span style="font-size:12px;">*Mais opções serão apresentadas no perfil cadastrado.</span>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <input type="password" name="senha" id="senha" placeholder="Senha" required/>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <input type="password" name="confirmaSenha" id="confirmaSenha" placeholder="Confirme sua Senha" required/>
                                </div>
                                <div class="col-12">
                                    <input type="checkbox" id="demo-human" name="demo-human" required>
                                    <label for="demo-human">Não sou um robô</label>
                                </div>
                                <div class="col-12">
                                    <input type="checkbox" id="termos" name="termos" checked required>
                                    <label for="termos">Você concorda com nossos Termos, Política de Dados e Política de Cookies.</label>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" value="Requisitar Cadastro" class="primary" /></li>
                                        <li><input type="reset" value="Resetar" /></li>
                                    </ul>
                                    <?php
                                        if($erro == true){
                                            echo "<span style='font-size:16px; color:#ff0000;'>*".$msg."</span>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <!-- Footer -->
                <?php
                    include_once($arquivo."elements/footer.html");
                ?> 
        </div>
        
        <!-- Scripts -->
        <?php
            include_once($arquivo."elements/scripts.html");
        ?>

	</body>
</html>