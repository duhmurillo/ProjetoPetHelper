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